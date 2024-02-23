@extends('layout.master')
@section('content')
    <main class="mt-[100px] max-w-screen-2xl mx-auto">
        <section class="mx-2">
            <div class="flex justify-center items-center flex-col">
                <div class="rounded-full overflow-hidden">
                    <img src="{{ asset('assets/img/exploreAsset/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-ma.jpg') }}"
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
                    <div class="pt-5">
                        <a href="/profile-setting"
                            class="text-colorText bg-btnsec hover:bg-gray-300 roboto-medium rounded-full text-sm px-4 py-3 text-center">Edit
                            Profile</a>
                    </div>
                </div>
                <!-- Navigation Profile -->
                <div
                    class="flex flex-row justify-between w-[300px] items-center text-center pt-5 roboto-medium text-colorText" id="profileNav">
                    <div class="border-b-4 border-colorText"><button type="button" onclick="showContent(this, 'created')" class="p-2">Created</button></div>
                    <div class=""><button type="button" onclick="showContent(this, 'favorite')" class="p-2">Favorite</button></div>
                    <div class=""><button type="button" onclick="showContent(this, 'albums')" class="p-2">Albums</button></div>
                </div>
                @include('Pages.Authorized.Profile.content.postingan')
                @include('Pages.Authorized.Profile.content.favorite')
                @include('Pages.Authorized.Profile.content.album-content')
                <!-- End Nav Profile -->
            </div>
        </section>
    </main>
@endsection

@push('jsInternalAuth')
    <script src="{{ asset('assets/js/profile.js') }}"></script>
@endpush
