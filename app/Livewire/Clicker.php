<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $name;
    public $email;
    public $password;

    public function handleClick()
    {
        dump("Click");
    }

    public function createNewUser()
    {
        User::create(
            [
                'name' => $this->name,
                'email'=> $this->email,
                'password'=> $this->password
            ]
            );

        
    }

    public function render()
    {
        $title="Test";
        $users=User::all();

        return view('livewire.clicker',[
            'users'=>$users
        ]);
    }
}
