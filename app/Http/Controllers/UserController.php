<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        return 'User ID:'. $id;
    }
}
