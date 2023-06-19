<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Sports;
use App\Models\District;
use App\Models\PersInfo;
use App\Models\BloodGroups;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PersonalInfoController extends Controller
{
    //
    public function PersInfo()
    {
        $dist = District::all();
        $sports = Sports::orderBy('id', 'desc')->get();
        $blood = BloodGroups::all();

        $id = Auth::user()->id;
        $std_record = PersInfo::where('user_id',$id)->first();
        return view('frontend.PersInfo.Personal_info_view',compact('dist','sports','blood','std_record'));
    }

    public function store(Request $request)
    {
        $id = Auth::user()->id;

        PersInfo::insert([
            'sname' => $request->sname,
            's_surname' => $request->s_surname,
            's_cnic' => $request->s_cnic,
            's_fname' => $request->s_fname,
            's_mname' => $request->s_mname,
            's_kname' => $request->s_kname,
            's_gname' => $request->s_gname,
            's_gnic' => $request->s_gnic,
            's_fphone' => $request->s_fphone,
            's_phone' => $request->s_phone,
            's_dob' => $request->s_dob,
            's_kphone' => $request->s_kphone,
            'dist_id' => $request->dist_id,
            's_religion' => $request->s_religion,
            's_address' => $request->s_address,
            's_prc' => $request->s_prc,
            's_gender' => $request->s_gender,
            's_hafiz' => $request->s_hafiz,
            'sports_id' => $request->sports_id,
            'sportsachieved' => $request->sportsachieved,
            'sportslevel' => $request->sportslevel,
            'alreadyadmitted' => $request->alreadyadmitted,
            's_phy' => $request->disability,
            'blood_id' => $request->blood_id,
            'user_id' => $id,
            'created_at' => Carbon::now(),

        ]); 
        $notification = array(
        'message' => 'Personal Info Data Inserted Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);
    }
}
