<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MonitoringController extends Controller
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
            $start = date('Y-m-d', strtotime('monday this week'));
            $end = date('Y-m-d', strtotime('sunday this week'));
        }

        $monitoring = Monitoring::whereBetween('tanggal', array($start, $end))->orderBy('tanggal', 'asc')->get();

        return view('logged.monitoring.index', compact('monitoring', 'start', 'end'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logged.monitoring.create');
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
            'area' => 'required|max:100',
            'pic' => 'required|max:100',
            'auditor' => 'required|max:100',
            'kondisi' => 'max:100',
            'tanggal' => 'nullable|date_format:Y-m-d',
            'keterangan' => 'max:100',
        ]);

        Monitoring::create($validation);

        flash()->addSuccess('Monitoring Berhasil Ditambahkan!');

        return redirect()->route('monitoring.index');
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
    public function edit(Monitoring $monitoring)
    {
        return view('logged.monitoring.edit', [
            'monitoring' => $monitoring
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monitoring $monitoring)
    {
        $validation = $request->validate([
            'area' => 'required|max:100',
            'pic' => 'required|max:100',
            'auditor' => 'required|max:100',
            'kondisi' => 'max:100',
            'tanggal' => 'nullable|date_format:Y-m-d',
            'keterangan' => 'max:100',
        ]);

        $monitoring->update($validation);

        flash()->addSuccess('Monitoring Berhasil Diperbarui!');

        return redirect()->route('monitoring.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monitoring $monitoring)
    {
        $monitoring->delete();

        flash()->addSuccess('Monitoring Berhasil Dihapus!');

        return redirect()->route('monitoring.index');
    }
}
