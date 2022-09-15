<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Register extends Controller
{
    //

    public function create(){

        return view("auth.register");
    }
    public function store(Request $request){
        

        $user = User::create(request(["name","email","password"]));
        auth()->login($user);
        return redirect()->to("/");
    }
}
