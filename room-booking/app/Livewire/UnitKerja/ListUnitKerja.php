<?php

namespace App\Livewire\UnitKerja;

use Livewire\Component;
use App\Models\UnitKerja;

class ListUnitKerja extends Component
{
    public $unitKerjas;

    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        $this->unitKerjas = UnitKerja::all();
    }

    public function delete($id)
    {
        UnitKerja::destroy($id);
        $this->loadData();
        session()->flash('message', 'Data berhasil dihapus.');
    }

    public function render()
    {
        return view('livewire.unit-kerja.list-unit-kerja');
    }
}
