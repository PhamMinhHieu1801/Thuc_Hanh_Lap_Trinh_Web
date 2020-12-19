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
    return view('index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/contact', function(){
    return view('layout/home/contact');
})->name('contact');
// list room cua 1 khach san
Route::get('/hotel/list_room', function(){
    return view('layout/home/list_room');
})->name('list_room');

// xem chi tiet room
Route::get('/hotel/room', function(){
    return view('layout/home/list_room');
})->name('room');
