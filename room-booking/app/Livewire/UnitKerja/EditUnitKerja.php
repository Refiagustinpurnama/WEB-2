<?php

namespace App\Livewire\UnitKerja;

use Livewire\Component;
use App\Models\UnitKerja;

class EditUnitKerja extends Component
{
    public $unitKerjaId;
    public $nama;
    public $keterangan;

    protected $listeners = ['editUnitKerja' => 'loadData'];

    public function loadData($id)
    {
        $unit = UnitKerja::findOrFail($id);
        $this->unitKerjaId = $unit->id;
        $this->nama = $unit->nama;
        $this->keterangan = $unit->keterangan;
    }

    public function update()
    {
        $this->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $unit = UnitKerja::findOrFail($this->unitKerjaId);
        $unit->update([
            'nama' => $this->nama,
            'keterangan' => $this->keterangan,
        ]);

        session()->flash('message', 'Data berhasil diubah.');
        $this->dispatch('unitKerjaUpdated');
    }

    public function render()
    {
        return view('livewire.unit-kerja.edit-unit-kerja');
    }
}
