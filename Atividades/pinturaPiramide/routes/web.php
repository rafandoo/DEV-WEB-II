<?php

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

Route::get('/piramide/{ab}/{h}/{tt}', function ($ab, $h, $tt) {
    return view('piramide', compact('h','ab','tt'));
})->where(['ab' => '[0-9999.99]+', 'h' => '[0-9999.99]+', 'tt' => '[1-3]']);