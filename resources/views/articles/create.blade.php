@extends('layouts.admin')

@section('admin-content')
<div class="row mt-4">
  <!-- left column -->
  <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
          <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form">
              <div class="card-body">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <x-editor></x-editor>
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
@endsection
