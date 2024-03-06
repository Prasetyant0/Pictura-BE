$("#backButton").click(function () {
    window.history.back();
});

$(document).ready(function () {
    $("#add-to-favorite").click(function () {
        const photoId = $(this).data("photo-id");

        $.ajax({
            type: 'POST',
            url: '/add-to-favorite',
            data: {
                '_token': $('meta[name="csrf-token"]').attr('content'),
                'photos_id': photoId,
            },
            success: function (response) {
                $('#notif-favorite').text(response.message);
                $('#notif-favorite').removeClass('invisible').addClass('visible');
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    });
});

$(document).ready(function () {
    checkFollowStatus();
});

function checkFollowStatus() {
    const followingId = $("#followButton").data("following-id");
    const followBtn = $("#followButton");

    $.ajax({
        type: "GET",
        url: `/checkFollow/${followingId}`,
        success: function (response) {
            if (response.isFollowing) {
                followBtn.text("Followed");
                followBtn.removeClass('bg-btnsec hover:bg-gray-300');
                followBtn.addClass('bg-gray-300');
            } else if (response.isFollowing == false) {
                followBtn.text("Follow");
                followBtn.removeClass('bg-gray-300');
                followBtn.addClass('bg-btnsec hover:bg-gray-300');
            }
        },
        error: function (error) {
            console.error('Error:', error);
        }
    });
}

$("#followButton").click(function () {
    const followButton = $(this);
    const followingId = followButton.data("following-id");
    const urlFollow = `/toggleFollow/${followingId}`;

    $.ajax({
        type: "POST",
        url: urlFollow,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (response) {
            console.log(response);
            $("#followerCount").text(response.followerCount + " followers")
            if (response.following) {
                followButton.text("Followed");
                followButton.removeClass('bg-btnsec hover:bg-gray-300');
                followButton.addClass('bg-gray-300');
            } else if (response.following == false) {
                followButton.text("Follow");
                followButton.removeClass('bg-gray-300');
                followButton.addClass('bg-btnsec hover:bg-gray-300');
            }
        },
        error: function (error) {
            console.error('Error:', error);
        }
    });
});

$(document).on('click', '[data-modal-toggle]', function () {
    var modalToggle = $(this).data('modal-toggle');
    var modalTarget = $(this).data('modal-target');
    if (modalToggle === 'report-modal') {
        $('#' + modalTarget).removeClass('hidden');
    }
});

$("#commentPostForm").submit(function (e) {
    e.preventDefault();
    const formData = new FormData(this);
    $.ajax({
        type: "POST",
        url: "/commentPost",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            showComments();
            toastr.success('Comment sent successfully.', 'Success');
            toastr.options.timeOut = 1000;
            $("#commentPostForm input[name='commentPost']").val("");
            updateCommentTotal(response.commentCount);
        },
        error: function (errors) {
            toastr.error('Failed to send comment!', 'Error');
            toastr.options.timeOut = 1000;
        }
    });
});

$("#likeForm").submit(function (e) {
    e.preventDefault();
    const formData = new FormData(this);
    const idPost = $('input[name="idPost"]').val();
    const isLiked = $('#btnLike i').hasClass('bi-heart-fill');
    $.ajax({
        type: "POST",
        url: "/likePost",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            console.log('Liked this Post.', response);
            changeBtnLike(idPost, !isLiked);
            updateLikeTotal(response.likeTotal);
        },
        error: function (error) {
            console.error('Error:', error);
        },
    });
});

function changeBtnLike(idPost, isLiked) {
    const btnLiked = $("#btnLike");
    const iconLike = btnLiked.find('i');

    if (isLiked) {
        iconLike.removeClass('bi-heart').addClass('bi-heart-fill');
    } else {
        iconLike.removeClass('bi-heart-fill').addClass('bi-heart');
    }
}
