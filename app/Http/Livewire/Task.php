<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class Task extends Component
{
    public $task;

    public function render()
    {
        $this->task = Todo::orderBy('created_at', 'DESC')->get();
        return view('livewire.task');
    }
}