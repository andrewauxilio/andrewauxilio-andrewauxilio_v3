@extends('layouts.admin')

@section('admin-content')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-header bg-primary">
                    <h3 class="card-title">All Articles</h3>

                    <div class="card-tools">
                        <form method="GET" action="{{ route('articles.index') }}">
                            <div class="input-group input-group-sm" style="width: 200px;">
                                <input type="text" name="query" class="form-control float-right" placeholder="Search">
    
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Ations</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Tags</th>
                                <th>Created</th>
                                <th>Updated</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                            <tr>
                                <td>
                                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-block btn-primary"><i class="fas fa-edit"></i></a>

                                    <form method="POST" action="{{ route('articles.visible', $article->id) }}">
                                        @csrf
                                        @method('PUT')
                                        @if($article->visible)
                                        <button type="submit" class="btn btn-block btn-success mt-1"><i class="fas fa-eye"></i></button>
                                        @else
                                        <button type="submit" class="btn btn-block btn-danger mt-1"><i class="fas fa-eye-slash"></i></button>
                                        @endif
                                    </form>
                                </td> 
                                <td>{{ $article->user->name }}</td>
                                <td>{{ $article->title }}</td>
                                <td>
                                    @foreach($article->tags as $tag)
                                    {{ $tag->name }}
                                    @endforeach
                                </td>
                                <td>{{ $article->created_at }}</td>
                                <td>{{ $article->updated_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="card-footer">
                        {{ $articles->links() }} 
                    </div>
                </div>
                <!-- /.card-body -->
            </div>

            <!-- /.card -->
        </div>
    </div>
@endsection


