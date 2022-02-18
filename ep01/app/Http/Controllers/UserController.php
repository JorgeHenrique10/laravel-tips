<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function listUser()
    {
        // $user = new User();
        // $user->name = "Jorge Henrique";
        // $user->email = "jorgehenriquejds@gmail.com";
        // $user->password = Hash::make("123");
        // $user->save();
        // echo "<h1>Listagem de Usuário</h1>";
        $user = User::where('id', '=', 1)->first();
        return view('listUser', ["user" => $user]);
    }
}
