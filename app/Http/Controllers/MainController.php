<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class MainController extends Controller
{
    public function home()
    {
        return view('about', [
            'title' => 'Andrew Auxilio'
        ]);
    }

    public function projects()
    {
        return view('projects', [
            'title' => 'Projects'
        ]);
    }

    public function resume()
    {
        return view('resume', [
            'title' => 'Resume'
        ]);
    }

    public function blog(Request $request)
    {
        //Query input for searching articles
        $query = $request->input('query');

        //If there is a query input
        if($query)
        {
            //Search for all articles which titles match the query
            $articles = Article::where('title', 'LIKE', "%$query%")->paginate(5);
        }
        else
        {
            //Display all articles
            $articles = Article::orderBy('created_at', 'DESC')->paginate(5);
        }

        return view('blog', [
            'title' => 'Blog',
            'articles' => $articles 
        ]);
    
    }
    
}
