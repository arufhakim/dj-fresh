<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GambarController extends Controller
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
        return view('logged.gambar.index', [
            'gambar' => Gambar::orderBy('created_at', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logged.gambar.create');
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
            'nama' => 'required|max:100',
            'gambar' => 'required|max:10000|mimes:jpg,jpeg,png',
            'status' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = Str::random(20) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('image-upload', $nama_gambar);
        }

        Gambar::create([
            'nama' => $request->nama,
            'gambar' => $nama_gambar,
            'status' => $request->status,
        ]);

        flash()->addSuccess('Gambar Berhasil Ditambahkan!');

        return redirect()->route('gambar.index');
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
    public function edit(Gambar $gambar)
    {
        return view('logged.gambar.edit', [
            'gambar' => $gambar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gambar $gambar)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'status' => 'required',
        ]);

        $gambar->update([
            'nama' => $request->nama,
            'gambar' => $gambar->gambar,
            'status' => $request->status,
        ]);

        flash()->addSuccess('Gambar Berhasil Diperbarui!');

        return redirect()->route('gambar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gambar $gambar)
    {
        $gambar->delete();

        flash()->addSuccess('Gambar Berhasil Dihapus!');

        return redirect()->route('gambar.index');
    }
}
