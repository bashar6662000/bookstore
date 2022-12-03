<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\mail;
use App\mail\signup;
use App\Models\User;

class mailcontroller extends Controller
{
    public function send_mail_to_new_user(Request $request)
    {
        $usr=$request->session()->get('login');
        $user=DB::table('users')->where('name',$usr)->value('name');
        Mail::to('bashar66629@gmail.com')->send(new signup($user));
    }
}
