<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\FeedBack;
use App\Models\BookingHistory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookingHistoryController extends Controller
{
    public function store($id)
    {
        $roomDetail = Room::findOrFail($id);
        BookingHistory::create([
            "room_id" => $id,
            "user_id" => Auth::user()->id,
        ]);
        return view('layout.home.booking_room');
    }

    public function destroy($id)
    {
        $roomDetail = Room::find($id);
     //   $roomDetail->booking_historys()->detach(Auth::id());
        return redirect()->route('room_detail', $id);
    }
}
