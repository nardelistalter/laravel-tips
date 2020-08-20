<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser() {
        //$user = new User();
        //$user->name = "Nardeli Miguel Stalter";
        //$user->email = "nardelistalter@gmail.com";
        //$user->password = Hash::make('12345');
        //$user->save();

        $user = User::Where('id', '=', 1)->first();

        return view('listUser', [
            'userList'=>$user
        ]);
    }
}
