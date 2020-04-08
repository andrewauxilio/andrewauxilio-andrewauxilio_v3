@extends('layouts.admin')

@section('admin-content')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-header bg-primary">
                    <h3 class="card-title">All Articles</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
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
                                    <button type="button" class="btn btn-block btn-primary"><i class="fas fa-edit"></i></button>
                                    <button type="button" class="btn btn-block btn-danger"><i class="fas fa-trash"></i></button>
                                </td>
                                <td>{{ $article->user->name }}</td>
                                <td>{{ $article->title }}</td>
                                <td>Laravel, PHP</td>
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
