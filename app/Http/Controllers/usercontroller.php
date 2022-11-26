<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\books;
use App\Models\categories;
use App\Models\User;
use App\Models\comments;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class usercontroller extends Controller
{
/************************************* */
public function loginn()
{
    return view('loginn');
}
/*********************************** */
public function loging(Request $request){
    $usr=$request->input('login');
    $pass=$request->input('pass');
    $Correct_password=DB::table('users')->where('name',$usr)->value('password');
    $id_pass=DB::table('users')->where('password',$pass)->value('id');
    $id_usr=DB::table('users')->where('name',$usr)->value('id');

    /*put the usr and pass values in session */
    $request->session()->put('login',$usr);
    $request->session()->put('pass',$pass);
    /*returning the state of the user(Admin/normal_user)*/
    $usr_state=DB::table('users')->where('name',$usr)->value('state');
   if (DB::table('users')->where('name', $usr)->exists() && $pass==$Correct_password){
        if ($usr_state=='Admin'){
            return view('Admin')->with('cat',categories::all())
                                ->with('book',books::all());

        }else{
            return  view('index')->with('usr',$usr)
            ->with('cat',categories::all())
            ->with('book',books::all());
        }
    } else{
        return 'password or username are incorecct please try again';
    }
}
/**************************************** */
public function retrn_regster()
{
    return view('register');
}

/*************************************** */
public function registering(REQUEST $request){
    $usr=$request->input('register_username');
    $pass=$request->input('register_password');
    $email=$request->input('register_email');

    if (DB::table('users')->where('name', $usr)->exists() || DB::table('users')->where('email',
$email)->exists())
    {
        return 'name or email already exist please try again with a diffrent inputs';
    }else{
        DB::table('users')->insert(
            $us=  array(
                     'name'   =>  $usr,
                     'password' => $pass,
                     'email' => $email
              ));
              return view('loginn');
    }
 }
public function Delete_user($id){
DB::table('users')->where('id', '=', $id)->delete();
 return redirect('users/show');
}

public function Show_all_users(){
  $user= DB::table('users')->where('state','normal_user')->get();
  return view('users.show_users')->with('user',$user);
}
public function return_to_edit($id){
    $user = user::find($id);
    return view('users.Edit_user')->with('user',$user);
}
public function edit_user($id,Request $request)
{
    $username=$request->input('user_name');
    $userpassword=$request->input('user_password');
    $useremail=$request->input('user_email');
    $userstate=$request->input('user_state');

DB::table('users')->where('id',$id)->update(
[
    'name' => $username,
    'password' => $userpassword,
    'email'=> $useremail,
    'state'=> $userstate
]);
}
public function confirm_email(Request $request){
    $user_email=$request->input('user_email');
    $user_password=DB::table('users')->where('email',$user_email)->value('password');
if(DB::table('users')->where('email',$user_email )->exists())
{
    return $user_password;
}
}
public function change_password(Request $request,$id)
{
    $new_password=$request->input('new_password');
    DB::table('users')->update([
        'password'=> $new_password,
    ]);

}
}
