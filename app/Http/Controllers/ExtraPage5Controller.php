<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraPage5Controller extends Controller
{
    public function showRecord()
    {

        $pageNumber = 5;
        return view('ExtraPage5View', ['pageNumber' => $pageNumber]);
    }
}
