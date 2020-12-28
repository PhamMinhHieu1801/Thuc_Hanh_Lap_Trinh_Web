<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\FeedBack;
use App\Models\BookingHistory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValidateRequest;
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

    public function store( ValidateRequest $request, $id)
    {
        $roomDetail = Room::findOrFail($id);
        if (!Auth::check())
        {
            return redirect()->route('login');
        }

        $bookeds = $roomDetail->booking_historys;
        foreach($bookeds as $booked)
        {
           
            if(strtotime($booked->check_out) > strtotime($request->date_in))
            {
                $request->session()->flash('status', 'Phòng đã được đặt, vui lòng chọn ngày khác');
                return redirect()->back();
            }
        }
        BookingHistory::create([
            "room_id" => $id,
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request ->email,
            "children" => $request->children,
            "adult" => $request->adult,
            "check_in" => $request->date_in,
            "check_out" => $request->date_out, 
            "user_id" => Auth::user()->id,
        ]);
        $request->session()->flash('status', 'Đăng kí phòng thành công!');
       return redirect()->back();
    }

    public function destroy($id)
    {
        $roomDetail = Room::findOrFail($id);
        $bookeds = $roomDetail->booking_historys;
        foreach($bookeds as $booked)
        {
            if($booked->user_id==Auth::user()->id)
            {
                $booked->delete();
                break;
            }
        }
        return redirect()->back();
    }
}
