<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Rewarding;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RewardingController extends Controller
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
    public function index(Request $request)
    {
        if (isset($request->start) && isset($request->end)) {
            $start = $request->start;
            $end = $request->end;
        } else {
            $start = date('Y-m-01', strtotime(Carbon::now()));
            $end = date('Y-m-t', strtotime(Carbon::now()));
        }

        $rewarding = Rewarding::whereBetween('tanggal', array($start, $end))->orderBy('tanggal', 'desc')->orderBy('score', 'desc')->get();
        $score = Rewarding::where('tanggal', $start)->orderBy('tanggal', 'desc')->orderBy('score', 'desc')->limit(10)->pluck('score');
        $name = Rewarding::join('pegawai', 'rewarding.pegawai_id', '=', 'pegawai.id')->where('rewarding.tanggal', $start)->orderBy('rewarding.tanggal', 'desc')->orderBy('rewarding.score', 'desc')->limit(10)->pluck('pegawai.nama');

        $bulan = date('F', strtotime($start));

        return view('logged.rewarding.index', compact('rewarding', 'start', 'end', 'score', 'name', 'bulan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logged.rewarding.create', [
            "pegawai" => Pegawai::all()
        ]);
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
            'pegawai_id' => 'required',
            'tanggal' => 'required|date_format:Y-m-d',
            'kebersihan' => 'required|max:255',
            'kerapihan' => 'required|max:255',
            'tanggungjawab' => 'required|max:255',
        ]);

        Rewarding::create([
            'pegawai_id' => $request->pegawai_id,
            'tanggal' => $request->tanggal,
            'kebersihan' => $request->kebersihan,
            'kerapihan' => $request->kerapihan,
            'tanggungjawab' => $request->tanggungjawab,
            'score' => (int)$request->kebersihan + (int)$request->kerapihan + (int)$request->tanggungjawab,
        ]);

        flash()->addSuccess('Penilaian Individu Berhasil Ditambahkan!');

        return redirect()->route('rewarding.index');
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
    public function edit(Rewarding $rewarding)
    {
        return view('logged.rewarding.edit', [
            "rewarding" => $rewarding,
            "pegawai" => Pegawai::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rewarding $rewarding)
    {
        $request->validate([
            'tanggal' => 'required|date_format:Y-m-d',
            'kebersihan' => 'required|max:255',
            'kerapihan' => 'required|max:255',
            'tanggungjawab' => 'required|max:255',
        ]);

        $rewarding->update([
            'pegawai_id' => $rewarding->pegawai_id,
            'tanggal' => $request->tanggal,
            'kebersihan' => $request->kebersihan,
            'kerapihan' => $request->kerapihan,
            'tanggungjawab' => $request->tanggungjawab,
            'score' => (int)$request->kebersihan + (int)$request->kerapihan + (int)$request->tanggungjawab,
        ]);

        flash()->addSuccess('Penilaian Individu Berhasil Diperbarui!');

        return redirect()->route('rewarding.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rewarding $rewarding)
    {
        $rewarding->delete();

        flash()->addSuccess('Penilaian Individu Berhasil Dihapus!');

        return redirect()->route('rewarding.index');
    }
}
