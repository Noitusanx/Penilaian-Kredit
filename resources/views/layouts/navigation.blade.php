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
        <ul class="flex justify-between items-center text-[20px] px-[20px]">
            @if(auth()->check())

            @if(auth()->user()->is_admin)
            <div class="relative inline-block text-left pr-3 pb-4">
                <div>
                    <button type="button"
                        class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-[16px] font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                        id="menu-button" aria-expanded="true" aria-haspopup="true" onclick="toggleDropdown()">
                        <a class="nav-user group-hover:bg-gray-200" href="#" id="navbarDropdown" role="button"
                            aria-expanded="false">
                            Hi, {{ auth()->user()->nama}}
                        </a>

                        <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div id="dropdown"
                    class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="/admin/datanasabah"
                            id="nav-dashboard">Data Nasabah</a></li>
                    </div>
                </div>
            </div>
            @else
            <li class="h-[50px]">
                <a href=" #" class="px-3 py-2 hover:opacity-60">Hi, {{ auth()->user()->nama}}</a>
            </li>
            @endif

            <li class="h-[50px]">
                <a href="{{url('/')}}" class="px-3 py-2 hover:opacity-60">Beranda</a>
            </li>
            <li class="h-[50px]">
                <a href="#" class="px-3 py-2 hover:opacity-60">Tentang Kami</a>
            </li>
            <li class="h-[50px] flex items-center">
                <form action="/keluar" method="post">
                    @csrf
                    <button type="submit" class="px-3 py-2 hover:opacity-60">Keluar</button>
                </form>
            </li>
            @endif
        </ul>
    </div>

    @yield('content')
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>