<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getProfile(){
        $out = (new UserController)->show($id);
        return view('pages.profile',compact("out",$out));
    }

    public function getAvatar($id)
    {
        $out = (new UserController)->show($id);
        return $out;
    }
    
}
