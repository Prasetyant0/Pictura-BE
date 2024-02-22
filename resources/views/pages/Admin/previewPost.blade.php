<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../dist/output.css">
    <link rel="stylesheet" href="../../../dist/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Dashboard | Pictura Admin</title>
</head>

<body class="bg-[#ececec] scrollbar-hidden">
    <!-- Navigation -->
    <nav class="fixed top-0 z-50 w-full bg-[#00a8ff] shadow-md">
        <div class="px-3 py-3 lg:px-5 lg:pl-3 max-w-screen-2xl mx-auto">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-white rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="dashboard.html" class="flex ms-2 md:me-24 items-center gap-2">
                        <div class="bg-white rounded-md p-1">
                            <img src="../../../dist/img/logoPictura.png" class="h-8" alt="Pictura Logo" />
                        </div>
                        <div>
                            <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap
                        text-white">Pictura</span>
                        </div>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button" class="flex text-sm rounded-full focus:ring-4 focus:ring-white"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-10 h-10 rounded-full object-cover object-top"
                                    src="../../../dist/img/exploreAsset/portrait-happy-handsome-young-man-posing-isolated-background.jpg"
                                    alt="Admin photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 " role="none">
                                    Admin
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    admin@ymail.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Profile</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-[#00a8ff]
    sm:translate-x-0 " aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-[#00a8ff] dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="dashboard.html" class="flex items-center p-2 text-white rounded-lg hover:bg-[#0077b6] ">
                        <i class="bi bi-file-post text-[20px] text-white"></i>
                        <span class="ms-3">Post Report</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-[#0077b6] ">
                        <i class="bi bi-person-badge text-[20px] text-white"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Account Report</span>
                        <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium
                        text-primary bg-white rounded-full">3</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-[#0077b6] ">
                        <i class="text-[20px] text-white bi bi-chat-left-text"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Comment Report</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-[#0077b6] ">
                        <i class="text-[20px] text-white bi bi-person-lines-fill"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Admin List</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-[#0077b6] ">
                        <i class="text-[20px] text-white bi bi-person-fill-add"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Add New Admin</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- Navigation End -->

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
                                        src="../../../../dist/img/exploreAsset/portrait-happy-handsome-young-man-posing-isolated-background.jpg"
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

    <script src="../../../node_modules/flowbite/dist/flowbite.min.js"></script>
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
</body>

</html>