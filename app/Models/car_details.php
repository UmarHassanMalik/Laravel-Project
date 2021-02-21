<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car_details extends Model
{  
    protected $table= 'car_details';
    protected $fillable= ['Enter_car_name','Enter_car_type','Enter_car_model','Enter_car_registration','Enter_car_price'];
    public $timestamps = false;
    use HasFactory;

    public function vehicle_details()
    {
        return $this->belongsTo(vehicle_details::class);
    }
}