<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use Carbon\Carbon;

class LocationController extends Controller
{
    public function store(Request $request) {
        $rules = [
            'bike_id' => 'required',
            'longitudes' => 'required',
            'latitudes' => 'required',
        ];

        $messages = [
            'required' => 'Form :attribute tidak boleh kosong'
        ];

        $this->validate($request, $rules, $messages);

        $current_date = Carbon::now()->format('Y-m-d');

        $bike = Location::create([
            'bike_id' => $request->bike_id,
            'date' => $current_date,
            'longitudes' => $request->longitudes,
            'latitudes' => $request->latitudes,
        ]);

        return response()->json([
            'message' => 'Update location is successful',
            'status' => 200,
            'data' => $bike
        ], 200);

    }
}
