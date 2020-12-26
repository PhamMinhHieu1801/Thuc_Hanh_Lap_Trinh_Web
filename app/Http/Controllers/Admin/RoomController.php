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
    public function create()
    {
        // $hotels = Hotel::findOrFail($id);
        return view('admin.room.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  $id)
    {
        //
        $hotels = Hotel::findOrFail($id);
        // $rooms =  Room::join('hotels', 'hotels->id', '=', 'rooms->hotel_id' ) -> where ('rooms->hotel_id', $id)->get();
        Room::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'type' => $request->type,
            'bed' => $request->bed,
            'bath' => $request->bath,
            'TV' => $request->TV,
            'phone' =>$request->phone,
            'wardobe' => $request->wadrobe
        ]);

        // $room = Room::create($request->all());

        return redirect()->route('admin.list_room', compact('hotels') )->with('message', trans('message.create_success'));
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
    }
}
