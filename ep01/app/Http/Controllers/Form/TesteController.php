<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function listAllUsers() {
        $users = User::all();
        //dd($users);
        return view('listAllUsers', ['users'=> $users]);
    }

    public function listUser(User $user) {
        //dd($users);
        return view('listUser', ['user'=> $user]);
    }
}
