<?php

namespace App\Http\Controllers;

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
    public function index(Request $request)
    {

        //section 24 how to set sessions

        $request->session()->put(['user'=>'iqbal']);

        // echo $request->session()->get('user');

        //global sessions

        // session(['user2'=>'iqbal dhillon']);

        // return session('user2');

        //global sessions ends

        //destroying sessions

        // $request->session()->forget('user');

        // print_r( $request->session()->all());

        //destroying sessions ends

        //destroying all sesion at once

        // $request->session()->flush();

        // print_r(  $request->session()->all());

        //flashing data

        // $request->session()->flash('message','this is a flash data');

        // return $request->session()->get('message');

        // another handy methods are reflash and keep

        // $request->session()->reflash();

        // $request->session()->keep('message');

           //flashing data ends

        return view('home');
    }
}
