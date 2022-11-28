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
    $comment_textarea=$request->input('comment_textarea');
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
        return  redirect()->back();
    }else{
        return 'please login first';
    }
   a: return  redirect()->back();
  }
 /* public function delete_comment($id){
    DB::table('comments')->where('id', '=', $id)->delete();
    return  redirect()->back();
}*/

  public function edit_comment($id,Request $request){

    DB::table('comments')->update(
        [
            'text' => $comment_textarea
        ]
        );
  }
}

