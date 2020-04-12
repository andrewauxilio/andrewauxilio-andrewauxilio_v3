@extends('layouts.main')

@section('head')
    <!-- Styles -->
    <link href="{{ asset('css/main/blog.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Blog View-->
    <div class="container-fluid blog mt-2">
        <div class="animated fadeIn slow container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto text-center">
                    @foreach($articles as $article)
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
