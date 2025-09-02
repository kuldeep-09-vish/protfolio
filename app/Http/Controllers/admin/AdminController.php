<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function login(){
        return view('admin.login');
    }

    public function loginsubmit(Request $request){
    $validation = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

        if (Auth::attempt($validation)) {
            $request->session()->regenerate(); 
            return redirect()->route('dashboard')->with('success', 'Login Successfully');
        }

        return redirect()->route('login')->with('error', 'Check email or password');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function logout(Request $request){
        Auth::logout(); 
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 
        return redirect()->route('login')->with('success', 'Logout Successfully');
    }
}