<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
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
        $data = Buku::orderBy('id', 'desc')->paginate(5);
        return view('buku.index', compact('data'))->with('data1', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        $penerbit = Penerbit::all();
        return view('buku.create', compact('kategori', 'penerbit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori_id' => 'required',
            'penerbit_id' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'tahun_terbit' => 'required',
            'isbn' => 'required',
            'jumlah_buku' => 'required',
            'buku_baik' => 'required',
            'buku_rusak' => 'required',
        ]);

        Buku::create([
            'kategori_id' => $request->kategori_id,
            'penerbit_id' => $request->penerbit_id,
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'tahun_terbit' => $request->tahun_terbit,
            'isbn' => $request->isbn,
            'jumlah_buku' => $request->jumlah_buku,
            'buku_baik' => $request->buku_baik,
            'buku_rusak' => $request->buku_rusak,
        ]);

        //redirect to index
        return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        Buku::where('id', $id)->delete();
        return redirect()->to('buku');
    }
}
