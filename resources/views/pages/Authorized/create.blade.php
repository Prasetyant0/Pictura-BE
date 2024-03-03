@extends('layout.master')
@section('content')
    <main class="max-w-screen-2xl mx-auto px-2">
        <section class="mt-[80px] mb-3 border-b border-t">
            <div class="flex justify-between text-center pb-4 pt-4 px-4 items-center">
                <h1 class="roboto-medium text-black text-md text-[20px]">Create a Post</h1>
                <div class="roboto-medium text-black  text-small">
                    <form action="/upload-post" method="POST" enctype="multipart/form-data" id="upload-post-form">
                @csrf
                    <button type="submit"
                        class="block py-2 px-5 text-center rounded-full
                        bg-primary text-white">
                        Publish
                    </button>
                </div>
            </div>
        </section>
        <section class="max-w-screen-lg mx-auto">

                <div class="flex gap-4 mt-[30px]">
                    <div class="flex items-center justify-center w-1/2">
                        <label for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-full bg-btnsec rounded-xl cursor-pointer">
                            <div id="preview-container" class="hidden">
                                <img id="preview-image" class="rounded-xl max-h-[450px] object-contain" alt="Preview Image">
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
                            <input id="dropzone-file" name="file-photo" type="file" class="hidden"
                                onchange="previewImage(this)" />
                        </label>
                    </div>
                    <div class="w-full">
                        <div class="mb-3">
                            <label for="title"
                                class="block mb-2 text-sm roboto-medium text-gray-900 dark:text-white">Title</label>
                            <input type="text" id="title" name="photo_title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Add a title">
                        </div>
                        <div class="mb-3">
                            <label for="description"
                                class="block mb-2 text-sm roboto-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" rows="4" name="photo_description"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary"
                                placeholder="Add a detailed description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tagged-topics"
                                class="block mb-2 text-sm roboto-medium text-gray-900">Tagged Topics</label>
                            <div class="flex flex-wrap gap-1 pb-1" id="tag-container">
                            </div>
                            <input type="text" id="tagged-topics" name="tagged_topics"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                placeholder="Press enter or add a comma after each tag (max 5 tags)" onkeydown="handleTagInput(event)">
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="block mb-2 text-sm roboto-medium text-gray-900">Category
                                Post</label>
                            <select id="category_id"
                                class="bg-gray-50 border border-gray-300 text-colorText text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                name="category_id">
                                <option selected>Select category for your post</option>
                                @foreach ($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->category_title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="albums_id" class="block mb-2 text-sm roboto-medium text-gray-900">Albums</label>
                            <div class="flex gap-2">
                                <select id="albums_id"
                                    class="bg-gray-50 border border-gray-300 text-colorText text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5"
                                    name="albums_id">
                                    <option selected>Select albums or add new albums</option>
                                    @foreach ($albums as $a)
                                    <option value="{{ $a->id }}">{{ $a->album_name }}</option>
                                    @endforeach
                                </select>
                                <button type="button" class="bg-btnsec w-10 p-2 rounded-lg"
                                    data-modal-toggle="add-new-albums" data-modal-target="add-new-albums"><i
                                        class="bi bi-plus-lg"></i></button>
                            </div>
                        </div>
                        <input type="hidden" name="users_id" value="{{ Auth::id() }}">
                    </div>
            </form>
            </div>
            </div>
        </section>
    </main>
    @include('Pages.Authorized.Modal.albumsModal')
@endsection

@push('jsInternalAuth')
    <script src="{{ asset('assets/js/create.js') }}"></script>
@endpush
