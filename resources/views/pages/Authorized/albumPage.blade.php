<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../dist/output.css">
    <link rel="stylesheet" href="../../../dist/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Album</title>
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
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                        out</a>
                </li>
            </ul>
        </div>
        <!-- End Modal Notif -->
    </nav>
    <!--  End Navbar -->

    <main class="max-w-screen-2xl mx-auto">
        <section class="mt-[80px]">
            <div class="flex justify-between text-center pt-2 px-2 items-center">
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
                <div class="flex justify-center items-center text-center">
                    <h1 class="roboto-medium text-black text-md text-sm text-center">Making Every Image Worth a
                        Thousand Words</h1>
                </div>
                <div></div>
            </div>
        </section>
        <section id="imageSection" class="mt-10">
            <div class="flex justify-center text-center">
                <h1 class="roboto-medium text-black md:text-2xl text-[20px]">Albums Title</h1>
            </div>
            <div class="flex justify-center items-center mx-auto max-w-screen-2xl mt-[20px] lg:px-4 px-3 mb-[20px]">
                <div class="columns-2 sm:columns-4 md:columns-6 space-y-4">
                    <div class="relative rounded-lg overflow-hidden group">
                        <a href="detailAuth.html">
                            <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                        </a>
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                    </div>
                </div>
            </div>
            <div id="scrollButtonAdd" class="fixed bottom-5 right-5 z-10">
                <a href="../makeAlbums.html"
                    class="py-2 px-3 block rounded-full text-backcolor bg-primary text-2xl hover:bg-primaryDark"><i
                        class="bi bi-plus-lg"></i></a>
            </div>
        </section>
    </main>

    <script src="../../../node_modules/flowbite/dist/flowbite.min.js"></script>

</body>

</html>
