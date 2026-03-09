<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewReg()
    {
        return view('registration');
    }

    public function regUser(Request $req)
    {
        // Using dd() is a better way to verify if all inputs are being received correctly
        dd($req->all());
    }
}
