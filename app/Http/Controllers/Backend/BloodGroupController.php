<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\BloodGroups;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BloodGroupController extends Controller
{
    //
    public function index()
    {
        $blood = BloodGroups::all();
        return view('Admin.BloodGroups.manage_blood_group',compact('blood'));
    }

    public function store(Request $request)
    {
         //validation
         $request->validate(
            [
                'blood_name' => 'required',
                
            ],
            [
                'blood_name.required' => 'District name is required',
                
            ]
        );

   
        BloodGroups::insert([
            'blood_name' => $request->blood_name,
            'created_at' => Carbon::now(),

        ]); 
        $notification = array(
        'message' => 'Blood Groups Inserted Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);
    }
}
