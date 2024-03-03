@extends('layout.master')
@section('content')
    <!-- Main Content -->
    <section class="mt-[100px]">
        <div class="container max-w-screen-2xl mx-auto flex items-center justify-center mb-4">
            <div class="w-full mx-3">
                <div class="flex md:justify-between items-start w-full justify-center">
                    <div class="md:flex items-start back-hidden hidden">
                        <a href="/home">
                            <div class="flex items-center start-3 top-24 z-30">
                                <svg class="w-8 h-8 text-gray-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M5 12h14M5 12l4-4m-4 4 4 4" />
                                </svg>
                                <span class="ml-2 w-full">Back</span>
                            </div>
                        </a>
                    </div>

                    <div class="mx-auto md:w-1/2 bg-white rounded-xl shadow-md overflow-hidden mb-16 w-full"
                        id="imageContainer">
                        <!-- Main Content -->
                        <div class="flex max-h-full min-h-[24rem] flex-responsive">
                            <!-- Sisi Kiri (Image) -->
                            <div class="w-1/2 overflow-hidden w-responsive">
                                <img id="postImage" src="{{ asset('gallery/' . $post->file_location) }}" alt="Post Image"
                                    class="w-full object-cover min-h-[24rem]">
                            </div>

                            <!-- Sisi Kanan (Detail dan Form Comment) -->
                            <div id="postDetail" class="w-1/2 flex flex-col max-h-full w-responsive">
                                <div class="sticky top-0 z-10 mb-3 mx-3 mt-3">
                                    <div class="flex justify-between">
                                        <div class="flex flex-row space-x-3 justify-center items-center">
                                            <div class="btn-share flex">
                                                <button type="button" data-tooltip-target="notif-copy" id="btnCopy"
                                                    data-tooltip-trigger="click">
                                                    <i class="bi bi-copy"></i>
                                                </button>
                                                <div id="notif-copy" role="tooltip"
                                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-tooltipBg rounded-lg shadow-sm opacity-0 tooltip">
                                                    Link copied
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </div>
                                            <div class="btn-more flex">
                                                <button type="button" id="btn-more" data-dropdown-toggle="more-body"
                                                    data-dropdown-trigger="click">
                                                    <i class="bi bi-three-dots"></i>
                                                </button>
                                                <div id="more-body"
                                                    class="z-10 hidden bg-backcolor divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="btn-more">
                                                        <li class="flex ml-2 items-center">
                                                            <i class="bi bi-exclamation-triangle"></i>
                                                            <a href="#"
                                                                class="block px-4 py-2 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                                        </li>
                                                        <li class="flex ml-2 items-center">
                                                            <i class="bi bi-download"></i>
                                                            <a href="/download-image/{{ $post->id }}"
                                                                class="block px-4 py-2 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Download</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-save">
                                            <button type="button" data-tooltip-target="notif-favorite" id="add-to-favorite" data-photo-id="{{ $post->id }}"
                                                data-tooltip-trigger="click"
                                                class="text-white bg-primary hover:bg-primaryDark roboto-medium rounded-full text-sm px-4 py-2 text-center">Save</button>
                                            <div id="notif-favorite" role="tooltip"
                                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm
                                                    roboto-medium text-white bg-tooltipBg rounded-lg shadow-sm opacity-0
                                                    tooltip">
                                                Successfully added to favorites
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 pb-4 overflow-y-auto max-h-full hidden-scrollbar">
                                    <div class="">
                                        <div class="flex-grow overflow-hidden">
                                            <!-- Judul dan Deskripsi -->
                                            <div class="mb-4">
                                                <h1 class="text-2xl font-bold mb-2">{{ $post->photo_title }}</h1>
                                                <div class="flex flex-row gap-1">
                                                    @if ($post->tag_topic)
                                                        @foreach (json_decode($post->tag_topic) as $tag)
                                                            <span class="roboto-medium text-sm hover:underline"><a
                                                                    href="/home">{{ '#' . $tag }}</a></span>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <p class="text-gray-700">{{ $post->photo_description }}</p>
                                            </div>

                                            <!-- Informasi Profile dan Username Creator -->
                                            <div class="mb-4 flex justify-between items-center">
                                                <a href="/profile/{{ $post->userPhotos->id }}">
                                                    <div class="flex items-center">
                                                        <div class="w-10 h-10 overflow-hidden rounded-full mr-2">
                                                            @if ($post->userPhotos->photo_profile)
                                                                <img src="{{ asset('profile_photos/' . $post->userPhotos->photo_profile) }}"
                                                                    alt="{{ $post->userPhotos->username }}"
                                                                    class="object-cover w-full h-full object-top">
                                                            @else
                                                                <img src="{{ asset('assets/img/defaultProfile.png') }}"
                                                                    alt="default"
                                                                    class="object-cover w-full h-full object-top">
                                                            @endif
                                                        </div>
                                                        <div>
                                                            @if ($post->userPhotos->username == null)
                                                            <h2 class="roboto-medium text-[15px]">
                                                                {{ $post->userPhotos->fullName }}</h2>
                                                            @else
                                                            <h2 class="roboto-medium text-[15px]">
                                                                {{ $post->userPhotos->username }}</h2>
                                                            @endif
                                                            <p class="roboto-light text-[15px]" id="followerCount">
                                                                {{ $post->userPhotos->followers->count() }} followers</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div>
                                                    @if ($post->userPhotos->id == Auth::user()->id)
                                                        <button type="button" id="followButton"
                                                            class="text-colorText bg-btnsec hover:bg-gray-300 roboto-medium hidden
                                                        rounded-full text-sm px-4 py-2 text-center">Follow</button>
                                                    @else
                                                        <button type="button" id="followButton"
                                                            data-following-id="{{ $post->userPhotos->id }}"
                                                            data-followed="{{ Auth::user()->following()->where('following_id', $post->userPhotos->id)->first() }}"
                                                            class="text-colorText bg-btnsec hover:bg-gray-300 roboto-medium
                                                        rounded-full text-sm px-4 py-2 text-center">
                                                            Follow
                                                        </button>
                                                    @endif
                                                </div>
                                            </div>

                                            <!-- List Comment -->
                                            <div class="space-y-4">
                                                <div id="headerComment">
                                                    <h1 class="roboto-regular">
                                                        Comments
                                                    </h1>
                                                </div>
                                                <div id="bodyComment">
                                                    <!-- Single Comment -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Comment (fixed di bagian bawah) -->
                                <div class="sticky bottom-0 bg-white z-10 border-t" id="form-comment">
                                    <div class="px-3 py-3">
                                        <div class="flex flex-col">
                                            <div class="flex flex-row justify-between pb-2 px-3 items-center">
                                                <div><span class="roboto-medium" id="commentCount">{{ $commentCount }}
                                                        Comments</span></div>
                                                <div class="flex flex-row gap-3">
                                                    <div class="flex flex-row items-center gap-1">
                                                        <div>
                                                            <i class="bi bi-heart-fill text-red-600"></i>
                                                        </div>
                                                        <div>
                                                            <span class="roboto-medium text-[12px]"
                                                                id="likeTotal">{{ $likeTotal }}</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <form action="/likePost" method="post" id="likeForm">
                                                            @csrf
                                                            <input type="hidden" name="idPost"
                                                                value="{{ $post->id }}">
                                                            <button class="bg-btnsec px-3 py-2 rounded-full"
                                                                type="submit" id="btnLike">
                                                                <i
                                                                    class="bi {{ $post->isLiked ? 'bi-heart-fill' : 'bi-heart' }} text-[18px] text-center"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <form action="/commentPost" method="post" id="commentPostForm">
                                                @csrf
                                                <input type="hidden" name="idPost" value="{{ $post->id }}">
                                                <div class="flex flex-row items-center space-x-2 px-3">
                                                    <div class="w-full">
                                                        <input type="text" id="comment" name="commentPost"
                                                            class="bg-btnsec border border-gray-300 text-slate-600 text-sm rounded-2xl focus:ring-primary focus:border-primary block w-full p-2.5"
                                                            placeholder="Write a comment" autocomplete="off">
                                                    </div>
                                                    <div class="">
                                                        <button type="submit"
                                                            class="bg-primary text-white px-3 py-3 rounded-2xl"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-send-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                                                            </svg></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="flex justify-center items-center mx-auto max-w-screen-2xl mt-[20px] lg:px-4 px-3 mb-[20px]">
            <div class="columns-2 sm:columns-4 md:columns-6 space-y-4">
                <div>
                    <a href="detailAuth.html">
                        <img class="h-auto max-w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                    </a>
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End Main -->

    @include('Pages.Authorized.Modal.reportModal')
@endsection
@push('jsCssExternal')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
@push('jsInternalAuth')
    <script src="{{ asset('assets/js/detail.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#add-to-favorite").click(function() {
                const photoId = $(this).data("photo-id") ;

                $.ajax({
                    type: 'POST',
                    url: '/add-to-favorite',
                    data: {
                        '_token': $('meta[name="csrf-token"]').attr('content'),
                        'photos_id': photoId,
                    },
                    success: function(response) {
                        $('#notif-favorite').text(response.message);
                        $('#notif-favorite').removeClass('invisible').addClass('visible');
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            });
        });

        $(document).ready(function() {
            checkFollowStatus();
        });

        function checkFollowStatus() {
            const followingId = $("#followButton").data("following-id");
            const followBtn = $("#followButton");

            $.ajax({
                type: "GET",
                url: `/checkFollow/${followingId}`,
                success: function(response) {
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
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }

        $("#followButton").click(function() {
            const followButton = $(this);
            const followingId = followButton.data("following-id");
            const urlFollow = `/toggleFollow/${followingId}`;

            $.ajax({
                type: "POST",
                url: urlFollow,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
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
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        });


        $(document).on('click', '[data-modal-toggle]', function() {
            var modalToggle = $(this).data('modal-toggle');
            var modalTarget = $(this).data('modal-target');
            if (modalToggle === 'report-modal') {
                $('#' + modalTarget).removeClass('hidden');
            }
        });

        $("#commentPostForm").submit(function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/commentPost",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    showComments();
                    toastr.success('Comment sent successfully.', 'Success');
                    toastr.options.timeOut = 1000;
                    $("#commentPostForm input[name='commentPost']").val("");
                    updateCommentTotal(response.commentCount);
                },
                error: function(errors) {
                    toastr.error('Failed to send comment!', 'Error');
                    toastr.options.timeOut = 1000;
                }
            });
        });

        function showComments() {
            $.get("/showComment/{{ $post->id }}", {}, function(dataComment) {
                $("#bodyComment").html(dataComment);
            });
        }

        $(document).ready(function() {
            showComments();
        });

        function updateCommentTotal(commentCount) {
            const commentText = commentCount + (commentCount === 1 ? ' Comment' : ' Comments');
            $('#commentCount').text(commentText);
        }

        $("#likeForm").submit(function(e) {
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
                success: function(response) {
                    console.log('Liked this Post.', response);
                    changeBtnLike(idPost, !isLiked);
                    updateLikeTotal(response.likeTotal);
                },
                error: function(error) {
                    console.error('Error:', error);
                },
            });
        });

        function updateLikeTotal(likeTotal) {
            $('#likeTotal').text(likeTotal);
        }

        function changeBtnLike(idPost, isLiked) {
            const btnLiked = $("#btnLike");
            const iconLike = btnLiked.find('i');

            if (isLiked) {
                iconLike.removeClass('bi-heart').addClass('bi-heart-fill');
            } else {
                iconLike.removeClass('bi-heart-fill').addClass('bi-heart');
            }
        }

        // Copy Link
        $("#btnCopy").click(function(e) {
            e.preventDefault();
            var currentUrl = window.location.href;
            var tooltip = document.getElementById('notif-copy');

            navigator.clipboard.writeText(currentUrl).then(() => {
                setTimeout(function() {
                    tooltip.classList.remove('visible');
                    tooltip.classList.add('invisible');
                }, 1000);
            });
        });
    </script>
@endpush
