<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutletAPIController extends Controller
{
    public function outlet(){

        $outlet=Outlet::all();

        return $outlet;
        
       }
  
       public function add(Request $req){
    
        $add = new outlet();
        $add->name=$req->name;
        $add->phone=$req->phone;
        $add->latitude=$req->latitude;
        $add->longitude=$req->longitude;
        $add->image	=$req->image;
        if ($courses->save()) {
            return "Course Added Successful";
        }
    }

       public function update(Request $req){
    
        $add = outlet::where('id', '=', $req->id)
        ->first();

        $add->name=$req->name;
        $add->phone=$req->phone;
        $add->latitude=$req->latitude;
        $add->longitude=$req->longitude;
        $add->image	=$req->image;

        if ($courses->save()) {
            return "Course Updated Successful";
        }
    }

    public function delete(Request $req){

        $courses = course::where('id', '=', $req->id)
        ->first();
        if ($courses->delete()) {
            return "Course Deleted Successful";
        }
    }

      
}
