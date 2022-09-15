<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    public function create(Request $request){

        return view("auth.login");
    }

    public function createusers(Request $request){

        $usuarios = DB::table('users')->get();

        return view("usuarios",["users"=>$usuarios]);
    }


    public function store(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->to('/');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
        
    }
}
