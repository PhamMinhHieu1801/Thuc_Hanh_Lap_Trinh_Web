<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\Admin\Hash;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        $list_user = User::paginate(20);
        return view('admin.user.index', compact('users'))->with('users',$list_user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $user= Auth::user();
        $data = [
            
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ];
        Auth::user()->update($data);

        if($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalName();
            $file->move('storage/Image/user',  $extension);
            $filename = 'storage/Image/user/'.$extension;  
            $user->avatar = $filename;
            $user->save();  
        }
        if ($request->birthday!=NULL)
        {
            $user->birthday = $request->birthday;
            $user->save(); 
        }
        return redirect()->route('edit_user');
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
        User::findOrFail($id)->delete();
        return redirect()->route('admin.users.index')->with('message', trans('message.delete_success'));
    }
}
