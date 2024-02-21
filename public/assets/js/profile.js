function showContent(element, contentId) {
    document.getElementById('created').classList.add('hidden');
    document.getElementById('favorite').classList.add('hidden');
    document.getElementById('albums').classList.add('hidden');
    const navLinks = document.querySelectorAll('#profileNav button');
    navLinks.forEach(link => link.parentElement.classList.remove('border-b-4', 'border-colorText'));
    document.getElementById(contentId).classList.remove('hidden');
    element.parentElement.classList.add('border-b-4', 'border-colorText');
    document.querySelector('.contentProfile').style.transition = 'transform 0.3s ease-in-out';
    document.querySelector('.contentProfile').style.transform = `translateX(-${['created', 'favorite', 'albums'].indexOf(contentId) * 100}%)`;
}

