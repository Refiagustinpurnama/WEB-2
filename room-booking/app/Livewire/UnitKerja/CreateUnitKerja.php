<?php

namespace App\Livewire\UnitKerja;

use Livewire\Component;
use App\Models\UnitKerja;

class CreateUnitKerja extends Component
{
    public $nama;
    public $keterangan;

    public function store()
    {
        $this->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'nullable|string|max:255',
        ]);

        UnitKerja::create([
            'nama' => $this->nama,
            'keterangan' => $this->keterangan,
        ]);

        session()->flash('message', 'Data berhasil ditambahkan.');

        $this->reset(['nama', 'keterangan']);
        $this->dispatch('unitKerjaUpdated');
    }

    public function render()
    {
        return view('livewire.unit-kerja.create-unit-kerja');
    }
}
