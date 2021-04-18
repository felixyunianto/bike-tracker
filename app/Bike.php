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
}
