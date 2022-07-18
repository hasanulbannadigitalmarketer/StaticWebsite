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
    return view('welcome');
});
Route::get('/Home', function () {
    return view('Home');
});
Route::get('/About', function () {
    return view('About');
});
Route::get('/Contect_Us', function () {
    return view('Contect_Us');
});
Route::get('/Web', function () {
    return view('Web');
});
Route::get('/digital', function () {
    return view('digital');
});
Route::get('/graphic', function () {
    return view('graphic');
});
Route::get('/graphic', function () {
    return view('graphic');
});
