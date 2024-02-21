function previewImage(input) {
    const file = input.files[0];
    const label = input.parentElement;
    const previewContainer = document.getElementById('preview-container');
    const originalContent = document.getElementById('original-content');
    label.style.height = 'auto';
    label.style.width = 'auto';

    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            previewContainer.classList.remove('hidden');
            originalContent.classList.add('hidden');
            const previewImage = document.getElementById('preview-image');
            previewImage.src = e.target.result;
            const maxWidth = auto;
            const maxHeight = auto;
            const image = new Image();
            image.src = e.target.result;
            image.onload = function () {
                const aspectRatio = image.width / image.height;
                if (aspectRatio > 1) {
                    previewImage.width = maxWidth;
                    previewImage.height = maxWidth / aspectRatio;
                } else {
                    previewImage.height = maxHeight;
                    previewImage.width = maxHeight * aspectRatio;
                }
            };
        };
        reader.readAsDataURL(file);
    } else {
        label.style.height = 'full';
        label.style.width = 'full';
        previewContainer.classList.add('hidden');
        originalContent.classList.remove('hidden');
    }
}
