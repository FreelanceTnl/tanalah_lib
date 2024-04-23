<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagFormRequest;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags=Tag::orderBy('created_at','desc')->paginate(20);
        return view('pages.admin.tags.index',[
            'tags'=>$tags
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tag = new Tag();
        return view('pages.admin.tags.form',[
            'tag'=>$tag
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagFormRequest $request)
    {
        
        Tag::create($request->validated());
        return to_route('admin.tags.index')->with('success','L\'Auteur a été créé avec succes.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        
        return view('pages.admin.tags.form',[
            'publisher'=>$tag
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagFormRequest $request, Tag $tag)
    {
        $tag->update($request->validated());
        return to_route('admin.tags.index')->with('success','L\'Auteur a été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return to_route('admin.tags.index')->with('success','L\'Auteur "'.$tag->name.'" a été supprimé.');
    }
}
