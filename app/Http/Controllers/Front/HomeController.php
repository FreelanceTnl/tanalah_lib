<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $books=Book::with('publisher','tags')->orderBy('created_at','desc')->limit(4)->get();
        dd($books);
    }
}
