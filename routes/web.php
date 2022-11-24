<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
//////////////books login and registor
Route::get('/loging', [App\Http\Controllers\bookcont::class,'loging'])->name('loging');

Route::get('/loginn', [App\Http\Controllers\bookcont::class,'loginn'])->name('/') ;

Route::get('/registered', [App\Http\Controllers\bookcont::class,'registering'])->name('registering');

Route::get('/registerr', [App\Http\Controllers\bookcont::class,'retrn_regster'])->name('retrn_regster');

Route::get('/logoutuser',function(Request $request){
if(session()->has('login'))
{
    $request->session()->forget('login');
    $request->session()->flush();
}
return redirect('/loginn');
});
////////////////////////books
Route::get('/showbook',[App\Http\Controllers\bookcont::class,'showbook'])->name('showbook');
Route::get('/books/create',[App\Http\Controllers\bookcont::class,'addbook'])->name('addbook');
Route::post('/books/store',[App\Http\Controllers\bookcont::class,'storebook'])->name('storebook');
Route::get('/books/delete/{id}',[App\Http\Controllers\bookcont::class,'Deletebook'])->name('Deletebook');
Route::get('/books/edit/{id}',[App\Http\Controllers\bookcont::class,'modifybook'])->name('modifybook');
Route::post('/books/update/{id}',[App\Http\Controllers\bookcont::class,'update'])->name('update');
Route::get('/books/preview/{id}',[App\Http\Controllers\bookcont::class,'return_to_preview'])->name('return_to_priview');

Route::get('/books/searching',[App\Http\Controllers\bookcont::class,'search'])->name('search');
Route::get('/books/contact',[App\Http\Controllers\bookcont::class,'ret_to_contact'])->name('ret_to_contact');
Route::get('/books/books_by_cat',[App\Http\Controllers\bookcont::class,'RV_books_by_cat'])->name('ret_to_contact');
Route::get('/BG/{id}',[App\Http\Controllers\bookcont::class,'Return_books_bycat'])->name('return_book_by_cat');
Route::get('/Admin',[App\Http\Controllers\bookcont::class,'Return_to_Admin'])->name('Return_to_Admin');
Route::get('/test',[App\Http\Controllers\bookcont::class,'test'])->name('Return_to_Admin');
/***comments***/
Route::post('/priview/comment/{id}',[App\http\controllers\commentscon::class,'add_comment']);




/*********dont touch***********/
 function Return_categories_bynum($var){
    $cat=DB::table('categories')->value('name');
    return $cat;
    }

function Return_user_by_userid($id)
{
    $usr = DB::table('users')->where('id',$id)->value('name');
    return $usr;
}
////////////// categories
Route::get('/categories',[App\Http\Controllers\categoriescon::class,'index'])->name('index');
Route::get('/categories/create',[App\Http\Controllers\categoriescon::class,'addcadd_category1at1'])->name('addcat1');
Route::post('/categories/store',[App\Http\Controllers\categoriescon::class,'add_category2'])->name('addcat1');
Route::get('/categories/delete/{id}',[App\Http\Controllers\categoriescon::class,'deletecat'])->name('deletecat');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
