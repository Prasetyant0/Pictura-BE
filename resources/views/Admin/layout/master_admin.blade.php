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
    <title>Dashboard | Pictura Admin</title>
</head>

<body class="bg-[#ececec] scrollbar-hidden">
    @include('Admin.includes.sidebar_admin')
    @yield('content-admin')

    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    @stack('jsInternalAdmin')
    @stack('scriptjsInternalAdmin')
</body>
</html>
