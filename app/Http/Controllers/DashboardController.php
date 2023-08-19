<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Gambar;
use App\Models\Informasi;
use App\Models\Monitoring;
use App\Models\Pegawai;
use App\Models\Rewarding;
use App\Models\Ruangan;
use App\Models\Testimoni;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $nitrea = Ruangan::where('ruangan', '0')->count('id');
        $niphos = Ruangan::where('ruangan', '1')->count('id');
        $video = Video::count('id');
        $video_aktif = Video::where('status', '1')->count('id');
        $video_tidak = Video::where('status', '0')->count('id');
        $gambar = Gambar::count('id');
        $gambar_aktif = Gambar::where('status', '1')->count('id');
        $gambar_tidak = Gambar::where('status', '0')->count('id');
        $informasi = Informasi::count('id');
        $arsip = Arsip::count('id');
        $pegawai = Pegawai::count('id');
        $rewarding = Rewarding::count('id');
        $monitoring = Monitoring::count('id');
        $ulasan = Testimoni::count('id');
        return view('logged.dashboard', compact(
            'nitrea',
            'niphos',
            'video',
            'gambar',
            'gambar_aktif',
            'gambar_tidak',
            'video_aktif',
            'video_tidak',
            'informasi',
            'arsip',
            'pegawai',
            'rewarding',
            'monitoring',
            'ulasan'
        ));
    }
}
