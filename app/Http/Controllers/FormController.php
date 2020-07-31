<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\CheckOddEvenRule;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('myForm');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $input = request()->validate([
            'name' => 'required',
            'number' => [
                'required',
                new CheckOddEvenRule()
            ]
        ]);
        dd("You can proceed now...");
    }
}
