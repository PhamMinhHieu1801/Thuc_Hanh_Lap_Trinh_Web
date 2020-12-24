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


// xem list hotel
Route::get('/hotel', 'HotelController@index')->name('list_hotel');
// list room cua 1 khach san
Route::get('/hotel/{id}','HotelController@show')->name('list_room');
Route::get('/search-room-detail/{id}', 'HotelController@searchRoomDetail')->name('list_room.search');

//Room detail
 Route::get('/hotel/room/{id}','RoomController@show')->name('room_detail');


Route::get('/home', 'HomeController@index')->name('home');

// Login
Route::get('/login', 'HomeController@getLogin')->name('login');
Route::post('login', 'HomeController@postLogin');
Auth::routes();
//FeedBack
Route::post('room/feedback/store/{id}', 'FeedBackController@storeRoomFeedBack')->name('feedback.store');
Route::delete('room/feedback/delete/{id}', 'FeedBackController@destroyReview')->name('feedback.destroy');
Route::post('room/feedback/update/{id}', 'FeedBackController@updateReview')->name('feedback.update');
