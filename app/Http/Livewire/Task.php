<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class Task extends Component
{
    public $task, $taskname, $description, $reward, $step, $taskname_id;
    public $isModal;

    public function render()
    {
        $this->task = Todo::orderBy('created_at', 'DESC')->get();
        return view('livewire.task');
    }

    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function resetFields()
    {
        $this->taskname = '';
        $this->description = '';
        $this->reward = '';
        $this->step = '';
        $this->taskname_id = '';
    }

    public function detail()
    {
        $this->openModal();
    }

    public function openModal()
    {
        $this->isModal =true;
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function store()
    {
        $this->validate([
            'taskname' => 'required|string',
            'description' => 'required|string',
            'reward' => 'required|string',
            'step' => 'required|string',
        ]);

        Todo::updateOrCreate(
            ['id' => $this->taskname_id],
            [
                'task' => $this->taskname,
                'description' => $this->description,
                'reward' => $this->reward,
                'step' => $this->step,
            ]
        );

        session()->flash('message', $this->taskname_id ? $this->taskname . ' Diperbaharui':$this->taskname . ' Ditambahkan');
        $this->closeModal();
        $this->resetFields();
    }
}