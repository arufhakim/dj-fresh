<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Informasi;
use App\Models\Ruangan;
use App\Models\Video;
use App\Models\Monitoring;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $video = Video::where('status', '1')->orderBy('created_at', 'desc')->first();
        $gambar = Gambar::where('status', '1')->orderBy('created_at', 'desc')->limit(10)->get();
        $nitrea = Ruangan::where('ruangan', '0')->orderBy('tanggal', 'desc')->orderBy('waktu_mulai', 'desc')->limit(3)->get();
        $niphos = Ruangan::where('ruangan', '1')->orderBy('tanggal', 'desc')->orderBy('waktu_mulai', 'desc')->limit(3)->get();
        $informasi = Informasi::where('status', '1')->orderBy('created_at', 'desc')->limit(4)->get();
        return view('welcome', compact('video', 'gambar', 'nitrea', 'niphos', 'informasi'));
    }
}
