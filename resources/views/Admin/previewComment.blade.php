@extends('Admin.layout.master_admin')
@section('content-admin')
    <main>
        <section class="max-w-screen-2xl mx-auto" id="accPreview-content">
            <div class="px-4 mt-20 sm:ml-64">
                <div class="flex justify-center items-center flex-col space-y-3">
                    <div class="p-3 bg-backcolor rounded-xl shadow-md">
                        <div class="flex flex-col">
                            <div class="flex items-center">
                                <img class="w-[30px] h-[30px] me-2 rounded-full"
                                    src="{{ asset('assets/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg') }}"
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
                        <button type="button" data-modal-toggle="ban-option" data-modal-target="ban-option" class="block py-2.5 px-3 bg-red-800 rounded-xl hover:bg-red-900 text-white font-medium text-sm">Limit user from comment</button>
                    </div>
                </div>

            </div>
        </section>
    </main>
@include('Admin.modal.banDate')
    <!-- Ban Date Option -->
    {{-- <div id="limit-user" tabindex="-1" aria-hidden="true" data-modal-backdrop="static"
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
    </div> --}}
    <!-- End Ban Date Option -->
@endsection
