<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
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
        return view('logged.ruangan.index', [
            'nitrea' => Ruangan::where('ruangan', '0')->orderBy('tanggal', 'desc')->orderBy('waktu_mulai', 'desc')->get(),
            'niphos' => Ruangan::where('ruangan', '1')->orderBy('tanggal', 'desc')->orderBy('waktu_mulai', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logged.ruangan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'pengguna' => 'required|max:100',
            'tanggal' => 'required|date_format:Y-m-d',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required|after:waktu_mulai',
            'ruangan' => 'required',
            'keterangan' => 'max:255',
        ]);

        Ruangan::create($validation);

        if ($request->ruangan == "0") {
            flash()->addSuccess('Peminjaman Ruangan Nitrea Berhasil Ditambahkan!');
        } else {
            flash()->addSuccess('Peminjaman Ruangan Niphos Berhasil Ditambahkan!');
        }

        return redirect()->route('ruangan.index');
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
    public function edit(Ruangan $ruangan)
    {
        return view('logged.ruangan.edit', [
            'ruangan' => $ruangan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruangan $ruangan)
    {
        $validation = $request->validate([
            'pengguna' => 'required|max:100',
            'tanggal' => 'required|date_format:Y-m-d',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required|after:waktu_mulai',
            'ruangan' => 'required',
            'keterangan' => 'max:255',
        ]);

        $ruangan->update($validation);

        if ($request->ruangan == "0") {
            flash()->addSuccess('Peminjaman Ruangan Nitrea Berhasil Diperbarui!');
        } else {
            flash()->addSuccess('Peminjaman Ruangan Niphos Berhasil Diperbarui!');
        }

        return redirect()->route('ruangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ruangan $ruangan)
    {
        $ruangan->delete();

        if ($ruangan->ruangan == "0") {
            flash()->addSuccess('Peminjaman Ruangan Nitrea Berhasil Dihapus!');
        } else {
            flash()->addSuccess('Peminjaman Ruangan Niphos Berhasil Dihapus!');
        }

        return redirect()->route('ruangan.index');
    }
}
