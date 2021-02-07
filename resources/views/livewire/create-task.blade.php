<x-slot name="header_content">
    <h1>{{ __('Buat Tugas Baru') }}</h1>

    <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Tugas</a></div>
        <div class="breadcrumb-item"><a href="{{ route('user') }}">Buat Tugas Baru</a></div>
    </div>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Tambah Tugas</button>

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100 text-center">
                        <th class="border px-4 py-2" width="20%">Task</th>
                        <th class="border px-4 py-2" width="30%">Description</th>
                        <th class="border px-4 py-2" width="15%">Reward</th>
                        <th class="border px-4 py-2" width="25%">Step</th>
                        <th class="border px-4 py-2" width="20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($createtask as $row)
                        <tr>
                            <td class="border px-4 py-2">{{ $row->task }}</td>
                            <td class="border px-4 py-2">{{ $row->description }}</td>
                            <td class="border px-4 py-2">{{ $row->reward }}</td>
                            <td class="border px-4 py-2">{{ $row->step }}</td>
                            <td class="border px-4 py-2 text-center">
                                <button wire:click="edit({{ $row->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</button>
                                <button wire:click="delete({{ $row->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Hapus</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2 text-center" colspan="5">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
