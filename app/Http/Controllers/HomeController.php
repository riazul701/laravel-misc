<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create_success(Request $request)
    {
//        $this->validate($request,[
//            'title' => 'required',
//            'details' => 'required'
//        ]);
//
//        $items = Item::create($request->all());
//
//        return back()->with('success','Item created successfully!');
        return redirect()->route('home')->with('success','Item created successfully!');
    }

    public function create_error(Request $request)
    {
        return redirect()->route('home')
            ->with('error','You have no permission for this page!');
    }

    public function create_warning(Request $request)
    {
        return redirect()->route('home')
            ->with('warning',"Don't Open this link");
    }

    public function create_info(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'details' => 'required'
        ]);

        $items = Item::create($request->all());

        return back()->with('info','You added new items, follow next step!');
    }

    public function create_validate(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'details' => 'required'
        ]);
    }
}
