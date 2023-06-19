<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DistController extends Controller
{
    //
   public function store()
   {
    $dist = District::all();
    return view('Admin.District.manage_district',compact('dist'));
   }

   public function storedist(Request $request)
   {
                 //validation
                 $request->validate(
                   [
                       'dist_name' => 'required',
                       
                   ],
                   [
                       'dist_name.required' => 'District name is required',
                       
                   ]
               );
       
          
               District::insert([
                   'dist_name' => $request->dist_name,
                   'created_at' => Carbon::now(),
       
               ]); 
               $notification = array(
               'message' => 'Brand Data Inserted Successfully', 
               'alert-type' => 'success'
           );
       
           return redirect()->back()->with($notification);
   }
}
