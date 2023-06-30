<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $Dokters = Dokter::all();
        return view('dokter.index', [
            'Dokters' => $Dokters  
        ]);
    }

    public function create()
    {
        return view('dokter.create');
    }

    public function store(Request $request)
    {
       Dokter::create(
        [
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]
        );

        return redirect('/dokter');
    }
}
