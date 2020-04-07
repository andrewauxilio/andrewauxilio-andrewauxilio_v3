@extends('layouts.main')

@section('head')
    <!-- Styles -->
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Blog View-->
    <div class="container-fluid blog mt-2">
        <div class="animated fadeIn slow container inner">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto text-center">
                    <div>
                        <div class="post-preview">
                            <a href="#">
                                <h2 class="post-title">Test</h2>
                                <h3 class="post-subtitle">Summary of Article</h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href="https://www.linkedin.com/in/andrewanthonyauxilio/">Andrew Auxilio</a>
                                07/04/2020
                            </p>
                        </div>
                    </div>
                    <hr />
                    <!-- Pager -->
                    <div class="clearfix">
                        <a class="btn rounded-0">Older Posts &darr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
