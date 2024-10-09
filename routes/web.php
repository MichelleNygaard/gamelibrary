<?php

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

Route::get('/', function () {
    return view('systems');
});

Route::get('/nintendo', function () {
    return view('nintendo');
});

Route::get('/playstation', function () {
    return view('playstation');
});

Route::post('/create', function () {
    // Handle form submission logic here
    return redirect('/');
});
