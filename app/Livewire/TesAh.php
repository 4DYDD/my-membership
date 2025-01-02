<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class TesAh extends Component
{
    public $datas = [];
    public $samting = "woy";

    public function render()
    {
        $this->datas = Member::orderBy('id', 'asc')->get();
        return view('livewire.tes-ah');
    }
}
