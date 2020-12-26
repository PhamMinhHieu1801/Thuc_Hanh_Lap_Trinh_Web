<?php

namespace App\Http\Controllers\Admin;
use App\Models\Hotel;
use App\Models\Room;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hotels = Hotel::all();
        $list_hotel = Hotel::paginate(20);
        return view('admin.hotel.index', compact('hotels'))->with('hotels',$list_hotel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin\hotel\add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $file->move('storage/Image/hotel',  $extension);
            $filename = 'storage/Image/hotel/'.$extension;      
        }
        else 
        {
            $filename = 'storage/Image/hotel/hotel1.png';
        }
        Hotel::create([
            
            'name' => $request->name,
            'local' => $request->local,
            'description' => $request->description,
            'breakfast' => $request->breakfast   ,
            'wifi' => $request->wifi,
            'car_park' => $request->car_park,
            'image' => $filename
        ]);

        return redirect()->route('admin.hotels.index')->with('message', trans('message.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $hotelDetail = Hotel::findOrFail($id);
        $rooms = Room::where('hotel_id',$id)->get();
        return view('layout.home.list_room', compact('hotelDetail', 'rooms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Hotel::findOrFail($id)->delete();
        return redirect()->route('admin.hotels.index')->with('message', trans('message.delete_success'));
    }
}
