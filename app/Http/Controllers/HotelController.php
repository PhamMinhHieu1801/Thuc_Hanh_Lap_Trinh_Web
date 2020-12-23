<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    //

    public function index () {
        $hotels = Hotel::all();
        $list_hotel = Hotel::paginate(6);
        return view('layout.home.list_hotel', compact('hotels'))->with('hotels',$list_hotel);
    }

    public function showRoom() {
        // $rooms = Room::all();
        // return view('layout.home.list_room', compact('rooms'));

        $rooms = DB::table('hotels')->join('rooms', 'hotels.id', '=', 'rooms.hotel_id')->select('hotels.*', 'rooms.*')->get();
        return view('layout.home.list_room', compact('rooms'));
    }
}
