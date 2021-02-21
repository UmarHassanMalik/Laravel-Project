<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class miscellaneous_details extends Model
{  
    protected $table= 'miscellaneous_details';
    protected $fillable= ['Enter_miscellaneous_name','Enter_miscellaneous_type','Enter_miscellaneous_model','Enter_miscellaneous_registration','Enter_miscellaneous_price'];
    public $timestamps = false;
    use HasFactory;

}