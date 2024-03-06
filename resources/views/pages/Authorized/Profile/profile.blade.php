@extends('layout.master')
@section('content')
    <main class="mt-[100px] max-w-screen-2xl mx-auto">
        <section class="mx-2">
            <div class="flex justify-center items-center flex-col">
                <div class="rounded-full overflow-hidden">
                    @if ($profile->photo_profile)
                        <img src="{{ asset('profile_photos/' . $profile->photo_profile) }}" alt="Photo Profile"
                            class="w-28 h-28 rounded-full object-cover object-top">
                    @else
                        <img src="{{ asset('assets/img/defaultProfile.png') }}" alt="Photo Profile"
                            class="w-28 h-28 rounded-full object-cover object-top">
                    @endif
                </div>
                <div class="pt-2 flex flex-col justify-center items-center space-y-1">
                    <div>
                        <h1 class="roboto-medium text-xl">{{ $profile->fullName }}</h1>
                    </div>
                    <div class="flex flex-row gap-1">
                        <img src="{{ asset('assets/img/logosvg.svg') }}" alt="logos" class="opacity-50">
                        <p class="text-iconColor roboto-light text-sm">{{ $profile->username }}</p>
                    </div>
                    <div class="pt-2 w-[500px] text-center">
                        <p class="roboto-regular text-sm text-colorText">{{ $profile->bio }}</p>
                    </div>
                    <div class="flex flex-row justify-between items-center w-[200px] pt-5 text-colorText">
                        <div class="roboto-regular flex flex-col items-center text-center justify-center">
                            <button id="followersBtn" data-dropdown-toggle="followersDropDown"
                                data-dropdown-placement="left" type="button">
                                <span class="proportional-nums roboto-medium"
                                    id="followerCount">{{ $profile->followers->count() }}</span>
                                <p class="roboto-medium">
                                    Followers
                                </p>
                            </button>
                        </div>
                        <div class="roboto-regular flex flex-col items-center text-center justify-center">
                            <button id="followingBtn" data-dropdown-toggle="followingDropDown"
                                data-dropdown-placement="right" type="button">
                                <span class="proportional-nums roboto-medium"
                                    id="followingCount">{{ $profile->following->count() }}</span>
                                <p class="roboto-medium">
                                    Following
                                </p>
                            </button>
                        </div>
                    </div>
                    <div class="pt-5 flex flex-row gap-2">
                        @if ($profile->id != Auth::user()->id)
                            <div>
                                <button data-modal-toggle="report-account" data-modal-target="report-account"
                                    class="bg-btnsec block py-3 px-4 rounded-full roboto-medium text-center hover:bg-gray-300 text-sm text-colorText">Report</button>
                            </div>
                        @endif
                        @if ($profile->id == Auth::user()->id)
                            <a href="/profile-setting/{{ Auth::user()->id }}"
                                class="text-colorText bg-btnsec hover:bg-gray-300 roboto-medium rounded-full text-sm px-4 py-3 text-center">Edit
                                Profile</a>
                        @else
                            <button type="button" id="followButton" data-following-id="{{ $profile->id }}"
                                data-followed="{{ Auth::user()->following()->where('following_id', $profile->id)->first() }}"
                                class="text-colorText bg-btnsec hover:bg-gray-300 roboto-medium rounded-full text-sm px-4 py-3 text-center">
                                {{ Auth::user()->following()->where('following_id', $profile->id)->first()? 'Followed': 'Follow' }}
                            </button>
                        @endif
                    </div>
                </div>
                <!-- Navigation Profile -->
                @if ($profile->id == Auth::user()->id)
                    <div class="flex flex-row justify-between w-[300px] items-center text-center pt-5 roboto-medium text-colorText"
                        id="profileNav">
                        <div class="border-b-4 border-colorText"><button type="button"
                                onclick="showContent(this, 'created')" class="p-2">Created</button></div>
                        <div class=""><button type="button" onclick="showContent(this, 'favorite')"
                                class="p-2">Favorite</button></div>
                        <div class=""><button type="button" onclick="showContent(this, 'albums')"
                                class="p-2">Albums</button></div>
                    </div>
                @else
                    <div class="flex items-center justify-center w-[300px] pt-5 roboto-medium text-colorText"
                        id="profileNav">
                        <div class="border-b-4 border-colorText"><button type="button"
                                onclick="showContent(this, 'created')" class="p-2">Created</button></div>
                    </div>
                @endif
                @include('Pages.Authorized.Profile.content.postingan')
                @if ($profile->id == Auth::user()->id)
                    @include('Pages.Authorized.Profile.content.favorite')
                    @include('Pages.Authorized.Profile.content.album-content')
                @endif
                <!-- End Nav Profile -->
            </div>
        </section>
    </main>
    <div id="followersDropDown" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
        <ul class="h-48 py-2 overflow-y-auto text-gray-700 dark:text-gray-200" aria-labelledby="followersBtn">
            <li>
                @forelse ($followers as $fs)
                    <div class="px-3 space-y-2">
                        <a href="/profile/{{ $fs->id }}"
                            class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            @if ($fs->photo_profile == null)
                                <img class="w-6 h-6 me-2 rounded-full" src="{{ asset('assets/img/defaultProfile.png') }}"
                                    alt="Jese image">
                            @else
                                <img class="w-6 h-6 me-2 rounded-full object-cover object-top"
                                    src="{{ asset('profile_photos/' . $fs->photo_profile) }}" alt="Jese image">
                            @endif

                            @if ($fs->username == null)
                                {{ $fs->fullName }}
                            @else
                                {{ $fs->username }}
                            @endif
                        </a>
                        {{-- <button
                            class="block bg-btnsec hover:bg-gray-300 py-1.5 px-2 roboto-medium text-sm text-colorText rounded-lg"
                            type="button" data-following-id="{{ $fs->id }}"
                            data-followed="{{ Auth::user()->following()->where('following_id', $fs->id)->first() }}">Follow</button> --}}
                    </div>
                @empty
                    <div class="flex justify-center items-center text-center">
                        <p class="text-sm roboto-regular text-iconColor">No Follower Yet!</p>
                    </div>
                @endforelse
            </li>
        </ul>
    </div>

    <div id="followingDropDown" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
        <ul class="h-48 py-2 overflow-y-auto text-gray-700 dark:text-gray-200" aria-labelledby="followingBtn">
            <li>
                @forelse ($following as $fw)
                    <div class="px-3 space-y-2">
                        <a href="/profile/{{ $fw->id }}"
                            class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            @if ($fw->photo_profile == null)
                                <img class="w-6 h-6 me-2 rounded-full" src="{{ asset('assets/img/defaultProfile.png') }}"
                                    alt="Jese image">
                            @else
                                <img class="w-6 h-6 me-2 rounded-full object-cover object-top"
                                    src="{{ asset('profile_photos/' . $fw->photo_profile) }}" alt="Jese image">
                            @endif

                            @if ($fw->username == null)
                                {{ $fw->fullName }}
                            @else
                                {{ $fw->username }}
                            @endif
                        </a>
                        {{-- <button
                            class="block bg-btnsec hover:bg-gray-300 py-1.5 px-2 roboto-medium text-sm text-colorText rounded-lg">Follow</button> --}}
                    </div>
                @empty
                    <div class="flex justify-center items-center text-center">
                        <p class="text-sm roboto-regular text-iconColor">No Following Yet!</p>
                    </div>
                @endforelse
            </li>
        </ul>
    </div>

    <!-- Modal Report -->
    <div tabindex="-1" aria-hidden="true" id="report-account"
        class="hidden report-modal overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-xl shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-lg roboto-medium text-gray-900">
                        Enter the reason for your report
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-toggle="report-account">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" action="/report-account/post" method="POST">
                    @csrf
                    <input type="hidden" name="reported_user_id" value="{{ $profile->id }}">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="reason"
                                class="block mb-2 text-sm roboto-medium text-gray-900">Reason</label>
                            <textarea id="reason" rows="4" name="reason"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-xl border border-gray-300 focus:ring-primary focus:border-primary"
                                placeholder="Write the reason here"></textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-primary hover:bg-primaryDark roboto-medium rounded-xl text-sm px-5 py-2.5 text-center">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Report -->

@endsection

@push('jsInternalAuth')
    <script src="{{ asset('assets/js/profile.js') }}"></script>
    <script>
        $(document).ready(function() {
            checkFollowStatus();
        });

        function checkFollowStatus() {
            const followingId = $("#followButton").data("following-id");
            const followBtn = $("#followButton");

            $.ajax({
                type: "GET",
                url: `/checkFollow/${followingId}`,
                success: function(response) {
                    if (response.isFollowing) {
                        followBtn.text("Followed");
                        followBtn.removeClass('bg-btnsec hover:bg-gray-300');
                        followBtn.addClass('bg-gray-300');
                    } else if (response.isFollowing == false) {
                        followBtn.text("Follow");
                        followBtn.removeClass('bg-gray-300');
                        followBtn.addClass('bg-btnsec hover:bg-gray-300');
                    }
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }

        $("#followButton").click(function() {
            const followButton = $(this);
            const followingId = followButton.data("following-id");
            const urlFollow = `/toggleFollow/${followingId}`;

            $.ajax({
                type: "POST",
                url: urlFollow,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    $("#followerCount").text(response.followerCount)
                    if (response.following) {
                        followButton.text("Followed");
                        followButton.removeClass('bg-btnsec hover:bg-gray-300');
                        followButton.addClass('bg-gray-300');
                    } else if (response.following == false) {
                        followButton.text("Follow");
                        followButton.removeClass('bg-gray-300');
                        followButton.addClass('bg-btnsec hover:bg-gray-300');
                    }
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        });
    </script>
@endpush
