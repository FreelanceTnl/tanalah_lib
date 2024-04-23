<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PublisherFormRequest;
use App\Models\Publisher;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishers=Publisher::orderBy('created_at','desc')->paginate(20);
        return view('pages.admin.publishers.index',[
            'publishers'=>$publishers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $publisher = new Publisher();
        return view('pages.admin.publishers.form',[
            'publisher'=>$publisher
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PublisherFormRequest $request)
    {
        
        Publisher::create($request->validated());
        return to_route('admin.publishers.index')->with('success','L\'Auteur a été créé avec succes.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        
        return view('pages.admin.publishers.form',[
            'publisher'=>$publisher
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PublisherFormRequest $request, Publisher $publisher)
    {
        $publisher->update($request->validated());
        return to_route('admin.publishers.index')->with('success','L\'Auteur a été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        $publisher->delete();
        return to_route('admin.publishers.index')->with('success','L\'Auteur "'.$publisher->name.'" a été supprimé.');
    }
}
