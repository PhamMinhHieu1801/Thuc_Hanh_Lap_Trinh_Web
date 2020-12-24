<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\FeedBack;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function show($id)
    {
        $roomDetail = Room::findOrFail($id);
        $comments = FeedBack::join('booking_historys', 'feed_backs.booking_id', '=', 'booking_historys.id')
        ->join('rooms', 'booking_historys.room_id', '=', 'rooms.id')
        ->where('rooms.id', $id)
        ->get();
       // dd($comments);
        return view('layout.home.room_detail', compact('roomDetail','comments'));
    }

}
