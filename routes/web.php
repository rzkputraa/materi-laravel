<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::get('/form', function () {

    $barang = ['Coffee', 'Tea', 'Milk'];

    session(['barang' => $barang]);

    // [
    //     "barang" => [
    //         'Coffee',
    //         'Tea',
    //         'Milk'
    //     ]
    // ];

    return view('perulangan.listbarang');
});

Route::post('/form-post', function (Request $request) {
    return $request;
})->name('fpost');


Route::get('/registrasi', function () {
    return view();
});
