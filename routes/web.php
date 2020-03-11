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
    return view('index');
});

Route::get('/list-file', function () {

    $data = \App\PdfModel::orderBy('number', 'desc')->get();

    return view('list',['data'=>$data]);
})->name('list-file');

Route::post('/', 'HandleController@generatePdf')->name('getfact');
