<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\hscrecords;
use Illuminate\Http\Request;
use App\Models\Matricrecords;
use App\Models\Passyearmodel;
use App\Models\CollegeBoardModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserEduInfoController extends Controller
{
    //
    public function eduinfo()
    {
        $userid = Auth::user()->id;
        $clgdata= CollegeBoardModel::all();
        $passyear = Passyearmodel::all();
        $ssc = Matricrecords::where('user_id','=',$userid)->first();
        $hsc = hscrecords::where('user_id','=',$userid)->first();

        return view('frontend.EduInfo.user_edu_info',compact('clgdata','passyear','ssc','hsc'));
    }

    public function store(Request $request)
    {
                       
                $userid = Auth::user()->id;
                Matricrecords::insert([
                    'board_id' => $request->board_id,
                    'matric_score_obtained' => $request->matric_score_obtained,
                    'matric_seat_no' => $request->matric_seat_no,
                    'passing_year' => $request->passyear_id,
                    'user_id' => $userid,
                    'created_at' => Carbon::now(),
        
                ]); 
                $notification = array(
                'message' => 'Matric Records are added  Successfully', 
                'alert-type' => 'success'
            );
        
            return redirect()->back()->with($notification);
    }
    

    public function storehsc(Request $request)
    {
                       
        $userid = Auth::user()->id;
          
                hscrecords::insert([
                    'board_id' => $request->board_id,
                    'user_id' => $userid,
                    'hsc_score_obtained' => $request->hsc_score_obtained,
                    'hsc_seat_no' => $request->hsc_seat_no,
                    'passing_year' => $request->passyear_id,
                    'created_at' => Carbon::now(),
        
                ]); 
                $notification = array(
                'message' => 'HSC Records are added  Successfully', 
                'alert-type' => 'success'
            );
        
            return redirect()->back()->with($notification);
    }
}
