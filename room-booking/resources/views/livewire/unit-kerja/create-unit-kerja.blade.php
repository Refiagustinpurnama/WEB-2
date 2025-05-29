<div class="mb-4 p-4 border rounded bg-white shadow">
    <h2 class="text-lg font-semibold mb-2">Tambah Unit Kerja</h2>

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-800 p-2 mb-2 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="store">
        <div class="mb-2">
            <label class="block text-sm">Nama Unit Kerja</label>
            <input type="text" wire:model="nama" class="w-full border rounded px-2 py-1">
            @error('nama') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-2">
            <label class="block text-sm">Keterangan</label>
            <input type="text" wire:model="keterangan" class="w-full border rounded px-2 py-1">
            @error('keterangan') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-1 rounded">Simpan</button>
    </form>
</div>
