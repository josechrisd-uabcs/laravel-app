<?php

use App\Http\Controllers\WaveController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/saludo/{first_name}/{last_name?}', WaveController::class)->whereAlpha('first_name')->whereAlpha('last_name');

Route::get('/suma/{a}/{b}', function (float $a, float $b) {
    return ($a + $b);
})->whereNumber('a')->whereNumber('b');

Route::get('/resta/{a}/{b}', function (float $a, float $b) {
    return ($a - $b);
})->whereNumber('a')->whereNumber('b');

Route::get('/multiplicacion/{a}/{b}', function (float $a, float $b) {
    return ($a * $b);
})->whereNumber('a')->whereNumber('b');

Route::get('/division/{a}/{b}', function (float $a, float $b) {
    return ($a / $b);
})->whereNumber('a')->whereNumber('b');