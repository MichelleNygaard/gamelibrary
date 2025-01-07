<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\Auth\AuthController;

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

Route::resource('games', GameController::class);
Route::get('/games/create', [GameController::class, 'create'])->name('games.create');
Route::post('/games', [GameController::class, 'store'])->name('games.store');

// Routes for login, registration and logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Route::middleware(['auth'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard'); // Return the dashboard view
//    })->name('dashboard');
//
//    // You can add more protected routes here
//});

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

//Route::get('/', function () {
//    return view('systems');
//});
//
//Route::get('/nintendo', function () {
//    return view('nintendo');
//});
//
//Route::get('/playstation', function () {
//    return view('playstation');
//});
//
//Route::post('/create', function () {
//    // Handle form submission logic here
//    return redirect('/');
//});
