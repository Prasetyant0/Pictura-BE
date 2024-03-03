@extends('layout.master')
@section('content')
    <main class="max-w-screen-2xl mx-auto px-2">
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
                <h1 class="roboto-medium text-black text-md text-[20px] text-center">Create New Album</h1>
                <div></div>
            </div>
        </section>
        <section class="max-w-screen-lg mx-auto">
            <form action="/save-news-album" method="POST" enctype="multipart/form-data" id="newAlbumForm">
                @csrf
                <div class="flex gap-4 mt-20">
                    <div class="flex items-center justify-center w-1/2">
                        <label for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-full bg-btnsec rounded-xl cursor-pointer">
                            <div id="preview-container" class="hidden">
                                <img id="preview-image" class="rounded-xl max-h-[450px] object-contain"
                                    alt="Preview Image">
                            </div>
                            <div id="original-content" class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span>
                                    or drag and
                                    drop</p>
                                <p class="text-sm roboto-reguler text-colorText flex justify-center text-center mx-3">We
                                    recommend using
                                    high quality .jpg files less than 20mb</p>
                            </div>
                            <input id="dropzone-file" name="albumWallpaperFile" type="file" class="hidden" onchange="previewImage(this)" />
                        </label>
                    </div>
                    <div class="w-full">
                        <div class="mb-6">
                            <label for="title"
                                class="block mb-2 text-sm roboto-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" id="title" name="albumTitle"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Add a title">
                        </div>
                        <div class="mb-6">
                            <label for="description"
                                class="block mb-2 text-sm roboto-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" rows="4" name="albumDescription"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary"
                                placeholder="Add a detailed description"></textarea>
                        </div>
                        <div class="roboto-medium text-black text-small flex justify-end">
                            <button type="submit" class="block py-2 px-5 text-center rounded-xl
                        bg-primary text-white">
                                Create
                            </button>
                        </div>
                    </div>
            </form>
            </div>
            </div>
        </section>
    </main>
@endsection

@push('jsInternalAuth')
    <script src="{{ asset('assets/js/create.js') }}"></script>
@endpush
