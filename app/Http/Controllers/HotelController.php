<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    public function index () {
        $hotels = Hotel::all();
        $list_hotel = Hotel::paginate(6);
        return view('layout.home.list_hotel', compact('hotels'))->with('hotels',$list_hotel);
    }
    public function show($id)
    {
        $hotelDetail = Hotel::findOrFail($id);
        $rooms = Room::where('hotel_id',$id)->get();
        return view('layout.home.list_room', compact('hotelDetail', 'rooms'));
    }

    public function searchRoomDetail(Request $request, $id)
    {
        $keyword = $request->room_search;
        $rooms = Room::where('hotel_id',$id)->where('name', 'like', '%' . $keyword . '%')->get();
        return view('layout.home.list_room', compact('hotelDetail', 'rooms', 'keyword'));
    }

}
