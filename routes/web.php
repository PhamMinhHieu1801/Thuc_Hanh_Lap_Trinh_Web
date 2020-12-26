<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/', 'HomeController@index')->name('index');

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/contact', function(){
    return view('layout/home/edit_user');
})->name('edit_user');

// xem list hotel
Route::get('/hotel', 'HotelController@index')->name('list_hotel');
Route::get('/search-hotel-detail', 'HotelController@searchHotelDetail')->name('list_hotel.search');

// list room cua 1 khach san
Route::get('/hotel/{id}','HotelController@show')->name('list_room');
Route::get('/search-room-detail/{id}', 'HotelController@searchRoomDetail')->name('list_room.search');

//Room detail
 Route::get('/hotel/room/{id}','RoomController@show')->name('room_detail');

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

  //FeedBack
Route::post('room/feedback/store/{id}', 'FeedBackController@storeRoomFeedBack')->name('feedback.store');
Route::delete('room/feedback/delete/{id}', 'FeedBackController@destroyFeedBack')->name('feedback.destroy');
Route::post('room/feedback/update/{id}', 'FeedBackController@updateReview')->name('feedback.update');

// booking and unbook
Route::post('/user-booking/{id}', 'RoomController@store')->name('users_booking.store');
Route::get('/user-booking/{id}', 'RoomController@destroy')->name('users_booking.destroy');

// Route::get('admin/hotel/newroom', 'Admin\RoomController@create')->name('admin.newroom');
Route::get('admin/hotel/{id}/rooms/create','Admin\RoomController@create')->name('admin.rooms.create');
Route::post('admin/hotel/{id}', 'Admin\RoomController@store')->name('admin.rooms.store');
