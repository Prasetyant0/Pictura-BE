@extends('layout.master')
@section('content')
    {{-- @include('Pages.Authorized.ModalNotif.categorySelect') --}}

    {{-- @if ($showModal)
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modalData = @json(session('modalData'));

            const modalContent = `<!-- Modal New Login -->
                <div id="new-login" tabindex="-1" data-modal-backdrop="static" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <!-- Modal header -->
                            <div class="flex items-center justify-center p-4 md:p-5">
                                <div class="flex gap-1">
                                    <span class="w-2 h-2 bg-primary rounded-full"></span>
                                    <span class="w-2 h-2 bg-gray-300 rounded-full"></span>
                                </div>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5">
                                <div class="flex justify-center flex-col items-center space-y-2">
                                    <img src="../../../dist/img/exploreAsset/portrait-happy-handsome-young-man-posing-isolated-background.jpg"
                                        alt="Profile" class="rounded-full w-20 h-20 object-cover object-top overflow-hidden">
                                    <div>
                                        <p class="roboto-regular text-sm text-colorText">janggar23@gmail.com</p>
                                    </div>
                                </div>
                                <div class="flex justify-center flex-col items-center text-center pt-3 space-y-2 pb-3">
                                    <p class="roboto-medium text-2xl text-black">Welcome to Pictura janggar!</p>
                                    <p class="roboto-regular text-sm text-black">Your answers to the next few questions will help us
                                        find the right ideas for you</p>
                                </div>
                                <button type="button" data-modal-toggle="category-select" data-modal-target="category-select"
                                    data-modal-hide="new-login"
                                    class="text-white inline-flex w-full justify-center bg-primary hover:bg-primaryDark font-medium rounded-lg md:rounded-20 text-sm px-5 py-2.5 text-center">
                                    Next step
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Test End -->


    <!-- Modal Category Select -->
    <div id="category-select" tabindex="-1" data-modal-backdrop="static" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-center p-4 md:p-5 flex-col space-y-3">
                    <div class="flex gap-1 pb-2">
                        <span class="w-2 h-2 bg-gray-300 rounded-full"></span>
                        <span class="w-2 h-2 bg-primary rounded-full"></span>
                    </div>
                    <div class="flex flex-col justify-center items-center text-center">
                        <p class="roboto-medium text-xl text-black">Select some categories that you like</p>
                        <p class="roboto-regular text-sm text-black">This will customize your new home feed</p>
                    </div>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4 overflow-y-scroll h-[200px] scrollbar-hidden">
                    <div class="grid grid-cols-5 gap-2">
                        <figure
                            class="relative cursor-pointer lg:h-[100px] md:h-[50px] h-[50px] rounded-lg overflow-hidden">
                            <a href="#">
                                <img class="rounded-lg w-full h-full"
                                    src="../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                    alt="image description">
                            </a>
                            <div class="absolute inset-0 rounded-lg bg-gradient-to-t from-[#5D5D5D] to-transparent">
                            </div>
                            <figcaption class="absolute px-2 text-sm text-white bottom-2 w-full">
                                <div class="flex justify-start items-start text-center">
                                    <p class="roboto-medium text-sm">Soccer</p>
                                </div>
                            </figcaption>
                        </figure>
                        <figure
                            class="relative cursor-pointer lg:h-[100px] md:h-[50px] h-[50px] rounded-lg overflow-hidden">
                            <a href="#">
                                <img class="rounded-lg w-full h-full"
                                    src="../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                    alt="image description">
                            </a>
                            <div class="absolute inset-0 rounded-lg bg-gradient-to-t from-[#5D5D5D] to-transparent">
                            </div>
                            <figcaption class="absolute px-2 text-sm text-white bottom-2 w-full">
                                <div class="flex justify-start items-start text-center">
                                    <p class="roboto-medium text-sm">Soccer</p>
                                </div>
                            </figcaption>
                        </figure>
                        <figure
                            class="relative cursor-pointer lg:h-[100px] md:h-[50px] h-[50px] rounded-lg overflow-hidden">
                            <a href="#">
                                <img class="rounded-lg w-full h-full"
                                    src="../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                    alt="image description">
                            </a>
                            <div class="absolute inset-0 rounded-lg bg-gradient-to-t from-[#5D5D5D] to-transparent">
                            </div>
                            <figcaption class="absolute px-2 text-sm text-white bottom-2 w-full">
                                <div class="flex justify-start items-start text-center">
                                    <p class="roboto-medium text-sm">Soccer</p>
                                </div>
                            </figcaption>
                        </figure>
                        <figure
                            class="relative cursor-pointer lg:h-[100px] md:h-[50px] h-[50px] rounded-lg overflow-hidden">
                            <a href="#">
                                <img class="rounded-lg w-full h-full"
                                    src="../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                    alt="image description">
                            </a>
                            <div class="absolute inset-0 rounded-lg bg-gradient-to-t from-[#5D5D5D] to-transparent">
                            </div>
                            <figcaption class="absolute px-2 text-sm text-white bottom-2 w-full">
                                <div class="flex justify-start items-start text-center">
                                    <p class="roboto-medium text-sm">Soccer</p>
                                </div>
                            </figcaption>
                        </figure>
                        <figure
                            class="relative cursor-pointer lg:h-[100px] md:h-[50px] h-[50px] rounded-lg overflow-hidden">
                            <a href="#">
                                <img class="rounded-lg w-full h-full"
                                    src="../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                    alt="image description">
                            </a>
                            <div class="absolute inset-0 rounded-lg bg-gradient-to-t from-[#5D5D5D] to-transparent">
                            </div>
                            <figcaption class="absolute px-2 text-sm text-white bottom-2 w-full">
                                <div class="flex justify-start items-start text-center">
                                    <p class="roboto-medium text-sm">Soccer</p>
                                </div>
                            </figcaption>
                        </figure>
                        <figure
                            class="relative cursor-pointer lg:h-[100px] md:h-[50px] h-[50px] rounded-lg overflow-hidden">
                            <a href="#">
                                <img class="rounded-lg w-full h-full"
                                    src="../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                    alt="image description">
                            </a>
                            <div class="absolute inset-0 rounded-lg bg-gradient-to-t from-[#5D5D5D] to-transparent">
                            </div>
                            <figcaption class="absolute px-2 text-sm text-white bottom-2 w-full">
                                <div class="flex justify-start items-start text-center">
                                    <p class="roboto-medium text-sm">Soccer</p>
                                </div>
                            </figcaption>
                        </figure>
                        <figure
                            class="relative cursor-pointer lg:h-[100px] md:h-[50px] h-[50px] rounded-lg overflow-hidden">
                            <a href="#">
                                <img class="rounded-lg w-full h-full"
                                    src="../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                    alt="image description">
                            </a>
                            <div class="absolute inset-0 rounded-lg bg-gradient-to-t from-[#5D5D5D] to-transparent">
                            </div>
                            <figcaption class="absolute px-2 text-sm text-white bottom-2 w-full">
                                <div class="flex justify-start items-start text-center">
                                    <p class="roboto-medium text-sm">Soccer</p>
                                </div>
                            </figcaption>
                        </figure>
                        <figure
                            class="relative cursor-pointer lg:h-[100px] md:h-[50px] h-[50px] rounded-lg overflow-hidden">
                            <a href="#">
                                <img class="rounded-lg w-full h-full"
                                    src="../../../dist/img/exploreAsset/owl-with-big-eyes-gray-background-3d-rendering.jpg"
                                    alt="image description">
                            </a>
                            <div class="absolute inset-0 rounded-lg bg-gradient-to-t from-[#5D5D5D] to-transparent">
                            </div>
                            <figcaption class="absolute px-2 text-sm text-white bottom-2 w-full">
                                <div class="flex justify-start items-start text-center">
                                    <p class="roboto-medium text-sm">Soccer</p>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                    <button data-modal-hide="category-select" type="button"
                        class="text-white bg-primary hover:bg-primaryDark font-medium rounded-20 text-sm px-5 py-2.5 text-center w-full">
                        Continue</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End Catsel -->
`;

            Swal.fire({
                html: modalContent,
                showConfirmButton: false,
                allowOutsideClick: false
            });
            new Modal(document.getElementById('new-login'));
        });
    </script>
@endif --}}

    <main>
        <section id="imageSection" class="mt-[100px]">
            <div class="flex justify-center text-center">
                <h1 class="roboto-medium text-black md:text-2xl text-[20px]">Making Every Image Worth a Thousand Words.</h1>
            </div>
            <div class="flex justify-center items-center mx-auto max-w-screen-2xl mt-[20px] lg:px-4 px-3 mb-[20px]">
                <div class="columns-2 sm:columns-4 md:columns-6 space-y-4" id="homeContent">
                    @forelse ($posts as $d)
                        <div class="relative rounded-lg overflow-hidden group" id="imageShow">
                            <a href="/detailPost/{{ $d->uuid }}">
                                <img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                                    src="{{ asset('gallery/' . $d->file_location) }}" alt="{{ $d->photo_title }}">
                            </a>
                        </div>
                    @empty
                        <p>Nothing else.</p>
                    @endforelse
                </div>
            </div>
        </section>
    </main>
@endsection
@push('jsInternalAuth')
    <script>
        $(document).ready(function() {
            $('#searchPost').on('keyup', function(e) {
                performSearch();
            });

            function performSearch() {
                var searchTerm = $('#searchPost').val();

                $.ajax({
                    type: 'GET',
                    url: '/search',
                    data: {
                        searchTerm: searchTerm
                    },
                    success: function(data) {
                        updateView(data);
                    },
                    error: function(error) {
                        console.error('Error searching:', error);
                    }
                });
            }

            function updateView(results) {
                $('#homeContent').empty();

                for (var i = 0; i < results.length; i++) {
                    var post = results[i];
                    var html = '<div class="relative rounded-lg overflow-hidden group" id="imageShow">';
                    html += '<a href="/detailPost/' + post.id + '">';
                    html +=
                        '<img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300" src="';
                    html += '{{ asset('gallery/') }}' + '/' + post.file_location + '" alt="' + post.photo_title +
                        '">';
                    html += '</a></div>';
                    $('#homeContent').append(html);
                }
            }
        });
    </script>
@endpush
