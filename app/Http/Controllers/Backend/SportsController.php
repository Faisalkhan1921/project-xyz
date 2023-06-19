<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Sports;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SportsController extends Controller
{
    //
    public function index()
    {
        $sports = Sports::orderBy('id', 'desc')->get();
        return view('Admin.Sports.manage_sports',compact('sports'));
    }

    public function store(Request $request)
    {
         //validation
         $request->validate(
            [
                'sports_name' => 'required',
                
            ],
            [
                'sports_name.required' => 'District name is required',
                
            ]
        );

   
        Sports::insert([
            'sports_name' => $request->sports_name,
            'created_at' => Carbon::now(),

        ]); 
        $notification = array(
        'message' => 'Sports Data Inserted Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);
    }
}
