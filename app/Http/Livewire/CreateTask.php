<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class CreateTask extends Component
{
    public $createtask, $taskname, $description, $datentime, $reward, $step, $taskname_id;
    
    public function render()
    {
        $this->createtask = Todo::orderBy('created_at', 'DESC')->get();
        return view('livewire.create-task');
    }

    public function create()
    {
        $this->resetFields();
    }

    public function resetFields()
    {
        $this->taskname = '';
        $this->description = '';
        $this->datentime = '';
        $this->reward = '';
        $this->step = '';
        $this->taskname_id = '';
    }

    public function store()
    {
        $this->validate([
            'taskname' => 'required|string',
            'description' => 'required|string',
            'datentime' => 'required',
            'reward' => 'required|string',
            'step' => 'required|string',
        ]);

        Todo::updateOrCreate(
            ['id' => $this->taskname_id],
            [
                'task' => $this->taskname,
                'description' => $this->description,
                'datentime' => $this->datentime,
                'reward' => $this->reward,
                'step' => $this->step,
            ]
        );

        session()->flash('message', $this->taskname_id ? $this->taskname . ' Updated': 'New Task Added');
        $this->resetFields();
    }

}
