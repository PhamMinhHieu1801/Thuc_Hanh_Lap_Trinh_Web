<?php

namespace App\Http\Controllers;
// use App\Models\User;
use Illuminate\Http\Request;

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
        return view('home');
    }

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $arr = [
            'email' => $request->email, 
            'password' => $request->password
        ];
        if (Auth::attempt($arr)) {
            # code...
        } else {
            # code...
        }
    }
}
