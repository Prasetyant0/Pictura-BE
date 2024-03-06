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


// $("#followForm").submit(function (e) {
//     e.preventDefault();
//     const formData = $(this).serialize();
//     $.ajax({
//         type: "POST",
//         url: "/toggleFollow",
//         data: formData,
//         success: function (response) {
//             const followBtn = document.getElementById('followButton');
//             if (response.status === 'followed') {
//                 followBtn.innerText = "Followed";
//                 followBtn.classList.remove('bg-btnsec', 'hover:bg-gray-300');
//                 followBtn.classList.add('bg-gray-300');
//             } else if (response.status === 'unfollowed') {
//                 followBtn.innerText = "Follow";
//                 followBtn.classList.remove('bg-gray-300');
//                 followBtn.classList.add('bg-btnsec', 'hover:bg-gray-300');
//             }
//         },
//         error: function (error) {
//             console.error('Error:', error);
//         },
//     });
// });

function updateCommentTotal(commentCount) {
    const commentText = commentCount + (commentCount === 1 ? ' Comment' : ' Comments');
    $('#commentCount').text(commentText);
}

function updateLikeTotal(likeTotal) {
    $('#likeTotal').text(likeTotal);
}

// Copy Link
$("#btnCopy").click(function (e) {
    e.preventDefault();
    var currentUrl = window.location.href;
    var tooltip = document.getElementById('notif-copy');

    navigator.clipboard.writeText(currentUrl).then(() => {
        setTimeout(function () {
            tooltip.classList.remove('visible');
            tooltip.classList.add('invisible');
        }, 1000);
    });
});
