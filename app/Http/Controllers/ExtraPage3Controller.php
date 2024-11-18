<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraPage3Controller extends Controller
{
    public function showRecord()
    {
        $pageNumber = 3;
        return view('ExtraPage3View', ['pageNumber' => $pageNumber]);
    }
}
