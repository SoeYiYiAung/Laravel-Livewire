<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public function handleClick()
    {
        dump("Click");
    }

    public function createNewUser()
    {
        User::create(
            [
                'name' => "test user",
                'email'=> "test@gmail.com",
                'password'=> "123456"
            ]
            );

        
    }

    public function render()
    {
        $title="Test";
        $users=User::all();

        return view('livewire.clicker',[
            'title' => $title,
            'users'=>$users
        ]);
    }
}
