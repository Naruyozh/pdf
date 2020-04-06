<?php

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

Route::get('/pdf', function () {
    return view('mypdf');
});

Route::get('/pdf2', function () {
    return view('pdf');
});

Route::name('print')->get('/imprimir', 'CustomerController@imprimir');

Route::name('print')->get('/imprimirPDF', 'CustomerController@imprimir2');

Route::name('print')->get('/imprimirCredencial', 'CustomerController@imprimircredencial');