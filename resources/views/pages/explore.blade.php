@extends('layout.master-noauth')
@section('content-noauth')
    <section id="mainSection" class="mt-[100px]">
        <div class="flex justify-center text-center">
            <h1 class="roboto-medium text-black md:text-2xl text-lg">Explore the best of Pictura</h1>
        </div>
        <!-- foto row -->
        <div class="flex justify-center items-center mx-auto max-w-screen-2xl mt-[20px] lg:px-5 px-3 mb-[20px]">
            <div class="columns-2 sm:columns-4 md:columns-5 lg:columns-6 space-y-2" id="exploreContent">
                @forelse ($postPhoto as $d)
                    <div class="break-inside-avoid-column" id="photosContainer">
                        <a href="/explore/detail/{{ $d->uuid }}">
                            <div class="relative rounded-lg overflow-hidden group">
                                <img class="rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300"
                                    loading="lazy" src="{{ asset('gallery/' . $d->file_location) }}"
                                    alt="{{ $d->photo_title }}">
                            </div>
                            {{-- <div class="mx-1">
                                <div class="card-judul-des mt-2">
                                    <h1 class="roboto-medium text-black text-sm">{{ $d->photo_title }}</h1>
                                    <div>
                                        <p class="roboto-regular text-[12px]">{{ Str::limit($d->photo_description, '25') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="card-profile">
                                    <div class="gap-1 flex flex-row">
                                        <div class="foto rounded-full overflow-hidden h-10 w-10">
                                            @if ($d->userPhotos->photo_profile == null)
                                                <img src="{{ asset('assets/img/defaultProfile.png') }}" alt="profileFoto"
                                                    class="object-cover w-full h-full">
                                            @else
                                                <img src="{{ asset('profile_photos/' . $d->userPhotos->photo_profile) }}"
                                                    alt="profileFoto" class="object-cover w-full h-full">
                                            @endif
                                        </div>
                                        <div class="username flex items-center">
                                            @if ($d->userPhotos->username == null)
                                                <h1 class="roboto-medium text-[13px]">{{ $d->userPhotos->fullName }}</h1>
                                            @else
                                                <h1 class="roboto-medium text-[13px]">{{ $d->userPhotos->username }}</h1>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </a>
                    </div>
                @empty
                    <div class="flex justify-center items-center text-center roboto-reguler text-sm text-iconColor">No Data
                        Found!</div>
                @endforelse
            </div>
        </div>
        <!-- end row -->

    </section>
@endsection
@push('scriptJsInternal')
    <script>
        $(document).ready(function() {
            $(window).on('scroll', function() {
                $('img[src]').each(function() {
                    if (isElementInViewport(this) && !$(this).hasClass('loaded')) {
                        var imgSrc = $(this).attr('src');
                        $(this).attr('src', imgSrc);
                        $(this).addClass('loaded');
                    }
                });
            });

            function isElementInViewport(el) {
                var rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }
        });

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

            // function updateView(results) {
            //     $('#exploreContent').empty();

            //     for (var i = 0; i < results.length; i++) {
            //         var post = results[i];
            //         console.log(post);
            //         var html = '<div class="break-inside-avoid-column" id="photosContainer">';
            //         html += '<a href="/explore/detail/' + post.uuid + '">';
            //         html += '<div class="relative rounded-lg overflow-hidden group">';
            //         html +=
            //             '<img class="rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300" loading="lazy" src="' +
            //             '{{ asset('gallery/') }}' + '/' + post.file_location + '" alt="' + post.photo_title + '">';
            //         html += '</div>';
            //         html += '<div class="mx-1">';
            //         html += '<div class="card-judul-des mt-2">';
            //         html += '<h1 class="roboto-medium text-black text-sm">' + post.photo_title + '</h1>';
            //         html += '<div>';
            //         html += '<p class="roboto-regular text-[12px]">' + (post.photo_description ? post
            //             .photo_description.substring(0, 25) : '') + '</p>';
            //         html += '</div>';
            //         html += '</div>';
            //         html += '<div class="card-profile">';
            //         html += '<div class="gap-1 flex flex-row">';
            //         html += '<div class="foto rounded-full overflow-hidden h-10 w-10">';
            //         html += '<img src="' + (post.userPhotos ? (post.userPhotos.photo_profile ?
            //                     '{{ asset('profile_photos/') }}' +
            //                     '/' + post.userPhotos.photo_profile :
            //                     '{{ asset('assets/img/defaultProfile.png') }}') :
            //                 '{{ asset('assets/img/defaultProfile.png') }}') +
            //             '" alt="profileFoto" class="object-cover w-full h-full">';
            //         html += '</div>';
            //         html += '<div class="username flex items-center">';
            //         html += '<h1 class="roboto-medium text-[13px]">' + (post.userPhotos ? (post.userPhotos
            //             .username ?
            //             post.userPhotos.username : post.userPhotos.fullName) : '') + '</h1>';
            //         html += '</div>';
            //         html += '</div>';
            //         html += '</div>';
            //         html += '</div>';
            //         html += '</a>';
            //         html += '</div>';

            //         $('#exploreContent').append(html);
            //     }
            // }

            function updateView(results) {
                $('#exploreContent').empty();

                for (var i = 0; i < results.length; i++) {
                    var post = results[i];
                    var html = '<div class="relative rounded-lg overflow-hidden group" id="imageShow">';
                    html += '<a href="/explore/detail/' + post.uuid + '">';
                    html +=
                        '<img class="h-auto max-w-full rounded-lg transition-transform transform-gpu group-hover:scale-110 duration-300" src="';
                    html += '{{ asset('gallery/') }}' + '/' + post.file_location + '" alt="' + post.photo_title +
                        '">';
                    html += '</a></div>';
                    $('#exploreContent').append(html);
                }
            }
        });
    </script>
@endpush
