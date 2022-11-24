<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\books;
use App\Models\user;
use App\Models\comments;

class commentscon extends Controller
{
 /*******************add_comment**************************** */
 public function add_comment(Request $request,$id){
    $request->flashOnly('comment_textarea');
    $usr_id=DB::table('users')->where('name',session('login'))->value('id');
    $preview_book = DB::table('books')->find($id);
   ~ $comment_textarea=$request->input('comment_textarea');
    if ($request->session()->has('login'))
    {
        if ($comment_textarea == "")
        {
           goto a;
        }

    DB::table('comments')->insert(
        $commentt_array=array(
            'text' => $comment_textarea,
            'Books_id' => $id,
            'user_id' =>$usr_id
        ));


        a:   $comments = books::find($id)->comments;

        $prbook = DB::table('books')->find($id);

        return view('preview')->with('preview_book',$preview_book)
                          ->with('comments',$comments);
    }else{
        return 'please login first';
    }
  }
}

