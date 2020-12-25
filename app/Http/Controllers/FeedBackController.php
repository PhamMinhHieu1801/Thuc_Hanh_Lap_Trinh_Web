<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\BookingHistory;
use App\Models\User;
use App\Models\Room;
use App\Models\FeedBack;


class FeedBackController extends Controller
{
    public function storeRoomFeedBack(Request $request)
    {
        $room = Room::findOrFail($request->room_id);
        $booked = BookingHistory::where('user_id',Auth::user()->id)->where('room_id',$room->id)->get();
       
        foreach ($booked as $value){
            $booking_id = $value->id;
            break;
        }
      
        FeedBack::create([
            "description" => $request->content,
            "booking_id" => $booking_id,
            "user_id" => Auth::user()->id,
        ]);
        return redirect()->back();
    }

    public function destroyFeedBack($id)
    {
        $feedback = FeedBack::findOrFail($id);
        $feedback->delete();
        return redirect()->back();
    }

    public function updateFeedBack(Request $request, $id)
    {
        $feedback = FeedBack::findOrFail($id);
        $data = $request->all();
        $review->update($data);
        return redirect()->back();
    }
}
