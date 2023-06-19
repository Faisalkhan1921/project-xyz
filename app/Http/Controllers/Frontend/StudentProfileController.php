<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\UserProfileImage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Image;

class StudentProfileController extends Controller
{
    //
    public function userprofileinfo()
    {
        $iddata = Auth::User();
        $user_id = Auth::user()->id;
        $data = UserProfileImage::where('user_id',$user_id)->first();
        return view('frontend.Profile.user_profile_view',compact('iddata','data'));
    }


    public function stu_img_upload(Request $request)
    {
        $user_id = Auth::user()->id;

        $image = $request->file('profile_student');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(300,300)->save('upload/student_profile/'.$name_gen);
        $save_url = 'upload/student_profile/'.$name_gen;

        UserProfileImage::insert([
       
            'profile_student' => $save_url,
            'user_id' => $user_id,
            'created_at' => Carbon::now(),

        ]); 
        $notification = array(
        'message' => 'Profile Inserted Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

    }
}
