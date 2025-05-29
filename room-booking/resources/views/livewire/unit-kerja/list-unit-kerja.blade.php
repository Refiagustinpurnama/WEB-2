<div class="p-4 border rounded bg-white shadow">
    <h2 class="text-lg font-semibold mb-4">Daftar Unit Kerja</h2>

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-800 p-2 mb-2 rounded">
            {{ session('message') }}
        </div>
    @endif

    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2">#</th>
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Keterangan</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($unitKerjas as $index => $unit)
                <tr>
                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $unit->nama }}</td>
                    <td class="border px-4 py-2">{{ $unit->keterangan }}</td>
                    <td class="border px-4 py-2 space-x-2">
                        <button wire:click="$emit('editUnitKerja', {{ $unit->id }})"
                            class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</button>
                        <button wire:click="delete({{ $unit->id }})"
                            class="bg-red-600 text-white px-2 py-1 rounded">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
