<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
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
        $data = Penerbit::orderBy('id', 'desc')->paginate(5);
        return view('penerbit.index', compact('data'))->with('data1', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_penerbit' => 'required',
            'nama_penerbit' => 'required',
        ]);

        Penerbit::create([
            'kode_penerbit' => $request->kode_penerbit,
            'nama_penerbit'     => $request->nama_penerbit,
        ]);

        //redirect to index
        return redirect()->route('penerbit.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        Penerbit::where('id', $id)->delete();
        return redirect()->to('penerbit');
    }
}
