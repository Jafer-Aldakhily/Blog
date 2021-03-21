@extends('admin.app')

@section('content')

<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Category Data</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        {{-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> --}}
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="container">  
          <form action="#" method="POST">
            @csrf   
        <div class="row">
        <div class="col-md-6 offset-md-4">
          <div class="form-group">
              <label class="col-form-label ml-2">Category Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="category_name" placeholder="Category Name">
              </div>

          </div>
          <!-- /.form-group -->
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <div class="row">
        <div class="col-md-6 offset-md-4">
          <div class="form-group">
          <label class="col-form-label ml-2">Category Slug</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="category_slug" placeholder="Category Slug">
          </div>
          </div>
          <!-- /.form-group -->
          <div class="form-group" style="margin-left:10px;">
            <button class="btn btn-primary">Create Category</button>
          </div>
          <!-- /.form-group -->

        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->

          </form>
        </div>


    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      This Page Allow You To Create A New Category 
    </div>
  </div>
  <!-- /.card -->


@endsection 