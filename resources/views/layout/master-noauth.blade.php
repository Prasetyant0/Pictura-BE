<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/build.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Pictura | Explore</title>
</head>

{{-- @if (Auth::check())
    @include('includes.navbar')
@else
    @include('includes.navbarauth')
@endif --}}

<body class="scrollbar-hidden bg-backcolor">
    @include('includes.navbarauth')

    @yield('content-noauth')


    @include('Pages.modal.login')
    @include('Pages.modal.signup')



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    {{-- <script src="{{ asset('assets/js/index.js') }}"></script> --}}

    @stack('scriptJsInternal')
</body>

</html>
