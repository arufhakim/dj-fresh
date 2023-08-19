<?php

namespace App\Http\Livewire;

use App\Models\Monitoring;
use Livewire\Component;

class MonitoringComponent extends Component
{
   

    public $start;
    public $end;

    public function mount()
    {
        $this->start =  date('Y-m-d', strtotime('monday this week'));
        $this->end =  date('Y-m-d', strtotime('sunday this week'));
    }

    public function render()
    {
        $monitoring = Monitoring::whereBetween('tanggal', array($this->start, $this->end))->orderBy('tanggal', 'asc')->get();

        return view('livewire.monitoring-component', ['monitoring' => $monitoring]);
    }
}
