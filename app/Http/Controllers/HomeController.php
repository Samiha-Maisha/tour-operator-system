<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function gotoHomePage(){

        /*$todos = Todo::all();
        return view('home')->with(['todos'=>$todos]);*/

        return view('home');
    }

    public function gotoTravelerHomePage(){
        $tours = Tour::all();
        return view('travelerHomePage')->with(['tours'=>$tours]);
    }

    public function gotoTravelAgencyHomePage(){
        $tours = Tour::all();
        //return view('home')->with(['todos'=>$todos]);
        return view('travelAgencyHomePage')->with(['tours'=>$tours]);
    }

}
