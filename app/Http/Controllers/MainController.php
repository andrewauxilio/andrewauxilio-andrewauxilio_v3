<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    }

    public function blog()
    {

    }
    
}
