@extends('admin.app')

@section('content')

<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">tag Data</h3>

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
            @method('PUT')    
        <div class="row">
        <div class="col-md-6 offset-md-4">
          <div class="form-group">
              <label class="col-sm-2 col-form-label">Tag Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="tag_name" placeholder="Tag Name">
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
          <label class="col-sm-2 col-form-label">Tag Slug</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="tag_slug" placeholder="Tag Slug">
          </div>
          </div>
          <!-- /.form-group -->
          <div class="form-group" style="margin-left:10px;">
            <button type="submit" class="btn btn-primary">Create tag</button>
          </div>
          <!-- /.form-group -->

        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->

      <div class="row">
          <div class="form-group">
          </div>
      </div>

    </form> 
        </div>


    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      This Page Allow You To Update Existing Tag 
    </div>
  </div>
  <!-- /.card -->


@endsection