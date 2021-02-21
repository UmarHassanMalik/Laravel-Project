<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_registrations extends Model
{  
    protected $table= 'user_registrations';
    protected $fillable= ['Enter_User_Name','Enter_Email','Enter_Password','Re-Enter Password'];
    public $timestamps = false;
    use HasFactory;

}