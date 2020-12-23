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
        return view('layout.home.list_hotel', compact('hotels'));
    }
    //minh quang

    // public function showRoom() {
    //     // $rooms = Room::all();
    //     // return view('layout.home.list_room', compact('rooms'));
    //     $rooms = DB::table('hotels')->join('rooms', 'hotels.id', '=', 'rooms.hotel_id')->select('hotels.*', 'rooms.*')->get();
    //     return view('layout.home.list_room', compact('rooms'));
    // }
    //linh chi
    public function show($id)
    {
        $hotelDetail = Hotel::findOrFail($id);
        $rooms = $hotelDetail->rooms();
        return view('layout.home.list_room', compact('hotelDetail', 'rooms'));
    }

    public function searchRoomDetail(Request $request, $id)
    {
        $keyword = $request->search;
        $hotelDetail = Hotel::find($id);
        $rooms = $hotelDetail->rooms()
            ->where('name', 'like', '%' . $keyword . '%');
        return view('layout.home.list_room', compact('hotelDetail', 'rooms', 'keyword'));
    }
}
