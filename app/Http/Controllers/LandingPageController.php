<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Monitoring;
use App\Models\Rewarding;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landing()
    {
        return view('landing.home');
    }

    public function profil()
    {
        return view('landing.profil');
    }

    public function monitor()
    {
        return view('landing.monitor', [
            'gambar' => Gambar::where('status', '1')->orderBy('created_at', 'desc')->limit(10)->get()
        ]);
    }

    public function reward()
    {
        $start = date('Y-m-01', strtotime(Carbon::now()));
        $end = date('Y-m-t', strtotime(Carbon::now()));

        $highest = Rewarding::join('pegawai', 'rewarding.pegawai_id', '=', 'pegawai.id')->whereBetween('rewarding.tanggal', array($start, $end))->orderBy('rewarding.score', 'desc')->first();

        $lowest = Rewarding::join('pegawai', 'rewarding.pegawai_id', '=', 'pegawai.id')->whereBetween('rewarding.tanggal', array($start, $end))->orderBy('rewarding.score', 'asc')->first();

        $bulan = date('F', strtotime($start));

        return view('landing.reward', compact('highest', 'lowest', 'bulan'));
    }

    public function pesan()
    {
        return view('landing.pesan');
    }

    public function tautan()
    {
        return view('landing.tautan');
    }
}
