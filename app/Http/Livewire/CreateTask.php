<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class CreateTask extends Component
{
    public $createtask;
    
    public function render()
    {
        $this->createtask = Todo::orderBy('created_at', 'DESC')->get();
        return view('livewire.create-task');
    }

}
