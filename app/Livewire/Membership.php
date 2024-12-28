<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class Membership extends Component
{
    public $nama;
    public $kekayaan;
    public $hobi;

    public $deletedId = [];

    public $datas;

    public function create()
    {
        $validatedData = $this->validate([
            'nama' => 'required|string',
            'kekayaan' => 'required|integer',
            'hobi' => 'required|string'
        ]);

        Member::create($validatedData);

        return redirect('/');
    }

    public function delete($id)
    {
        //     for ($x = 0; $x < count($this->deletedId); $x++) {
        //         dd($this->deletedId[$x]);
        //          Member::where('id', $id)->delete();
        //     }

        Member::where('id', $id)->delete();
        return redirect('/');
    }

    // public function deleteConfirmation($id)
    // {
    //     $this->deletedId[] = $id;
    //     dd($this->deletedId);
    //     dd(count($this->deletedId));
    //     $deletedDataCount = count($this->deletedId);
    // }

    public function render()
    {
        $this->datas = Member::orderBy('id', 'asc')->get();
        return view('livewire.membership');
    }
}
