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

    public function blog()
    {

        $articles = Article::orderBy('created_at', 'DESC')->paginate(5);
        return view('blog', [
            'title' => 'Blog',
            'articles' => $articles 
        ]);
    
    }
    
}
