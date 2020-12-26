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
        $rooms = Room::where('hotel_id',$id)->paginate(4);
        return view('layout.home.list_room', compact('hotelDetail', 'rooms'));
    }

    public function searchRoomDetail(Request $request, $id)
    {
        $hotelDetail = Hotel::findOrFail($id);
        $keyword = $request->room_search;
        $rooms = Room::where('hotel_id',$id)->where('name', 'like', '%' . $keyword . '%')->paginate(4);
        return view('layout.home.list_room', compact('hotelDetail', 'rooms', 'keyword'));
    }

    public function searchHotelDetail(Request $request)
    {
        $keyword = $request->hotel_search;
        $hotels = Hotel::where('name', 'like', '%' . $keyword . '%')
        ->orwhere('local','like', '%' . $keyword . '%')->paginate(6);
        return view('layout.home.list_hotel', compact('hotels', 'keyword'));
    }

}
