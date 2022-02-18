<?php

namespace App\Http\Controllers\Foms;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function listAllUsers()
    {
        $users = User::all();

        return view('listAllUsers', ["users" => $users]);
    }

    public function listUser(User $user)
    {
        return view('listUser', ["user" => $user]);
    }

    public function addUser()
    {
        return view("addUser");
    }

    public function editUser(User $user)
    {
        return view("editUser", ["user" => $user]);
    }

    public function storeUser(Request $request)
    {
        $user = new User();
        $user->name = $request->nome;
        $user->email = $request->email;
        $user->password = Hash::make($request->senha);
        $user->save();

        return redirect()->route('users.allUsers');
    }
    public function edit(User $user, Request $request)
    {
        $user->name = $request->nome;

        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $user->email = $request->email;
        }
        if (!empty($request->password)) {
            $user->password = Hash::make($request->senha);
        }
        $user->save();

        return redirect()->route('users.allUsers');
    }

    public function destroy(User $user)
    {
        $user->delete();
    }
}
