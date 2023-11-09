<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/app" />
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F9F5F2] font-lexend">
    <!-- Navbar -->
    <div class="flex justify-between p-[30px]">
        <!-- Logo -->
        <div class="flex items-center justify-center">
            <a href="{{url('/')}}" class="hover:opacity-60 text-[20px]">Penilaian Kredit</a>
        </div>

        <!-- Menu -->
        <div class="flex justify-between items-center text-[20px] px-[20px]">
            <!-- Hi, user -->
            <a href="#" class="px-3 py-2 hover:opacity-60">Hi, User</a>

            <!-- Beranda -->
            <a href="{{url('/')}}" class="px-3 py-2 hover:opacity-60">Beranda</a>

            <!-- Kontak -->
            <a href="#" class="px-3 py-2 hover:opacity-60 scroll-to-tentang-kami">Tentang Kami</a>

            <!-- Logout -->
            <a href="#" class="px-3 py-2 hover:opacity-60">Keluar</a>
        </div>
    </div>
    @yield('content')
    <script src="{{asset('js/index.js')}}"></script>
</body>

</html>