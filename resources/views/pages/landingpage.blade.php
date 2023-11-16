<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Penilaian Kredit</title>
</head>

<body>
    <div class="font-lexend text-[16px]">
        <div class="relative">
            <img class="w-full max-h-[50rem] object-cover" src="{{asset('images/batik.jpg')}}" alt="Batik">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-4/5 h-4/5 bg-white p-8 rounded-lg bg-opacity-90 flex flex-col">
                    <nav class="flex justify-between mb-4 text-[20px]">
                        <div>
                            <a href="{{url('/')}}" class="hover:opacity-60">Penilaian Kredit</a>
                        </div>
                        <div>
                            <ul class="flex gap-10 mr-5">
                                @auth
                                <li>
                                    <a href="" class="hover:opacity-60">Hi, {{ auth()->user()->nama}}</a>
                                </li>
                                <li>
                                    <a href="#tentangkami" class="hover:opacity-60">Tentang Kami</a>
                                </li>
                                <li>
                                    <form action="/keluar" method="post">
                                        @csrf
                                        <button type="submit" class="hover:opacity-60">Keluar</button>
                                    </form>
                                </li>
                                @else
                                <li>
                                    <a href="{{url('/daftar')}}" class="hover:opacity-60">Daftar</a>
                                </li>
                                <li>
                                    <a href=" {{url('/masuk')}}" class="hover:opacity-60">Masuk</a>
                                </li>
                                @endauth
                            </ul>
                        </div>
                    </nav>
                    <header class="flex items-center flex-1" id="beranda">
                        <div class="w-3/4">
                            <h1 class="font-medium text-[5rem] ">PENILAIAN KREDIT</h1>
                            <p class="font-light">Sistem penilaian kredit merupakan sistem yang dirancang untuk
                                mengevaluasi dan memberikan penilaian terhadap pengguna sehingga pengguna dapat menilai
                                kelayakannya dalam mendapatkan pinjaman atau kredit.</p>
                            @auth
                            <button
                                class="bg-[#5E7C60] py-4 px-8 text-white rounded-lg mt-8 bg-opacity-90 hover:opacity-80 font-medium">
                                <a href="{{url('/pengajuan')}}">Pengajuan</a>
                            </button>
                            @else
                            <button
                                class="bg-[#5E7C60] py-4 px-8 text-white rounded-lg mt-8 bg-opacity-90 hover:opacity-80 font-medium">
                                <a href="#tentangkami">Tentang Kami</a>
                            </button>
                            @endauth
                        </div>
                    </header>
                </div>
            </div>
        </div>
        <article id="tentangkami">
            <div class="text-center mb-20">
                <h1 class="font-medium text-[3rem] border-b-2 border-black pb-2 my-6">Tentang Kami</h1>
                <p class="max-w-[1000px] mx-auto">Kami merancang sistem penilaian kredit dengan tujuan agar pengguna
                    dapat menilai kelayakannya dalam mendapatkan peminjaman atau kredit pada suatu lembaga keuangan
                    seperti bank atau lembaga pemberi pinjaman lainnya.
                </p>
            </div>
            <div class="flex justify-center gap-8 my-8 text-center mb-16">
                <div class="w-1/4 border-x-2 border-black px-4">
                    <img class="w-[100px] mx-auto mb-4" src="{{asset('images/bank.svg')}}" alt="Bank">
                    <p>Sistem membantu pengguna untuk menilai kelayakan dalam melakukan peminjaman di bank.</p>
                </div>

                <div class="w-1/4">
                    <img class=" w-[100px] mx-auto mb-4" src="{{asset('images/bankcard.svg')}}" alt="Kartu Kredit">
                    <p>Sistem membantu pengguna untuk mendapatkan pinjaman atau kartu kredit.</p>
                </div>
                <div class="w-1/4 border-x-2 px-4 border-black">
                    <img class="w-[100px] mx-auto mb-4" src="{{asset('images/money.svg')}}" alt="Uang">
                    <p>Sistem membantu pengguna menghemat biaya untuk pengambilan keputusan kelayakan peminjaman.
                    </p>
                </div>
            </div>
        </article>
        <footer class=" bg-[#5E7C60] bg-opacity-90 text-white pt-8 rounded-t-3xl">
            <div class="flex justify-around pb-16">
                <a href="{{url('/')}}" class="text-[2rem] font-medium hover:opacity-60">Penilaian Kredit</a>
                <ul class="flex gap-12 self-center">
                    <li>
                        <a href="{{url('/')}}" class="hover:opacity-60">Beranda</a>
                    </li>
                    <li>
                        <a href="#tentangkami" class="hover:opacity-60">Tentang Kami</a>
                    </li>
                </ul>
            </div>
            <p class="text-center pb-3">&copy; 2023 Sistem Penilaian Kredit</p>
        </footer>

    </div>



</body>

</html>