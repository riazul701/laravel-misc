<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class HomeController extends Controller
{
    public function tags()
    {
        $tags = DB::table('tags')->paginate(7);
        return view('tags',compact('tags'));
    }

}
