@if ($status == "terima")
@extends('layouts.navigation')
@section('title')
Hasil Keputusan
@endsection

@section('content')
<!-- Title -->
<div class="font-lexend">
  <div>
    <h1 class="flex justify-center text-4xl font-bold py-5">
      KEPUTUSAN PEMBERIAN PINJAMAN
    </h1>
    <hr style="height: 3px; color: black; background-color: black" />
  </div>
  <div class="p-[100px] flex justify-center">
    <div class="w-[1000px] h-[500px] bg-[#68A46C] rounded-3xl flex items-center justify-center">
      <h2 class="font-medium text-5xl text-white">SELAMAT ! Pinjaman Anda Disetujui</h2>
    </div>
  </div>
</div>
@endsection

@else
@extends('layouts.navigation')
@section('title')
Hasil Keputusan
@endsection
@section('content')
    <!-- Title -->
    <div>
      <h1 class="flex justify-center text-4xl font-bold py-5">
        KEPUTUSAN PEMBERIAN PINJAMAN
      </h1>
      <hr style="height: 3px; color: black; background-color: black" />
    </div>
  <div class="p-[100px] flex justify-center">
    <div class="w-[1000px] h-[500px] bg-[#D65D40] rounded-3xl flex items-center justify-center">
      <h2 class="font-medium text-5xl text-white font-sans">Mohon Maaf Anda Tidak Memenuhi Syarat</h2>
    </div>
  </div>
@endsection

@endif