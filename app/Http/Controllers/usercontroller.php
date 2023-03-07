<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\books;
use App\Models\categories;
use App\Models\User;
use App\Models\comments;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\mail;
use App\mail\signup;
use App\mail\forgot;
class usercontroller extends Controller
{
/************************************* */
public function loginn()
{
    return view('loginn');
}
/*********************************** */
public function loging(Request $request){
    $book=books::orderBy('id','desc')->take(20)->get();
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
                                ->with('book',$book);

        }else{
            if($request->session()->exists('login'))
            {
                return  view('index')->with('usr',$usr)
                ->with('cat',categories::all())
                ->with('book',$book);
            }
            else if($request->session()->missing('login'))
            {
                $category=categories::all();
                $book= books::orderBy('id','desc')->take(20)->get();
                return view('welcome')->with('category',$category)
                                       ->with('book',$book);
            }
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
/************************************ */
public function user_in_session(Request $request){
$usr=$request->input('register_username');
$pass=$request->input('register_password');
$email=$request->input('register_email');
if (DB::table('users')->where('name', $usr)->exists() || DB::table('users')->where('email',
$email)->exists())
{
    return 'name or email already exist please try again with a diffrent inputs';
}else
{
$request->session()->put('register_username',$usr);
$request->session()->put('register_password',$pass);
$request->session()->put('register_email',$email);
$link="http://127.0.0.1:8000/registered";
//return dd($request->session()->all());
Mail::to($email)->send(new signup($link,$usr));
return "please check your email";
}
}
/***************registering************************ */
public function registering(REQUEST $request){
    /*get a value from the session*/
    $usr=Session::get('register_username');
    $pass=session::get('register_password');
    $email=session::get('register_email');

        DB::table('users')->insert(
            $us=array(
                     'name'   =>  $usr,
                     'password' => $pass,
                     'email' => $email
              ));
              return view('loginn');
 }
 /******************************* */
public function Delete_user($id){
DB::table('users')->where('id', '=', $id)->delete();
 return redirect('users/show/');
}
/********************************* */
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
/***************forgot my password************** */
/*1*/public function return_recover_mypassword(){
    return view('forgot_password');
}

/*2*/public function Enter_email(Request $request){
$link=" http://127.0.0.1:8000/forgot/Email/change";

$user_email=$request->input('user_email');
$request->session()->put('user_email',$user_email);

if(DB::table('users')->where('email',$user_email )->exists())
{
    Mail::to($user_email)->send(new forgot($link));
    return "check your email";
}else{
return "Email isnt exists";
}
}
/*4*/public function return_change_password(){
    return view('change_password');
}
/*4*/public function change_password(Request $request)
{
    $email = Session::get('user_email');
    $new_password=$request->input('new_password');
    DB::table('users')
    ->where('email',$email)
    ->update([
        'password'=> $new_password,
    ]);
    return 'password changed';
}
}
