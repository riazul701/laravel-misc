<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create_1()
    {
        $date = date('Y-m-d H:i:s');
        $newDate = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)
            ->format('d-m-Y');

        dd($newDate);
    }

    public function create_2()
    {
        $date = "2020-02-22";
        $newDate = \Carbon\Carbon::createFromFormat('Y-m-d', $date)
            ->format('m/d/Y');
        dd($newDate);
    }

    public function create_3()
    {
        $date = "02/22/2020";
        $newDate = \Carbon\Carbon::createFromFormat('m/d/Y', $date)
            ->format('Y-m-d');
        dd($newDate);
    }

    public function create_4()
    {
        $date = "2020-02-22";
        $newDate = \Carbon\Carbon::createFromFormat('Y-m-d', $date)
            ->format('d/m/Y');
        dd($newDate);
    }
}
