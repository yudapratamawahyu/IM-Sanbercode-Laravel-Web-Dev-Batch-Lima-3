<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [HomeController::class, "home"]);

Route::get('/form_register', [AuthController::class, "register"]);

Route::post('/signup', [AuthController::class, "daftar_register"]);

Route::get('/table', function() {
    return view('table.table');
});

Route::get('/data-table', function() {
    return view('data-table.data-table');
});
