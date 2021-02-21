<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus_details extends Model
{  
    protected $table= 'bus_details';
    protected $fillable= ['Enter_bus_name','Enter_bus_type','Enter_bus_model','Enter_bus_registration','Enter_bus_price'];
    public $timestamps = false;
    use HasFactory;

    public function vehicle_details()
    {
        return $this->belongsTo(vehicle_details::class);
    }


}