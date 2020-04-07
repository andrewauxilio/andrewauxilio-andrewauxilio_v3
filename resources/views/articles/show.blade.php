@extends('layouts.admin')

@section('admin-content')
<div class="animated fadeIn slow inner">
    <!-- Page Header -->
    <header class="masthead">
        <div class="overlay"></div>
        <div class="container">
            <div class="row-fluid">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{-- title --}}</h1>
                        <h2 class="subheading">{{-- summary --}}</h2>
                        <span class="meta">
                            Posted by
                            <a href="#"> {{-- author --}}</a>
                            {{-- date --}}
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
                        <span>{{-- content --}}</span>
                    </p>
                </div>
            </div>
        </div>
    </article>
</div>
@endsection
