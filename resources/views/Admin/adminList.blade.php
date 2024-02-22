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
                    <a href="commentReport.html"
                        class="flex items-center p-2 text-white rounded-lg hover:bg-[#0077b6] ">
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
                <div class="relative rounded-b-md">
                    <div
                        class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between py-4 px-1">
                        <div>
                            <button id="postReport-orderBtn" data-dropdown-toggle="orderBy-postReport"
                                class="inline-flex items-center text-colorText bg-white border border-gray-300 font-medium rounded-lg text-sm px-3 py-1.5"
                                type="button">
                                <svg class="w-3 h-3 text-colorText dark:text-gray-400 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                                </svg>
                                Last 30 days
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="orderBy-postReport"
                                class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                                <ul class="p-3 space-y-1 text-sm text-gray-700" aria-labelledby="dropdownRadioButton">
                                    <li>
                                        <div
                                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="filter-radio-example-1" type="radio" value="" name="filter-radio"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="filter-radio-example-1"
                                                class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                                day</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input checked="" id="filter-radio-example-2" type="radio" value=""
                                                name="filter-radio"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="filter-radio-example-2"
                                                class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                                7 days</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="filter-radio-example-3" type="radio" value="" name="filter-radio"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="filter-radio-example-3"
                                                class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                                30 days</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="filter-radio-example-4" type="radio" value="" name="filter-radio"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="filter-radio-example-4"
                                                class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                                month</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div
                                            class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                            <input id="filter-radio-example-5" type="radio" value="" name="filter-radio"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="filter-radio-example-5"
                                                class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last
                                                year</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <label for="post-report-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="post-report-search"
                                class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-white focus:ring-primary focus:border-primary"
                                placeholder="Search post report">
                        </div>
                    </div>
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-white uppercase bg-[#333333]">
                            <tr>
                                <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        NO
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Fullname
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Gender
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="w-4 p-4">
                                    1
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Ahmad Qasim
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    ahmdqsm@gmail.com
                                </td>
                                <td class="px-6 py-4 font-reguler text-gray-900 whitespace-nowrap">
                                    Laki-laki
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-row gap-2">
                                        <a href="detailAdminProfile.html"
                                            class="font-medium text-blue-600 hover:underline">Detail</a>
                                        <span>|</span>
                                        <a href="#" class="font-medium text-blue-600 hover:underline">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="w-4 p-4">
                                    2
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Eva Saputri
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    evasaput23@outlook.com
                                </td>
                                <td class="px-6 py-4 font-reguler text-gray-900 whitespace-nowrap">
                                    Perempuan
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-row gap-2">
                                        <a href="previewAcc.html"
                                            class="font-medium text-blue-600 hover:underline">Preview</a>
                                        <span>|</span>
                                        <button type="button" data-modal-target="ban-option"
                                            data-modal-toggle="ban-option"
                                            class="font-medium text-blue-600 hover:underline">Ban</button>
                                        <span>|</span>
                                        <a href="#" class="font-medium text-blue-600 hover:underline">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="w-4 p-4">
                                    3
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Janggar Prakoso
                                </th>
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    abdul209@ymail.com
                                </td>
                                <td class="px-6 py-4 font-reguler text-gray-900 whitespace-nowrap">
                                    Laki-laki
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-row gap-2">
                                        <a href="#" class="font-medium text-blue-600 hover:underline">Preview</a>
                                        <span>|</span>
                                        <a href="#" class="font-medium text-blue-600 hover:underline">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4"
                        aria-label="Table navigation">
                        <span
                            class="text-sm font-normal text-colorText mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing
                            <span class="font-semibold text-gray-900">1-10</span> of <span
                                class="font-semibold text-gray-900">1000</span></span>
                        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">4</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">5</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 ">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </main>


    <script src="../../../node_modules/flowbite/dist/flowbite.min.js"></script>

</body>

</html>
