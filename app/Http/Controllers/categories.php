<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categories extends Controller
{

   public function index(Request $requets){
    $catvar= DB::select('select * from categories ');
    return redirect('/categories/create')->with('catvar',$catvar);


   }


    public function addcategories()
    {
    }
}
