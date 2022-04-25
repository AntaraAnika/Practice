<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

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
Route::get('/', function (){
    return view('user.user-view');
});


//insert
Route::get('/insert', function (){
//    DB::insert('insert into books (title) values (?)', ['dd']);

    Book::create([
       'title' => "abcd"
    ]);
});

//Select
Route::get('/select', function (){

//    $books = DB::select("select * from books");
    $books = Book::all();

    foreach ($books as $book){
        echo $book->title;
    }

  //  return $books;
});

//Update
Route::get('/update', function (){

//    $books = DB::update("update books set title = 'qqqq' where id= 1");
    $books = Book::where('id','1')->update([
        'title' => 'aur'
    ]);
    return $books;
});

//Delete
Route::get('/delete', function (){

    $books = Book::where('id','1')->delete([
        'title' => 'aur'
    ]);
    return $books;
});


