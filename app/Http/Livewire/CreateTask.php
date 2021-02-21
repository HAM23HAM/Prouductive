<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class CreateTask extends Component
{
    public $createtask, $taskname, $description, $datentime, $reward, $step1, $step2, $step3, $step4, $step5, $taskname_id;
    
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
        $this->step1 = '';
        $this->step2 = '';
        $this->step3 = '';
        $this->step4 = '';
        $this->step5 = '';
        $this->taskname_id = '';
    }

    public function store()
    {
        $this->validate([
            'taskname' => 'required|string',
            'datentime' => 'required',
        ]);

        Todo::updateOrCreate(
            ['id' => $this->taskname_id],
            [
                'task' => $this->taskname,
                'description' => $this->description,
                'datentime' => $this->datentime,
                'reward' => $this->reward,
                'step1' => $this->step1,
                'step2' => $this->step2,
                'step3' => $this->step3,
                'step4' => $this->step4,
                'step5' => $this->step5,
            ]
        );

        session()->flash('message', $this->taskname_id ? $this->taskname . ' Task updated': 'New task added');
        $this->resetFields();
    }

}
