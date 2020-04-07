@extends('layouts.admin')

@section('admin-content')
<div class="row mt-4">
  <!-- left column -->
  <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
          <div class="card-header">
              <h3 class="card-title">Create New Article Form</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="POST" action="{{ route('articles.store') }}">
              @csrf
              <div class="card-body">

                  {{-- Title Field --}}
                  <div class="form-group">
                      <label for="inputTitle">Title</label>
                      <input 
                        type="text" 
                        name="title" 
                        value="{{ old('title') }}"  
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
                        value="{{ old('summary') }}"  
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
                      value="{{ old('body') }}" 
                      id="summernote"
                      class="class="form-control @error('body') border border-danger @enderror""
                      required>
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
                    value="{{ old('image') }}"  
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
              </div>
          </form>
      </div>
      <!-- /.card -->
  </div>
  <!--/.col (right) -->
</div>

<script>
  $('#summernote').summernote({
    placeholder: 'Hello Bootstrap 4',
    tabsize: 2,
    height: 100,
  });
</script>
@endsection
