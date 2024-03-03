@extends('layout.master')
@section('content')
    <!-- Main Content -->
    <section class="mt-[100px]">
        <div class="container max-w-screen-2xl mx-auto flex items-center justify-center mb-4">
            <div class="w-full mx-3">
                <div class="flex md:justify-between items-start w-full justify-center">
                    <div class="md:flex items-start back-hidden hidden">
                        <a href="/profile/{{ Auth::id() }}">
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
                                {{-- <div> --}}
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
                                                    class="z-20 hidden bg-backcolor divide-y divide-gray-100 rounded-lg shadow w-44">
                                                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="btn-more">
                                                        <li class="flex ml-2 items-center">
                                                            <i class="bi bi-journal-album"></i>
                                                            <a id="btn-list-album" data-dropdown-toggle="list-album"
                                                                data-dropdown-placement="right-start"
                                                                class="block px-4 py-2 w-full hover:bg-gray-100 cursor-pointer">Add
                                                                To Album</a>
                                                            <div id="list-album"
                                                                class="z-20 hidden divide-y divide-gray-100 bg-white rounded-lg shadow w-60">
                                                                <div class="p-3 bg-gray-50 rounded-t-lg">
                                                                    <label for="input-group-search" class="sr-only">Search
                                                                        Albums</label>
                                                                    <div class="relative">
                                                                        <div
                                                                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                                            <svg class="w-4 h-4 text-gray-500"
                                                                                aria-hidden="true"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="none" viewBox="0 0 20 20">
                                                                                <path stroke="currentColor"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" stroke-width="2"
                                                                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                                                            </svg>
                                                                        </div>
                                                                        <input type="text" id="input-group-search"
                                                                            class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-100 focus:ring-primary focus:border-primary"
                                                                            placeholder="Search albums">
                                                                    </div>
                                                                </div>
                                                                <ul class="h-48 py-2 overflow-y-auto text-gray-700"
                                                                    aria-labelledby="btn-list-album">
                                                                    @foreach ($userAlbums as $album)
                                                                        <li>
                                                                            <button type="button"
                                                                                data-album-id="{{ $album->id }}"
                                                                                data-photo-id="{{ $post->id }}"
                                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 addToAlbumButton">
                                                                                {{ $album->album_name }}
                                                                            </button>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                                <button type="button" data-modal-target="add-new-albums"
                                                                    data-modal-toggle="add-new-albums"
                                                                    class="flex items-center p-3 w-full text-sm roboto-medium text-primary border-t border-gray-200 rounded-b-lg bg-gray-50 hover:bg-gray-100 hover:underline">
                                                                    <i class="bi bi-folder-plus me-2"></i>
                                                                    Add new album
                                                                </button>
                                                            </div>
                                                        </li>
                                                        <li class="flex ml-2 items-center">
                                                            <i class="bi bi-trash"></i>
                                                            <a href="#" data-modal-target="delete-popup" data-item-id="{{ $post->id }}"
                                                                data-modal-toggle="delete-popup"
                                                                class="block px-4 py-2 w-full hover:bg-gray-100">Delete</a>
                                                        </li>
                                                        <li class="flex ml-2 items-center">
                                                            <i class="bi bi-download"></i>
                                                            <a href="/download-image/{{ $post->id }}"
                                                                class="block px-4 py-2 w-full hover:bg-gray-100">Download</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-edit">
                                            <button type="button" data-modal-target="edit-modal"
                                                data-modal-toggle="edit-modal" data-post-id="{{ $post->id }}"
                                                class="text-white bg-primary hover:bg-primaryDark roboto-medium rounded-full text-sm px-4 py-2 text-center">Edit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 pb-4 overflow-y-auto max-h-full hidden-scrollbar" id="section-judul">
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
                                                <p class="text-gray-700" id="photo-description">
                                                    {{ $post->photo_description }}
                                                </p>
                                            </div>

                                            <!-- Informasi Profile dan Username Creator -->
                                            <div class="mb-4 flex justify-start items-center">
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
                                                        <p class="roboto-light text-[15px]">
                                                            {{ $post->userPhotos->followers->count() }} followers
                                                        </p>
                                                    </div>
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
                                {{-- </div> --}}
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

    <!-- Modal Report -->
    @include('Pages.Authorized.Modal.reportModal')
    <!-- End Modal Report -->

    <!-- Modal Edit -->
    @include('Pages.Authorized.Modal.editModal')
    <!-- End Modal Edit -->

    <!-- Popup Delete -->
    @include('Pages.Authorized.Modal.deletePopup')
    <!-- End Popup Delete -->

    <!-- Albums Modal -->
    @include('Pages.Authorized.Modal.albumsModal')
    <!-- End Modal Albums -->
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
            $('#delete-popup').on('click', '[data-delete-confirm="yes"]', function() {
                var itemId = $("#delete-confirmation-btn").data("item-id") ;
                const userId = $("#delete-confirmation-btn").data("user-id");
                $.ajax({
                    type: 'GET',
                    url: '/delete-item/' + itemId,
                    success: function(data) {
                        $("#close-popup-delete").click();
                        window.location.href = '/profile/' + userId;
                    },
                    error: function(error) {
                        console.error('Error deleting item:', error);
                    }
                });
            });
            $('#delete-popup').on('click', '[data-delete-confirm="no"]', function() {
                $('#delete-popup').hide();
            });
        });

        $(".addToAlbumButton").click(function() {
            const albumId = $(this).data('album-id');
            const photoId = $(this).data('photo-id');
            $.ajax({
                type: "POST",
                url: `/addPhotoToAlbum/${albumId}/${photoId}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        // toastr()->addSuccess('Photo successfully added to album!');
                        console.log('Photo successfully added to album!');
                    } else {
                        // toastr()->addError('Something went wrong when adding photo to the album!');
                        console.log('Error');
                    }
                },
                error: function(error) {
                    console.error('Error:', error);
                },
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

        // Check description null or no
        // var descriptionExists = {!! $post->description ? 'true' : 'false' !!};
        // var postDetailElement = document.getElementById('postDetail');
        // var commentCount = document.getElementById('bodyComment').childElementCount;
        // if (descriptionExists) {
        //     if (commentCount >= 4) {
        //         postDetailElement.classList.remove('justify-between');
        //     }
        // }

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

        $('[data-modal-target="edit-modal"]').forEach(button => {
            $(button).click(function() {
                const postId = this.getAttribute('data-post-id');
                $.ajax({
                    type: "GET",
                    url: "/showPostModal/" + postId,
                    success: function(response) {
                        $('#edit-modal .modal-content').html(response);
                        $('#edit-modal').modal('show');
                    }
                });
            })
        });
    </script>
@endpush
