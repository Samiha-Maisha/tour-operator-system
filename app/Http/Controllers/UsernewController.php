<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewUserRequest;
use App\Models\Usernew;
use Illuminate\Http\Request;

class UsernewController extends Controller
{
    //
    public function goToSignUpPage(){
        return view('signup');
    }
    public function goToLoginPage(){
        return view('login');
    }
    public function addNewUser(NewUserRequest $request){
        Usernew::create($request->all());
        return redirect()->back()->with('msg','Data add Successfully');
    }

    public function checkUser(Request $request){
        $user = \App\Models\Usernew::where('email',$request->get('email'))->first();

        if($user == null){
            return redirect()->back();
        }

        if (($request->get('password') != $user->password)){
            return redirect()->back();
        }

        \Illuminate\Support\Facades\Session::put('user_id', $user);
        \Illuminate\Support\Facades\Session::put('user_type', $user->usertype);

        if($user->usertype == 'traveler'){
            return redirect()->route('travelerhome');
        }

        if($user->usertype == 'travel agency'){
            return redirect()->route('travelagencyhome');
        }
    }

}
