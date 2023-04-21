const fileInput = document.getElementById('dropzone-file');
const preview = document.getElementById('showImage');

fileInput.addEventListener('change', () => {
    const file = fileInput.files[0];

    if (file) {
        const reader = new FileReader();

        reader.addEventListener('load', () => {
            const imageUrl = reader.result;
            preview.innerHTML = `<img src="${imageUrl}" alt="Preview">`;
        });

        reader.readAsDataURL(file);
    }
});