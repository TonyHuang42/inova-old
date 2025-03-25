document.addEventListener("DOMContentLoaded", function () {
    // Initialize Quill editor
    const quill = new Quill("#editor", {
        theme: "snow",
        modules: {
            toolbar: {
                container: [
                    [{ header: [2, 3, 4, 5, 6, false] }],
                    ["bold", "italic"],
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
                    // Insert uploaded image into the editor at the current cursor position
                    const range = quill.getSelection(true);
                    quill.insertEmbed(range.index, "image", data.url);
                } else {
                    alert("Image upload failed.");
                }
            })
            .catch((error) => {
                console.error("Error uploading image:", error);
                alert("Error uploading image.");
            });
    }

    // Set editor content to hidden input before form submit
    const form = document.querySelector("form");
    form.onsubmit = function () {
        document.getElementById("content").value = quill.root.innerHTML;
    };
});
