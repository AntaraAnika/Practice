<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\DB;
//use App\Models\Book;
//use App\Http\Controllers;
use App\Http\Controllers\BookController;

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
Route::get('/home', function (){

//    $books = Book::all();
//
//    return view('user.home', ['books' => $books]);
    return view('user.user-view');

//    Book::create([
//      'title' => "dd"
//    ]);

});
//
Route::get('/delete/{id}', function ($id)
{
    $book = Book::find(id);
    $book->delete();

    return back();
})->name('delete.data');

////insert
//Route::get('/insert', function (){
////    DB::insert('insert into books (title) values (?)', ['dd']);
//
//    Book::create([
//       'title' => "dd"
//    ]);
//});
//
////Select
//Route::get('/select', function (){
//
////    $books = DB::select("select * from books");
//    $books = Book::all();
//
//    foreach ($books as $book){
//        echo $book->title;
//    }
//
//  //  return $books;
//});
//
////Update
//Route::get('/update', function (){
//
////    $books = DB::update("update books set title = 'qqqq' where id= 1");
//    $books = Book::where('id','1')->update([
//        'title' => 'aur'
//    ]);
//    return $books;
//});
//
//Delete
//Route::get('/delete', function (){
//
//    $books = Book::where('id','1')->delete([
//        'title' => 'aur'
//    ]);
//    return $books;
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware('user')->group(function (){

    Route::get('/test', function (){
        return "abcd";
    });
});

//////////Crud/////////
//Route::get('index', [BookController::class,'index'])->name('book.index');
//Route::get('create', [BookController::class,'create']);
//Route::post('createData', [BookController::class,'store'])->name('book.store');
//
//
//Route::delete('delete/{id}',[BookController::class,'delete'])->name('book.delete');
//
//Route::get('edit/{book}', [BookController::class,'edit'])->name('book.edit');
//Route::put('edit/{id}/update', [BookController::class,'update'])->name('book.update');
//
//Route::resource('test', 'TestController');

//Relation
//Route::get('create', function (){
//    $user = \App\Models\User::first();
//
//    $user->post()->create([
//        'title' => 'hi'
//    ]);
//});
// Route::get('select', function (){
//     $user = \App\Models\User::first();
//     $user = \App\Models\User::whereId(1)->get();
//     return $user;
//
////     foreach ($user->post as $posts){
////         return $posts;
////     }
// });
//
//Route::get('update', function (){
//    $user = \App\Models\User::first();
//    return $user->post()->whereId(1)->update([
//        'title'=>'dddd'
//    ]);
//});
//
//Route::get('delete', function (){
//    $post = \App\Models\Post::first();
//    return $user->post()->whereId(1)->delete();
//});
////relationship


Route::get('create', function (){
    $user = \App\Models\User::first();

    $user->post()->create([
        'title'=> 'new Title'
    ]);

});


Route::get('read', function (){

    $user = \App\Models\User::first();
    $user = \App\Models\User::whereId(1)->get();
    return $user;
});

Route::get('update', function (){
    $user = \App\Models\User::first();
    return $user->post()->whereId(5)->update([
        'title' => 'more neeeeew'
    ]);
});

Route::get('delete',function (){
    $user = \App\Models\User::first();
   return $user->post()->whereId(3)->delete();
});

Route::get('posts', function (){
    $user = \App\Models\User::first();
    $user = \App\Models\User::whereId(1)->get();
    return $user;


});
