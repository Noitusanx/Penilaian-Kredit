@extends('layouts.admin') @section('container')
<!-- Navbar -->
<div class="flex justify-between p-[30px]">
    <!-- Logo -->
    <div class="flex items-center justify-center">
        <a href="{{url('/')}}" class="hover:opacity-60 text-[20px]">Penilaian Kredit</a>
    </div>

    <!-- Menu -->
    <div class="flex justify-between items-center text-[20px] px-[20px]">
        <!-- Hi, user -->
        <a href="#" class="px-3 py-2 hover:opacity-60">Hi, {{ auth()->user()->nama}}</a>

        <form method="POST" action="/keluar" role="none">
            @csrf
            <button type="submit" class="px-3 py-2 hover:opacity-60" role="menuitem" tabindex="-1"
                id="nav-keluar">Keluar</button>
        </form>
    </div>
</div>

<!-- Title -->
<div>
    <h1 class="flex justify-center text-4xl font-bold py-5">
        INFORMASI NASABAH
    </h1>
    <hr style="height: 3px; color: black; background-color: black" />
</div>

<!-- Form -->
<div class="flex justify-center py-[50px]">
    <div class="bg-[#D5D6C6] w-[700px] h-auto p-10 rounded-[20px] font-lexend-deca">
        <div class="px-[60px]">
            <div>
                <h2 for="nik">NIK</h2>
                <h3 id="nik" name="nik"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]">
                    {{$data->nik}}
                </h3>
            </div>
            <div>
                <h2 for="nama">Nama</h2>
                <h3 type="text" id="nama" name="nama"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]">
                    {{$data->nama}}
                </h3>
            </div>
            <div>
                <h2 for="umur">Umur</h2>
                <h3 type="text" id="umur" name="umur"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]">
                    {{$data->umur}}
                </h3>
            </div>
            <div>
                <h2 for="jlh_pinjam">Jumlah Pinjaman (Rp)</h2>
                <h3 id="jlh_pinjam" name="jlh_pinjam"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]">
                    Rp. {{number_format($data ->jlh_pinjam, 0, ',', '.')}}
                </h3>
            </div>
            <div>
                <h2 for="tujuan_pinjam">Tujuan Pinjaman</h2>
                <h3 id="tujuan pinjam" name="jlh_pinjam"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]">
                    {{$data->tujuan}}
                </h3>
            </div>
            <div>
                <h2 for="pendapatan">Pendapatan (Rp)</h2>
                <h3 id="pendapatan" name="pendapatan"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]">
                    Rp. {{number_format($data ->pendapatan, 0, ',', '.')}}
                </h3>
            </div>
            <div>
                <h2 for="pekerjaan">Status Pekerjaan</h2>
                <h3 id="pekerjaan" name="pekerjaan"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]">
                    {{$data->pekerjaan}}
                </h3>
            </div>
            <div>
                <h2 for="pernikahan">Status Pernikahan</h2>
                <h3 id="pernikahan" name="pernikahan"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]">
                    {{$data->pernikahan}}
                </h3>
            </div>
            <div>
                <h2 for="tanggungan">Jumlah Tanggungan</h2>
                <h3 id="tanggungan" name="tanggungan"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]">
                    {{$data->tanggungan}}
                </h3>
            </div>
            <div class="flex justify-end">
                <a href="/admin/datanasabah"
                    class="w-[175px] h-[40px] rounded-lg bg-[#5E7C60] flex justify-center items-center hover:bg-green-700 text-white font-bold">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection