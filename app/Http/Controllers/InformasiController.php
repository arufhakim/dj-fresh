<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('logged.informasi.index', [
            'informasi' => Informasi::orderBy('created_at', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logged.informasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'informasi' => 'required|max:100',
            'status' => 'required',
        ]);

        Informasi::create([
            'informasi' => $request->informasi,
            'status' => $request->status,
        ]);

        flash()->addSuccess('Informasi Berhasil Ditambahkan!');

        return redirect()->route('informasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasi $informasi)
    {
        return view('logged.informasi.edit', [
            'informasi' => $informasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasi $informasi)
    {
        $request->validate([
            'informasi' => 'required|max:100',
            'status' => 'required',
        ]);

        $informasi->update([
            'informasi' => $request->informasi,
            'status' => $request->status,
        ]);

        flash()->addSuccess('Informasi Berhasil Diperbarui!');

        return redirect()->route('informasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasi $informasi)
    {
        $informasi->delete();

        flash()->addSuccess('Informasi Berhasil Dihapus!');

        return redirect()->route('informasi.index');
    }
}
