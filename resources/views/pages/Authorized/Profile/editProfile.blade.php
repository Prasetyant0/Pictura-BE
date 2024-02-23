@extends('layout.master')
@section('content')
@include('Pages.Authorized.Profile.componentEditProfile.aside')
    <main class="max-w-screen-2xl mx-auto mt-[74.5px]">
        @include('Pages.Authorized.Profile.componentEditProfile.edit-profile')
        @include('Pages.Authorized.Profile.componentEditProfile.account-setting')
        @include('Pages.Authorized.Profile.componentEditProfile.change-password')
    </main>

    @include('Pages.Authorized.Profile.componentEditProfile.deactivate')
@endsection

@push('jsInternalAuth')
    <script src="{{ asset('assets/js/profile-setting.js') }}"></script>
@endpush
