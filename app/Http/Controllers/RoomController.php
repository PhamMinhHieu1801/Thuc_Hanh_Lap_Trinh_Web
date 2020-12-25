<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\FeedBack;
use App\Models\BookingHistory;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function show($id)
    {
        $roomDetail = Room::findOrFail($id);
        $comments = FeedBack::join('booking_historys',  'feed_backs.booking_id', '=', 'booking_historys.id')
        ->join('users', 'booking_historys.user_id', '=', 'users.id')
        ->where('booking_historys.room_id', $id)
        ->select('feed_backs.id','feed_backs.user_id','feed_backs.description','users.name','booking_historys.room_id')
        ->get();
        $bookeds = BookingHistory::where('room_id',$id)->get();
        return view('layout.home.room_detail', compact('roomDetail','comments','bookeds'));
      
    }

}
