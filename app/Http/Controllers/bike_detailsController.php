<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bike_details;

class bike_detailsController extends Controller
{
    public function read(){
        $bike_details = bike_details::all();
        return view('/bikeread')
            ->with(['bike_details' =>$bike_details]);
    }

    public function delete($id){
        bike_details::destroy($id);
        return redirect('/bikeread');
    }
    public function update($id){
        $bike_details = bike_details::find($id);
        return view('/bikeupdate')
            ->with(['bike_details' =>$bike_details]);
            
    }  
    public function bikesave(request $req ,$id){
        $bike_detail = bike_details::find($id);

        $bike_detail->Enter_Bike_Name = $req->get('Enter_bike_name');
        $bike_detail->Enter_bike_type = $req->get('Enter_bike_type');
        $bike_detail->Enter_bike_model = $req->get('Enter_bike_model');
        $bike_detail->Enter_bike_registration = $req->get('Enter_bike_registration');
        $bike_detail->Enter_bike_price = $req->get('Enter_bike_price');
     

        $bike_detail->save();

        return redirect('/bikeread');
   }

   public function bikecreate()

   {
    return view('/bikecreate');
   }

   public function bikeadd(request $req)
   {    
       $bike_detail = new bike_details();
       $bike_detail->Enter_bike_Name = $req->get('Enter_bike_name');
       $bike_detail->Enter_bike_type = $req->get('Enter_bike_type');
       $bike_detail->Enter_bike_model = $req->get('Enter_bike_model');
       $bike_detail->Enter_bike_registration = $req->get('Enter_bike_registration');
       $bike_detail->Enter_bike_price = $req->get('Enter_bike_price');
       
       $bike_detail->save();

       return redirect('/bikeread');
   }
}
