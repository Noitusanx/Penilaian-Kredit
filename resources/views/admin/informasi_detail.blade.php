@extends('layouts.admin') @section('container')
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
        INFORMASI NASABAH
    </h1>
    <hr style="height: 3px; color: black; background-color: black" />
</div>

<!-- Form -->
<div class="flex justify-center py-[50px]">
    <div
        class="bg-[#D5D6C6] w-[700px] h-auto p-10 rounded-[20px] font-lexend-deca"
    >
        <div class="px-[60px]">
            <div>
                <h2 for="nik">NIK</h2>
                <h3
                    id="nik"
                    name="nik"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
                >
                    100101001100101
                </h3>
            </div>
            <div>
                <h2 for="nama">Nama</h2>
                <h3
                    type="text"
                    id="nama"
                    name="nama"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
                >
                    Sultan
                </h3>
            </div>
            <div>
                <h2 for="umur">Umur</h2>
                <h3
                    type="text"
                    id="umur"
                    name="umur"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
                >
                    25 Tahun
                </h3>
            </div>
            <div>
                <h2 for="jlh_pinjam">Jumlah Pinjaman (Rp)</h2>
                <h3
                    id="jlh_pinjam"
                    name="jlh_pinjam"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
                >
                    Rp. 50.000.000.-
                </h3>
            </div>
            <div>
                <h2 for="tujuan_pinjam">Tujuan Pinjaman</h2>
                <h3
                    id="tujuan pinjam"
                    name="jlh_pinjam"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
                >
                    Membeli Motor Vario Geter
                </h3>
            </div>
            <div>
                <h2 for="pendapatan">Pendapatan (Rp)</h2>
                <h3
                    id="pendapatan"
                    name="pendapatan"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
                >
                    Rp. 8.000.000.-
                </h3>
            </div>
            <div>
                <h2 for="pekerjaan">Status Pekerjaan</h2>
                <h3
                    id="pekerjaan"
                    name="pekerjaan"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
                >
                    Pekerja Tetap
                </h3>
            </div>
            <div>
                <h2 for="tanggungan">Status Pernikahan</h2>
                <h3
                    id="tanggungan"
                    name="tanggungan"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
                >
                    Sudah Menikah
                </h3>
            </div>
            <div>
                <h2 for="tanggungan">Jumlah Tanggungan</h2>
                <h3
                    id="tanggungan"
                    name="tanggungan"
                    class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
                >
                    3 Orang
                </h3>
            </div>
            <div class="flex justify-end">
                <a
                    href="/admin-data-pengajuan"
                    class="w-[175px] h-[40px] rounded-lg bg-[#5E7C60] flex justify-center items-center hover:bg-green-700 text-white font-bold"
                    >Kembali</a
                >
            </div>
        </div>
    </div>
</div>
@endsection
