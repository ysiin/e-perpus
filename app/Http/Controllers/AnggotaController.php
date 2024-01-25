<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Anggota::orderBy('id', 'desc')->paginate(5);
        return view('anggota.index', compact('data'))->with('data1', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_anggota' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
        ]);

        Anggota::create([
            'kode_anggota' => $request->kode_anggota,
            'nis'     => $request->nis,
            'nama'   => $request->nama,
            'kelas'   => $request->kelas,
            'alamat'   => $request->alamat,
        ]);

        //redirect to index
        return redirect()->route('anggota.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Anggota::where('id', $id)->delete();
        return redirect()->to('anggota');
    }
}
