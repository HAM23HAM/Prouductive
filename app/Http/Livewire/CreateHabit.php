<?php

namespace App\Http\Livewire;
use App\Models\Todo;
use Carbon\Carbon;
use Livewire\Component;

class CreateHabit extends Component
{
    public $createhabit, $taskname, $description, $datentime, $reward, $step1, $step2, $step3, $step4, $step5, $taskname_id;

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
        ]);

        Todo::updateOrCreate(
            ['id' => $this->taskname_id],
            [
                'task' => $this->taskname,
                'description' => $this->description,
                'datentime' => Carbon::parse($this->datentime)->addDays(21),
                'reward' => $this->reward,
                'step1' => $this->step1,
                'step2' => $this->step2,
                'step3' => $this->step3,
                'step4' => $this->step4,
                'step5' => $this->step5,
            ]
        );

        session()->flash('message', $this->taskname_id ? $this->taskname . ' Updated': 'New Habit Added');
        $this->resetFields();
    }
}
