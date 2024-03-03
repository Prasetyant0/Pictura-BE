@extends('layout.master')
@section('content')
    <main class="max-w-screen-2xl mx-auto">
        <section class="mt-[80px]">
            <div class="flex justify-between text-center pt-2 px-2 items-center">
                <div class="md:flex items-start back-hidden hidden">
                    <a href="/profile/{{ Auth::user()->id }}">
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
                    <h1 class="roboto-medium text-black text-md text-sm text-center">{{ $albumPhoto->album_description }}</h1>
                </div>
                <div></div>
            </div>
        </section>
        <section id="imageSection" class="mt-10">
            <div class="flex justify-center text-center">
                <h1 class="roboto-medium text-black md:text-2xl text-[20px]">{{ $albumPhoto->album_name }}</h1>
            </div>
            <div class="flex justify-center items-center mx-auto max-w-screen-2xl mt-[20px] lg:px-4 px-3 mb-[20px]">
                <div class="columns-2 sm:columns-4 md:columns-6 space-y-4">
                    @forelse ($albumPhoto->photos as $photo)
                    <div class="relative rounded-lg overflow-hidden group">
                        <a href="detailAuth.html">
                            <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                                src="{{ asset('gallery/'.$photo->file_location) }}" alt="{{ $photo->photo_title }}">
                        </a>
                    </div>
                    @empty

                    @endforelse

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
