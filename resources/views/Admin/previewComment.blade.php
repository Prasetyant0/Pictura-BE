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
        <section class="max-w-screen-2xl mx-auto" id="accPreview-content">
            <div class="px-4 mt-20 sm:ml-64">
                <div class="flex justify-center items-center flex-col space-y-3">
                    <div class="p-3 bg-backcolor rounded-xl shadow-md">
                        <div class="flex flex-col">
                            <div class="flex items-center">
                                <img class="w-[30px] h-[30px] me-2 rounded-full"
                                    src="../../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                    alt="">
                                <div class="flex flex-row gap-1 items-center">
                                    <p class="roboto-medium text-[13px]">Dolorem</p>
                                    <span class="roboto-light text-[13px]">|</span>
                                    <p class="roboto-light text-[13px] text-[#3636367c]">Jan
                                        20,
                                        2024 at 8:45 am</p>
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
                    <div>
                        <button type="button" data-modal-toggle="limit-user" data-modal-target="limit-user" class="block py-2.5 px-3 bg-red-800 rounded-xl hover:bg-red-900 text-white font-medium text-sm">Limit user from comment</button>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <!-- Ban Date Option -->
    <div id="limit-user" tabindex="-1" aria-hidden="true" data-modal-backdrop="static"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Ban time
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="limit-user">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <p class="text-gray-500 dark:text-gray-400 mb-4">Choose how long the ban will last:</p>
                    <form action="#" method="post">
                        <ul class="space-y-4 mb-4">
                            <li>
                                <input type="radio" id="time-1" name="banned" value="1" class="hidden peer" required />
                                <label for="time-1"
                                    class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                    <div class="block">
                                        <div class="w-full text-lg font-semibold">1 Day</div>
                                        <div class="w-full text-gray-500 dark:text-gray-400">Short Suspension</div>
                                    </div>
                                    <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="time-3" name="banned" value="3" class="hidden peer">
                                <label for="time-3"
                                    class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                    <div class="block">
                                        <div class="w-full text-lg font-semibold">3 Days</div>
                                        <div class="w-full text-gray-500 dark:text-gray-400">Medium Suspension</div>
                                    </div>
                                    <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="time-7" name="banned" value="7" class="hidden peer">
                                <label for="time-7"
                                    class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                    <div class="block">
                                        <div class="w-full text-lg font-semibold">1 Week</div>
                                        <div class="w-full text-gray-500 dark:text-gray-400">Long Suspension</div>
                                    </div>
                                    <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </label>
                            </li>
                        </ul>
                        <button type="submit"
                            class="text-white inline-flex w-full justify-center bg-primary hover:bg-primaryDark font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Confirm
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- End Ban Date Option -->

    <script src="../../../node_modules/flowbite/dist/flowbite.min.js"></script>

</body>

</html>
