@extends('layout.master')
@section('content')
    <!-- Main Content -->
    <section class="mt-[100px]">
        <div class="container max-w-screen-2xl mx-auto flex items-center justify-center mb-4">
            <div class="w-full mx-3">
                <div class="flex md:justify-between items-start w-full justify-center">
                    <div class="md:flex items-start back-hidden hidden">
                        <button type="button" id="backButton">
                            <div class="flex items-center start-3 top-24 z-30">
                                <svg class="w-8 h-8 text-gray-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M5 12h14M5 12l4-4m-4 4 4 4" />
                                </svg>
                                <span class="w-full">Back</span>
                            </div>
                        </button>
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
                                                            <a data-modal-toggle="report-post" data-modal-target="report-post" type="button"
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
                                            <button type="button" data-tooltip-target="notif-favorite" id="add-to-favorite"
                                                data-photo-id="{{ $post->id }}" data-tooltip-trigger="click"
                                                class="text-white bg-primary hover:bg-primaryDark roboto-medium rounded-full text-sm px-4 py-2 text-center">
                                                Save</button>
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
                @forelse ($postGroupCategory as $group)
                    <div class="relative rounded-lg overflow-hidden group" id="imageShow">
                        <a href="/explore/detail/{{ $group->uuid }}">
                            <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                                src="{{ asset('gallery/' . $group->file_location) }}" alt="{{ $group->photo_title }}">
                        </a>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
    <!-- End Main -->
<!-- Modal Report -->
    <div tabindex="-1" aria-hidden="true" id="report-post"
        class="hidden report-modal overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-xl shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg roboto-medium text-gray-900">
                        Enter the reason for your report
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="report-post">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" action="/report-post/send" method="POST">
                    @csrf
                    <input type="hidden" name="photos_id" value="{{ $post->id }}">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="reason"
                                class="block mb-2 text-sm roboto-medium text-gray-900">Reason</label>
                            <textarea id="reason" rows="4" name="reason"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-xl border border-gray-300 focus:ring-primary focus:border-primary"
                                placeholder="Write the reason here"></textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-primary hover:bg-primaryDark roboto-medium rounded-xl text-sm px-5 py-2.5 text-center">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Report -->


    @include('Pages.Authorized.Modal.reportModal')
@endsection
@push('jsCssExternal')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
@push('jsInternalAuth')
    <script src="{{ asset('assets/js/detail.js') }}"></script>
    <script src="{{ asset('assets/js/detailAuth.js') }}"></script>
    <script>
        function showComments() {
            $.get("/showComment/{{ $post->id }}", {}, function(dataComment) {
                $("#bodyComment").html(dataComment);
            });
        }

        $(document).ready(function() {
            showComments();
        });
    </script>
@endpush
