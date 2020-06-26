<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    public function getUsers() {
//        $users = User::all();
        $users = User::paginate(15);
        return view('index', compact('users'));
    }
}
