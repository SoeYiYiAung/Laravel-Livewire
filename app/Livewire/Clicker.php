<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Clicker extends Component
{
    use WithPagination;

    #[Rule('required|min:2|max:50')]
    public $name='';

    #[Rule('required|email|unique:users')]
    public $email='';

    #[Rule('required|min:5')]
    public $password='';

    public function handleClick()
    {
        dump("Click");
    }

    public function createNewUser()
    {
        $validated= $this->validate();

        // $this->validate([
        //     'name' => 'required|min:2|max:50',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:5'
        // ]);

        User::create(
            [
                'name' => $validated['name'],
                'email'=> $validated['email'],
                'password'=> $validated['password']
            ]
            );

        $this->reset(['name','email','password']);
        request()->session()->flash('success','User created successfully!');
    }

    public function render()
    {
        $title="Test";
        // $users=User::all();
        $users=User::paginate(2);

        return view('livewire.clicker',[
            'users'=>$users
        ]);
    }
}
