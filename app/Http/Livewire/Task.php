<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class Task extends Component
{
    public $task, $taskname, $description, $datentime, $reward, $step, $taskname_id;
    public $isModal;

    public function render()
    {
        $this->task = Todo::orderBy('created_at', 'DESC')->get();
        return view('livewire.task');
    }

    public function delete()
    {
        Todo::destroy(
            ['id' => $this->taskname_id],
            [
                'task' => $this->taskname,
                'description' => $this->description,
                'datentime' => $this->datentime,
                'reward' => $this->reward,
                'step' => $this->step,
            ]
            );
    }

    public function detail($id)
    {
        $task = Todo::find($id);
        $this->taskname_id = $id;
        $this->taskname = $task->task;
        $this->description = $task->description;
        $this->datentime = $task->datentime;
        $this->reward = $task->reward;
        $this->step = $task->step;

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

}