<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bike_details extends Model
{  
    protected $table= 'bike_details';
    protected $fillable= ['Enter_bike_name','Enter_bike_type','Enter_bike_model','Enter_bike_registration','Enter_bike_price'];
    public $timestamps = false;
    use HasFactory;

    public function vehicle_details()
    {
        return $this->belongsTo(vehicle_details::class);
    }

}