<?php

namespace App\Http\Livewire;

use App\Models\Testimoni;
use Livewire\Component;
use Livewire\WithPagination;

class PesanComponent extends Component
{
    use WithPagination;

    public $sortBy;

    protected $paginationTheme = 'bootstrap';


    public function mount()
    {
        $this->sortBy = "default";
    }

    public function render()
    {
        if ($this->sortBy == '1') {
            $testimoni = Testimoni::where('nilai', '1')->orderBy('created_at', 'desc')->paginate(6);
        } else if ($this->sortBy == '2') {
            $testimoni = Testimoni::where('nilai', '2')->orderBy('created_at', 'desc')->paginate(6);
        } else if ($this->sortBy == '3') {
            $testimoni = Testimoni::where('nilai', '3')->orderBy('created_at', 'desc')->paginate(6);
        } else if ($this->sortBy == '4') {
            $testimoni = Testimoni::where('nilai', '4')->orderBy('created_at', 'desc')->paginate(6);
        } else if ($this->sortBy == '5') {
            $testimoni = Testimoni::where('nilai', '5')->orderBy('created_at', 'desc')->paginate(6);
        } else {
            $testimoni = Testimoni::orderBy('created_at', 'desc')->paginate(6);
        }

        return view('livewire.pesan-component', ['testimoni' => $testimoni]);
    }
}
