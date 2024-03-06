<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/build.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/logoPictura.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Welcome To Pictura</title>
</head>
<body class="scrollbar-hidden bg-backcolor">
    @include('includes.navbarNoAuth')

    @yield('content-noauth')


    @include('Pages.modal.login')
    @include('Pages.modal.signup')


    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    @stack('scriptJsInternal')
    @stack('jsInternal')
    <script>
        document.getElementById('searchPost').addEventListener('click', function() {
            if (window.location.pathname !== '/explore') {
                window.location.href = '/explore';
            }
        });
    </script>
</body>

</html>
