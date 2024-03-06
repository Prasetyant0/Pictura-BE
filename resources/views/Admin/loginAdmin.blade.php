<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/build.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Welcome Back Admin</title>
</head>
<body class="bg-[#09090B]">
<div class="container flex justify-center mt-36 max-w-screen-2xl mx-auto">
    <div class="w-[500px] h-[450px] bg-[#19191B] rounded-20 py-6 px-6">
        <div class="flex flex-col justify-center items-center">
            <div class="flex flex-col justify-center text-center">
                <h1 class="italic roboto-medium text-backcolor text-2xl">Pictura Admin</h1>
                <h1 class="roboto-medium text-backcolor text-2xl">Sign in</h1>
            </div>
            <div class="mt-10 w-full">
                <form action="/authenticate-check" method="post" novalidate>
                    @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm roboto-medium text-backcolor">Email
                        address</label>
                    <input type="email" id="email" name="email"
                        class="bg-[#252527] border border-[#414042] text-backcolor text-sm rounded-xl focus:ring-btnsec
                        focus:border-btnsec block w-full p-2.5" required />
                </div>
                <div class="mb-6">
                    <label for="password"
                        class="block mb-2 text-sm roboto-medium text-backcolor">Password</label>
                    <input type="password" id="password" name="password"
                        class="bg-[#252527] border border-[#414042] text-backcolor text-sm rounded-xl
                        focus:ring-btnsec focus:border-btnsec block w-full p-2.5" required />
                </div>
                <div class="flex justify-center items-center text-center mt-10">
                    <button type="submit"
                        class="block p-2.5 text-backcolor bg-[#E39000] text-center text-sm rounded-xl w-full
                        roboto-medium hover:bg-[#E16800]">Sign
                        in</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
</body>
</html>
