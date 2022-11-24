<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\books;
use App\Models\categories;
use App\Models\User;
use App\Models\comments;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class bookcont extends Controller
{
    public function showbook(){

         $books= DB::select('select * from books') ;
         return view('books.index')->with('books',$books);
     }

     public function addbook(){
      return view('books.create')->with('cat',categories::all());
}

     public function storebook(Request $request){
       $book_name =$request->input('book_name');
       $Author_name=$request->input('Author_name');
       $page_number=$request->input('page_number');
       $bio=$request->input('bio');
       $price=$request->input('price');
       $categories_id=$request->input('categories_id');
/**************************************** */
  $image_name=$request->file('image')->getClientOriginalName();
  $request->file('image')->move(public_path('public/Image'), $image_name);
  $data['image']= $image_name;
/******************************************* */
       DB::table('books')->insert(
        $tes=  array(
            'categories_id' => $categories_id,
                 'title'   =>  $book_name,
                 'Author'   =>  $Author_name,
                 'pagenumber'   =>  $page_number,
                 'bio'   =>  $bio,
                 'image' => $image_name,
                 'price' => $price

          ));
                  return redirect('/books/create');
    }
/****************************************************** */
    public function Deletebook($id){
        $deleted = DB::table('books')->where('id', '=', $id)->delete();
        return redirect('/showbook');
    }
/******************************************************** */
    public function modifybook($id)
    {
        $book_id = books::find($id);
        return view('books.edit')->with('book_id',$book_id);
    }
    /*******************for updating the book info************************** */
    public function update(Request $request,$id)
    {   $book_name =$request->input('book_name');
        $Author_name=$request->input('Author_name');
        $page_number=$request->input('page_number');
        $bio=$request->input('bio');
        $price=$request->input('price');
        $image_name=$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('public/Image'), $image_name);
        $data['image']= $image_name;

            DB::table('books')
           ->where('id', $id)
           ->update(['title' => $book_name,
           'Author'=> $Author_name,
           'pagenumber' => $page_number,
           'price' => $price,
           'bio' => $bio,
            'image' => $image_name,]);
            return redirect('/showbook');
    }
/******************for preview view************************ */
  public function return_to_preview($id ,Request $request){
  $comments = books::find($id)->comments;
  $preview_book = DB::table('books')->find($id);
  $categories_preview=DB::table('categories')->get();
  return view('preview')->with('preview_book',$preview_book)
                          ->with('categories_preview',$categories_preview)
                          ->with('comments',$comments);
}

/*************************custom login************************* */
public function loginn()
{
    return view('loginn');
}
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
/**********************custom login end*************************** */
/**************registering start here***************** */
public function retrn_regster()
{
    return view('register');
}

public function registering(REQUEST $request){
    $usr=$request->input('register_username');
    $pass=$request->input('register_password');
    $email=$request->input('register_email');


    if (DB::table('users')->where('name', $usr)->exists() || DB::table('users')->where('email', $email)->exists())
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
 /************************end registering********************************/
 /***************************searching*********************************/
public function search(Request $request){
  $result = books::where('title','like',$request->input('search').'%')->get();
  $cat=categories::all();
  return view('Searchresult')->with('result',$result)
                             ->with('cat',$cat);
}
 /***************************end searching*********************************/
  public function ret_to_contact(){
    $cat_contact=categories::all();
    return view('contact')->with('cat_contact', $cat_contact);
  }
 /***************************return to welcome*********************************/
public function return_to_welcome(){
    $category=categories::all();
    $book=books::all();
    return view('welcome')->with('category',$category)
                          ->with('book',$book);
}
 /***************************return to Admin*********************************/
 public function Return_to_Admin(){
    return view('Admin')->with('cat',categories::all())
                        ->with('bkti',books::all());

 }
  /*************************** end return to Admin*********************************/
public function Return_books_bycat($id)
{
  $book=books::all()->where('categories_id',$id);
  $res_cat=categories::find($id);
  $category=categories::all();
  return view('books_by_cat')->with('book',$book)
                             ->with('category',$category)
                             ->with('res_cat',$res_cat);
}

}
