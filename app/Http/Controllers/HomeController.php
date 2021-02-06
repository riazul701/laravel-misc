<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function notification()
    {
        session()->put('success','Item created successfully.');

        return view('notification-check');
    }

    public function notification_info()
    {
        session()->put('info','This is for info.');

        return view('notification-check');
    }

    public function notification_warning()
    {
        session()->put('warning','This is for warning.');

        return view('notification-check');
    }

    public function notification_error()
    {
        session()->put('error','This is for error.');

        return view('notification-check');
    }
}
