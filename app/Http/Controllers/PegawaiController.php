<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('logged.pegawai.index', [
            "pegawai" => Pegawai::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logged.pegawai.create');
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
            'nik' => 'required|max:100',
            'nama' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'foto' => 'required|max:10000|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nama_foto = Str::random(20) . '.' . $foto->getClientOriginalExtension();
            $foto->move('image-upload', $nama_foto);
        }

        Pegawai::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'foto' => $nama_foto,
        ]);

        flash()->addSuccess('Pegawai Berhasil Ditambahkan!');

        return redirect()->route('pegawai.index');
    }

    public function show(Pegawai $pegawai)
    {
        return view('logged.pegawai.show', [
            'pegawai' => $pegawai
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        return view('logged.pegawai.edit', [
            'pegawai' => $pegawai
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $validation = $request->validate([
            'nik' => 'required|max:100',
            'nama' => 'required|max:255',
            'jabatan' => 'required|max:255',
        ]);

        $pegawai->update($validation);

        flash()->addSuccess('Pegawai Berhasil Diperbarui!');

        return redirect()->route('pegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        try {
            $pegawai->delete();
            flash()->addSuccess('Pegawai Berhasil Dihapus!');
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == "23000") {
                flash()->addError('Pegawai Tidak Dapat Dihapus!');
            }
        }

        return redirect()->route('pegawai.index');
    }
}
