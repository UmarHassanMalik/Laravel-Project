<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bus_details;

class bus_detailsController extends Controller
{
    public function read(){
        $bus_details = bus_details::all();
        return view('/busread')
            ->with(['bus_details' =>$bus_details]);
    }

    public function delete($id){
        bus_details::destroy($id);
        return redirect('/busread');
    }
    public function update($id){
        $bus_details = bus_details::find($id);
        return view('/busupdate')
            ->with(['bus_details' =>$bus_details]);
            
    }  
    public function bussave(request $req ,$id){
        $bus_detail = bus_details::find($id);

        $bus_detail->Enter_bus_Name = $req->get('Enter_bus_name');
        $bus_detail->Enter_bus_type = $req->get('Enter_bus_type');
        $bus_detail->Enter_bus_model = $req->get('Enter_bus_model');
        $bus_detail->Enter_bus_registration = $req->get('Enter_bus_registration');
        $bus_detail->Enter_bus_price = $req->get('Enter_bus_price');

        $bus_detail->save();
        return redirect('/busread');
 }

 public function buscreate()

 {
  return view('/buscreate');
 }

 public function busadd(request $req)
 {    
     $bus_detail = new bus_details();
     $bus_detail->Enter_bus_Name = $req->get('Enter_bus_name');
     $bus_detail->Enter_bus_type = $req->get('Enter_bus_type');
     $bus_detail->Enter_bus_model = $req->get('Enter_bus_model');
     $bus_detail->Enter_bus_registration = $req->get('Enter_bus_registration');
     $bus_detail->Enter_bus_price = $req->get('Enter_bus_price');
     
     $bus_detail->save();

     return redirect('/busread');
 }
}


