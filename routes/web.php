<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {   
    return view('welcome');
});

Route::get('/export-pdf', function () {      
    $fileContent = Storage::get('resultados.json');
    $jsonData = json_decode($fileContent);   
    $ppaData = $jsonData->ppa->discount_ppa->projection;

    $pdf = App::make('dompdf.wrapper');
    $pdf = PDF::loadView('graphics', ['ppaData' =>$ppaData]);
    
    return $pdf->download('graphics.pdf');
});
   

