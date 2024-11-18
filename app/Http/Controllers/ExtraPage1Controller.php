<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraPage1Controller extends Controller
{
    public function showRecord()
    {

        $pageNumber = 1;
        return view('ExtraPage1View', ['pageNumber' => $pageNumber]);
    }
}
