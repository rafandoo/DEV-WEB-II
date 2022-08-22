<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HojeController;
use App\Http\Controllers\TabController;
use App\Http\Controllers\PiramideController;

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

Route::get('/jogadores', function() {
    echo "1 - Neymar<br>";
    echo "2 - Pelé<br>";
    echo "3 - Zico<br>";
});

Route::redirect('/players', '/jogadores');

Route::get('/hoje', [HojeController::class, 'teste']);

Route::get('/tab/{id?}/{ini?}/{fim?}', [TabController::class, 'tab']);

Route::get('/piramide/{ab}/{h}/{tt?}', [PiramideController::class, 'piramide']);

