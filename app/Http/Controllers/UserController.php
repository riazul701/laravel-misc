<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * The application's index
     *
     * @var array
     */
    public function index()
    {
        $users = User::where('id', 1)->get();
        $users = User::where('id', 5)->get();
        $users = User::get();

        return view('users',compact('users'));
    }
}
