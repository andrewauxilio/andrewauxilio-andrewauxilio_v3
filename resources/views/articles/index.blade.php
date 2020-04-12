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
                                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-block btn-primary"><i class="fas fa-edit"></i></a>
                                    <button class="btn btn-block btn-danger" onclick="openModal({{ $article->id }})"><i class="fas fa-trash"></i></button>
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

    <!-- Delete Modal -->
    <div class="modal" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                    <h2>Are you sure?</h2>
                    <input name="article" id="article">
                </div>
    
                <!-- Modal footer -->
                <div class="modal-footer">
                    <form method="POST" action="{{ route('articles.destroy', $_POST['article']) }}">
                        <button type="button" class="btn btn-success" onclick="closeModal()">No</button>
                        <a type="submit" class="btn btn-danger">Delete</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>

    //Assign modal element to variable
    let modal = document.getElementById("deleteModal");

    let article = document.getElementById("article");

    //Open modal function
    function openModal(id) {
        modal.style.display = "block";
        article.value= new Number(id);
    }

    //Close modal function
     function closeModal() {
        modal.style.display = "none";
    }

    //Close modal function (click anywhere)
    window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
    }
</script>
@endsection

@section('style')
<style>
    .modal {
        display: none;
        background-color: rgba(255, 255, 255, 0.5);;
    }
</style>
@endsection
