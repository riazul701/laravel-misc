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
    public function removeImage(Request $request)
    {
        if(File::exists(public_path('upload/test.png'))){
            File::delete(public_path('upload/test.png'));
        }else{
            dd('File does not exists.');
        }
    }

    /**
     * Write code on Construct
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteImage(Request $request)
    {
        if(Storage::exists('upload/test.png')){
            Storage::delete('upload/test.png');
            /*
                Delete Multiple File like this way
                Storage::delete(['upload/test.png', 'upload/test2.png']);
            */
        }else{
            dd('File does not exists.');
        }
    }
}
