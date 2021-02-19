<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;
use Carbon\Carbon;

class Task extends Component
{
    public $task, $taskname, $description, $datentime, $reward, $step, $taskname_id, $created_at, $today, $duedate;
    public $isModal;

    public function render()
    {
        $this->task = Todo::orderBy('created_at', 'DESC')->get();
        $this->today = Carbon::now();
        $this->duedate = Carbon::parse($this->datentime)->diffForHumans();
        return view('livewire.task');
    }

    public function complete($id)
    {
        $task = Todo::find($id);
        $task->delete();
        session()->flash('message', $this->taskname . 'task completed');
    }

    public function delete($id)
    {
        $task = Todo::find($id);
        $task->delete();
        session()->flash('message', $this->taskname . 'task deleted');
    }

    public function detail($id)
    {
        $task = Todo::find($id);
        $this->taskname_id = $id;
        $this->created_at = $task->created_at;
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