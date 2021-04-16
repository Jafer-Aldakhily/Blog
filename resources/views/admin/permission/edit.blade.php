@extends('admin.app')

@section('content')
@if (Session::has('success'))
    <div class="alert alert-warning">{{ Session('success') }}</div>
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
          <form action="{{ route('permission.update' , $permission->id) }}" method="POST">
            @csrf
            @method('PUT')   
        <div class="row">
        <div class="col-md-6 offset-md-4">
          <div class="form-group">
              <label class="col-form-label ml-2">permission Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="permission Name" value="{{$permission->name}}">
              </div>

          </div>
          <!-- /.form-group -->
        
          <div class="form-group">
              <label class="col-form-label ml-2">permission For</label>
              <div class="col-sm-10">
                <select class="form-control" name="for">
                  <option value="{{$permission->for}}">{{$permission->for}}</option>
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
            <button class="btn btn-primary">Edit permission</button>
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