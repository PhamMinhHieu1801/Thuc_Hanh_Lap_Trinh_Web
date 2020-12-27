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
        $rooms = Room::all();
        $list_rooms = Room::paginate(20);
        
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $file->move('storage/Image/room',  $extension);
            $filename = 'storage/Image/room/'.$extension;      
        }
        else 
        {
            $filename = 'storage/Image/room/9.png';
        }

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
            'wardobe' => $request->wadrobe,
            'image'=>$filename
        ]);

        return redirect()->back()->with('message', trans('message.create_success'));
        // return view('admin.room.index', compact('rooms'))->with('rooms',$list_rooms);
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
