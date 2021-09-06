<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bike;

class OrderController extends Controller
{
    public function borrow($bike_id){
        dd($bike_id);
    }
}
