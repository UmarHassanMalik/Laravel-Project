<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car_details;

class car_detailsController extends Controller
{
    public function read(){
        $car_details = car_details::all();
        return view('/carread')
            ->with(['car_details' =>$car_details]);
    }

    public function delete($id){
        car_details::destroy($id);
        return redirect('/carread');
    }
    public function update($id){
        $car_details = car_details::find($id);
        return view('/carupdate')
            ->with(['car_details' =>$car_details]);
            
    }  
    public function carsave(request $req ,$id){
        $car_detail = car_details::find($id);

        $car_detail->Enter_car_Name = $req->get('Enter_car_name');
        $car_detail->Enter_car_type = $req->get('Enter_car_type');
        $car_detail->Enter_car_model = $req->get('Enter_car_model');
        $car_detail->Enter_car_registration = $req->get('Enter_car_registration');
        $car_detail->Enter_car_price = $req->get('Enter_car_price');
     

        $car_detail->save();

        return redirect('/carread');
    }
  
    public function carcreate()

    {
     return view('/carcreate');
    }
 
    public function caradd(request $req)
    {    
        $car_detail = new car_details();
        $car_detail->Enter_car_name = $req->get('Enter_car_name');
        $car_detail->Enter_car_type = $req->get('Enter_car_type');
        $car_detail->Enter_car_model = $req->get('Enter_car_model');
        $car_detail->Enter_car_registration = $req->get('Enter_car_registration');
        $car_detail->Enter_car_price = $req->get('Enter_car_price');
        
        $car_detail->save();
 
        return redirect('/carread');
    }
 }

