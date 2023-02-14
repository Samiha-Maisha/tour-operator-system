<?php

namespace App\Http\Controllers;

use App\Http\Requests\TourPostRequest;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{
    //
    public function goToTourPostingPage(){
        return view('tourPostingPage');
    }

    public function addTour(TourPostRequest $request){
        Tour::create($request->all());
        $user = \App\Models\Usernew::find(session()->get('user_id'))->first();
        //$user = \App\Models\User::where('username',$request->get('username'))->first();
        $agency = $user->username;
        $affected = DB::table('tours')
            ->where('tourTitle', $request->tourTitle)
            ->update(['agencyName' => $agency]);
        return redirect()->back()->with('msg','Data add Successfully');
    }

    public function  goToTourDetailPage($sent_id){
        $tours = Tour::all();
        return view('tourDetails')->with(['sent_id'=>$sent_id,'tours'=>$tours]);
    }
}
