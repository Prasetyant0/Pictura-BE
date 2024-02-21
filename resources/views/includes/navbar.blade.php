<nav class="bg-backcolor dark:bg-gray-900 fixed w-full z-20 top-0 start-0">
    <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="flex items-center space-x-3">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/img/logoPictura.png') }}" class="h-10" alt="Pictura Logos">
                <span class="self-center text-2xl roboto-medium whitespace-nowrap dark:text-white"
                    style="color: #0083C9;">Pictura</span>
            </a>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg bg-backcolor rtl:space-x-reverse md:flex-row md:mt-0 md:bg-backcolor dark:bg-gray-800 md:dark:bg-gray-900">
                    <li>
                        <a href="Pages/explore.html" class="block py-2 px-5 text-center me-2 text-gray-900 rounded-full bg-transparent
                    hover:bg-secondary hover:text-white
                    md:hover:text-white" aria-current="page">Explore</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex md:order-2 gap-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="text-white bg-primary hover:bg-primaryDark focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Log
                in</button>
            <button type="button" data-modal-target="signup-modal" data-modal-toggle="signup-modal"
                class="text-gray-800 bg-btnsec hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-full text-sm px-4 py-2 text-center">Sign
                up</button>
        </div>

    </div>
</nav>