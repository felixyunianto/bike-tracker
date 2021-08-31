<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Bike;
use Auth;

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
        $currentDate = date('Y-m-d');
        $tempLocations = Bike::with(['locations' => function($query)use($currentDate){
            $query->where('date', $currentDate);
        }])->where('user_id', Auth::user()->id)->get();
        
        return view('home', compact('tempLocations'));
    }
}
