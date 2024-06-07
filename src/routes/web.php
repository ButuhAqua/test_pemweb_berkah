<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/guru', function () {
    $gurus = DB::select('SELECT * FROM gurus');
    $mapels = DB::select('SELECT * FROM mapels');
    return view('guru', compact('gurus', 'mapels'));
});