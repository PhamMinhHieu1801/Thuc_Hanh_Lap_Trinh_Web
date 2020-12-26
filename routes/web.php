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

// Route::get('/adminhotel', 'Admin\HotelController@index')->name('admin.list_hotel');

// xem list hotel
Route::get('/hotel', 'HotelController@index')->name('list_hotel');

// list room cua 1 khach san
Route::get('/hotel/{id}','HotelController@show')->name('list_room');
Route::get('/search-room-detail/{id}', 'HotelController@searchRoomDetail')->name('list_room.search');

//Room deatil
 Route::get('/hotel/room_detail', function(){
    return view('layout/home/room_detail');
 })->name('room_detail');

Route::get('/home', 'HomeController@index')->name('home');

// Login
Route::get('/login', 'HomeController@getLogin')->name('login');
Route::post('login', 'HomeController@postLogin');
Auth::routes();

//Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', 'Admin\AdminController@index')->name('index');
    Route::resource('users', 'Admin\UserController');
    Route::resource('hotels', 'Admin\HotelController');
    Route::resource('rooms', 'Admin\RoomController');
});

Route::get('admin/hotel/{id}','Admin\HotelController@show')->name('admin.list_room');
Route::post('admin/hotels/{hotel}', 'Admin\HotelController@update')->name('admin.hotels.update');
