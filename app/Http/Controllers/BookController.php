<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::paginate(1);
        return view('crud.index', compact('books'));
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store()
    {

        $inputs = \request()->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        }

        Book::create($inputs);

        return back();
    }

    public function edit(Book $book){
        return view("crud.edit", compact('book'));
    }

    public function update($id){

        $book = Book::find($id);

        $inputs = \request()->validate([
            'title' => 'required'
        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        } else {
            $inputs['image'] = $book->image;
        }

        $book->update($inputs);
         session()->flash('update','Updated successfuly');
//        session()->put('update','Updated successfuly');
//        session()->forget('ahdfbcd');

        return redirect()->route('book.index');
    }


    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return back();
    }



}
