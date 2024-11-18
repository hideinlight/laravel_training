<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraPage2Controller extends Controller
{
    public function showRecord()
    {

        $pageNumber = 2;
        return view('ExtraPage2View', ['pageNumber' => $pageNumber]);
    }
}
