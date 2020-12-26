<?php

namespace App\Http\Controllers;
// use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Hotel;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            // $hotels = Hotel::orderBy('rating','DESC')->limit(3)->get();
            // $hotel1 = Hotel::orderBy('created_at','DESC')->limit(3)->get();
            // return view('index', compact('hotels','hotel1'));
            return view('index');
    }

    public function show() {
            $hotels = Hotel::orderBy('rating','DESC')->limit(3)->get();
            $hotel1 = Hotel::orderBy('created_at','DESC')->limit(3)->get();
            return view('index', compact('hotels','hotel1'));
    }


    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {

    }
}
