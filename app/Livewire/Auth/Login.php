<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email, $password;

    public function login()
    {
     
        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

    
        if (Auth::attempt($credentials)) {
          
            $user = Auth::user();

            if ($user->role === 'admin') {
              
                return redirect()->intended('/admin');
            } else {
               
                return redirect()->intended('/customer');
            }
        }

        session()->flash('error', 'Invalid credentials');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}

