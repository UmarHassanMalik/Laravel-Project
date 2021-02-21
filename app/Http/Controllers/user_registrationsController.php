<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_registrations;

class user_registrationsController extends Controller
{
    public function read(){
        $user_registrations = user_registrations::all();
        return view('/read')
            ->with(['user_registrations' =>$user_registrations]);
    }

    public function delete($id){
        user_registrations::destroy($id);
        return redirect('/read');
    }
    public function update($id){
        $user_registrations = user_registrations::find($id);
        return view('/update')
            ->with(['user_registrations' =>$user_registrations]);
            
    }  
    public function save(request $req ,$id){
        $user_registration = user_registrations::find($id);

        $user_registration->Enter_User_Name = $req->get('Enter_User_Name');
        $user_registration->Enter_Email = $req->get('Enter_Email');
        $user_registration->Enter_Password = $req->get('Enter_Password');

        $user_registration->save();

        return redirect('/read');
    }

    public function add(request $req)
    {    
        $user_registration = new user_registrations();
        $user_registration->Enter_User_Name = $req->get('Enter_User_Name');
        $user_registration->Enter_Email = $req->get('Enter_Email');
        $user_registration->Enter_Password = $req->get('Enter_Password');
        
        $user_registration->save();
 
        return redirect('/read');
    }

    public function create()

    {
     return view('/create');
    }
   
   
   
 
    
}