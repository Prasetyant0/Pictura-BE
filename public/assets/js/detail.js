window.addEventListener('DOMContentLoaded', (event) => {
    const imageHeight = document.getElementById('postImage').clientHeight;
    document.getElementById('postDetail').style.height = imageHeight + 'px';
});

function adjustImageWidth() {
    const image = document.getElementById('postImage');
    const imageContainer = document.getElementById('imageContainer');

    if (image.naturalWidth > image.naturalHeight) {
        imageContainer.classList.remove('w-1/2');
        imageContainer.classList.add('w-4/5');
    } else {
        imageContainer.classList.remove('w-4/5');
        imageContainer.classList.add('w-1/2');
    }
}

window.addEventListener('DOMContentLoaded', adjustImageWidth);

function btnLikes() {
    const btnLiked = document.getElementById('btnLike')
    const iconLike = btnLiked.querySelector('i')

    if (iconLike.classList.contains('bi-heart')) {
        iconLike.classList.remove('bi-heart')
        iconLike.classList.add('bi-heart-fill')
    } else {
        iconLike.classList.remove('bi-heart-fill')
        iconLike.classList.add('bi-heart')
    }
}

function toggleFollow() {
    const followBtn = document.getElementById('followButton');

    if (followBtn.innerText === "Follow") {
        followBtn.innerText = "Following";
        followBtn.classList.remove('bg-btnsec', 'hover:bg-gray-300');
        followBtn.classList.add('bg-gray-300');
    } else {
        followBtn.innerText = "Follow";
        followBtn.classList.remove('bg-gray-300');
        followBtn.classList.add('bg-btnsec', 'hover:bg-gray-300');
    }
}
