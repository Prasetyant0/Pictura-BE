<!-- Nav -->
<nav class="bg-backcolor fixed w-full z-20 top-0 start-0 shadow-md">
    <div class="max-w-screen-2xl flex items-center justify-between mx-auto p-4">
        <div class="flex items-center space-x-3">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/img/logoPictura.png') }}" class="h-10" alt="Pictura Logos">
                <span class="self-center text-2xl roboto-medium whitespace-nowrap"
                    style="color: #0083C9;">Pictura</span>
            </a>
            <div class="items-center justify-between hidden w-full lg:flex md:w-auto" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg bg-backcolor rtl:space-x-reverse md:flex-row md:mt-0 md:bg-backcolor">
                    <li>
                        <a href="/explore" class="block py-2 px-5 text-center me-2 rounded-full
                        bg-secondary text-white">
                            Explore
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="lg:flex w-1/2 items-center hidden" id="navbar-sticky">
            <div class="w-full">
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="searchPost" name="searchTerm"
                        class="block w-full p-2.5 ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-btnsec"
                        placeholder="Search Mockups, Logos..." required>
                </div>
            </div>
        </div>
        <div class="flex md:order-2 gap-2 md:space-x-0 rtl:space-x-reverse">
            <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="text-white bg-primary hover:bg-primaryDark focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2 text-center">Log
                in</button>
            <button type="button" data-modal-target="signup-modal" data-modal-toggle="signup-modal"
                class="text-gray-800 bg-btnsec hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-full text-sm px-4 py-2 text-center">Sign
                up</button>
        </div>

    </div>
</nav>
<!-- End Nav -->

<!-- Bottom Nav -->
<div class="fixed bottom-0 left-0 z-50 w-full h-16 lg:hidden md:flex bg-backcolor border-t border-gray-200">
    <div class="grid h-full max-w-lg grid-cols-2 mx-auto font-medium">
        <a href="../index.html"
            class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
            <svg class="w-5 h-5 mb-2 text-gray-500  group-hover:text-primary" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
            </svg>
            <span class="text-sm text-gray-500  group-hover:text-primary">Home</span>
        </a>
        <a href="explore.html" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
            <svg class="w-5 h-5 mb-2 text-gray-500 group-hover:text-primary" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                    d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
            </svg>
            <span class="text-sm text-gray-500 group-hover:text-primary ">Explore</span>
        </a>
    </div>
</div>
<!-- Bottom Nav End -->
