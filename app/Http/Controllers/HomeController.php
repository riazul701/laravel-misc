<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required|integer|min:3|max:10',
            'detail' => 'required',
        ]);

//        Product::create($request->all());
//
//        return redirect()->route('products.index')
//            ->with('success','Product created successfully.');
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_2(Request $request)
    {
        $request->validate([
            'number' => 'bail|required|integer|min:3|max:10',
            'detail' => 'required',
        ]);

//        Product::create($request->all());

//        return redirect()->route('products.index')
//            ->with('success','Product created successfully.');
        return view('form');
    }
}
