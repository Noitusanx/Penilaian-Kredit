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
    <div class="flex justify-between p-[30px]">
        <div class="flex items-center justify-center">
            <a href="{{url('/')}}" class="hover:opacity-60 text-[24px]">Penilaian Kredit</a>
        </div>
        <ul class="flex justify-between text-[20px] px-[20px] mt-3">
            <li>
                <a href=" #" class="px-3 py-2 hover:opacity-60">Hi, {{ auth()->user()->nama}}</a>
            </li>
            <li>
                <a href="{{url('/')}}" class="px-3 py-2 hover:opacity-60">Beranda</a>
            </li>
            <li>
                <a href="#" class="px-3 py-2 hover:opacity-60">Tentang Kami</a>
            </li>
            <li>
                <form action="/keluar" method="post">
                    @csrf
                    <button type="submit" class="px-3 hover:opacity-60">Keluar</button>
                </form>
            </li>
        </ul>
    </div>
    </div>
    @yield('content')
    <script src="{{asset('js/index.js')}}"></script>
</body>

</html>