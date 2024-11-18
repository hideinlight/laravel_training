<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraPage4Controller extends Controller
{
    public function showRecord()
    {

        $pageNumber = 4;
        return view('ExtraPage4View', ['pageNumber' => $pageNumber]);
    }
}
