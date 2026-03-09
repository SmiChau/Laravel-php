<?php

namespace App\Http\Controllers;

use App\Models\UrlShUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function viewReg()
    {
        return view('registration');
    }

    public function regUser(Request $req)
    {
        // // Using dd() is a better way to verify if all inputs are being received correctly
        // dd($req->all());

        if ($req->user_reg) {
            $user = new UrlShUser();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            $user->confirm_password = Hash::make($req->password); // Satisfying the DB requirement
            $user->save();

            return redirect('/reg')->with('success', 'User registered successfully');
        }
    }
}
