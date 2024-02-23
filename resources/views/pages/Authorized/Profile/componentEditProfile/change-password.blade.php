<section id="change-password" class="hidden">
    <div class="flex flex-row">
        <div class="p-4 sm:ml-64 h-40 w-1/2">
            <div class="mb-6">
                <h1 class="roboto-medium text-2xl text-black pt-1">Change Password</h1>
            </div>
            <form action="#" method="post">
                <div class="mb-6">
                    <label for="old-password" class="block mb-2 text-sm roboto-regular text-iconColor">Old
                        Password</label>
                    <input type="password" id="old-password"
                        class="bg-gray-50 border border-gray-300 text-colorText text-sm rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                        required>
                </div>
                <div class="mb-6">
                    <label for="new-password" class="block mb-2 text-sm roboto-regular text-iconColor">New
                        Password</label>
                    <input type="password" id="new-password"
                        class="bg-gray-50 border border-gray-300 text-colorText text-sm rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                        required>
                </div>
                <div class="mb-6">
                    <label for="confirm-password" class="block mb-2 text-sm roboto-regular text-iconColor">Confirm New
                        Password</label>
                    <input type="password" id="confirm-password"
                        class="bg-gray-50 border border-gray-300 text-colorText text-sm rounded-xl focus:ring-primary focus:border-primary block w-full p-2.5"
                        required>
                </div>
                <div class="mb-6">
                    <h2 class="mb-2 text-lg roboto-medium text-colorText">Password requirements:
                    </h2>
                    <ul class="max-w-md space-y-1 text-gray-500 list-inside">
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-green-500 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            At least 10 characters
                        </li>
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-green-500 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            At least one lowercase character
                        </li>
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-green-500 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            At least one uppercase character
                        </li>
                        <li class="flex items-center">
                            <svg class="w-3.5 h-3.5 me-2 text-gray-500 dark:text-gray-400 flex-shrink-0"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            At least one special character, e.g., ! @ # ?
                        </li>
                    </ul>
                </div>
                <div class="mb-6 flex items-center justify-end">
                    <button type="submit"
                        class="roboto-medium text-sm text-backcolor block py-2 px-4 rounded-full bg-primary hover:bg-primaryDark">Save</button>
                </div>
            </form>
        </div>
        <div class="w-1/2"></div>
    </div>
</section>
