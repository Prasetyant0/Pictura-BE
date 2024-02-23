@extends('layout.master')
@section('content')
    <main class="max-w-screen-2xl mx-auto">
        <section class="mt-[80px]">
            <div class="flex justify-between text-center pt-2 px-2 items-center">
                <div class="md:flex items-start back-hidden hidden">
                    <a href="Profile/profile.html">
                        <div class="flex items-center start-3 top-24 z-30">
                            <svg class="w-8 h-8 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M5 12h14M5 12l4-4m-4 4 4 4" /> </svg>
                            <span class="ml-2 w-full">Back</span>
                        </div>
                    </a>
                </div>
                <div class="flex justify-center items-center text-center">
                    <h1 class="roboto-medium text-black text-md text-sm text-center">Making Every Image Worth a
                        Thousand Words</h1>
                </div>
                <div></div>
            </div>
        </section>
        <section id="imageSection" class="mt-10">
            <div class="flex justify-center text-center">
                <h1 class="roboto-medium text-black md:text-2xl text-[20px]">Albums Title</h1>
            </div>
            <div class="flex justify-center items-center mx-auto max-w-screen-2xl mt-[20px] lg:px-4 px-3 mb-[20px]">
                <div class="columns-2 sm:columns-4 md:columns-6 space-y-4">
                    <div class="relative rounded-lg overflow-hidden group">
                        <a href="detailAuth.html">
                            <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                                src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                        </a>
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                    </div>
                    <div class="relative rounded-lg overflow-hidden group">
                        <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                            src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                    </div>
                </div>
            </div>
            <div id="scrollButtonAdd" class="fixed bottom-5 right-5 z-10">
                <a href="../makeAlbums.html"
                    class="py-2 px-3 block rounded-full text-backcolor bg-primary text-2xl hover:bg-primaryDark"><i
                        class="bi bi-plus-lg"></i></a>
            </div>
        </section>
    </main>
@endsection
