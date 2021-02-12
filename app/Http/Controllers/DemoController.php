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
    public function copyImage(Request $request)
    {
        File::copy(public_path('exist/test.png'), public_path('copy/test_copy.png'));

        dd('Copy File dont.');
    }

    /**
     * Write code on Construct
     *
     * @return \Illuminate\Http\Response
     */
    public function copyImage_2(Request $request)
    {
        Storage::copy('exist/test.png', 'copy/test_copy.png');

        dd('Copy File dont.');
    }
}
