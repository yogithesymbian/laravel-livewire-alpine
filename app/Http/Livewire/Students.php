<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Students extends Component
{
    use WithPagination;

    public $firstname;
    public $lastname;
    public $email;
    public $phone;

    public function resetInputFields()
    {
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
    }

    public function store()
    {
        $validateData = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        Student::create($validateData);
        session()->flash('message', 'Student created Successfully');
        $this->resetInputFields();
        $this->emit('studentAdded');
    }

    public function render()
    {
        $students = Student::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.students', ['students' => $students]);
    }
}
