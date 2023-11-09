<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/app.css" />
    <title>Pengajuan</title>
  </head>
  <body class="bg-[#F9F5F2]">
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
        FORM PENGAJUAN PEMINJAMAN UANG
      </h1>
      <hr style="height: 3px; color: black; background-color: black" />
    </div>

    <!-- Form -->
    <div class="flex justify-center py-[50px]">
      <div
        class="bg-[#D5D6C6] w-[700px] h-auto p-10 rounded-[20px] font-lexend-deca"
      >
        <form action="" class="px-[60px]">
          <div>
            <label for="nik">NIK</label>
            <input
              type="text"
              id="nik"
              name="nik"
              class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
              oninput="this.value = this.value.replace(/[^0-9.]/g, '');"
            />
          </div>
          <div>
            <label for="nama">Nama</label>
            <input
              type="text"
              id="nama"
              name="nama"
              class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
            />
          </div>
          <div>
            <label for="umur">Umur</label>
            <input
              type="text"
              id="umur"
              name="umur"
              class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
            />
          </div>
          <div>
            <label for="jlh_pinjam">Jumlah Pinjaman (Rp)</label>
            <input
              type="text"
              id="jlh_pinjam"
              name="jlh_pinjam"
              class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
            />
          </div>
          <div>
            <label for="tujuan_pinjam">Tujuan Pinjaman</label>
            <input
              type="text"
              id="tujuan pinjam"
              name="jlh_pinjam"
              class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
            />
          </div>
          <div>
            <label for="pendapatan">Pendapatan (Rp)</label>
            <input
              type="text"
              id="pendapatan"
              name="pendapatan"
              class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
              oninput="this.value = this.value.replace(/[^0-9.]/g, '');"
            />
          </div>
          <div>
            <label for="pekerjaan"> Status Pekerjaan:</label>
            <select
              id="pekerjaan"
              name="pekerjaan"
              class="w-[500px] h-[40px] bg-[#F9F5F2] rounded-[5px] p-[10px] mt-1 mb-[15px]"
            >
              <option value="pekerja-tetap">Pekerja Tetap</option>
              <option value="pekerja-tidak-tetap">Pekerja Tidak Tetap</option>
            </select>
          </div>
          <div>
            <label for="status">Status Pernikahan:</label>
            <select
              id="status"
              name="status"
              class="w-[500px] h-[40px] bg-[#F9F5F2] rounded-[5px] p-[10px] mt-1 mb-[15px]"
            >
              <option value="belum-menikah">Belum Menikah</option>
              <option value="menikah">Menikah</option>
              <option value="bercerai">Bercerai</option>
            </select>
          </div>
          <div>
            <label for="tanggungan">Jumlah Tanggungan</label>
            <input
              type="text"
              id="tanggungan"
              name="tanggungan"
              class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
              oninput="this.value = this.value.replace(/[^0-9.]/g, '');"
            />
          </div>
          <div class="flex justify-end">
            <input
              type="submit"
              value="Ajukan"
              class="w-[175px] h-[40px] rounded-lg bg-[#5E7C60] hover:bg-green-700 text-white font-bold"
            />
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
