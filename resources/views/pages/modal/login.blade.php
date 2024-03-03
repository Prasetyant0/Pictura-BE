<div id="authentication-modal" tabindex="-1" aria-hidden="true" data-modal-backdrop="static"
        class="modal hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-20 shadow">
                <!-- Modal header -->
                <div class="px-4 pt-4 md:px-5 md:pt-5 rounded-t">
                    <div class="flex flex-col justify-center items-center">
                        <div><img src="{{ asset('assets/img/logoPictura.png') }}" alt="" class="h-12 w-10 object-contain">
                        </div>
                        <h1 class="roboto-bold text-xl text-colorText">Welcome to Pictura</h1>
                        <span class="text-sm roboto-regular text-slate-500">Doesn't have an account yet? <button
                                type="button" class="text-primary roboto-medium text-sm hover:underline"
                                data-modal-hide="authentication-modal" data-modal-toggle="signup-modal">Sign
                                up</button></span>
                    </div>
                    <div class="flex justify-end items-center relative bottom-24">
                        <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                </div>
                <!-- Modal body -->
                <div class="px-4 pb-4 md:px-5 md:pb-5">
                    <form class="space-y-4" action="/authenticate" method="POST" id="login-form">
                        @csrf
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
                                <a href="login/google"
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
