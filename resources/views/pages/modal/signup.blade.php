<div id="signup-modal" tabindex="-1" aria-hidden="true" data-modal-backdrop="static"
    class="modal hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center
        items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full scrollbar-hidden">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-20 shadow">
            <!-- Modal header -->
            <div class="px-4 pt-4 md:px-5 md:pt-5 rounded-t">
                <div class="flex flex-col justify-center items-center">
                    <div><img src="{{ asset('assets/img/logoPictura.png') }}" alt="" class="h-12 w-10 object-contain">
                    </div>
                    <h1 class="roboto-bold text-xl text-colorText">Get started with Pictura</h1>
                    <span>
                        <p class="text-sm roboto-regular text-slate-500">Making Every Image Worth a Thousand Words
                        </p>
                    </span>
                </div>
                <div class="flex justify-end items-center relative bottom-24">
                    <button type="button" id="close-signup"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="signup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

            </div>
            <!-- Modal body -->
            <div class="px-4 pb-4 md:px-5 md:pb-5">
                <form class="space-y-4" id="signup-form" action="/register" method="POST">
                    @csrf
                    <div>
                        <label for="username"
                            class="block mb-2 text-sm roboto-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" name="username" id="username"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm roboto-regular rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                            placeholder="Enter your username"  value="{{ old('username') }}">
                            <p
                                    class="mx-2 mt-1 text-sm text-red-600 dark:text-red-500" id="username-error"></p>
                    </div>
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm roboto-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm roboto-regular rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                            placeholder="Enter your email" value="{{ old('email') }}">
                            <p
                                    class="mx-2 mt-1 text-sm text-red-600 dark:text-red-500" id="email-error"></p>
                    </div>
                    <div>
                        <label for="birthdate"
                            class="block mb-2 text-sm roboto-medium text-gray-900 dark:text-white">Birthdate</label>
                        <input type="date" name="birthdate" id="birthdate"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm roboto-regular rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                            value="{{ old('birthdate') }}">
                            <p
                                    class="mx-2 mt-1 text-sm text-red-600 dark:text-red-500" id="birthdate-error"></p>
                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm roboto-medium text-gray-900 dark:text-white">Password</label>
                        <div class="flex relative">
                            <input type="password" name="passwordSignup" id="passwordSignup" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm roboto-regular rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                                value="{{ old('passwordSignup') }}">
                            <div class="absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer"
                                id="togglePasswordSignup">
                                <i class="bi bi-eye-slash"></i>
                            </div>
                        </div>
                        <p
                                    class="mx-2 mt-1 text-sm text-red-600 dark:text-red-500" id="passwordSignup-error"></p>
                    </div>
                    <div class="space-y-1 flex flex-col justify-center items-center">
                        <div class="w-full">
                            <button type="submit" id="signup-btn"
                                class="w-full text-white bg-primary hover:bg-primaryDark roboto-medium rounded-full text-[15px] px-5 py-2.5 text-center">Sign
                                up</button>
                        </div>
                </form>

                <div class="flex justify-center items-center w-full">
                    <span class="roboto-bold text-colorText text-[15px]">OR</span>
                </div>
                <div class="flex w-full">
                    <a href="login/google"
                        class="flex w-full text-black border bg-white hover:bg-backcolor roboto-medium rounded-full text-[15px] px-5 py-2.5 text-center">
                        <div class="relative right-2">
                            <img src="{{ asset('assets/img/search.png') }}" alt="" width="20">
                        </div>
                        <div class="ps-[80px]">
                            Continue with Google
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="px-4 pb-4 md:px-5 md:pb-5 flex flex-col justify-center items-center text-center gap-2">
            <div>
                <span class="roboto-regular text-colorText text-[12px]">By continuing, you agree to Pictura’s
                    <b>Terms of Service & Privacy Policy</b></span>
            </div>
            <div>
                <p class="roboto-regular text-colorText text-sm">Already have an account? <button
                        class="text-primary roboto-medium text-sm hover:underline" data-modal-hide="signup-modal"
                        data-modal-toggle="authentication-modal"">Login</button>
                </p>
            </div>
        </div>
    </div>
</div>

@push('scriptJsInternal')
    <script src="{{ asset('assets/js/auth.js') }}"></script>
@endpush
