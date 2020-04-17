<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Article;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Query input for searching articles
        $query = $request->input('query');

        //If there is a query input
        if($query)
        {
            //Search for all articles which titles match the query
            $articles = Article::where('title', 'LIKE', "%$query%")->paginate(12);
        }
        else
        {
            //Display all articles
            $articles = Article::orderBy('created_at', 'DESC')->paginate(12);
        }

        //dd($articles);

        return view('articles.index', [
            'title' => 'Blog Posts',
            'articles' => $articles 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Return create article page
        return view('articles.create', [
            'title' => 'Create new article'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1. Validate form fields and store into $article array
        $article = $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'body' => 'required',
            'image' => 'required'
        ]);

        //2. Save article as the authenticated user
        Auth::user()->articles()->create($article);

        //3. Redirect to blog view
        return redirect(route('articles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', [
            'title' => 'Article',
            'article' => $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', [
            'title' => 'Edit Article',
            'article' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $updatedAttributes = $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'body' => 'required',
            'image' => 'required'
        ]);

        $article->update($updatedAttributes);

        //3. Redirect to blog view
        return redirect(route('articles.index'));
    }

    public function updateVisibility(Article $article)
    {
        //If else ternary operator. If visible, change visibility to 0. Else
        //turn visibility to 1.
        ($article->visible ? $article->visible = 0 : $article->visible = 1);

        //Persist article visibilty 
        $article->update();

        //Redirect to article index
        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect(route('articles.index'));
    }
}
