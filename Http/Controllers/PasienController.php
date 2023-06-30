<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all();
        return view('admin.pasien.index', [
            'pasiens' => $pasiens
        ]);
    }
    public function create(){
        return view('admin.pasien.create');
    }

    public function store(Request $request)
    {
       
        // simpan data hasil form ke table pasiens
        Pasien::create([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'telp' =>  $request->telp,
        ]);

        return redirect('/pasien')->with('success', 'Data pasien berhasil diubah.');
    
    }

    // method untuk menghapus data
    public function destroy(Request $request)
    {
        Pasien::destroy($request->id);

        return redirect()
    }
}  

