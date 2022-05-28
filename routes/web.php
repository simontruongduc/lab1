<?php

use App\Http\Controllers\Controller;
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
    return view('home');
});
Route::post('/regist',[Controller::class,'regist']);
Route::get('/question',[Controller::class,'question']);
Route::post('/question',[Controller::class,'save']);

Route::get('/finish', function () {
    return view('finish');
});
Route::get('/score', function () {
    return view('score');
});
Route::get('/', function () {
    return view('home');
});
