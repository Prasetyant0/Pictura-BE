<nav class="bg-backcolor fixed w-full z-20 top-0 start-0">
    <div class="max-w-screen-2xl flex items-center justify-between mx-auto p-4">
        <div class="flex items-center space-x-3">
            <div>
                <a href="/home" class="flex items-center w-8">
                    <img src="{{ asset('assets/img/logoPictura.png') }}" class="h-10" alt="Pictura Logos">
                </a>
            </div>
            <div class="items-center justify-between hidden w-full lg:flex md:w-auto" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg bg-backcolor rtl:space-x-reverse md:flex-row md:mt-0 md:bg-backcolor">
                    <li>
                        <a href="/home"
                            class="block py-2 px-5 text-center me-2 text-gray-900 rounded-full bg-transparent
                        hover:bg-secondary hover:text-white {{ request()->is('home') ? 'active' : '' }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/today"
                            class="block py-2 px-5 text-center me-2 text-gray-900 rounded-full bg-transparent
                        hover:bg-secondary hover:text-white
                        {{ request()->is('today') ? 'active' : '' }}">Today</a>
                    </li>
                    <li>
                        <a href="/create"
                            class="block py-2 px-5 text-center me-2 text-gray-900 rounded-full bg-transparent
                        hover:bg-secondary hover:text-white {{ request()->is('create') ? 'active' : '' }}
                        ">Create</a>
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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
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
            <div><a href="/profile"><i class="bi bi-person-circle text-iconColor"></i></a></div>
            <div><a href="/logout"><i class="bi bi-box-arrow-right text-iconColor"></i></a></div>
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
