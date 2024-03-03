@extends('layout.master')
@section('content')
    <main class="mt-[100px] max-w-screen-2xl mx-auto">
        <section class="mx-2">
            <div class="flex justify-center items-center flex-col">
                <div class="rounded-full overflow-hidden">
                    @if ($profile->photo_profile)
                        <img src="{{ asset('gallery/' . $profile->photo_profile) }}" alt="Photo Profile"
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
                            <span class="proportional-nums roboto-medium" id="followerCount">{{ $profile->followers->count() }}</span>
                            <p class="roboto-medium">
                                Followers
                            </p>
                        </div>
                        <div class="roboto-regular flex flex-col items-center text-center justify-center">
                            <span class="proportional-nums roboto-medium" id="followingCount">{{ $profile->following->count() }}</span>
                            <p class="roboto-medium">
                                Following
                            </p>
                        </div>
                    </div>
                    <div class="pt-5">
                        @if ($profile->id == Auth::user()->id)
                            <a href="/profile-setting/{{ Auth::user()->id }}"
                                class="text-colorText bg-btnsec hover:bg-gray-300 roboto-medium rounded-full text-sm px-4 py-3 text-center">Edit
                                Profile</a>
                        @else
                            <button type="submit" id="followButton" data-following-id="{{ $profile->id }}"
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
                    <div class="border-b-4 border-colorText"><button type="button" onclick="showContent(this, 'created')"
                            class="p-2">Created</button></div>
                    <div class=""><button type="button" onclick="showContent(this, 'favorite')"
                            class="p-2">Favorite</button></div>
                    <div class=""><button type="button" onclick="showContent(this, 'albums')"
                            class="p-2">Albums</button></div>
                </div>
                @else
                    <div class="flex items-center justify-center w-[300px] pt-5 roboto-medium text-colorText" id="profileNav">
                        <div class="border-b-4 border-colorText"><button type="button" onclick="showContent(this, 'created')"
                                class="p-2">Created</button></div>
                    </div>
                @endif
                @include('Pages.Authorized.Profile.content.postingan')
                @if($profile->id == Auth::user()->id)
                @include('Pages.Authorized.Profile.content.favorite')
                @include('Pages.Authorized.Profile.content.album-content')
                @endif
                <!-- End Nav Profile -->
            </div>
        </section>
    </main>
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
