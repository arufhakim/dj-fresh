<?php

namespace App\Http\Controllers;

use App\Imports\ArsipImport;
use App\Models\Arsip;
use Illuminate\Http\Request;
use DataTables;

use Maatwebsite\Excel\Facades\Excel;


class ArsipController extends Controller
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
        if (request()->ajax()) {
            $query = Arsip::select(
                'id',
                'bagian',
                'kode',
                'uraian',
                'tahun',
                'no_rak',
                'no_ordner',
                'no_label',
                'lokasi',
            )->get();

            return Datatables::of($query)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $html = '<form action="arsip/' . $row->id . '" method="POST" style="display:inline">
                                    ' . csrf_field() . '
                                    ' . method_field('DELETE') . '
                                    <button type="submit" class="btn btn-link text-danger text-gradient py-0 px-1 my-0 show_confirm"><i class="far fa-trash-alt"></i></button>
                                </form>
                                <a href="arsip/' . $row->id . '/edit" class="btn btn-link text-dark py-0 px-1 my-0"><i class="fas fa-pencil-alt text-dark" aria-hidden="true"></i></a>';
                    return $html;
                })->rawColumns(['action'])->make(true);
        }
        return view('logged.arsip.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logged.arsip.create');
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
            'bagian' => 'required|max:255',
            'uraian' => 'required|max:16000000',
            'tahun' => 'required|numeric',
            'no_rak' => 'nullable|max:20',
            'no_ordner' => 'nullable|max:20',
            'no_label' => 'nullable|max:20',
            'lokasi' => 'nullable|max:100',
        ]);

        switch ($request->bagian) {
            case "Jasa EPC":
                $validation['kode'] = "A";
                break;
            case "Jasa Pabrik":
                $validation['kode'] = "B";
                break;
            case "Jasa Non Pabrik":
                $validation['kode'] = "C";
                break;
            case "Jasa Distribusi & Pemasaran":
                $validation['kode'] = "D";
                break;
            default:
                $validation['kode'] = "err/";
                break;
        }

        Arsip::create($validation);

        flash()->addSuccess('Dokumen Arsip Berhasil Ditambahkan!');

        return redirect()->route('arsip.index');
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
    public function edit(Arsip $arsip)
    {
        return view('logged.arsip.edit', [
            'arsip' => $arsip
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arsip $arsip)
    {
        $validation = $request->validate([
            'bagian' => 'required|max:255',
            'uraian' => 'required|max:16000000',
            'tahun' => 'required|numeric',
            'no_rak' => 'nullable|max:20',
            'no_ordner' => 'nullable|max:20',
            'no_label' => 'nullable|max:20',
            'lokasi' => 'nullable|max:100',
        ]);

        switch ($request->bagian) {
            case "Jasa EPC":
                $validation['kode'] = "A";
                break;
            case "Jasa Pabrik":
                $validation['kode'] = "B";
                break;
            case "Jasa Non Pabrik":
                $validation['kode'] = "C";
                break;
            case "Jasa Distribusi & Pemasaran":
                $validation['kode'] = "D";
                break;
            default:
                $validation['kode'] = "err/";
                break;
        }
        $arsip->update($validation);

        flash()->addSuccess('Dokumen Arsip Berhasil Diperbarui!');

        return redirect()->route('arsip.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arsip $arsip)
    {
        $arsip->delete();

        flash()->addSuccess('Dokumen Arsip Berhasil Dihapus!');

        return redirect()->route('arsip.index');
    }

    public function importView()
    {
        return view('logged.arsip.import');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx'
        ]);

        Excel::import(new ArsipImport, $request->file('file'));

        flash()->addSuccess('Dokumen Arsip Berhasil Diimport!');

        return redirect()->route('arsip.index');
    }
}
