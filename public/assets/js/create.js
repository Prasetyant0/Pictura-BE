function previewImage(input) {
    const file = input.files[0];
    const label = input.parentElement;
    const previewContainer = document.getElementById('preview-container');
    const originalContent = document.getElementById('original-content');
    label.classList.remove('w-full');
    label.classList.remove('h-full');
    label.classList.add('h-auto');
    label.classList.add('w-auto');

    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            previewContainer.classList.remove('hidden');
            originalContent.classList.add('hidden');
            const previewImage = document.getElementById('preview-image');
            previewImage.src = e.target.result;
        };
        reader.readAsDataURL(file);
    } else {
        label.classList.remove('w-auto');
        label.classList.remove('h-auto');
        label.classList.add('w-full');
        label.classList.add('h-full');
        previewContainer.classList.add('hidden');
        originalContent.classList.remove('hidden');
    }
}
