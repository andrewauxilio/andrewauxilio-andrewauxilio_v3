@extends('layouts.main')

@section('head')
    <!-- Blog Style -->
    <link href="{{ asset('css/main/blog.css') }}" rel="stylesheet">

    <!-- PrismJS Style -->
    <link href="{{ asset('css/prismjs/prism.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="animated fadeIn slow">
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{ $article->image }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row-fluid">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{ $article->title }}</h1>
                        <h2 class="subheading">{{ $article->summary }}</h2>
                        <span class="meta">
                            Posted by
                            <a href="#"> {{ $article->user->name }}</a>
                            {{ $article->created_at }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <p class="post-content text-justify">
                        <span>{{ $article->body }}</span>
                        {{-- <pre><code class="language-php">
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@home')->name('about');
Route::get('/projects', 'MainController@projects')->name('projects');
Route::get('/resume', 'MainController@resume')->name('resume');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/blog', 'ArticlesController@index')->name('articles.index');
Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');

Auth::routes();
                            
                        </code></pre> --}}
                    </p>
                </div>
            </div>
        </div>
    </article>
</div>

    <!-- PrismJS Script -->
    <script src="{{ asset('js/prismjs/prism.js') }}" defer></script>
@endsection
