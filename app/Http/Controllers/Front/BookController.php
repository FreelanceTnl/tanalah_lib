<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Book;

class BookController extends Controller
{
    //
    public function Index(){
        $books=Book::with('publisher','tags')->orderBy('created_at','desc')->paginate(20);
        dd($books);
        dd($books->items()[0]->getSlug());
    }
    public function show(Book $book){
        dd($book);
    }
}
