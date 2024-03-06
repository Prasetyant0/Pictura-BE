@extends('Admin.layout.master_admin')
@section('content-admin')
    <main>
        <section class="max-w-screen-2xl mx-auto">
            <div class="px-4 mt-24 sm:ml-64">
                <div class="container max-w-screen-2xl mx-auto flex items-center justify-center mb-4">
                    <div class="w-full mx-3">
                        <div class="mx-auto bg-white rounded-xl shadow-md overflow-hidden mb-16 w-full" id="imageContainer">
                            <!-- Main Content -->
                            <div class="flex max-h-full min-h-[24rem] flex-responsive">
                                <!-- Sisi Kiri (Image) -->
                                <div class="w-1/2 overflow-hidden w-responsive">
                                    <img id="postImage" src="{{ asset('gallery/' . $post->file_location) }}" alt="Post Image"
                                        class="w-full object-cover min-h-[24rem]">
                                </div>

                                <!-- Sisi Kanan (Detail dan Form Comment) -->
                                <div id="postDetail" class="w-1/2 flex flex-col max-h-full w-responsive">
                                    <div class="px-4 pb-4 overflow-y-auto max-h-full hidden-scrollbar">
                                        <div class="">
                                            <div class="flex-grow overflow-hidden">
                                                <!-- Judul dan Deskripsi -->
                                                <div class="mb-4 mt-4">
                                                    <h1 class="text-2xl font-bold mb-2">{{ $post->photo_title }}
                                                    </h1>
                                                    <div class="flex flex-row gap-1">
                                                        @if ($post->tag_topic)
                                                            @foreach (json_decode($post->tag_topic) as $tag)
                                                                <span
                                                                    class="roboto-medium text-sm hover:underline"><a>{{ '#' . $tag }}</a></span>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    <p class="text-gray-700 line-clamp-2 hover:line-clamp-none">
                                                        {{ $post->photo_description }}</p>
                                                </div>

                                                <!-- Informasi Profile dan Username Creator -->
                                                <div class="mb-4 flex items-center">
                                                    <div class="w-10 h-10 overflow-hidden rounded-full mr-2">
                                                        @if ($post->userPhotos->photo_profile == null)
                                                            <img src="{{ asset('assets/img/defaultProfile.png') }}"
                                                                alt="Creator Profile" class="object-cover w-full h-full">
                                                        @else
                                                            <img src="{{ asset('profile_photos/' . $post->userPhotos->photo_profile) }}"
                                                                alt="Creator Profile" class="object-cover w-full h-full">
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <h2 class="roboto-medium text-[15px]">
                                                            {{ $post->userPhotos->username == null ? $post->userPhotos->fullName : $post->userPhotos->username }}
                                                        </h2>
                                                        <p class="roboto-light text-[15px]">
                                                            {{ $post->userPhotos->followers->count() }} followers</p>
                                                    </div>
                                                </div>

                                                <!-- List Comment -->
                                                <div class="space-y-4">
                                                    <div>
                                                        <h1 class="roboto-regular">
                                                            Comments
                                                        </h1>
                                                    </div>
                                                    <div class="">
                                                        <!-- Single Comment -->
                                                        @forelse ($commentList as $cl)
                                                            <div class="flex flex-col mb-2" id="commentContainer">
                                                                <div class="flex items-center">
                                                                    @if ($cl->userPostComment->photo_profile)
                                                                        <img class="w-[30px] h-[30px] me-2 rounded-full object-cover object-top"
                                                                            src="{{ asset('profile_photos/' . $cl->userPostComment->photo_profile) }}"
                                                                            alt="{{ $cl->userPostComment->username }}">
                                                                    @else
                                                                        <img src="{{ asset('assets/img/Portrait_Placeholder.png') }}"
                                                                            alt="default"
                                                                            class="w-[30px] h-[30px] me-2 rounded-full object-cover object-top">
                                                                    @endif
                                                                    <div class="flex flex-row gap-1 items-center">
                                                                        @if ($cl->userPostComment->username == null)
                                                                            <p class="roboto-medium text-[13px]">
                                                                                {{ Str::limit($cl->userPostComment->fullName, 10) }}
                                                                            </p>
                                                                        @else
                                                                            <p class="roboto-medium text-[13px]">
                                                                                {{ Str::limit($cl->userPostComment->username, 10) }}
                                                                            </p>
                                                                        @endif
                                                                        <span class="roboto-light text-[13px]">|</span>
                                                                        <p
                                                                            class="roboto-light text-[13px] text-[#3636367c]">
                                                                            {{ \Carbon\Carbon::parse($cl->created_at)->format('M j, Y \a\t g:i a') }}
                                                                        </p>
                                                                        @if (Auth::check())
                                                                            <span class="roboto-light text-[13px]">|</span>
                                                                            <p
                                                                                class="roboto-light text-[13px] text-[#3636367c]">
                                                                                <button type="button"
                                                                                    class="report-modal-toggle-button">
                                                                                    Report
                                                                                </button>
                                                                            </p>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="ms-10">
                                                                    <p class="text-[12px] roboto-light">
                                                                        {{ $cl->comment_fill }}</p>
                                                                </div>
                                                            </div>
                                                        @empty
                                                            <p class="text-sm roboto-light text-iconColor">No comments yet.
                                                                Be
                                                                the first to comment!</p>
                                                        @endforelse
                                                        <!-- ... Tambahkan comment lainnya ... -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Form Comment (fixed di bagian bawah) -->
                                    <!-- <div class="sticky bottom-0 bg-white z-10 border-t">
                                            <div class="px-3 py-3">
                                                <div class="flex flex-col">
                                                    <div class="flex flex-row justify-between pb-2 px-3 items-center">
                                                        <div class=""><span class="roboto-medium">5 Comments</span>
                                                        </div>
                                                        <div class="flex flex-row gap-3">
                                                            <div class="flex flex-row items-center gap-1">
                                                                <div>
                                                                    <i class="bi bi-heart-fill text-red-600"></i>
                                                                </div>
                                                                <div>
                                                                    <span class="roboto-medium text-[12px]">65</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <button class="bg-btnsec px-3 py-2 rounded-full"
                                                                    onclick="btnLikes()" id="btnLike">
                                                                    <i class="bi bi-heart text-[18px] text-center"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scriptjsInternalAdmin')
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            const imageHeight = document.getElementById('postImage').clientHeight;
            document.getElementById('postDetail').style.height = imageHeight + 'px';
        });

        function adjustImageWidth() {
            const image = document.getElementById('postImage');
            const imageContainer = document.getElementById('imageContainer');

            if (image.naturalWidth > image.naturalHeight) {
                // Landscape image
                imageContainer.classList.remove('w-1/2');
                imageContainer.classList.add('w-4/5');
            } else {
                // Portrait or square image
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
    </script>
@endpush
