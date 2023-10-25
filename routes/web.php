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
    return view('welcome');
});


// Account controller
Route::controller('\App\Http\Controllers\UserController')->prefix('user')->name('user.')->group(
    function() {
        // Get routes
        Route::get('/', 'index')->name('index');
        Route::get('/login', 'login')->name('login');
        Route::get('/register', 'register')->name('register');
        Route::get('/input', 'input')->name('input');
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::post('/input', [EmployeeController::class,'store']);


        // Post routes
        Route::post('/login', 'loginPost');
        Route::post('/register', 'registerPost');
        Route::post('/input', 'inputPost');
    }
);
