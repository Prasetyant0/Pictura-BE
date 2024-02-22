<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../dist/output.css">
    <link rel="stylesheet" href="../../../dist/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Detail Image | Pictura</title>
</head>

<body class="bg-backcolor">
    <!-- Nav -->
    <nav class="bg-backcolor fixed w-full z-20 top-0 start-0 shadow-md">
        <div class="max-w-screen-2xl flex items-center justify-between mx-auto p-4">
            <div class="flex items-center space-x-3">
                <div>
                    <a href="../../index.html" class="flex items-center w-8">
                        <img src="../../../dist/img/logoPictura.png" class="h-10" alt="Pictura Logos">
                    </a>
                </div>
                <div class="items-center justify-between hidden w-full lg:flex md:w-auto" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg bg-backcolor rtl:space-x-reverse md:flex-row md:mt-0 md:bg-backcolor">
                        <li>
                            <a href="home.html" class="block py-2 px-5 text-center me-2 text-gray-900 rounded-full bg-transparent
                        hover:bg-secondary hover:text-white
                        md:hover:text-white">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="today.html" class="block py-2 px-5 text-center me-2 text-gray-900 rounded-full bg-transparent
                        hover:bg-secondary hover:text-white
                        md:hover:text-white">Today</a>
                        </li>
                        <li>
                            <a href="create.html" class="block py-2 px-5 text-center me-2 text-gray-900 rounded-full bg-transparent
                        hover:bg-secondary hover:text-white
                        md:hover:text-white">Create</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="lg:flex w-[70%] mx-2 items-center hidden" id="navbar-sticky">
                <form class="w-full">
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-2.5 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-btnsec"
                            placeholder="Search Mockups, Logos..." required>
                    </div>
                </form>
            </div>
            <div class="flex flex-row justify-between gap-5 text-[20px] md:space-x-0">
                <div><button type="button" id="notif-dropdown-btn" data-dropdown-toggle="notif-dropdown"><i
                            class="bi bi-bell-fill text-iconColor"></i></button></div>
                <div><a href="Profile/profile.html"><i class="bi bi-person-circle text-iconColor"></i></a></div>
                <div><a href="#"><i class="bi bi-box-arrow-right text-iconColor"></i></a></div>
            </div>
        </div>

        <!-- Notif Modal -->
        <div id="notif-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
            <ul class="py-2 text-sm text-gray-700" aria-labelledby="notif-dropdown-btn">
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Dashboard</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Settings</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Earnings</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">Sign
                        out</a>
                </li>
            </ul>
        </div>
        <!-- End Modal Notif -->
    </nav>
    <!-- End Nav -->

    <!-- Bottom Nav -->
    <div
        class="fixed bottom-0 left-0 z-50 w-full h-16 lg:hidden md:flex bg-backcolor border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
        <div class="grid h-full max-w-lg grid-cols-2 mx-auto font-medium">
            <a href="home.html"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-primary dark:group-hover:text-secondary"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg>
                <span
                    class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-primary dark:group-hover:text-secondary">Home</span>
            </a>
            <a href="today.html"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-primary dark:group-hover:text-secondary"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                </svg>
                <span
                    class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-primary dark:group-hover:text-secondary">Explore</span>
            </a>
        </div>
    </div>
    <!-- Bottom Nav End -->

    <!-- Main Content -->
    <section class="mt-[100px]">
        <div class="container max-w-screen-2xl mx-auto flex items-center justify-center mb-4">
            <div class="w-full mx-3">
                <div class="flex md:justify-between items-start w-full justify-center">
                    <div class="md:flex items-start back-hidden hidden">
                        <a href="Profile/profile.html">
                            <div class="flex items-center start-3 top-24 z-30">
                                <svg class="w-8 h-8 text-gray-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M5 12h14M5 12l4-4m-4 4 4 4" /> </svg>
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
                                <img id="postImage"
                                    src="../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                    alt="Post Image" class="w-full object-cover min-h-[24rem]">
                            </div>

                            <!-- Sisi Kanan (Detail dan Form Comment) -->
                            <div id="postDetail" class="w-1/2 flex flex-col max-h-full w-responsive">
                                <div class="sticky top-0 z-10 mb-3 mx-3 mt-3">
                                    <div class="flex justify-between">
                                        <div class="flex flex-row space-x-3 justify-center items-center">
                                            <div class="btn-share flex">
                                                <button type="button" data-tooltip-target="notif-copy"
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
                                                    <ul class="py-2 text-sm text-gray-700"
                                                        aria-labelledby="btn-more">
                                                        <li class="flex ml-2 items-center">
                                                            <i class="bi bi-journal-album"></i>
                                                            <a id="btn-list-album" data-dropdown-toggle="list-album" data-dropdown-placement="right-start"
                                                                class="block px-4 py-2 w-full hover:bg-gray-100 cursor-pointer">Add To Album</a>
                                                                <div id="list-album"
                                                                    class="z-20 hidden divide-y divide-gray-100 bg-white rounded-lg shadow w-60">
                                                                    <div class="p-3 bg-gray-50 rounded-t-lg">
                                                                        <label for="input-group-search"
                                                                            class="sr-only">Search Albums</label>
                                                                        <div class="relative">
                                                                            <div
                                                                                class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                                                <svg class="w-4 h-4 text-gray-500"
                                                                                    aria-hidden="true"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="none" viewBox="0 0 20 20">
                                                                                    <path stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="2"
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
                                                                        <li>
                                                                            <a href="#"
                                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">
                                                                                Jese Leos
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"
                                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">
                                                                                Robert Gough
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"
                                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">
                                                                                Bonnie Green
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"
                                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">
                                                                                Leslie Livingston
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"
                                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">
                                                                                Michael Gough
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"
                                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">
                                                                                Joseph Mcfall
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"
                                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">
                                                                                Roberta Casas
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"
                                                                                class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 ">
                                                                                Neil Sims
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <button type="button" data-modal-target="add-new-albums" data-modal-toggle="add-new-albums"
                                                                        class="flex items-center p-3 w-full text-sm roboto-medium text-primary border-t border-gray-200 rounded-b-lg bg-gray-50 hover:bg-gray-100 hover:underline">
                                                                        <i class="bi bi-folder-plus me-2"></i>
                                                                        Add new album
                                                                    </button>
                                                                </div>
                                                            </li>
                                                        <li class="flex ml-2 items-center">
                                                            <i class="bi bi-trash"></i>
                                                            <a href="#" data-modal-target="delete-popup" data-modal-toggle="delete-popup"
                                                                class="block px-4 py-2 w-full hover:bg-gray-100">Delete</a>
                                                        </li>
                                                        <li class="flex ml-2 items-center">
                                                            <i class="bi bi-download"></i>
                                                            <a href="#"
                                                                class="block px-4 py-2 w-full hover:bg-gray-100">Download</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-edit">
                                            <button type="button" data-modal-target="edit-modal" data-modal-toggle="edit-modal"
                                                class="text-white bg-primary hover:bg-primaryDark roboto-medium rounded-full text-sm px-4 py-2 text-center">Edit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 pb-4 overflow-y-auto max-h-full hidden-scrollbar">
                                    <div class="">
                                        <div class="flex-grow overflow-hidden">
                                            <!-- Judul dan Deskripsi -->
                                            <div class="mb-4">
                                                <h1 class="text-2xl font-bold mb-2">Lorem ipsum dolor sit amet</h1>
                                                <p class="text-gray-700 line-clamp-2 hover:line-clamp-none">Lorem ipsum
                                                    dolor sit amet, consectetur
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
                                            <div class="mb-4 flex justify-start items-center">
                                                <div class="flex items-center">
                                                    <div class="w-10 h-10 overflow-hidden rounded-full mr-2">
                                                        <img src="../../../dist/img/CarouselImg/charming-woman-beige-coat-sunglasses-posing-isolated-background.jpg"
                                                            alt="Creator Profile" class="object-cover w-full h-full">
                                                    </div>
                                                    <div>
                                                        <h2 class="roboto-medium text-[15px]">Lorem ipsum</h2>
                                                        <p class="roboto-light text-[15px]">10k followers</p>
                                                    </div>
                                                </div>
                                                <!-- <div>
                                                    <button type="button" id="followButton" class="text-colorText bg-btnsec hover:bg-gray-300 roboto-medium
                                                        rounded-full text-sm px-4 py-2 text-center"
                                                        onclick="toggleFollow()">Follow</button>
                                                </div> -->
                                            </div>

                                            <!-- List Comment -->
                                            <div class="space-y-4">
                                                <div>
                                                    <h1 class="roboto-regular">
                                                        Comments
                                                    </h1>
                                                </div>
                                                <div>
                                                    <!-- Single Comment -->
                                                    <div class="flex flex-col">
                                                        <div class="flex items-center">
                                                            <img class="w-[30px] h-[30px] me-2 rounded-full"
                                                                src="../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                                                alt="">
                                                            <div class="flex flex-row gap-1 items-center">
                                                                <p class="roboto-medium text-[13px]">Dolorem</p>
                                                                <span class="roboto-light text-[13px]">|</span>
                                                                <p class="roboto-light text-[13px] text-[#3636367c]">Jan
                                                                    20,
                                                                    2024 at 8:45 am</p>
                                                                <span class="roboto-light text-[13px]">|</span>
                                                                <p class="roboto-light text-[13px] text-[#3636367c]">
                                                                    <button type="button"
                                                                        data-modal-toggle="report-modal"
                                                                        data-modal-target="report-modal">
                                                                        Report
                                                                    </button>
                                                                </p>
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
                                                <div><span class="roboto-medium">5 Comments</span></div>
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

    <!-- Modal Report -->
    <div id="report-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
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
                        data-modal-toggle="report-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="reason" class="block mb-2 text-sm roboto-medium text-gray-900">Reason</label>
                            <textarea id="reason" rows="4"
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

    <!-- Modal Edit -->
    <div id="edit-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-xl shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg roboto-medium text-gray-900">
                        Edit your post
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="edit-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="title" class="block mb-2 text-sm roboto-medium text-gray-900">Title</label>
                            <input type="text" id="title" name="title"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-xl border border-gray-300 focus:ring-primary focus:border-primary"
                                required placeholder="your post title" value="Lorem ipsum dolor">
                        </div>
                        <div class="col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm roboto-medium text-gray-900">Description</label>
                            <textarea id="description" rows="4" name="description"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-xl border border-gray-300 focus:ring-primary focus:border-primary"
                                placeholder="your post description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, quos!</textarea>
                        </div>
                        <div class="col-span-2">
                            <label for="tagged-topic" class="block mb-2 text-sm roboto-medium text-gray-900">Tagged
                                Topic</label>
                            <input type="text" id="tagged-topic" name="tagged-topic"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-xl border border-gray-300 focus:ring-primary focus:border-primary"
                                required placeholder="your post tagged topic" value="Lorem">
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-primary hover:bg-primaryDark roboto-medium rounded-xl text-sm px-5 py-2.5 text-center">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Edit -->

    <!-- Popup Delete -->
    <div id="delete-popup" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="delete-popup">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-red-600 w-12 h-12" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg roboto-regular text-colorText">Are you sure you want to delete this?
                        This action cannot be undone.</h3>
                    <button data-modal-hide="delete-popup" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Yes, I'm sure
                    </button>
                    <button data-modal-hide="delete-popup" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">No,
                        cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popup Delete -->

    <!-- Albums Modal -->
    <div id="add-new-albums" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-20 shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Add New Album
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="add-new-albums">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label class="block mb-2 text-sm roboto-medium text-gray-900"
                                for="wallpaper-album">Wallpaper Album</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                                id="wallpaper-album" type="file">
                        </div>
                        <div class="col-span-2">
                            <label for="title" class="block mb-2 text-sm roboto-medium text-gray-900">Title</label>
                            <input type="text" name="title" id="title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Add a title" required>
                        </div>
                        <div class="col-span-2">
                            <label for="description" class="block mb-2 text-sm roboto-medium text-gray-900">Album
                                Description</label>
                            <textarea id="description" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary"
                                placeholder="Write album description here"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end items-center">
                        <button type="submit"
                            class="text-white inline-flex items-center bg-primary hover:bg-primaryDark roboto-medium rounded-xl text-sm px-5 py-2.5 text-center">
                            Create Album
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Albums -->

    <script src="../../../node_modules/flowbite/dist/flowbite.min.js"></script>

    <script src="../../JS/detail.js"></script>
</body>

</html>
