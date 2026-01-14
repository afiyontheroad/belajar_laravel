<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.welcome', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

   public function store(Request $request)
{
    Siswa::create([
        'nis' => $request->nis,
        'nama' => $request->nama,
        'kelas' => $request->kelas,
        'alamat' => $request->alamat,
        'email' => $request->email,
        'no_telepon' => $request->telepon,
    ]);

    return redirect('/')->with('success', 'Data siswa berhasil ditambahkan');
}

}