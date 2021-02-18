<?php

namespace App\Http\Livewire;
use App\Models\Todo;
use Carbon\Carbon;
use Livewire\Component;

class CreateHabit extends Component
{
    public $createhabit, $taskname, $description, $datentime, $reward, $step, $taskname_id;

    public function render()
    {
        $this->createhabit = Todo::orderBy('created_at', 'DESC')->get();
        return view('livewire.create-habit');
    }

    public function create()
    {
        $this->resetFields();
    }

    public function resetFields()
    {
        $this->taskname = '';
        $this->description = '';
        $this->reward = '';
        $this->step = '';
        $this->taskname_id = '';
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
                'datentime' => Carbon::parse($this->datentime)->addDays(21),
                'reward' => $this->reward,
                'step' => $this->step,
            ]
        );

        session()->flash('message', $this->taskname_id ? $this->taskname . ' Updated': 'New Habit Added');
        $this->resetFields();
    }
}
