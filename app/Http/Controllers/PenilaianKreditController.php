<?php

namespace App\Http\Controllers;

use App\Models\Pengajuans;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PenilaianKreditController extends Controller
{
    public function index(){
        return view("pages.landingpage");
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nik' => 'required|numeric|digits:16',
            'password' => 'required']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/datanasabah');
        }

        return back()->with('loginError', 'Login gagal!');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    public function storeReg(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|numeric|digits:16',
            'nama' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        $request->session()->flash('success', 'Berhasil daftar! Mohon login');
        return redirect('masuk');

    }

    public function dataNasabah(){
        $datas = Pengajuans::select('id', 'nama', 'nik', 'status')->get();
        return view('admin.all_data_pengajuan', compact('datas'));
    }

    public function detailPengajuan($id)
    {
        $data = Pengajuans::find($id);

        return view('admin/informasi_detail', compact('data'));
    }

}