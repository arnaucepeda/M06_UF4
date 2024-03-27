<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(int $user_id): view
    {
        // dd();

        // SELECT * FROM users
        //dd( User::all() );

        // SELECT * FROM users WHERE id = 1;
        $user = User::find($user_id);

        return view('welcome', ['user' => $user]);
    }
}
