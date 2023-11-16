@extends('layouts.admin')

@section('container')
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
        DATA NASABAH PENGAJUAN PINJAMAN UANG
    </h1>
    <hr style="height: 3px; color: black; background-color: black" />
</div>

<!-- Tabel Data -->
<div class="flex justify-center mt-[60px]">
    <table class="">
        <thead class="">
            <tr>
                <th class="w-[120px] h-[50px] bg-[#D5D6C6] text-3xl border border-black text-center">
                    No
                </th>
                <th class="w-[400px] h-[50px] bg-[#D5D6C6] border border-black text-center">
                    Nama
                </th>
                <th class="w-[350px] h-[50px] bg-[#D5D6C6] border border-black text-center">
                    NIK
                </th>
                <th class="w-[250px] h-[50px] bg-[#D5D6C6] border border-black text-center">
                    Status
                </th>
                <th class="w-[200px] h-[50px] bg-[#D5D6C6] border border-black text-center">
                    Form
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="w-[120px] h-[50px] border border-black text-center">
                    1
                </td>
                <td class="w-[400px] h-[50px] border border-black text-center">
                    Sultan
                </td>
                <td class="w-[350px] h-[50px] border border-black text-center">
                    00182999100
                </td>
                <td class="w-[250px] h-[50px] border border-black text-center">
                    Diterima
                </td>
                <td class="w-[200px] h-[50px] border border-black text-center">
                    <a href="/admin-detail-pengajuan" class="text-[#5E7C60] hover:font-bold">View Form</a>
                </td>
            </tr>
            <tr>
                <td class="w-[120px] h-[50px] border border-black text-center">
                    2
                </td>
                <td class="w-[400px] h-[50px] border border-black text-center">
                    Sultan S
                </td>
                <td class="w-[350px] h-[50px] border border-black text-center">
                    00182888100
                </td>
                <td class="w-[250px] h-[50px] border border-black text-center">
                    Ditolak
                </td>
                <td class="w-[200px] h-[50px] border border-black text-center">
                    <a href="/admin-detail-pengajuan" class="text-[#5E7C60] hover:font-bold">View Form</a>
                </td>
            </tr>
            <tr>
                <td class="w-[120px] h-[50px] border border-black text-center">
                    3
                </td>
                <td class="w-[400px] h-[50px] border border-black text-center">
                    Sultan Shd
                </td>
                <td class="w-[350px] h-[50px] border border-black text-center">
                    00182779100
                </td>
                <td class="w-[250px] h-[50px] border border-black text-center">
                    Diterima
                </td>
                <td class="w-[200px] h-[50px] border border-black text-center">
                    <a href="/admin-detail-pengajuan" class="text-[#5E7C60] hover:font-bold">View Form</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection