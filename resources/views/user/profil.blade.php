@extends('layouts.app')

@section('container')

<!-- Navbar -->
<div class="mx-auto px-[50px] text-[20px] mt-[25px] font-lexend">
  <!-- Menu -->
  <div class="flex items-center justify-between">
    <!-- Logo -->
    <div class="flex justify-start">
      <h5>Penilaian Kredit</h5>
    </div>

    <!-- Menu Center -->
    <div class="flex items-center justify-center">
      <!-- Beranda -->
      <a href="#" class="px-3 py-2 text-gray-800 hover:text-green-700 font-medium">Beranda</a>
      <!-- Tentang Kami -->
      <a href="#" class="px-3 py-2 text-gray-800 hover:text-green-700 font-medium">Tentang Kami</a>
      <!-- Pengajuan -->
      <a href="#" class="px-3 py-2 text-gray-800 hover:text-green-700 font-medium">Pengajuan</a>
    </div>

    <!-- Menu End -->
    <div class="flex justify-end">
      <!-- Hi, user -->
      <a href="#" class="px-3 py-2 text-gray-800 hover:text-green-700 font-medium">Hi, Sultan</a>

      <!-- Logout -->
      <a href="#" class="px-3 py-2 text-gray-800 hover:text-green-700 font-medium">Keluar</a>
    </div>
  </div>
</div>

<!-- Main Part -->
<div class="p-[50px]">
  <div class="bg-[url('/img/bg2.png')] rounded-3xl">
    <h1 class="flex justify-center font-bold text-[4rem] opacity-100 py-4 tracking-wider">
      PROFIL
    </h1>

    <!-- User Data -->
    <div class="flex justify-between px-[50px] font-lexend">
      <div>
        <h2
          class="bg-[#F9F5F2] w-[650px] h-[65px] flex justify-start items-center p-[20px] rounded-xl font-bold text-xl mb-[30px]">
          Nama : Sultan
        </h2>
        <h2
          class="bg-[#F9F5F2] w-[650px] h-[65px] flex justify-start items-center p-[20px] rounded-xl font-bold text-xl mb-[30px]">
          NIK : 1171000066880001
        </h2>
        <h2
          class="bg-[#F9F5F2] w-[650px] h-[65px] flex justify-start items-center p-[20px] rounded-xl font-bold text-xl mb-[30px]">
          Nomor Rekening : 7111177
        </h2>
        <h2
          class="bg-[#F9F5F2] w-[650px] h-[65px] flex justify-start items-center p-[20px] rounded-xl font-bold text-xl mb-[30px]">
          Alamat : Blang Oi, Banda Aceh
        </h2>
        <h2
          class="bg-[#F9F5F2] w-[650px] h-[65px] flex justify-start items-center p-[20px] rounded-xl font-bold text-xl mb-[50px]">
          Email : sultan123@gmail.com
        </h2>
      </div>

      <!-- Image Profile -->
      <div class="flex items-center mb-[50px] mr-[50px]">
        <img src="/img/Frame 3.png" alt="" class="w-[250px] h-[250px]" />
      </div>
    </div>
  </div>
</div>
@endsection