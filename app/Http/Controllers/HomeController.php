<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Event;
use App\Events\SendMail;
class HomeController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }
    public function index()
    {
        Event::fire(new SendMail(2));
//        return view('home');
        return view('welcome');
    }
}
