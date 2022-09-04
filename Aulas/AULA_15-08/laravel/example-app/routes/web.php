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
    return "Home - GET";
});

Route::post('/', function () {
    return "Home - POST";
});

Route::put('/', function () {
    return "Home - PUT";
});

Route::delete('/', function () {
    return "Home - DELETE";
});

Route::get('/teste', function () {
    return "Teste";
});

Route::get('/tab/{id}/{ini}/{fim}', function ($id, $ini, $fim) {
    for($i = $ini; $i <= $fim; $i++) {
        echo "</br>";
        echo $id . " x " . $i . " = " . $id * $i;
    }
})->where(['id' => '[0-9]+', 'ini' => '[0-9]+', 'fim' => '[0-9]+']);

Route::get('/valida/{texto}/{numero}', function ($texto, $numero) {
    return "Texto: " . $texto . " - Numero: " . $numero;
})->where('texto', '[a-zA-Z]+')->where('numero', '[0-9]+');

Route::prefix('/app')->group(function () {
    Route::get('/', function () {
        return "app - home";
    });
    
    Route::get('/teste', function () {
        return "app - teste";
    });
});