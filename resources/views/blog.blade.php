@extends('layouts.main')

@section('head')
    <!-- Styles -->
    <link href="{{ asset('css/main/blog.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Blog View-->
    <div class="container-fluid blog mt-2">
        <div class="row mt-4">
            <div class="col-lg-4 col-sm-10 mx-auto">
                <form method="GET" action="{{ route('blog') }}">
                    <div class="input-group input-group-lg">
                        <input type="text" name="query" class="form-control float-right" placeholder="Search">
    
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search text-white"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="animated fadeIn slow container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto text-center">
                    @foreach($articles as $article)
                        @if($article->visible == true)
                        <div class="post-preview">
                            <a href="{{ route('articles.show', $article->id) }}">
                                <h2 class="post-title">{{ $article->title }}</h2>
                                <h3 class="post-subtitle">{{ $article->summary }}</h3>
                            </a>
                            <p class="post-meta">
                                <a href="https://www.linkedin.com/in/andrewanthonyauxilio/">{{ $article->user->name}}</a>
                                on
                                {{ \Carbon\Carbon::parse($article->created_at)->format('d/m/Y') }}
                            </p>
                        </div>
                        @endif
                    @endforeach
                    <hr />
                    <div class="d-flex justify-content-center">
                        {{ $articles->links() }}     
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
