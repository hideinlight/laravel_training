<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ExtraPage1Controller;
use App\Http\Controllers\ExtraPage2Controller;
use App\Http\Controllers\ExtraPage3Controller;
use App\Http\Controllers\ExtraPage4Controller;
use App\Http\Controllers\ExtraPage5Controller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/gebruikers', function () {
    return view('gebruikers');
});

Route::get('/invoiceView', function () {
    return view('invoiceView');
});

Route::get('/invoiceView',[InvoiceController::class,'createRecord']);

Route::get('/ExtraPage1View', [ExtraPage1Controller::class, 'showRecord']);
Route::get('/ExtraPage2View', [ExtraPage2Controller::class, 'showRecord']);
Route::get('/ExtraPage3View', [ExtraPage3Controller::class, 'showRecord']);
Route::get('/ExtraPage4View', [ExtraPage4Controller::class, 'showRecord']);
Route::get('/ExtraPage5View', [ExtraPage5Controller::class, 'showRecord']);


