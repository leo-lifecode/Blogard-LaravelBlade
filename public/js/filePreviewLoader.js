function filePreview(fileInput, filePreview) {
    const input = document.getElementById(fileInput);

    const previewPhoto = () => {
        const file = input.files;
        if (file) {
            const fileReader = new FileReader();
            const preview = document.getElementById(filePreview);
            preview.classList.remove("hidden");
            fileReader.onload = function (event) {
                preview.setAttribute("src", event.target.result);
            };
            fileReader.readAsDataURL(file[0]);
        }
    };

    input.addEventListener("change", previewPhoto);
}

filePreview("file-input", "file-preview");