<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Storage;

class DemoController extends Controller
{
    /**
     * Write code on Construct
     *
     * @return \Illuminate\Http\Response
     */
    public function moveImage(Request $request)
    {
        File::move(public_path('exist/test.png'), public_path('move/test_move.png'));

        dd('Copy File dont.');
    }

    /**
     * Write code on Construct
     *
     * @return \Illuminate\Http\Response
     */
    public function moveImage_2(Request $request)
    {
        Storage::move('exist/test.png', 'move/test_move.png');

        dd('Copy File dont.');
    }
}
