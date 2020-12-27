<?php

namespace App\Http\Controllers\Admin;
use App\Models\Room;
use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rooms = Room::all();
        $list_rooms = Room::paginate(20);
        return view('admin.room.index', compact('rooms'))->with('rooms',$list_rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $hotels = Hotel::findOrFail($id);
        return view('admin.room.add', compact('hotels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $hotels = Hotel::finOrFail($id);
        Room::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'hotel_id' => $request->hotel_id,
            'type' => $request->type,
            'bed' => $request->bed,
            'bath' => $request->bath,
            'TV' => $request->TV,
            'phone' =>$request->phone,
            'wardobe' => $request->wadrobe
        ]);

        // $room = Room::create($request->all());

        return redirect()->back()->with('message', trans('message.create_success'));
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
        $rooms = Room::where('hotel_id',$id)->paginate(4);
        return view('admin.hotel.list_room', compact('hotelDetail', 'rooms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $room_id)
    {
        // dd($room_id);
        //  $hotels = Hotel::findOrFail($hotel);
        $rooms = Room::findOrFail($room_id);
        return view('admin.room.edit', compact('rooms'));

        // return view('admin.room.edit', compact('hotels'));
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
        $rooms = new Room();
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'hotel_id' => $request->hotel_id,
            'type' => $request->type,
            'bed' => $request->bed,
            'bath' => $request->bath,
            'TV'  => $request->TV,
            'phone' => $request->phone,
            'wardobe'  => $request->wardope
        ];
        // $rooms::getRoomById($id)->name= $request->name;

        //  $rooms::getRoomById($id)->save();

        $rooms->getRoomById($id)->update($data);
        // dd($id);
        $rooms->getRoomById($id)->save();
        // dd($rooms->getRoomById($id));
        return redirect()->route('admin.hotels.index')->with('message', trans('message.edit_success'));
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
        Room::findOrFail($id)->delete();
        return redirect()->route('admin.hotels.index')->with('message', trans('message.delete_success'));
    }
}
