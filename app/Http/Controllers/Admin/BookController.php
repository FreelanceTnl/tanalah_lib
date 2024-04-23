<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookFormRequest;
use App\Models\Book;
use App\Models\Publisher;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books=Book::with('publisher','tags')->orderBy('created_at','desc')->paginate(20);
        return view('pages.admin.books.index',[
            'books'=>$books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $book = new Book();
        return view('pages.admin.books.form',[
            'book'=>$book,
            'publishers'=>Publisher::pluck('name','id'),
            'tags'=>Tag::pluck('name','id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookFormRequest $request)
    {
        $thumbnail_link = $request->file('thumbnail')->store('public/thumbnails');
        $book_link = $request->file('book')->store('public/books');
        $book = Book::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'thumbnail'=>$thumbnail_link,
            'publisher_id'=>$request->publisher,
            'link'=>$book_link,
            'page_number'=>$request->integer('page_number'),
            'available'=>$request->integer('available')
        ]);
        $book->tags()->sync($request->validated('tags'));
        return to_route('admin.books.index')->with('success','Le Livre a été créé avec succes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('pages.admin.books.form',[
            'book'=>$book,
            'publishers'=>Publisher::pluck('name','id'),
            'tags'=>Tag::pluck('name','id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookFormRequest $request,Book $book)
    {
        $book->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'publisher_id'=>$request->integer('publisher'),
            'page_number'=>$request->integer('page_number'),
            'available'=>$request->integer('available')
        ]);
        $book->tags()->sync($request->validated('tags'));
        return to_route('admin.books.index')->with('success','Le Livre a été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        Storage::delete([$book->thumbnail, $book->link]);
        $book->delete();
        return to_route('admin.books.index')->with('success','Le Livre "'.$book->title.'" a été supprimé.');
    }
}