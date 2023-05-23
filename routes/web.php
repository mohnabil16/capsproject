<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;


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

Route::middleware(['guest'])->group(function (){
    Route::get('/login', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'login']);
});

Route::get('/home', function(){
    return redirect('/user');
});

Route::middleware(['auth'])->group(function (){
    Route::get('/user', [AdminController::class, 'index']);
    Route::get('/operator', [AdminController::class, 'operator'])->middleware('userAccses:operator');
    Route::get('/logout', [SessionController::class, 'logout']);
});


Route::get('/register', [SessionController::class, 'register']);


Route::post('/create', [SessionController::class, 'create']);

