<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\miscellaneous_details;

class miscellaneous_detailsController extends Controller
{
    public function read(){
        $miscellaneous_details = miscellaneous_details::all();
        return view('/miscellaneousread')
            ->with(['miscellaneous_details' =>$miscellaneous_details]);
    }

    public function delete($id){
        miscellaneous_details::destroy($id);
        return redirect('/miscellaneousread');
    }
    public function update($id){
        $miscellaneous_details = miscellaneous_details::find($id);
        return view('/miscellaneousupdate')
            ->with(['miscellaneous_details' =>$miscellaneous_details]);
            
    }  
    public function miscellaneoussave(request $req ,$id){
        $miscellaneous_detail = miscellaneous_details::find($id);

        $miscellaneous_detail->Enter_miscellaneous_name = $req->get('Enter_miscellaneous_name');
        $miscellaneous_detail->Enter_miscellaneous_type = $req->get('Enter_miscellaneous_type');
        $miscellaneous_detail->Enter_miscellaneous_model = $req->get('Enter_miscellaneous_model');
        $miscellaneous_detail->Enter_miscellaneous_registration = $req->get('Enter_miscellaneous_registration');
        $miscellaneous_detail->Enter_miscellaneous_price = $req->get('Enter_miscellaneous_price');
     

        $miscellaneous_detail->save();

        return redirect('/miscellaneousread');
 }

 public function miscellaneouscreate()

 {
  return view('/miscellaneouscreate');
 }

 public function miscellaneousadd(request $req)
 {    
     $miscellaneous_detail = new miscellaneous_details();
     $miscellaneous_detail->Enter_miscellaneous_name = $req->get('Enter_miscellaneous_name');
     $miscellaneous_detail->Enter_miscellaneous_type = $req->get('Enter_miscellaneous_type');
     $miscellaneous_detail->Enter_miscellaneous_model = $req->get('Enter_miscellaneous_model');
     $miscellaneous_detail->Enter_miscellaneous_registration = $req->get('Enter_miscellaneous_registration');
     $miscellaneous_detail->Enter_miscellaneous_price = $req->get('Enter_miscellaneous_price');
     
     $miscellaneous_detail->save();

     return redirect('/miscellaneousread');
 }


 
}