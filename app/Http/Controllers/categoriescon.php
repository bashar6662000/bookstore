<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\categories;
use Illuminate\Support\Facades\DB;


class categoriescon extends Controller

{


   public function index(Request $request){
    $catvar= DB::select('select * from categories ');
    return view('categories.index')->with('catvar',$catvar);
   }
/**to add a category step1: */
      public function add_category1(){
       return view('categories.create');
      }
/*** step2: */
    public function add_category2(Request $request)
    {
        $name = $request->input('namet');
        $id = $request->input('idt');

       DB::table('categories')->insert(
          $test=  array(
                   'id'     =>   $id,
                   'name'   =>   $name
            )
       );
       return view('categories.create');
    }

    public function deletecat($id)
    {
        $delete = DB::table('categories')->where('id', '=', $id)->delete();
        return redirect('/categories');
    }
}
