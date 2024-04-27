<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagFilterRequest;
use App\Models\Book;
use App\Models\Tag;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    //
    public function index(TagFilterRequest $request){
        
        if($tag=$request->validated('tag')){
            $query = Tag::find($tag)?->books();
        }
        if(!isset($query)){
            $query=Book::query();
        }
        if($title=$request->validated('keyword')){
            $query = $query->where('title','like',"%{$title}%");
        }
        $query=$query->with('publisher','tags')->where('available',1)->orderBy('title','asc');
        $books=$query->paginate(20);
        $tags=Tag::orderBy('name','asc')->get();
        return view('pages.front.books.index',[
            'books'=>$books,
            'tags'=>$tags
        ]);
    }
    public function show(Book $book){
        $books=Book::with('publisher')->where('title','!=',$book->title)->where('publisher_id',$book->publisher_id)->inRandomOrder()->limit(4)->get();
        return view('pages.front.books.show',[
            'book'=>$book,
            'books'=>$books
        ]);
    }
    public function download(Book $book){
        return Storage::download('public/'.$book->link);
        //dd('public/'.$book->link);
        //return to_route('front.books.show',$book)->with('success','Le Livre est en plein Téléchargement.');
    }
}
