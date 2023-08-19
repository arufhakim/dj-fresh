<?php

namespace App\Http\Livewire;

use App\Models\Ruangan as ModelsRuangan;
use Livewire\Component;

class Ruangan extends Component
{
    public function render()
    {
        $nitrea = ModelsRuangan::where('ruangan', '0')->orderBy('tanggal', 'desc')->orderBy('waktu_mulai', 'desc')->limit(3)->get();
        $niphos = ModelsRuangan::where('ruangan', '1')->orderBy('tanggal', 'desc')->orderBy('waktu_mulai', 'desc')->limit(3)->get();
        return view('livewire.ruangan', compact('nitrea', 'niphos'));
    }
}
