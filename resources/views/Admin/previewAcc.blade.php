@extends('Admin.layout.master_admin')
@section('content-admin')
    <main>
        <section class="max-w-screen-2xl mx-auto" id="accReport-content">
            <div class="px-4 mt-20 sm:ml-64">
                <div class="flex justify-center items-center flex-col bg-backcolor p-2 rounded-xl">
                    <div class="rounded-full overflow-hidden">
                        <img src="{{ asset('assets/img/exploreAsset/portrait-happy-handsome-young-man-posing-isolated-background.jpg') }}"
                            alt="Photo Profile" class="w-28 h-28 rounded-full object-cover object-top">
                    </div>
                    <div class="pt-2 flex flex-col justify-center items-center space-y-1">
                        <div>
                            <h1 class="roboto-medium text-xl">Janggar Prakoso</h1>
                        </div>
                        <div class="flex flex-row gap-1">
                            <img src="{{ asset('assets/img/logosvg.svg') }}" alt="logos" class="opacity-50">
                            <p class="text-iconColor roboto-light text-sm">devtasen</p>
                        </div>
                        <div class="pt-2 w-[500px] text-center">
                            <p class="roboto-regular text-sm text-colorText">Suro diro joyo diningrat, lebur dening
                                pangastuti.</p>
                        </div>
                        <div class="flex flex-row justify-between items-center w-[200px] pt-5 text-colorText">
                            <div class="roboto-regular flex flex-col items-center text-center justify-center">
                                <span class="proportional-nums roboto-medium">5k</span>
                                <p class="roboto-medium">
                                    Followers
                                </p>
                            </div>
                            <div class="roboto-regular flex flex-col items-center text-center justify-center">
                                <span class="proportional-nums roboto-medium">212</span>
                                <p class="roboto-medium">
                                    Following
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation Profile -->
                    <div class="flex flex-row justify-center w-[300px] items-center text-center pt-5 roboto-medium text-colorText"
                        id="profileNav">
                        <div class="border-b-4 border-colorText"><button type="button"
                                onclick="showContent(this, 'created')" class="p-2">Created</button></div>
                    </div>
                    <div class="imageRow py-4 contentProfile" id="created">
                        <div class="columns-2 sm:columns-4 md:columns-6 space-y-4">
                            <div class="relative overflow-hidden group rounded-xl">
                                <a href="../myDetail.html">
                                    <img class="h-auto max-w-full rounded-xl transition-transform transform-gpu group-hover:scale-110 duration-300"
                                        src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                                </a>
                            </div>
                            <div class="relative overflow-hidden group rounded-xl">
                                <img class="h-auto max-w-full rounded-xl transition-transform transform-gpu group-hover:scale-105 duration-300"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
                            </div>
                            <div class="relative overflow-hidden group rounded-xl">
                                <img class="h-auto max-w-full rounded-xl transition-transform transform-gpu group-hover:scale-105 duration-300"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
                            </div>
                            <div class="relative overflow-hidden group rounded-xl">
                                <img class="h-auto max-w-full rounded-xl transition-transform transform-gpu group-hover:scale-105 duration-300"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
                            </div>
                            <div class="relative overflow-hidden group rounded-xl">
                                <img class="h-auto max-w-full rounded-xl transition-transform transform-gpu group-hover:scale-105 duration-300"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
                            </div>
                            <div class="relative overflow-hidden group rounded-xl">
                                <img class="h-auto max-w-full rounded-xl transition-transform transform-gpu group-hover:scale-105 duration-300"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
                            </div>
                            <div class="relative overflow-hidden group rounded-xl">
                                <img class="h-auto max-w-full rounded-xl transition-transform transform-gpu group-hover:scale-105 duration-300"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
                            </div>
                            <div class="relative overflow-hidden group rounded-xl">
                                <img class="h-auto max-w-full rounded-xl transition-transform transform-gpu group-hover:scale-105 duration-300"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
                            </div>
                            <div class="relative overflow-hidden group rounded-xl">
                                <img class="h-auto max-w-full rounded-xl transition-transform transform-gpu group-hover:scale-105 duration-300"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
                            </div>
                            <div class="relative overflow-hidden group rounded-xl">
                                <img class="h-auto max-w-full rounded-xl transition-transform transform-gpu group-hover:scale-105 duration-300"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
                            </div>
                            <div class="relative overflow-hidden group rounded-xl">
                                <img class="h-auto max-w-full rounded-xl transition-transform transform-gpu group-hover:scale-105 duration-300"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
                            </div>
                            <div class="relative overflow-hidden group rounded-xl">
                                <img class="h-auto max-w-full rounded-xl transition-transform transform-gpu group-hover:scale-105 duration-300"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- End Nav Profile -->
                </div>
            </div>
        </section>
    </main>
@endsection
@push('jsInternalAdmin')
    <script src="{{ asset('assets/js/profile.js') }}"></script>
@endpush
