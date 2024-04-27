<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $query=Book::query();
        $query=$query->with('publisher','tags')->inRandomOrder()->limit(4);
        $tags=Tag::orderBy('name','asc')->get();
        $books = $query->get();
        return view('pages.front.index',[
            'books'=>$books,
            'tags'=>$tags
        ]);
    }
}
