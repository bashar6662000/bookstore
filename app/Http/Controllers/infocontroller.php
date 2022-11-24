<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;
use App\Models\info;
use App\Models\infos;
use App\Models\categories;


class infocontroller extends Controller
{

     public function index(Request $request){
        $value = $request->session()->get('login');
        return $value;
        if($value="")
        {
            return view('loginn');
        }else{
        return view('index')->with('title',infos::first())
                            ->with('pics',books::all())
                            ->with('bkti',books::all())
                            ->with('cat',categories::all())
                            ->with('u',session('login'));
        }

     }
}
