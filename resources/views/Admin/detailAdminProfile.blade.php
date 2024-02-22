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
        <section class="max-w-screen-2xl mx-auto" id="accReport-content">
            <div class="px-4 mt-20 sm:ml-64">
                <div class="flex justify-center items-center flex-col bg-backcolor p-2 rounded-xl">
                    <div class="rounded-full overflow-hidden">
                        <img src="../../../../dist/img/exploreAsset/portrait-happy-handsome-young-man-posing-isolated-background.jpg"
                            alt="Photo Profile" class="w-28 h-28 rounded-full object-cover object-top">
                    </div>
                    <div class="pt-2 flex flex-col justify-center items-center space-y-1">
                        <div>
                            <h1 class="roboto-medium text-xl">Janggar Prakoso</h1>
                        </div>
                        <div class="flex flex-row gap-1">
                            <img src="../../../../dist/img/logosvg.svg" alt="logos" class="opacity-50">
                            <p class="text-iconColor roboto-light text-sm">devtasen</p>
                        </div>
                        <div class="pt-2 w-[500px] text-center">
                            <p class="roboto-regular text-sm text-colorText">Suro diro joyo diningrat, lebur dening
                                pangastuti.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="../../../node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="../../JS/profile.js"></script>

</body>

</html>
