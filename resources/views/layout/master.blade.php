<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/build.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>Pictura</title>
</head>

{{-- @if (Auth::check())
    @include('includes.navbar')
@else
    @include('includes.navbarauth')
@endif --}}

<body class="scrollbar-hidden bg-backcolor">
    @include('includes.navbar')
    @yield('content')




    {{-- <script src="{{ asset('assets/js/flowbite.min.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    @stack('jsInternalAuth')
    @stack('jsCssExternal')
    <script>
        document.getElementById('searchPost').addEventListener('click', function() {
            if (window.location.pathname !== '/home' && window.location.pathname !== '/today') {
                window.location.href = '/home';
            }
        });
    </script>
</body>

</html>
