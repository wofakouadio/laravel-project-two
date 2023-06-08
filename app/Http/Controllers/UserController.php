<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //create new user account
    public function register(){
        return view('users.register');
    }

    //login user account
    public function login(){
        return view('users.login');
    }

    //Register user account
    public function store(Request $request){
        $RegistrationForm = $request->validate([
            'fullname' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:8'
        ]);
        $RegistrationForm['password'] = bcrypt($RegistrationForm['password']);
        User::create($RegistrationForm);
        toastr()->success('Account has been created successfully!', 'Congratulations');
        return redirect('/login');
    }

    //Authenticate user
    public function authenticate(Request $request){
        $AuthenticationForm = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if(Auth::attempt($AuthenticationForm)){
            $request->session()->regenerate();
            toastr()->success('You have logged in successfully!', 'Congratulations');
            return redirect('/');
        }
        return back()->withErrors(['email' => 'Invalid Email Address and or Password'])->onlyInput('email');
    }

    //Logout user
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        toastr()->success('You\'ve been logged out successfully', 'Authentication Notification');
        return redirect('/');
    }
}
