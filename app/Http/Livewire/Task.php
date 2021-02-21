<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;
use Carbon\Carbon;

class Task extends Component
{
    public $task, $taskname, $description, $datentime, $reward, $step1, $step2, $step3, $step4, $step5, $taskname_id, $complete;
    public $isModal;

    public function render()
    {
        $this->task = Todo::orderBy('created_at', 'DESC')->get();
        return view('livewire.task');
    }

    public function complete($id)
    {
        $task = Todo::find($id);
        $task->delete();
        session()->flash('message', $this->taskname . ' task completed');
    }

    public function delete($id)
    {
        $task = Todo::find($id);
        $task->delete();
        session()->flash('message', $this->taskname . ' task deleted');
    }

    public function detail($id)
    {
        $task = Todo::find($id);
        $this->taskname_id = $id;
        $this->taskname = $task->task;
        $this->description = $task->description;
        $this->datentime = $task->datentime;
        $this->reward = $task->reward;
        $this->step1 = $task->step1;
        $this->step2 = $task->step2;
        $this->step3 = $task->step3;
        $this->step4 = $task->step4;
        $this->step5 = $task->step5;
        

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