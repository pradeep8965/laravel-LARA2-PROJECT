<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // i want perform read orpertion
        //1. Query Builder 

        //2. Eloquent ORM {object relational maper}
        $news = News::orderBy('created_at', 'desc')->get();
        return view('news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        // i want to insert records in database
        News::create($request->all());
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //READ Operation
        // using eloquent ORM
        $news = News::find($news->id);
        return view('news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
         //dd($news->id);
        //I want to update the record using Eloquent ORM
        News::where('id', $news->id)->update($request->only(['title', 'description', 'image_url']));
        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
