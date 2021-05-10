<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use Carbon\Carbon;
use App\Bike;
use Validator;

class LocationController extends Controller
{
    public function store(Request $request) {
        
        $current_date = Carbon::now()->format('Y-m-d');

        $bike = Location::where('bike_id',1)->first();
        
        if($bike !== null){
            $location = Location::findOrFail($bike->id);
            $location->update([
                'date' => $current_date,
                'longitudes' => $request->lng,
                'latitudes' => $request->lat,
            ]);

            return response()->json([
                'message' => 'Update location is successful',
                'status' => 200
            ], 200);
        }else{
            Location::create([
                'bike_id' => 1,
                'date' => $current_date,
                'longitudes' => $request->lng,
                'latitudes' => $request->lat,
            ]);
            return response()->json([
                'message' => 'Create location is successful',
                'status' => 200
            ], 200);
        }

        

    }
}
