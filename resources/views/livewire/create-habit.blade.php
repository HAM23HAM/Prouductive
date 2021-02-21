<x-slot name="header_content">
    <h1>{{ __('To Do') }}</h1>

    <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">To Do</a></div>
        <div class="breadcrumb-item"><a href="{{ route('newtodos') }}">Create a New Habit</a></div>
    </div>
</x-slot>
<div class="mt-4 sm:px-10 bg-white">
    <div class="wrap-container overflow: hidden; mb-4 p-3">
        <div class="container">
            <h2 class="section-title">Create New Habit</h2>
            <p class="section-lead">
              Start your habits from here
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
                                    <div class="form-group">
                                        <label for="forTaskname" class="block text-gray-700 text-sm font-bold mb-2">Add new habit</label>
                                        <input type="text" class="form-control" id="forTaskname" wire:model="taskname">
                                        @error('taskname') <span class="text-red-500">Required</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="forReward" class="block text-gray-700 text-sm font-bold mb-2">Set your own reward</label>
                                        <input type="text" class="form-control" id="forReward" wire:model="reward">
                                    </div>
                                    <div class="form-group">
                                        <label for="forDescription" class="block text-gray-700 text-sm font-bold mb-2">Describe your habit</label>
                                        <textarea class="form-control" id="forDescription" wire:model="description"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="forStep" class="block text-gray-700 text-sm font-bold mb-2">Make some step to achive your habit</label>
                                        <input type="text" class="form-control mb-2" id="forStep1" wire:model="step1">
                                        <input type="text" class="form-control mb-2" id="forStep2" wire:model="step2">
                                        <input type="text" class="form-control mb-2" id="forStep3" wire:model="step3">
                                        <input type="text" class="form-control mb-2" id="forStep4" wire:model="step4">
                                        <input type="text" class="form-control mb-2" id="forStep5" wire:model="step5">
                                    </div>
                                </div>
                            </div>
                            *The deadline is automatically set to 21 days from now
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