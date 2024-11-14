<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        $user = new user;
        $user->name = "Kenia";
        $user->email = "k.castro@email.com";
        $user->password = Hash::make('123456');
        $user->age = 29;
        $user->address = "25th Street av 3, CDMX";
        $user->zip_code = 290909;
        $user->save();

        User::create([
        'name' => "Kenia",
        'email' => "k.castro@email.com",
        'password' => Hash::make('123456'),
        'age' => 29,
        'address' => "2>5th Street av 3, CDMX",
        'zip_code' => 290909
        ]);

        return redirect()->route('user.index');

    }
}
