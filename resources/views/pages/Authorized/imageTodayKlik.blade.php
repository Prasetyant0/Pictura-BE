@extends('layout.master')
@section('content')
    <main>
        <section id="imageSection" class="mt-[100px]">
            <div class=" max-w-screen-2xl mx-auto">
                <div class="px-4 flex md:justify-between justify-center text-center items-center">
                    <div class="md:flex items-start back-hidden hidden">
                        <a href="/today">
                            <div class="flex items-center start-3 top-24 z-30">
                                <svg class="w-8 h-8 text-gray-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M5 12h14M5 12l4-4m-4 4 4 4" />
                                </svg>
                                <span class="ml-2 w-full">Back</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <h1 class="roboto-medium text-black md:text-2xl text-[20px]">{{ $categoryName }}</h1>
                    </div>
                    <div class="hidden md:flex">
                    </div>
                </div>

            </div>
            <div class="flex justify-center items-center mx-auto max-w-screen-2xl mt-[20px] lg:px-4 px-3 mb-[20px]">
                <div class="columns-3 sm:columns-5 md:columns-6 space-y-4">
                    @forelse ($imageShow as $image)
                        <div>
                            <a href="/detailPost/{{ $image->uuid }}">
                                <img class="h-auto max-w-full rounded-lg"
                                    src="{{ asset('gallery/' . $image->file_location) }}" alt="{{ $image->photo_title }}">
                            </a>
                        </div>
                    @empty
                        {{-- <div class="flex justify-center items-center">
                        <p class="roboto-medium text-sm text-iconColor">No Image Found!</p>
                    </div> --}}
                    @endforelse
                </div>
            </div>
        </section>
    </main>
@endsection
