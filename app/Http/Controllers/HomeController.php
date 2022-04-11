<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index(Request $request){

        $user_id = $request->session()->increment('count');
        session(['user_id'=>$user_id]);
        
        return view("index");
    }

}
