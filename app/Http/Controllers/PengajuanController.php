<?php

namespace App\Http\Controllers;
use App\Models\Pengajuans;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function index(){

        return view('pengajuan');
    }

    public function ajukan(Request $request){
        $poin = 0;
      
        // Retrieve all Pengajuans records with the same NIK
        $pengajuans = Pengajuans::where('nik', $request->nik)->get();
        $gagal_bayar = 0;
        // Loop through each Pengajuans record and adjust the poin accordingly
        foreach ($pengajuans as $pengajuan) {
            if ($pengajuan->status == "true") {
                $poin += 10;
            } else if ($pengajuan->status == "false") {
                $poin -= 5;
                $gagal_bayar += 1;
            }

            if ($gagal_bayar >= 2){
                $poin = 0;
                break;
            }
        }

        if ($request->tujuan == "1"){
            $poin += 10;
        } elseif($request->tujuan == "2"){
            $poin += 7;
        } elseif($request->tujuan == "3"){
            $poin += 5;
        } elseif($request->tujuan == "4"){
            $poin += 0;
        }

        if ($request->pekerjaan == "pns"){
            $poin += 10;
        } elseif($request->pekerjaan == "wiraswasta"){
            $poin += 7;
        } elseif($request->pekerjaan == "pegawai_swasta"){
            $poin += 5;
        } elseif($request->pekerjaan == "tidak_bekerja"){
            $poin += 0;
        }

        if($request->pernikahan == "single"){
            $poin += 10;
        } elseif($request->pernikahan == "menikah"){
            $poin += 7;
        }

        if($request->tanggungan == "0"){
            $poin += 10;
        } elseif($request->tanggungan == "1"){
            $poin += 8;
        } elseif($request->tanggungan == "2"){
            $poin += 6;
        } elseif($request->tanggungan == ">2"){
            $poin += 3;
        } 


        $persen_pendapatan = $request->pendapatan_actual * 0.35;
        $pinjaman = $request->jlh_pinjam_actual;
        // dd((int)$persen_pendapatan); 
        // dd($request->jlh_pinjam_actual);
        if($pinjaman < (int)$persen_pendapatan && $request->umur == ">=18"){

            $poin += 10;
         } else {
            $poin = 0;
         }

         if($poin >= 40){
            $status = "terima";
            
         } else{
            $status = "tolak";
         }

        $pengajuan = Pengajuans::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'umur' => $request->umur,
            'jlh_pinjam' => $request->jlh_pinjam_actual,
            'tujuan' => $request->tujuan,
            'pendapatan' => $request->pendapatan_actual,
            'pekerjaan' => $request->pekerjaan,
            'pernikahan' => $request->pernikahan,
            'tanggungan' => $request->tanggungan,
            'status' => $status,
        ]);
        return view('user.hasil', [
            'status' => $status
        ]);
    }
}
