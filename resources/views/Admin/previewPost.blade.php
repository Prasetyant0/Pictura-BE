@extends('Admin.layout.master_admin')
@section('content-admin')
    <main>
        <section class="max-w-screen-2xl mx-auto">
            <div class="px-4 mt-24 sm:ml-64">
                <div class="container max-w-screen-2xl mx-auto flex items-center justify-center mb-4">
                    <div class="w-full mx-3">
                        <div class="mx-auto bg-white rounded-xl shadow-md overflow-hidden mb-16 w-full"
                            id="imageContainer">
                            <!-- Main Content -->
                            <div class="flex max-h-full min-h-[24rem] flex-responsive">
                                <!-- Sisi Kiri (Image) -->
                                <div class="w-1/2 overflow-hidden w-responsive">
                                    <img id="postImage"
                                        src="{{ asset('assets/img/CarouselImg/shiraito-waterfall-autumn-japan.jpg') }}"
                                        alt="Post Image" class="w-full object-cover min-h-[24rem]">
                                </div>

                                <!-- Sisi Kanan (Detail dan Form Comment) -->
                                <div id="postDetail" class="w-1/2 flex flex-col max-h-full w-responsive">
                                    <div class="px-4 pb-4 overflow-y-auto max-h-full hidden-scrollbar">
                                        <div class="">
                                            <div class="flex-grow overflow-hidden">
                                                <!-- Judul dan Deskripsi -->
                                                <div class="mb-4 mt-4">
                                                    <h1 class="text-2xl font-bold mb-2">Lorem ipsum dolor sit amet
                                                    </h1>
                                                    <div class="flex flex-row gap-1">
                                                        <span class="roboto-medium text-sm">#handsome</span>
                                                        <span class="roboto-medium text-sm">#fashion</span>
                                                        <span class="roboto-medium text-sm">#man</span>
                                                    </div>
                                                    <p class="text-gray-700 line-clamp-2 hover:line-clamp-none">
                                                        Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Vivamus congue imperdiet lorem, quis
                                                        porttitor
                                                        turpis gravida nec. Curabitur ornare magna at lacus
                                                        bibendum, non
                                                        malesuada sapien tempor. Nulla gravida magna in augue porta,
                                                        quis
                                                        varius elit accumsan. Nullam eget neque diam. Maecenas in
                                                        nunc nunc.
                                                        Maecenas sit amet efficitur ligula. Cras quis mauris
                                                        egestas,
                                                        gravida sapien quis, sagittis odio. Curabitur a risus dui.
                                                        Pellentesque scelerisque erat sed ante rutrum, sed cursus
                                                        nunc
                                                        lobortis.</p>
                                                </div>

                                                <!-- Informasi Profile dan Username Creator -->
                                                <div class="mb-4 flex items-center">
                                                    <div class="w-10 h-10 overflow-hidden rounded-full mr-2">
                                                        <img src="../../../../dist/img/CarouselImg/charming-woman-beige-coat-sunglasses-posing-isolated-background.jpg"
                                                            alt="Creator Profile" class="object-cover w-full h-full">
                                                    </div>
                                                    <div>
                                                        <h2 class="roboto-medium text-[15px]">Lorem ipsum</h2>
                                                        <p class="roboto-light text-[15px]">10k followers</p>
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
                                                        <div class="flex flex-col">
                                                            <div class="flex items-center">
                                                                <img class="w-[30px] h-[30px] me-2 rounded-full"
                                                                    src="../../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                                                    alt="">
                                                                <div class="flex flex-row gap-1 items-center">
                                                                    <p class="roboto-medium text-[13px]">Dolorem</p>
                                                                    <span class="roboto-light text-[13px]">|</span>
                                                                    <p
                                                                        class="roboto-light text-[13px] text-[#3636367c]">
                                                                        Jan
                                                                        20,
                                                                        2024 at 8:45 am</p>

                                                                </div>
                                                            </div>
                                                            <div class="ms-10">
                                                                <p class="text-[12px] roboto-light">Lorem ipsum
                                                                    dolor sit
                                                                    amet,
                                                                    consectetur
                                                                    adipiscing elit. Suspendisse nec nisi quis ex
                                                                    posuere
                                                                    rutrum.</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col">
                                                            <div class="flex items-center">
                                                                <img class="w-[30px] h-[30px] me-2 rounded-full"
                                                                    src="../../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                                                    alt="">
                                                                <div class="flex flex-row gap-1 items-center">
                                                                    <p class="roboto-medium text-[13px]">Dolorem</p>
                                                                    <span class="roboto-light text-[13px]">|</span>
                                                                    <p
                                                                        class="roboto-light text-[13px] text-[#3636367c]">
                                                                        Jan
                                                                        20,
                                                                        2024 at 8:45 am</p>

                                                                </div>
                                                            </div>
                                                            <div class="ms-10">
                                                                <p class="text-[12px] roboto-light">Lorem ipsum
                                                                    dolor sit
                                                                    amet,
                                                                    consectetur
                                                                    adipiscing elit. Suspendisse nec nisi quis ex
                                                                    posuere
                                                                    rutrum.</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col">
                                                            <div class="flex items-center">
                                                                <img class="w-[30px] h-[30px] me-2 rounded-full"
                                                                    src="../../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                                                    alt="">
                                                                <div class="flex flex-row gap-1 items-center">
                                                                    <p class="roboto-medium text-[13px]">Dolorem</p>
                                                                    <span class="roboto-light text-[13px]">|</span>
                                                                    <p
                                                                        class="roboto-light text-[13px] text-[#3636367c]">
                                                                        Jan
                                                                        20,
                                                                        2024 at 8:45 am</p>

                                                                </div>
                                                            </div>
                                                            <div class="ms-10">
                                                                <p class="text-[12px] roboto-light">Lorem ipsum
                                                                    dolor sit
                                                                    amet,
                                                                    consectetur
                                                                    adipiscing elit. Suspendisse nec nisi quis ex
                                                                    posuere
                                                                    rutrum.</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col">
                                                            <div class="flex items-center">
                                                                <img class="w-[30px] h-[30px] me-2 rounded-full"
                                                                    src="../../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                                                    alt="">
                                                                <div class="flex flex-row gap-1 items-center">
                                                                    <p class="roboto-medium text-[13px]">Dolorem</p>
                                                                    <span class="roboto-light text-[13px]">|</span>
                                                                    <p
                                                                        class="roboto-light text-[13px] text-[#3636367c]">
                                                                        Jan
                                                                        20,
                                                                        2024 at 8:45 am</p>

                                                                </div>
                                                            </div>
                                                            <div class="ms-10">
                                                                <p class="text-[12px] roboto-light">Lorem ipsum
                                                                    dolor sit
                                                                    amet,
                                                                    consectetur
                                                                    adipiscing elit. Suspendisse nec nisi quis ex
                                                                    posuere
                                                                    rutrum.</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col">
                                                            <div class="flex items-center">
                                                                <img class="w-[30px] h-[30px] me-2 rounded-full"
                                                                    src="../../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                                                    alt="">
                                                                <div class="flex flex-row gap-1 items-center">
                                                                    <p class="roboto-medium text-[13px]">Dolorem</p>
                                                                    <span class="roboto-light text-[13px]">|</span>
                                                                    <p
                                                                        class="roboto-light text-[13px] text-[#3636367c]">
                                                                        Jan
                                                                        20,
                                                                        2024 at 8:45 am</p>

                                                                </div>
                                                            </div>
                                                            <div class="ms-10">
                                                                <p class="text-[12px] roboto-light">Lorem ipsum
                                                                    dolor sit
                                                                    amet,
                                                                    consectetur
                                                                    adipiscing elit. Suspendisse nec nisi quis ex
                                                                    posuere
                                                                    rutrum.</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col">
                                                            <div class="flex items-center">
                                                                <img class="w-[30px] h-[30px] me-2 rounded-full"
                                                                    src="../../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                                                    alt="">
                                                                <div class="flex flex-row gap-1 items-center">
                                                                    <p class="roboto-medium text-[13px]">Dolorem</p>
                                                                    <span class="roboto-light text-[13px]">|</span>
                                                                    <p
                                                                        class="roboto-light text-[13px] text-[#3636367c]">
                                                                        Jan
                                                                        20,
                                                                        2024 at 8:45 am</p>

                                                                </div>
                                                            </div>
                                                            <div class="ms-10">
                                                                <p class="text-[12px] roboto-light">Lorem ipsum
                                                                    dolor sit
                                                                    amet,
                                                                    consectetur
                                                                    adipiscing elit. Suspendisse nec nisi quis ex
                                                                    posuere
                                                                    rutrum.</p>
                                                            </div>
                                                        </div>
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
