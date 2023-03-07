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
        $tes=array(
            'categories_id'=>$categories_id,
                 'title'=>$book_name,
                 'Author'=>$Author_name,
                 'pagenumber'=>$page_number,
                 'bio'   => $bio,
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
  //$comments = books::find($id)->comments;
  $usr=$request->session()->get('login');
  $session_user=DB::table('users')->where('name',$usr)->value('id');
  $preview_book = DB::table('books')->find($id);
  $categories_preview=DB::table('categories')->get();
  return view('preview')->with('preview_book',$preview_book)
                          ->with('categories_preview',$categories_preview)
//->with('comments',$comments)
                          ->with('session_user',$session_user)
                          ->with('usr',$usr);
}
/***************searching************ */
public function search(Request $request){
  $result = books::where('title','like',$request->input('search').'%')->get();
  return view('Searchresult')->with('result',$result)
                             ->with('category',categories::all());
}
 /***************************end searching*********************************/
  public function ret_to_contact(){
    $cat_contact=categories::all();
    return view('contact')->with('cat_contact', $cat_contact);
  }
 /***************************return to welcome*********************************/
public function return_to_welcome(){
   $category=categories::all();
   $book= books::orderBy('id','desc')->take(20)->get();
    return view('welcome')->with('category',$category)
                          ->with('book',$book);
}
 /***************************return to Admin*********************************/
 public function Return_to_Admin(){
    $book= books::orderBy('id','desc')->take(20)->get();
    return view('Admin')->with('cat',categories::all())
                        ->with('book',$book);

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
/************************************************************************ */
public function test(Request $request)
{
    if ($request->session()->has('wanted_book_id')) {
        return $request->session()->get('wanted_book_id');
    }
    else
    {
        return 'no';
    }
}
/********************************************************************* */
public function return_pay(){
    return view('pay');
}
public function store_in_cart($id,Request $request)
{
    /**putting the book in session as a matrix */
   // $order= $request->session()->push('wanted_book',$wanted_book);

   /**getting the book that user want */
    $wanted_book_id=DB::table('books')->where('id',$id)->value('id');
    $price_book=DB::table('books')->where('id',$id)->value('price');

    /**adding the book into session table */
    if(DB::table('purcheses')->where('books',$wanted_book_id)->exists())
    {
            $affected = DB::update(
            'update purcheses set price = 5 where books = ?',
            [$wanted_book]);
            return "book already exists";
    }
    else
    {
          /*  $ses=DB::table('purcheses')->insert(
            $pur= array('books'=>$wanted_book,
            'price'=>20)
        );*/

         /**putting the book ids in session as a matrix */
        $order= $request->session()->push('wanted_book_id',$wanted_book_id);

        return 'book has been added to session';
    }

  return 'book has been added to my cart';
}

public function Show_cart(Request $request){
    //$books_in_cart=DB::select('select * from purcheses');
     $order=$request->session()->get('wanted_book_id');
    return view('cart')->with('order',$order);
}

public function Empting_item_in_cart(){
    $request->session()->pull('wanted_book_id','null');
}
}
