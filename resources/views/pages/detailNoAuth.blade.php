@extends('layout.master-noauth')
@section('content-noauth')
    <!-- Main Content -->
    <section class="mt-[100px]">
        <div class="container max-w-screen-2xl mx-auto flex items-center justify-center mb-4">
            <div class="w-full mx-3">
                <div class="flex md:justify-between items-start w-full justify-center">
                    <div class="md:flex items-start back-hidden hidden">
                        <a href="/explore">
                        <div class="flex items-center start-3 top-24 z-30">
                            <svg class="w-8 h-8 text-gray-900" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M5 12h14M5 12l4-4m-4 4 4 4" /> </svg>
                            <span class="ml-2 w-full">For you</span>
                        </div>
                        </a>
                    </div>

                    <div class="mx-auto md:w-1/2 bg-white rounded-xl shadow-md overflow-hidden mb-16 w-full" id="imageContainer">
                        <!-- Main Content -->
                        <div class="flex max-h-full min-h-[24rem] flex-responsive">
                            <!-- Sisi Kiri (Image) -->
                            <div class="w-1/2 overflow-hidden w-responsive">
                                <img id="postImage"
                                    src="{{ asset('assets/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg') }}"
                                    alt="Post Image" class="w-full object-cover min-h-[24rem]">
                            </div>

                            <!-- Sisi Kanan (Detail dan Form Comment) -->
                            <div id="postDetail" class="w-1/2 flex flex-col max-h-full w-responsive">
                                <div class="sticky top-0 z-10 mb-3 mx-3 mt-3">
                                    <div class="flex justify-between">
                                        <div class="flex flex-row space-x-3 justify-center items-center">
                                            <div class="btn-share flex">
                                                <button type="button" data-tooltip-target="notif-copy" data-tooltip-trigger="click">
                                                    <i class="bi bi-copy"></i>
                                                </button>
                                                <div id="notif-copy" role="tooltip"
                                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-tooltipBg rounded-lg shadow-sm opacity-0 tooltip">
                                                    Link copied
                                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                                </div>
                                            </div>
                                            <div class="btn-more flex">
                                                <button type="button" id="btn-more" data-dropdown-toggle="more-body" data-dropdown-trigger="click">
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
                                                            <a href="#"
                                                                class="block px-4 py-2 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Download</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-save">
                                            <button type="button" data-tooltip-target="notif-favorite" data-tooltip-trigger="click"
                                                class="text-white bg-primary hover:bg-primaryDark font-medium rounded-full text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                                <div id="notif-favorite" role="tooltip"
                                                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm
                                                    font-medium text-white bg-tooltipBg rounded-lg shadow-sm opacity-0
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
                                                <h1 class="text-2xl font-bold mb-2">Lorem ipsum dolor sit amet</h1>
                                                <div class="flex flex-row gap-1">
                                                        <span class="roboto-medium text-sm">#handsome</span>
                                                        <span class="roboto-medium text-sm">#fashion</span>
                                                        <span class="roboto-medium text-sm">#man</span>
                                                    </div>
                                                <p class="text-gray-700 line-clamp-2 hover:line-clamp-none">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Vivamus congue imperdiet lorem, quis porttitor
                                                    turpis gravida nec. Curabitur ornare magna at lacus bibendum, non
                                                    malesuada sapien tempor. Nulla gravida magna in augue porta, quis
                                                    varius elit accumsan. Nullam eget neque diam. Maecenas in nunc nunc.
                                                    Maecenas sit amet efficitur ligula. Cras quis mauris egestas,
                                                    gravida sapien quis, sagittis odio. Curabitur a risus dui.
                                                    Pellentesque scelerisque erat sed ante rutrum, sed cursus nunc
                                                    lobortis.</p>
                                            </div>

                                            <!-- Informasi Profile dan Username Creator -->
                                            <div class="mb-4 flex items-center">
                                                <div class="w-10 h-10 overflow-hidden rounded-full mr-2">
                                                    <img src="{{ asset('assets/img/CarouselImg/charming-woman-beige-coat-sunglasses-posing-isolated-background.jpg') }}"
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
                                                                src="{{ asset('assets/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg') }}"
                                                                alt="">
                                                            <div class="flex flex-row gap-1 items-center">
                                                                <p class="roboto-medium text-[13px]">Dolorem</p>
                                                                <span class="roboto-light text-[13px]">|</span>
                                                                <p class="roboto-light text-[13px] text-[#3636367c]">Jan
                                                                    20,
                                                                    2024 at 8:45 am</p>
                                                                <span class="roboto-light text-[13px]">|</span>
                                                                <p class="roboto-light text-[13px] text-[#3636367c]">
                                                                    Report</p>
                                                            </div>
                                                        </div>
                                                        <div class="ms-10">
                                                            <p class="text-[12px] roboto-light">Lorem ipsum dolor sit
                                                                amet,
                                                                consectetur
                                                                adipiscing elit. Suspendisse nec nisi quis ex posuere
                                                                rutrum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-col">
                                                        <div class="flex items-center">
                                                            <img class="w-[30px] h-[30px] me-2 rounded-full"
                                                                src="{{ asset('assets/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg') }}"
                                                                alt="">
                                                            <div class="flex flex-row gap-1 items-center">
                                                                <p class="roboto-medium text-[13px]">Dolorem</p>
                                                                <span class="roboto-light text-[13px]">|</span>
                                                                <p class="roboto-light text-[13px] text-[#3636367c]">Jan
                                                                    20,
                                                                    2024 at 8:45 am</p>
                                                                    <span class="roboto-light text-[13px]">|</span>
                                                                    <p
                                                                        class="roboto-light text-[13px] text-[#3636367c]">
                                                                        Report</p>
                                                            </div>
                                                        </div>
                                                        <div class="ms-10">
                                                            <p class="text-[12px] roboto-light">Lorem ipsum dolor sit
                                                                amet,
                                                                consectetur
                                                                adipiscing elit. Suspendisse nec nisi quis ex posuere
                                                                rutrum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-col">
                                                        <div class="flex items-center">
                                                            <img class="w-[30px] h-[30px] me-2 rounded-full"
                                                                src="{{ asset('assets/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg') }}"
                                                                alt="">
                                                            <div class="flex flex-row gap-1 items-center">
                                                                <p class="roboto-medium text-[13px]">Dolorem</p>
                                                                <span class="roboto-light text-[13px]">|</span>
                                                                <p class="roboto-light text-[13px] text-[#3636367c]">Jan
                                                                    20,
                                                                    2024 at 8:45 am</p>
                                                                    <span class="roboto-light text-[13px]">|</span>
                                                                    <p
                                                                        class="roboto-light text-[13px] text-[#3636367c]">
                                                                        Report</p>
                                                            </div>
                                                        </div>
                                                        <div class="ms-10">
                                                            <p class="text-[12px] roboto-light">Lorem ipsum dolor sit
                                                                amet,
                                                                consectetur
                                                                adipiscing elit. Suspendisse nec nisi quis ex posuere
                                                                rutrum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-col">
                                                        <div class="flex items-center">
                                                            <img class="w-[30px] h-[30px] me-2 rounded-full"
                                                                src="{{ asset('assets/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg') }}"
                                                                alt="">
                                                            <div class="flex flex-row gap-1 items-center">
                                                                <p class="roboto-medium text-[13px]">Dolorem</p>
                                                                <span class="roboto-light text-[13px]">|</span>
                                                                <p class="roboto-light text-[13px] text-[#3636367c]">Jan
                                                                    20,
                                                                    2024 at 8:45 am</p>
                                                                    <span class="roboto-light text-[13px]">|</span>
                                                                    <p
                                                                        class="roboto-light text-[13px] text-[#3636367c]">
                                                                        Report</p>
                                                            </div>
                                                        </div>
                                                        <div class="ms-10">
                                                            <p class="text-[12px] roboto-light">Lorem ipsum dolor sit
                                                                amet,
                                                                consectetur
                                                                adipiscing elit. Suspendisse nec nisi quis ex posuere
                                                                rutrum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-col">
                                                        <div class="flex items-center">
                                                            <img class="w-[30px] h-[30px] me-2 rounded-full"
                                                                src="{{ asset('assets/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg') }}"
                                                                alt="">
                                                            <div class="flex flex-row gap-1 items-center">
                                                                <p class="roboto-medium text-[13px]">Dolorem</p>
                                                                <span class="roboto-light text-[13px]">|</span>
                                                                <p class="roboto-light text-[13px] text-[#3636367c]">Jan
                                                                    20,
                                                                    2024 at 8:45 am</p>
                                                                    <span class="roboto-light text-[13px]">|</span>
                                                                    <p
                                                                        class="roboto-light text-[13px] text-[#3636367c]">
                                                                        Report</p>
                                                            </div>
                                                        </div>
                                                        <div class="ms-10">
                                                            <p class="text-[12px] roboto-light">Lorem ipsum dolor sit
                                                                amet,
                                                                consectetur
                                                                adipiscing elit. Suspendisse nec nisi quis ex posuere
                                                                rutrum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-col">
                                                        <div class="flex items-center">
                                                            <img class="w-[30px] h-[30px] me-2 rounded-full"
                                                                src="{{ asset('assets/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg') }}"
                                                                alt="">
                                                            <div class="flex flex-row gap-1 items-center">
                                                                <p class="roboto-medium text-[13px]">Dolorem</p>
                                                                <span class="roboto-light text-[13px]">|</span>
                                                                <p class="roboto-light text-[13px] text-[#3636367c]">Jan
                                                                    20,
                                                                    2024 at 8:45 am</p>
                                                                    <span class="roboto-light text-[13px]">|</span>
                                                                    <p
                                                                        class="roboto-light text-[13px] text-[#3636367c]">
                                                                        Report</p>
                                                            </div>
                                                        </div>
                                                        <div class="ms-10">
                                                            <p class="text-[12px] roboto-light">Lorem ipsum dolor sit
                                                                amet,
                                                                consectetur
                                                                adipiscing elit. Suspendisse nec nisi quis ex posuere
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
                                <div class="sticky bottom-0 bg-white z-10 border-t">
                                    <div class="px-3 py-3">
                                        <div class="flex flex-col">
                                            <div class="flex flex-row justify-between pb-2 px-3 items-center">
                                                <div class=""><span class="roboto-medium">5 Comments</span></div>
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
                                                        <button class="bg-btnsec px-3 py-2 rounded-full" onclick="btnLikes()" id="btnLike">
                                                            <i class="bi bi-heart text-[18px] text-center"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-row items-center space-x-2 px-3">
                                                <div class="w-full">
                                                    <input type="text" id="comment"
                                                        class="bg-btnsec border border-gray-300 text-slate-600 text-sm rounded-2xl focus:ring-primary focus:border-primary block w-full p-2.5"
                                                        placeholder="Write a comment">
                                                </div>
                                                <div class="">
                                                    <button class="bg-primary text-white px-3 py-3 rounded-2xl"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-send-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                                                        </svg></button>
                                                </div>
                                            </div>
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

    @push('jsInternal')
    
    <script src="{{ asset('assets/js/detail.js') }}"></script>
    @endpush

@endsection
