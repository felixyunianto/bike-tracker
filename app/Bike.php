<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Location;

class Bike extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function locations() {
        return $this->hasMany(Location::class);
    }

    public function lastLocation(){
        return $this->hasMany(Location::class)
            ->select('*')
            ->join(\DB::raw('(Select max(id) as id from locations group by bike_id) lastLocation'), function($join){
                $join->on('locations.id','=','lastLocation.id');
            })
            ->orderBy('created_at','desc');
    }
}
