<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle_details extends Model
{
    use HasFactory;

    public function car_details()
    {
        return $this->hasMany(car_details::class);
    }

    public function bike_details()
    {
        return $this->hasMany(bike_details::class);
    }

    public function bus_details()
    {
        return $this->hasMany(bus_details::class);
    }
}
