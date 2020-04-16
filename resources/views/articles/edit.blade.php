@extends('layouts.admin')

@section('admin-content')
<div class="row mt-4">
  <!-- left column -->
  <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
          <div class="card-header">
              <h3 class="card-title">Edit Article Form</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="POST" action="{{ route('articles.update', $article->id) }}">
              @csrf
              @method('PUT')
              <div class="card-body">

                  {{-- Title Field --}}
                  <div class="form-group">
                      <label for="inputTitle">Title</label>
                      <input 
                        type="text" 
                        name="title" 
                        value="{{ $article->title }}"  
                        id="inputTitle" 
                        placeholder="Enter title"
                        class="form-control @error('title') border border-danger @enderror"
                        required>
                      <div class="text-danger">
                        {{ $errors->first('title') }}
                      </div>
                  </div>

                  {{-- Summary Field --}}
                  <div class="form-group">
                      <label for="inputSummary">Summary</label>
                      <input 
                        type="text" 
                        name="summary" 
                        value="{{ $article->summary }}"  
                        id="inputSummary" 
                        placeholder="Enter summary"
                        class="form-control @error('summary') border border-danger @enderror"
                        required>
                      <div class="text-danger">
                        {{ $errors->first('summary') }}
                      </div>
                  </div>

                  {{-- Body Field --}}
                  <div class="form-group">
                    <label>Body</label>
                    <textarea 
                      name="body" 
                      id="summernote"
                      class="class="form-control @error('body') border border-danger @enderror""
                      required>
                      {!! $article->body !!}
                    </textarea>
                    <div class="text-danger">
                      {{ $errors->first('body') }}
                    </div>
                </div>

                {{-- Image Field --}}
                <div class="form-group">
                  <label for="inputSummary">Image</label>
                  <input 
                    type="text" 
                    name="image" 
                    value="{{ $article->image }}"  
                    id="inputImage" 
                    placeholder="Enter image URL"
                    class="form-control @error('image') border border-danger @enderror"
                    required>
                  <div class="text-danger">
                    {{ $errors->first('image') }}
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-danger float-right" onclick="openModal({{ $article->id }})">
                    <i class="fas fa-trash"></i>
                    <span class="text-white">Delete</span>
                  </button>
              </div>
          </form>
      </div>
      <!-- /.card -->
  </div>

  <!--/.col (right) -->
    <!-- Delete Modal -->
    <div class="modal" id="deleteModal">
      <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <h2>Are you sure?</h2>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <form method="POST" action="{{ route('articles.destroy', $article->id) }}">
                @csrf
                @method('DELETE')
                    <button type="button" class="btn btn-success" onclick="closeModal()">No</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
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
    function openModal() {
        modal.style.display = "block";
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
