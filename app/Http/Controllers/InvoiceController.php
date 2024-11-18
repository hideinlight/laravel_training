<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index() {
        $data = Invoice::all();
        return view('invoiceView',$data);
    }

    public function createRecord() {
        
        $data = array(
           'surname' => 'odendaal',     
        );
        // Invoice::create($data);
        $data2 = Invoice::all();
        // echo "<pre>";
        // print_r($data2);
        // echo "</pre>";
        return view('invoiceView',['output' => $data2]);
    }
}
