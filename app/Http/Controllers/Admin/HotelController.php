<?php

namespace App\Http\Controllers\Admin;
use App\Models\Hotel;
use App\Models\Room;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('admin.hotel.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $image = null;
        // $hotels = Hotel::all();

        Hotel::create([
            'name' => $request->name,
            'local' => $request->local,
            'description' => $request->description,
            'breakfast' => $request->breakfast   ,
            'wifi' => $request->wifi,
            'car_park' => $request->car_park
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
        $hotels = Hotel::findOrFail($id);
        $rooms = $hotels->rooms;
        return view('admin.room.index', compact('rooms'));
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
        $hotels = Hotel::findOrFail($id);
        // return view('admin.hotel.edit', ['hotels' => $hotels]);

        return view('admin.hotel.edit', compact('hotels'));

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
        // $hotels = Hotel::findOrFail($id);
        $hotel= new Hotel();
        $data = [
            'name' => $request->name,
            'local' => $request->local,
            'description' => $request->description,
            'breakfast' => $request->breakfast,
            'wifi' => $request->wifi,
            'car_park' => $request->car_park
        ];

        // $hotel::Hotel::findOrFail($id);
        // dd(1);
        $hotel::getHotelById($id)->update($data);
        // $hotels->update($request->all());
        // $hotels->save();
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
        Hotel::findOrFail($id)->delete();
        return redirect()->route('admin.hotels.index')->with('message', trans('message.delete_success'));
    }
}
