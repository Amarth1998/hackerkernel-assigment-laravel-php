<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function dashboard()
    {
        $user = User::orderBy('created_at', 'desc')->paginate(5);
        // $user = User::paginate(5);
        return view('users.userdashboard', ['users' => $user]);
    }


    public function createuser()
    {
        return view('users.createuser');
    }


    public function storeuser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'mobile' => 'required|numeric|digits_between:10,13',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->save();
        return redirect()->route('user.userdashboard'); 
    }
}
