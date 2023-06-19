<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\CollegeBoardModel;
use App\Http\Controllers\Controller;

class CollegeboardController extends Controller
{
    //
    public function index()
    {
        $clgdata = CollegeBoardModel::all();
        return view('Admin.CollegeBoard.manage_college_board',compact('clgdata'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'board_name' => 'required',
                
            ],
            [
                'board_name.required' => 'District name is required',
                
            ]
        );

   
        CollegeBoardModel::insert([
            'board_name' => $request->board_name,
            'created_at' => Carbon::now(),

        ]); 
        $notification = array(
        'message' => 'Blood Groups Inserted Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

    }
}
