<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserbankChalanController extends Controller
{
    //
    public function index()
    {
        return view('frontend.BankChalan.bank_chalan_view');
    }

    public function generatechalan()
    {
        $id = Auth::user()->id;
        $user = PersonalInfo::find($id);

        return view('frontend.BankChalan.gen_chalan',compact('user'));
    }
}
