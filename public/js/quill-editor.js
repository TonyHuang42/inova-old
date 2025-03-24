const toolbarOptions = [
    [{ header: [2, 3, 4, 5, 6, false] }],
    ["bold", "italic"],
    [{ list: "ordered" }, { list: "bullet" }],
    // ['link'],
    // ["clean"],
];

const quill = new Quill("#editor", {
    modules: {
        toolbar: toolbarOptions,
    },
    theme: "snow",
});
document.querySelector("form").addEventListener("submit", function () {
    document.getElementById("content").value = quill.root.innerHTML;
});
