<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/build.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Pictura</title>
</head>
<body>
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

    <main class="max-w-screen-2xl mx-auto">

        <section class="mt-[180px]" id="hero">
            <div>
                <div class="flex flex-col items-center justify-center sm:text-center">
                    <div class="roboto-medium text-4xl sm:text-center text-herotext">Unleash Your Creativity with
                        Pictura
                    </div>
                    <div class="roboto-regular text-2xl text-primary">Capture Moments, Create Memories, Share Stories
                    </div>
                </div>
                <div class="swiper mySwiper max-w-screen-2xl">
                    <div class="w-full h-16 relative top-12 z-10 bg-backcolor curved-hidden"
                        style="border-bottom-left-radius: 100%; border-bottom-right-radius: 100%;"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-wrapper overflow-hidden">
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/CarouselImg/charming-woman-beige-coat-sunglasses-posing-isolated-background.jpg') }}"
                                alt="" loading="lazy"></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/CarouselImg/gray-sofa-brown-living-room-with-copy-space.jpg') }}" alt=""
                                loading="lazy"></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/CarouselImg/sexy-girl-sitting-retro-style-motorcycle-fastening-helmet-belt-before-ride.jpg') }}"
                                alt="" loading="lazy"></div>
                        <div class="swiper-slide"><img src="assets/img/CarouselImg/shiraito-waterfall-autumn-japan.jpg"
                                alt="" loading="lazy"></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/CarouselImg/stunned-handsome-unshaven-man-with-shocked-facial-expression-dressed-fashionable-shirt-points-upper-right-corner.jpg') }}"
                                alt="" loading="lazy"></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/CarouselImg/top-view-table-full-food.jpg') }}" alt=""
                                loading="lazy"></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/CarouselImg/white-offroader-jeep-parking.jpg') }}"
                                alt="" loading="lazy"></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/CarouselImg/shallow-stream-midst-alpine-trees-rolling-hills-mountain.jpg') }}"
                                alt="" loading="lazy"></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('assets/img/CarouselImg/shallow-stream-midst-alpine-trees-rolling-hills-mountain.jpg') }}"
                                alt="" loading="lazy"></div>
                    </div>
                    <div class="w-full h-14 relative bottom-10 z-20 bg-backcolor curved-hidden"
                        style="border-top-left-radius: 100%; border-top-right-radius: 100%;"></div>
                </div>
                <div class="bg-primary mt-[30px]">
                    <div class="py-2.5 flex justify-center">
                        <button type="button" id="downButton" class="roboto-regular text-white flex">Here’s how it
                            works<svg class="w-5 h-5 text-white dark:text-white mt-0.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="3" d="m19 9-7 7-7-7" />
                            </svg></button>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary" id="works">
            <div class="flex flex-row px-24 py-16 items-center justify-between">
                <div class="w-1/2">
                    <div class="w-[500px]">
                        <img src="{{ asset('assets/img/Section2/imgleftsec.svg') }}" alt="">
                    </div>
                </div>
                <div class="w-1/2 flex flex-col">
                    <div class="text-center pb-3">
                        <p class="roboto-medium text-5xl text-white">Search for an idea</p>
                    </div>
                    <div class="flex justify-center">
                        <div class="text-center w-[370px]">
                            <p class="roboto-medium text-white text-2xl mb-4">What do you want to try next? Think of
                                something you like “simple food recipes” and see what
                                you find.</p>
                            <div>
                                <button type="button"
                                    class="text-primary bg-white border border-gray-300 focus:outline-none hover:bg-gray-100
                        focus:ring-2 focus:ring-gray-200 roboto-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2">Explore</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="endsection">
            <div class="relative h-screen overflow-hidden">
                <img src="{{ asset('assets/img/Section3/backgroundimage.svg') }}" alt="BG IMAGE"
                    class="w-full h-full object-cover object-center absolute inset-0">
                <div class="absolute inset-0 bg-[#323232] opacity-80"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="items-center flex text-center w-[900px] flex-col">
                        <div>
                            <p class="roboto-medium text-7xl text-white">Explore Limitless Possibilities – Sign Up for
                                Free
                                at Pictura!</p>
                            <div class="mt-3">
                                <button type="button" data-modal-target="signup-modal" data-modal-toggle="signup-modal"
                                    class="text-[#323232] text-opacity-80 bg-secondary focus:outline-none hover:bg-secondaryDark hover:text-white
                        focus:ring-2 focus:ring-blue-300 roboto-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2">Sign
                                    up</button>
                            </div>
                        </div>
                        <div class="flex flex-wrap me-2 mt-32">
                            <button type="button"
                                class="arrow-button bg-secondary p-1 rounded-full inline-flex items-center animate-bounce">
                                <svg class="w-9 h-9 text-[#323232] dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 6v13m0-13 4 4m-4-4-4 4" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Login Modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="modal hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-20 shadow">
                <!-- Modal header -->
                <div class="px-4 pt-4 md:px-5 md:pt-5 rounded-t">
                    <div class="flex flex-col justify-center items-center">
                        <div><img src="assets/img/logoPictura.png" alt="" class="h-12 w-10 object-contain"></div>
                        <h1 class="roboto-bold text-xl text-colorText">Welcome to Pictura</h1>
                        <span class="text-sm roboto-regular text-slate-500">Doesn't have an account yet? <button
                                type="button" class="text-primary roboto-medium text-sm hover:underline" data-modal-hide="authentication-modal" data-modal-toggle="signup-modal">Sign
                                up</button></span>
                    </div>
                    <div class="flex justify-end items-center relative bottom-24">
                        <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                </div>
                <!-- Modal body -->
                <div class="px-4 pb-4 md:px-5 md:pb-5">
                    <form class="space-y-4" action="#">
                        <div>
                            <label for="username-email"
                                class="block mb-2 text-sm roboto-medium text-gray-900 dark:text-white">Username /
                                Email</label>
                            <input type="text" name="username-email" id="username-email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm roboto-regular rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Username or email" required>
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm roboto-medium text-gray-900 dark:text-white">Password</label>
                            <div class="flex relative">
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm roboto-regular rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                                    required>
                                <div class="absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer"
                                    id="togglePassword">
                                    <i class="bi bi-eye-slash"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <a href="#" class="text-sm roboto-regular text-primary hover:underline">Forgot your
                                password?</a>
                        </div>
                        <div class="space-y-1 flex flex-col justify-center items-center">
                            <div class="w-full">
                                <button type="submit"
                                    class="w-full text-white bg-primary hover:bg-primaryDark roboto-medium rounded-full text-[15px] px-5 py-2.5 text-center">Login</button>
                            </div>
                            <div class="flex justify-center items-center w-full">
                                <span class="roboto-bold text-colorText text-[15px]">OR</span>
                            </div>
                            <div class="flex w-full">
                                <a href="#"
                                    class="flex w-full text-black border bg-white hover:bg-backcolor roboto-medium rounded-full text-[15px] px-5 py-2.5 text-center">
                                    <div class="relative right-2">
                                        <img src="assets/img/search.png" alt="" width="20">
                                    </div>
                                    <div class="ps-[80px]">
                                        Continue with Google
                                    </div>
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="px-4 pb-4 pt-8 md:px-5 md:pb-4 flex justify-center items-center text-center">
                    <span class="roboto-regular text-colorText text-[12px]">By continuing, you agree to Pictura’s
                        <b>Terms of Service & <br>Privacy Policy</b></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Signup Modal -->
    <div id="signup-modal" tabindex="-1" aria-hidden="true" class="modal hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center
        items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-20 shadow">
                <!-- Modal header -->
                <div class="px-4 pt-4 md:px-5 md:pt-5 rounded-t">
                    <div class="flex flex-col justify-center items-center">
                        <div><img src="assets/img/logoPictura.png" alt="" class="h-12 w-10 object-contain"></div>
                        <h1 class="roboto-bold text-xl text-colorText">Get started with Pictura</h1>
                        <span>
                            <p class="text-sm roboto-regular text-slate-500">Making Every Image Worth a Thousand Words
                            </p>
                        </span>
                    </div>
                    <div class="flex justify-end items-center relative bottom-24">
                        <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="signup-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                </div>
                <!-- Modal body -->
                <div class="px-4 pb-4 md:px-5 md:pb-5">
                    <form class="space-y-4" action="#">
                        <div>
                            <label for="username"
                                class="block mb-2 text-sm roboto-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="username" id="username"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm roboto-regular rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Enter your username" required>
                        </div>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm roboto-medium text-gray-900 dark:text-white">Email</label>
                            <input type="text" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm roboto-regular rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Enter your email" required>
                        </div>
                        <div>
                            <label for="birthdate"
                                class="block mb-2 text-sm roboto-medium text-gray-900 dark:text-white">Birthdate</label>
                            <input type="date" name="birthdate" id="birthdate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm roboto-regular rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                                required>
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm roboto-medium text-gray-900 dark:text-white">Password</label>
                            <div class="flex relative">
                                <input type="password" name="passwordSignup" id="passwordSignup" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm roboto-regular rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                                    required>
                                <div class="absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer"
                                    id="togglePasswordSignup">
                                    <i class="bi bi-eye-slash"></i>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-1 flex flex-col justify-center items-center">
                            <div class="w-full">
                                <button type="submit"
                                    class="w-full text-white bg-primary hover:bg-primaryDark roboto-medium rounded-full text-[15px] px-5 py-2.5 text-center">Sign
                                    up</button>
                            </div>
                            <div class="flex justify-center items-center w-full">
                                <span class="roboto-bold text-colorText text-[15px]">OR</span>
                            </div>
                            <div class="flex w-full">
                                <a href="#"
                                    class="flex w-full text-black border bg-white hover:bg-backcolor roboto-medium rounded-full text-[15px] px-5 py-2.5 text-center">
                                    <div class="relative right-2">
                                        <img src="assets/img/search.png" alt="" width="20">
                                    </div>
                                    <div class="ps-[80px]">
                                        Continue with Google
                                    </div>
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="px-4 pb-4 md:px-5 md:pb-5 flex flex-col justify-center items-center text-center gap-2">
                    <div>
                        <span class="roboto-regular text-colorText text-[12px]">By continuing, you agree to Pictura’s
                            <b>Terms of Service & Privacy Policy</b></span>
                    </div>
                    <div>
                        <p class="roboto-regular text-colorText text-sm">Already have an account? <button
                                class="text-primary roboto-medium text-sm hover:underline"
                                data-modal-hide="signup-modal" data-modal-toggle="authentication-modal"">Login</button>
                                </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
     <script src="{{ asset('assets/js/index.js') }}"></script>
</body>
</html>
    