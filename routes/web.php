<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::get('/contact', [UserController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
    
});

Route::get('band', function () {
    return view('band');
    
});
Route::get('tour', function () {
    return view('tour');
    
});


