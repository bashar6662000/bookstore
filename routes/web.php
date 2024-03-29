<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\books;
use App\Models\user;
use App\Models\comments;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('index');
});*/
Route::get('/', [App\Http\Controllers\bookcont::class,'return_to_welcome'])->name('return_to_welcome');
/////////////info
Route::get('/books', [App\Http\Controllers\infocontroller::class,'index'])->name('book');
////////////// login and registor
Route::get('/loging', [App\Http\Controllers\usercontroller::class,'loging'])->name('loging');
Route::get('/loginn', [App\Http\Controllers\usercontroller::class,'loginn'])->name('/') ;
Route::get('/registered', [App\Http\Controllers\usercontroller::class,'registering'])->name('registering');
Route::get('/registerr', [App\Http\Controllers\usercontroller::class,'retrn_regster'])->name('retrn_regster');
Route::get('/forgot', [App\Http\Controllers\usercontroller::class,'return_recover_mypassword'])->name('return_recover_mypassword');
Route::get('/forgot/Email', [App\Http\Controllers\usercontroller::class,'Enter_email'])->name('Enter_email');
Route::get('/forgot/Email/change', [App\Http\Controllers\usercontroller::class,'return_change_password'])->name('return_change_password');
Route::get('/forgot/Email/change/recover', [App\Http\Controllers\usercontroller::class,'change_password'])->name('change_password');

Route::get('/logoutuser',function(Request $request){
if(session()->has('login'))
{
    $request->session()->forget('login');
    $request->session()->flush();
}
return redirect('/loginn');
});
//////////////////// users
Route::get('/books/users/show', [App\Http\Controllers\usercontroller::class,'Show_all_users'])->name('Show_all_users');
Route::get('/user/delete/{id}', [App\Http\Controllers\usercontroller::class,'Delete_user'])->name('Delete user');
Route::get('/user/edit1/{id}', [App\Http\Controllers\usercontroller::class,'return_to_edit'])->name('edit2 user');
Route::post('/user/edit2/{id}', [App\Http\Controllers\usercontroller::class,'edit_user'])->name('edit2 user');
Route::get('/singup', [App\Http\Controllers\usercontroller::class,'user_in_session'])->name('user_in_session');
////////////////////////books
Route::get('/showbook',[App\Http\Controllers\bookcont::class,'showbook'])->name('showbook');
Route::get('/books/create',[App\Http\Controllers\bookcont::class,'addbook'])->name('addbook');
Route::post('/books/store',[App\Http\Controllers\bookcont::class,'storebook'])->name('storebook');
Route::get('/books/delete/{id}',[App\Http\Controllers\bookcont::class,'Deletebook'])->name('Deletebook');
Route::get('/books/edit/{id}',[App\Http\Controllers\bookcont::class,'modifybook'])->name('modifybook');
Route::post('/books/update/{id}',[App\Http\Controllers\bookcont::class,'update'])->name('update');
Route::get('/books/preview/{id}',[App\Http\Controllers\bookcont::class,'return_to_preview'])->name('return_to_priview');
Route::get('/books/pay',[App\Http\Controllers\bookcont::class,'return_pay'])->name('return_pay');
Route::get('/books/searching/',[App\Http\Controllers\bookcont::class,'search'])->name('search');
Route::get('/books/contact',[App\Http\Controllers\bookcont::class,'ret_to_contact'])->name('ret_to_contact');
Route::get('/books/books_by_cat',[App\Http\Controllers\bookcont::class,'RV_books_by_cat'])->name('ret_to_contact');
Route::get('/BG/{id}',[App\Http\Controllers\bookcont::class,'Return_books_bycat'])->name('return_book_by_cat');
Route::get('/Admin',[App\Http\Controllers\bookcont::class,'Return_to_Admin'])->name('Return_to_Admin');

Route::get('/testt/{id}',[App\Http\Controllers\bookcont::class,'store_in_cart'])->name('store_in_cart');
Route::get('/test',[App\Http\Controllers\bookcont::class,'test'])->name('Return_to_Admin');
Route::get('/books/my_cart',[App\Http\Controllers\bookcont::class,'Show_cart'])->name('Show_cart');
function Return_book_by_id($id)
{
    $book=DB::table('books')->where('id',$id)->value('title');
    return $book;
}

function Return_book_by_price($id)
{
    $book=DB::table('books')->where('id',$id)->value('price');
    return $book;
}
//Route::get('/books/preview/pay');

/***comments***/
Route::post('/priview/comment/{id}',[App\http\controllers\commentscon::class,'add_comment']);
Route::get('/priview/comment/delete/{id}', function ($id) {
    DB::table('comments')->where('id', '=', $id)->delete();
    return back()->withInput();
});
Route::get('/priview/comment/edit/{id}',[App\http\controllers\commentscon::class,'edit_comment']);

    function hide_comment_options($a,$b)
    {
    if($a==$b){
        return 'visible';
    }elseif($a!==$b)
    {
        return 'hidden';
    }
    }
/********************/
function Return_categories_bynum($id)
{
    $cat=DB::table('categories')->where('id',$id)->value('name');
    return $cat;
}
function Return_user_by_userid($id)
{
    $usr = DB::table('users')->where('id',$id)->value('name');
    return $usr;
}
////////////// categories
Route::get('/categories',[App\Http\Controllers\categoriescon::class,'index'])->name('index');
Route::get('/categories/create',[App\Http\Controllers\categoriescon::class,'add_category1'])->name('addcat2');
Route::post('/categories/store',[App\Http\Controllers\categoriescon::class,'add_category2'])->name('addcat1');
Route::get('/categories/delete/{id}',[App\Http\Controllers\categoriescon::class,'deletecat'])->name('deletecat');
///////////////mail
Route::get('/mail/new_user',[App\Http\Controllers\mailcontroller::class,'send_mail_to_new_user']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
