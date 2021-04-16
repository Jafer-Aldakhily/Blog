@extends('admin.app')

@section('content')
@if (Session::has('success'))
    <div class="alert alert-success">{{ Session('success') }}</div>
@endif


<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Permission Data</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        {{-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> --}}
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="container">  
          <form action="{{ route('permission.store') }}" method="POST">
            @csrf   
        <div class="row">
        <div class="col-md-6 offset-md-4">
          <div class="form-group">
              <label class="col-form-label ml-2">permission Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="permission Name">
                @error('permission_name')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>

          </div>
          <!-- /.form-group -->
          

          <div class="form-group">
              <div class="col-sm-10">
                <label for="cars">Permission For:</label>
                <select  class="form-control" name="for" placeholder="Permission For">
                <option>Select permission for</option>
                <option value="user">User</option>
                <option value="post">Post</option>
                <option value="other">Other</option>
                </select>
              </div>

          </div>
          <!-- /.form-group -->


        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <div class="row">
        <div class="col-md-6 offset-md-4">
          <div class="form-group" style="margin-left:10px;">
            <button class="btn btn-primary">Create permission</button>
            <a class="btn btn-warning" href="{{route('permission.index')}}">Back</a >
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
      This Page Allow You To Create A New permission 
    </div>
  </div>
  <!-- /.card -->


@endsection 