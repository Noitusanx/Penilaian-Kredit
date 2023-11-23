@extends('layouts.navigation')
@section('title')
Pengajuan
@endsection
<!-- Title -->
@section('content')
<div>
  <h1 class="flex justify-center text-4xl font-bold py-5">
    FORM PENGAJUAN PEMINJAMAN UANG
  </h1>
  <hr style="height: 3px; color: black; background-color: black" />
</div>

<!-- Form -->
<div class="flex justify-center py-[50px]">
  <div class="bg-[#D5D6C6] w-[700px] h-auto p-10 rounded-[20px] font-lexend-deca">
    <form action="/pengajuan" method="POST" class="px-[60px]">
      @csrf
      <div>
        <label for="nik">NIK</label>
        <input type="text" id="nik" name="nik"
          class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
          value="{{ auth()->user()->nik }}" readonly/>
      </div>
      <div>
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama"
          class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]" value="{{ auth()->user()->nama }}" readonly/>
      </div>
      <div>
        <label for="umur">Umur</label>
        <select id="umur" name="umur" class="w-[500px] h-[40px] bg-[#F9F5F2] rounded-[5px] p-[10px] mt-1 mb-[15px]">
          <option value="<18">Kurang dari 18 tahun</option>
          <option value=">=18">Lebih dari 18 tahun</option>
        </select>
      </div>
      <div>
        <label for="jlh_pinjam">Jumlah Pinjaman (Rp)</label>
        <input type="hidden" id="jlh_pinjam_actual" name="jlh_pinjam_actual">
        <input type="text" id="jlh_pinjam" name="jlh_pinjam"
        class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]" 
        oninput="formatInput1(this);" />
       </div>
      <div>
        <label for="tujuan_pinjam">Tujuan Pinjaman</label>
        <select id="tujuan" name="tujuan" class="w-[500px] h-[40px] bg-[#F9F5F2] rounded-[5px] p-[10px] mt-1 mb-[15px]">
          <option value="1">Modal Usaha/ Pendidikan/ Pengobatan </option>
          <option value="2">Bangun Rumah</option>
          <option value="3">Beli motor/mobil</option>
          <option value="4">Liburan/Lifestyle</option>
        </select>
      </div>
      <div>
        <label for="pendapatan">Pendapatan (Rp)</label>
        <input type="hidden" id="pendapatan_actual" name="pendapatan_actual">
        <input type="text" id="pendapatan" name="pendapatan"
         class="w-[500px] h-[40px] bg-[#F9F5F2] flex justify-start items-center p-[10px] rounded-[5px] mt-1 mb-[15px]"
         oninput="formatInput2(this);" />
       </div>
       
      <div>
        <label for="pekerjaan"> Status Pekerjaan:</label>
        <select id="pekerjaan" name="pekerjaan"
          class="w-[500px] h-[40px] bg-[#F9F5F2] rounded-[5px] p-[10px] mt-1 mb-[15px]">
          <option value="pns">PNS</option>
          <option value="wiraswasta">wiraswasta</option>
          <option value="pegawai_swasta">pegawai swasta</option>
          <option value="tidak_bekerja">tidak bekerja</option>
        </select>
      </div>
      <div>
        <label for="pernikahan">Status Pernikahan:</label>
        <select id="pernikahan" name="pernikahan" class="w-[500px] h-[40px] bg-[#F9F5F2] rounded-[5px] p-[10px] mt-1 mb-[15px]">
          <option value="single">single</option>
          <option value="menikah">Menikah</option>
        </select>
      </div>
      <div>
        <label for="tanggungan">Jumlah Tanggungan</label>
        <select id="tanggungan" name="tanggungan" class="w-[500px] h-[40px] bg-[#F9F5F2] rounded-[5px] p-[10px] mt-1 mb-[15px]">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value=">2">Lebih dari 2</option>
        </select>
      </div>
      <div class="flex justify-end">
        <input type="submit" value="Ajukan" 
          class="w-[175px] h-[40px] rounded-lg bg-[#5E7C60] hover:bg-green-700 text-white font-bold" />
      </div>
    </form>
  </div>
</div>
</body>

<script>
  function formatInput1(input) {
     var value = input.value.replace(/[^0-9]/g, '');
     var formattedValue = value.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
     document.getElementById('jlh_pinjam_actual').value = value;
     input.value = formattedValue;
  }

  function formatInput2(input) {
     var value = input.value.replace(/[^0-9]/g, '');
     var formattedValue = value.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
     document.getElementById('pendapatan_actual').value = value;
     input.value = formattedValue;
  }
 </script>
@endsection

</html>