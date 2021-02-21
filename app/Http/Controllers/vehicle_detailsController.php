<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicle_details;
use App\Models\bike_details;
use App\Models\bus_details;
use App\Models\car_details;



class vehicle_detailsController extends Controller
{
    public function read(){
        $vehicle_details = vehicle_details::all();
        return view('/vehicleread')
            ->with(['vehicle_details' =>$vehicle_details]);
    }

    public function delete($id){
        vehicle_details::destroy($id);
        return redirect('/vehicleread');
    }
    public function update($id){
        $vehicle_details = vehicle_details::find($id);

        $car_details = car_details::all();
        /* $bus_details = bus_details::all();
        $bike_details = bike_details::all(); */

        return view('/vehicleupdate')
            ->with(['vehicle_details'=>$vehicle_details])
            ->with(['car_details' =>$car_details]);
           /*  ->with(['bus_details' =>$bus_details])
            ->with(['bike_details' =>$bike_details]); */
            
            
    }  
    public function vehiclesave(request $req ,$id){
        $vehicle_details = vehicle_details::find($id);
     

        $vehicle_details->bike_detaails_id = $req->get('bike_details');
        $vehicle_details->car_details_id = $req->get('car_details');
        $vehicle_details->bus_details_id = $req->get('bus_details');

        $vehicle_detail->save();

        return redirect('/vehicleread');



   }

   public function vehiclecreate()
   {
        $bus_details = bus_details::all();
        $car_details = car_details::all();
        $bike_details = bike_details::all();

   
    return view('/vehiclecreate')
    ->with(['bus_details' =>$bus_details])
    ->with(['car_details' =>$car_details])
    ->with(['bike_details' =>$bike_details]);
   }

   public function vehicleadd(request $req)
   {    
       $vehicle_details = new vehicle_details();
     

       $vehicle_details->bike_details_id = $req->get('bike_details');
       $vehicle_details->car_details_id = $req->get('car_details');
       $vehicle_details->bus_details_id = $req->get('bus_details');
       
       $vehicle_detail->save();

       return redirect('/vehicleread');
   }
}
