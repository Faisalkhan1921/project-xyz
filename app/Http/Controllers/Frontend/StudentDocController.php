<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\uploadhscmodel;
use App\Models\uploadprcmodel;
use App\Models\uploadsscmodel;
use App\Models\uploadcnicmodels;
use App\Models\UploadDocumentinfo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Image;

class StudentDocController extends Controller
{
    //
    public function index()
    {
        $user_id = Auth::user()->id;
        $data = UploadDocumentinfo::where('user_id',$user_id)->first();
        $dataprc = uploadprcmodel::where('user_id',$user_id)->first();
        $datacnic = uploadcnicmodels::where('user_id',$user_id)->first();
        $datassc = uploadsscmodel::where('user_id',$user_id)->first();
        $datahsc = uploadhscmodel::where('user_id',$user_id)->first();
        return view('frontend.studentdoc.stu_doc_view',compact('data','dataprc','datacnic','datassc','datahsc'));
    }

    public function storedomicile(Request $request)
    {
        $user_id = Auth::user()->id;

        $image = $request->file('domicile_img');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(300,300)->save('upload/student_doc/domicle/'.$name_gen);
        $save_url = 'upload/student_doc/domicle/'.$name_gen;

        UploadDocumentinfo::insert([
       
            'domicile_img' => $save_url,
            'user_id' => $user_id,
            'created_at' => Carbon::now(),

        ]); 
        $notification = array(
        'message' => 'Domicile Uploaded Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

    }

    public function storeprcs(Request $request)
    {
        $user_id = Auth::user()->id;

        $image = $request->file('prc_img');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(300,300)->save('upload/student_doc/prc/'.$name_gen);
        $save_url = 'upload/student_doc/prc/'.$name_gen;

        uploadprcmodel::insert([
       
            'prc_img' => $save_url,
            'user_id' => $user_id,
            'created_at' => Carbon::now(),

        ]); 
        $notification = array(
        'message' => 'PRC Uploaded Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

    }

    public function storecnic(Request $request)
    {
        $user_id = Auth::user()->id;

        $image = $request->file('cnic_img');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(300,300)->save('upload/student_doc/cnic/'.$name_gen);
        $save_url = 'upload/student_doc/cnic/'.$name_gen;

        uploadcnicmodels::insert([
       
            'cnic_img' => $save_url,
            'user_id' => $user_id,
            'created_at' => Carbon::now(),

        ]); 
        $notification = array(
        'message' => 'CNIC Uploaded Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

    }


    public function storessc(Request $request)
    {
        $user_id = Auth::user()->id;

        $image = $request->file('ssc_img');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(300,300)->save('upload/student_doc/ssc/'.$name_gen);
        $save_url = 'upload/student_doc/ssc/'.$name_gen;

        uploadsscmodel::insert([
       
            'ssc_img' => $save_url,
            'user_id' => $user_id,
            'created_at' => Carbon::now(),

        ]); 
        $notification = array(
        'message' => 'SSC Doc Uploaded Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

    }

    public function storehsc(Request $request)
    {
        $user_id = Auth::user()->id;

        $image = $request->file('hsc_img');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(300,300)->save('upload/student_doc/hsc/'.$name_gen);
        $save_url = 'upload/student_doc/hsc/'.$name_gen;

        uploadhscmodel::insert([
       
            'hsc_img' => $save_url,
            'user_id' => $user_id,
            'created_at' => Carbon::now(),

        ]); 
        $notification = array(
        'message' => 'HSC Doc Uploaded Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);

    }
}
