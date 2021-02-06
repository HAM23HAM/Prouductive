<x-slot name="header_content">
    <h1>{{ __('Buat Tugas Baru') }}</h1>

    <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Tugas</a></div>
        <div class="breadcrumb-item"><a href="{{ route('user') }}">Buat Tugas Baru</a></div>
    </div>
</x-slot>

<div>
    <!-- <livewire:create-user action="createUser" /> -->
</div>
