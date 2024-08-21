<?php

namespace App\Http\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
// use App\Models\User;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login.login')->layout('Layouts.main');
    }

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

    public function login()
    {
        $this->validate();if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            if (Auth::user()->is_admin == 1) {
                return redirect(route('admin.dashboard'));
            } else if (Auth::user()->is_teacher == 1) {
                return redirect(route('teacher.dashboard'));
            } else if (Auth::user()->is_student == 1) {
                return redirect(route('student.dashboard'));
            }
        } else {
            session()->flash('error', 'Email and Password were wrong');
        }
    }
}
