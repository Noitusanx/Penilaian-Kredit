@extends('layouts.navigation-hasil')
@section('title')
Hasil Keputusan
@endsection

@section('content')
<div>
  <h1 class="flex justify-center text-4xl font-bold py-5">
    KEPUTUSAN PEMBERIAN PINJAMAN
  </h1>
  <hr style="height: 3px; color: black; background-color: black" />
</div>
<div class="p-[100px] flex justify-center">
  <div class="w-[1000px] h-[500px] rounded-3xl flex items-center justify-center">
    @if ($status == "terima")
    <div class="p-[100px] flex flex-col items-center">
      <div class="w-[1000px] h-[500px] bg-[#68A46C] rounded-3xl flex flex-col items-center justify-center relative">
        <h2 class="font-bold text-5xl text-white text-center my-8">SELAMAT! Pinjaman Anda Disetujui</h2>
        <button type="button"
          class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm text-center px-5 py-3 mb-5">
          <a href="{{ url("admin/$pengajuan->id/detailpengajuan/pdf") }}">Download Berkas Pengajuan</a>
        </button>
        <p class=" text-center mt-4 mx-6">Silahkan mengunjungi kantor cabang terdekat untuk melanjutkan proses
          verifikasi pengajuan pinjaman dengan membawa berkas pengajuan dan berkas penunjang lainnya
        </p>
      </div>
    </div>
    @else
    <div class="p-[100px] flex justify-center">
      <div class="w-[1000px] h-[500px] bg-[#D65D40] rounded-3xl flex items-center justify-center">
        <h2 class="font-bold text-5xl text-white font-lexend text-center">Mohon Maaf Anda Tidak Memenuhi Syarat
          Pinjaman</h2>
      </div>
    </div>
    @endif
  </div>
</div>
</div>
@endsection