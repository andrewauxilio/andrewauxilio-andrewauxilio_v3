@extends('layouts.main')

@section('content')
<!-- Home View-->
<div class="home">
    <div class="animated fadeIn slow container-fluid inner">
        <div class="row h-100">
            <div class="mx-auto my-auto">
                <div class="container text-center w-100 mx-auto">
                    <!-- Avatar -->
                    <div class="mx-auto col-lg-12">
                        <img src="{{ asset('images/avatars/avatar_cartoon.png') }}"
                            class="rounded rounded-circle shadow mx-auto d-block" id="avatar" alt="Andrew Auxilio" />
                    </div>
                    <!-- Summary -->
                    <div>
                        <p class="mx-auto col-sm-12 col-lg-6 mt-4" id="about">
                            Hi, I'm Andrew Auxilio : A Melbourne-based fullstack
                            web developer.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
