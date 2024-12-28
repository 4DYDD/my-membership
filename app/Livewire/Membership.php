<?php

namespace App\Livewire;

use App\Models\membership as ModelsMembership;
use Livewire\Component;

class Membership extends Component
{
    public $nama;
    public $kekayaan;
    public $hobi;

    public $datas;

    public function create()
    {
        // JANGAN LUPA DIVALIDADSI YAA
        ModelsMembership::create([
            "nama" => $this->nama,
            "kekayaan" => $this->kekayaan,
            "hobi" => $this->hobi
        ]);
    }

    public function render()
    {
        $this->datas = ModelsMembership::orderBy('Nama', 'asc')->get();
        return view('livewire.membership');
    }
}
