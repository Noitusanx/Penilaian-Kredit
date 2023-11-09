@extends('layouts.app')

@section('container')
    <!-- Navbar -->
    <div class="flex justify-between p-[30px]">
      <!-- Logo -->
      <div class="flex items-center justify-center">
        <img class="h-8 w-auto" src="{{url('/image/logo.png')}}" alt="Logo" />
      </div>

      <!-- Menu -->
      <div class="flex justify-between items-center text-[20px] px-[20px]">
        <!-- Hi, user -->
        <a
          href="#"
          class="px-3 py-2 text-gray-800 hover:text-green-700 font-semibold"
          >Hi, User</a
        >

        <!-- Beranda -->
        <a
          href="#"
          class="px-3 py-2 text-gray-800 hover:text-green-700 font-semibold"
          >Beranda</a
        >

        <!-- Kontak -->
        <a
          href="#"
          class="px-3 py-2 text-gray-800 hover:text-green-700 font-semibold"
          >Tentang Kami</a
        >

        <!-- Logout -->
        <a
          href="#"
          class="px-3 py-2 text-gray-800 hover:text-green-700 font-semibold"
          >Keluar</a
        >
      </div>
    </div>

    <!-- Title -->
    <div>
      <h1 class="flex justify-center text-4xl font-bold py-5">
        KEPUTUSAN PEMBERIAN PINJAMAN
      </h1>
      <hr style="height: 3px; color: black; background-color: black" />
    </div>
  <div class="p-[100px] flex justify-center">
    <div class="w-[1000px] h-[500px] bg-[#68A46C] rounded-3xl flex items-center justify-center">
      <h2 class="font-medium text-5xl text-white font-sans">SELAMAT ! Pinjaman Anda Disetujui</h2>
    </div>
  </div>
@endsection
