<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    //
    public function Index(){
        $books=Book::with('publisher','tags')->orderBy('created_at','desc')->paginate(20);
        return view('pages.front.books.index',[
            'books'=>$books
        ]);
    }
    public function show(Book $book){
        $books=Book::with('publisher','tags')->where('title','!=',$book->title)->where('publisher_id',$book->publisher_id)->inRandomOrder()->limit(4)->get();
        return view('pages.front.books.show',[
            'book'=>$book,
            'books'=>$books
        ]);
    }
}
