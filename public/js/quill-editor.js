document.addEventListener("DOMContentLoaded", function () {
    const oldImagesElement = document.getElementById("oldImages");
    const oldImages = oldImagesElement
        ? JSON.parse(oldImagesElement.value || "[]")
        : [];
    // Initialize Quill editor
    const quill = new Quill("#editor", {
        theme: "snow",
        modules: {
            toolbar: {
                container: [
                    [{ header: [2, 3, 4, 5, 6, false] }],
                    ["bold", "italic"],
                    [{ align: [] }],
                    [{ list: "ordered" }, { list: "bullet" }],
                    ["image", "video"],
                ],
                handlers: {
                    // Custom image handler
                    image: function () {
                        // Trigger the hidden file input
                        const fileInput = document.createElement("input");
                        fileInput.setAttribute("type", "file");
                        fileInput.setAttribute("accept", "image/*");
                        fileInput.click();

                        fileInput.onchange = () => {
                            if (
                                fileInput.files != null &&
                                fileInput.files[0] != null
                            ) {
                                const file = fileInput.files[0];
                                uploadImage(file);
                            }
                        };
                    },
                },
            },
        },
    });

    // Function to handle the image upload
    function uploadImage(file) {
        const formData = new FormData();
        formData.append("file", file);

        fetch("/upload-image", {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.url) {
                    // Convert absolute URL to relative path
                    const relativePath = convertToRelativePath(data.url);
                    // Insert uploaded image into the editor at the current cursor position
                    const range = quill.getSelection(true);
                    quill.insertEmbed(range.index, "image", relativePath);
                } else {
                    alert("Image upload failed.");
                }
            })
            .catch((error) => {
                console.error("Error uploading image:", error);
                alert("Error uploading image.");
            });
    }

    // Function to convert absolute URL to relative path
    function convertToRelativePath(url) {
        try {
            const urlObj = new URL(url);
            // Extract the path portion of the URL (everything after the domain)
            return urlObj.pathname;
        } catch (e) {
            // If the URL is already relative, return it as is
            return url;
        }
    }

    // Hide empty input
    const form = document.querySelector("form");
    form.addEventListener("submit", function (e) {
        const contentHtml = quill.root.innerHTML;
        document.getElementById("content").value = contentHtml;

        // Extract new image URLs from the updated content
        const newImages = [];
        const imgRegex = /<img[^>]+src="([^">]+)"/g;
        let match;
        while ((match = imgRegex.exec(contentHtml)) !== null) {
            const imagePath = match[1];
            // Convert absolute URLs to relative paths if needed
            const relativePath = convertToRelativePath(imagePath);
            newImages.push(relativePath);
        }

        // Compare old and new image arrays
        const deletedImages = oldImages.filter(
            (img) => !newImages.includes(img)
        );

        // Send deleted images to server
        if (deletedImages.length > 0) {
            fetch("/delete-editor-images", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content"),
                },
                body: JSON.stringify({ images: deletedImages }),
            })
                .then((response) => response.json())
                .then((data) => {
                    if (!data.success) {
                        console.warn(
                            "Some images failed to delete:",
                            data.failed || []
                        );
                    }
                })
                .catch((err) => console.error("Error deleting images:", err));
        }
    });
});
