<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Passyearmodel;
use App\Http\Controllers\Controller;

class PassyearController extends Controller
{
    //
    public function index()
    {
        $passyear = Passyearmodel::all();
        return view('Admin.Passyear.manage_pass_year',compact('passyear'));
    }

    public function storepassyear(Request $request)
    {
         //validation
         $request->validate(
            [
                'passyear' => 'required',
                
            ],
            [
                'passyear.required' => 'District name is required',
                
            ]
        );

   
        Passyearmodel::insert([
            'passyear' => $request->passyear,
            'created_at' => Carbon::now(),

        ]); 
        $notification = array(
        'message' => 'Passing Year Inserted Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);
    }

}
