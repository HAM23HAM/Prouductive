<x-slot name="header_content">
    <h1>{{ __('To Do') }}</h1>

    <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">To Do</a></div>
        <div class="breadcrumb-item"><a href="{{ route('newtodos') }}">Task</a></div>
    </div>
</x-slot>
<div class="mt-4 sm:px-10 bg-white">
    <div class="wrap-container overflow: hidden; mb-4 p-3">
        <div class="container">
            <h2 class="section-title">Create New Task</h2>
            <p class="section-lead">
              Start your resolutions from here
            </p>
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="form-group">
                                                <label for="forTaskname" class="block text-gray-700 text-sm font-bold mb-2">Add new task</label>
                                                <input type="text" class="form-control" id="forTaskname" wire:model="taskname">
                                                @error('taskname') <span class="text-red-500">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="forDatentime" class="block text-gray-700 text-sm font-bold mb-2">Set your deadline</label>
                                                <input type="datetime-local" class="form-control" id="forDatentime" wire:model="datentime">
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="forReward" class="block text-gray-700 text-sm font-bold mb-2">Set your own reward</label>
                                            <input type="text" class="form-control" id="forReward" wire:model="reward">
                                            @error('reward') <span class="text-red-500">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="forDescription" class="block text-gray-700 text-sm font-bold mb-2">Describe your task</label>
                                        <textarea class="form-control" id="forDescription" wire:model="description"></textarea>
                                        @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="forStep" class="block text-gray-700 text-sm font-bold mb-2">Make some step to complete your task</label>
                                        <input type="text" class="form-control mb-2" id="forStep" wire:model="step">
                                        <input type="text" class="form-control mb-2" id="forStep" wire:model="step">
                                        <input type="text" class="form-control mb-2" id="forStep" wire:model="step">
                                        <input type="text" class="form-control mb-2" id="forStep" wire:model="step">
                                        <input type="text" class="form-control mb-2" id="forStep" wire:model="step">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button wire:click="store()" class="btn btn-primary mr-1" type="submit">Submit</button>
                            <button wire:click="resetFields()" class="btn btn-danger" type="reset">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>  