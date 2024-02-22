@extends('layout.master-noauth')
@section('content-noauth')
    <section id="mainSection" class="mt-[100px]">
        <div class="flex justify-center text-center">
            <h1 class="roboto-medium text-black md:text-3xl text-[24px]">Explore the best of Pictura</h1>
        </div>
        <!-- foto row -->
        <div class="flex justify-center items-center mx-auto max-w-screen-2xl mt-[20px] lg:px-5 px-3 mb-[20px]">
            <div class="columns-2 sm:columns-4 md:columns-5 lg:columns-6 space-y-4">
                <div class="break-inside-avoid-column">
                    <a href="detailNoAuth.html">
                    <img class="rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                    <div class="mx-1">
                    <div class="card-judul-des mt-2">
                        <h1 class="roboto-medium text-black text-[15px]">Lorem Ipsum</h1>
                        <div>
                            <p class="roboto-regular text-[12px]">Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Esse, dolorem</p>
                        </div>
                    </div>
                    <div class="card-profile mt-2">
                        <div class="gap-2 flex flex-row">
                            <div class="foto rounded-full overflow-hidden h-10 w-10">
                                <img src="{{ asset('assets/img/exploreAsset/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-ma.jpg') }}"
                                    alt="profileFoto" class="object-cover w-full h-full"></div>
                            <div class="username flex items-center">
                                <h1 class="roboto-medium text-[13px]">Dolorem Ipsum</h1>
                            </div>
                        </div>
                    </div>
                    </div>
                    </a>
                </div>
                <div class="break-inside-avoid-column">
                    <img class="rounded-lg" src="{{ asset('assets/img/exploreAsset/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-ma.jpg') }}" alt="">
                    <div class="mx-1">
                        <div class="card-judul-des mt-2">
                        <h1 class="roboto-medium text-black text-[15px]">Lorem Ipsum</h1>
                        <div>
                            <p class="roboto-regular text-[12px]">Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Esse, dolorem</p>
                        </div>
                    </div>
                    <div class="card-profile mt-2">
                        <div class="gap-2 flex flex-row">
                            <div class="foto rounded-full overflow-hidden h-10 w-10">
                                <img src="{{ asset('assets/img/exploreAsset/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-ma.jpg') }}"
                                    alt="profileFoto" class="object-cover w-full h-full"></div>
                            <div class="username flex items-center">
                                <h1 class="roboto-medium text-[13px]">Dolorem Ipsum</h1>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="break-inside-avoid-column">
                    <img class="rounded-lg"
                        src="https://images.unsplash.com/photo-1707593655398-a9eb0f94ffe9?q=80&w=1885&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                    <div class="mx-1">
                        <div class="card-judul-des mt-2">
                        <h1 class="roboto-medium text-black text-[15px]">Lorem Ipsum</h1>
                        <div>
                            <p class="roboto-regular text-[12px]">Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Esse, dolorem</p>
                        </div>
                    </div>
                    <div class="card-profile mt-2">
                        <div class="gap-2 flex flex-row">
                            <div class="foto rounded-full overflow-hidden h-10 w-10">
                                <img src="{{ asset('assets/img/exploreAsset/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-ma.jpg') }}"
                                    alt="profileFoto" class="object-cover w-full h-full"></div>
                            <div class="username flex items-center">
                                <h1 class="roboto-medium text-[13px]">Dolorem Ipsum</h1>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="break-inside-avoid-column">
                    <img class="rounded-lg"
                        src="https://images.unsplash.com/photo-1707597941447-4f65515e628e?q=80&w=1858&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                    <div class="mx-1">
                        <div class="card-judul-des mt-2">
                        <h1 class="roboto-medium text-black text-[15px]">Lorem Ipsum</h1>
                        <div>
                            <p class="roboto-regular text-[12px]">Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Esse, dolorem</p>
                        </div>
                    </div>
                    <div class="card-profile mt-2">
                        <div class="gap-2 flex flex-row">
                            <div class="foto rounded-full overflow-hidden h-10 w-10">
                                <img src="{{ asset('assets/img/exploreAsset/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-ma.jpg') }}"
                                    alt="profileFoto" class="object-cover w-full h-full"></div>
                            <div class="username flex items-center">
                                <h1 class="roboto-medium text-[13px]">Dolorem Ipsum</h1>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="break-inside-avoid-column">
                    <img class="rounded-lg"
                        src="https://images.unsplash.com/photo-1703241183161-53fca0a4a3f0?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                    <div class="mx-1">
                        <div class="card-judul-des mt-2">
                        <h1 class="roboto-medium text-black text-[15px]">Lorem Ipsum</h1>
                        <div>
                            <p class="roboto-regular text-[12px]">Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Esse, dolorem</p>
                        </div>
                    </div>
                    <div class="card-profile mt-2">
                        <div class="gap-2 flex flex-row">
                            <div class="foto rounded-full overflow-hidden h-10 w-10">
                                <img src="{{ asset('assets/img/exploreAsset/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-ma.jpg') }}"
                                    alt="profileFoto" class="object-cover w-full h-full"></div>
                            <div class="username flex items-center">
                                <h1 class="roboto-medium text-[13px]">Dolorem Ipsum</h1>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="break-inside-avoid-column">
                    <img class="rounded-lg"
                        src="https://images.unsplash.com/photo-1516826049371-1e7856387270?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                    <div class="mx-1">
                        <div class="card-judul-des mt-2">
                        <h1 class="roboto-medium text-black text-[15px]">Lorem Ipsum</h1>
                        <div>
                            <p class="roboto-regular text-[12px]">Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Esse, dolorem</p>
                        </div>
                    </div>
                    <div class="card-profile mt-2">
                        <div class="gap-2 flex flex-row">
                            <div class="foto rounded-full overflow-hidden h-10 w-10">
                                <img src="{{ asset('assets/img/exploreAsset/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-ma.jpg') }}"
                                    alt="profileFoto" class="object-cover w-full h-full"></div>
                            <div class="username flex items-center">
                                <h1 class="roboto-medium text-[13px]">Dolorem Ipsum</h1>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="break-inside-avoid-column">
                    <img class="rounded-lg"
                        src="https://images.unsplash.com/photo-1577230556163-c1722f6ee71f?q=80&w=1956&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                    <div class="mx-1">
                        <div class="card-judul-des mt-2">
                        <h1 class="roboto-medium text-black text-[15px]">Lorem Ipsum</h1>
                        <div>
                            <p class="roboto-regular text-[12px]">Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Esse, dolorem</p>
                        </div>
                    </div>
                    <div class="card-profile mt-2">
                        <div class="gap-2 flex flex-row">
                            <div class="foto rounded-full overflow-hidden h-10 w-10">
                                <img src="{{ asset('assets/img/exploreAsset/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-ma.jpg') }}"
                                    alt="profileFoto" class="object-cover w-full h-full"></div>
                            <div class="username flex items-center">
                                <h1 class="roboto-medium text-[13px]">Dolorem Ipsum</h1>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="break-inside-avoid-column">
                    <img class="rounded-lg"
                        src="https://images.unsplash.com/photo-1692893906137-9a93c125825c?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                    <div class="mx-1">
                        <div class="card-judul-des mt-2">
                        <h1 class="roboto-medium text-black text-[15px]">Lorem Ipsum</h1>
                        <div>
                            <p class="roboto-regular text-[12px]">Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Esse, dolorem</p>
                        </div>
                    </div>
                    <div class="card-profile mt-2">
                        <div class="gap-2 flex flex-row">
                            <div class="foto rounded-full overflow-hidden h-10 w-10">
                                <img src="{{ asset('assets/img/exploreAsset/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-ma.jpg') }}"
                                    alt="profileFoto" class="object-cover w-full h-full"></div>
                            <div class="username flex items-center">
                                <h1 class="roboto-medium text-[13px]">Dolorem Ipsum</h1>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="break-inside-avoid-column">
                    <img class="rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                    <div class="mx-1">
                        <div class="card-judul-des mt-2">
                        <h1 class="roboto-medium text-black text-[15px]">Lorem Ipsum</h1>
                        <div>
                            <p class="roboto-regular text-[12px]">Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Esse, dolorem</p>
                        </div>
                    </div>
                    <div class="card-profile mt-2">
                        <div class="gap-2 flex flex-row">
                            <div class="foto rounded-full overflow-hidden h-10 w-10">
                                <img src="{{ asset('assets/img/exploreAsset/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-ma.jpg') }}"
                                    alt="profileFoto" class="object-cover w-full h-full"></div>
                            <div class="username flex items-center">
                                <h1 class="roboto-medium text-[13px]">Dolorem Ipsum</h1>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="break-inside-avoid-column">
                    <img class="rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
                    <div class="mx-1">
                        <div class="card-judul-des mt-2">
                        <h1 class="roboto-medium text-black text-[15px]">Lorem Ipsum</h1>
                        <div>
                            <p class="roboto-regular text-[12px]">Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Esse, dolorem</p>
                        </div>
                    </div>
                    <div class="card-profile mt-2">
                        <div class="gap-2 flex flex-row">
                            <div class="foto rounded-full overflow-hidden h-10 w-10">
                                <img src="{{ asset('assets/img/exploreAsset/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-ma.jpg') }}"
                                    alt="profileFoto" class="object-cover w-full h-full"></div>
                            <div class="username flex items-center">
                                <h1 class="roboto-medium text-[13px]">Dolorem Ipsum</h1>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- end row -->

    </section>
@endsection
