@extends('admin.app')

@section('content')
@if (Session::has('success'))
    <div class="alert alert-success">{{ Session('success') }}</div>
@endif


<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">role Data</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        {{-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> --}}
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="container">  
          <form action="{{ route('role.store') }}" method="POST">
            @csrf   
        <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group">
              <label class="col-form-label ml-2">Role Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Role Name">
                @error('role_name')
                <small class="text-danger">{{$message}}</small>
                @enderror
              </div>

          </div>
          <!-- /.form-group -->
          </div>
        </div>
        <!-- Row -->
          <div class="col-md-6 offset-md-3">
          <div class="row">
            <div class="col-md-4">
              <label class="col-form-label">Post Permissions</label>
                @foreach($permissions as $permission)
                @if($permission->for == 'post')
                <div class="checkbox">
                <label><input type="checkbox" value="{{$permission->id}}" name="permission[]">{{$permission->name}}</label>
                </div>
                @endif
                @endforeach

          </div>
          <!-- /col -->

            <div class="col-md-4">
              <label class="col-form-label">User Permissions</label>
                @foreach($permissions as $permission)
                @if($permission->for == 'user')
                <div class="checkbox">
                <label><input type="checkbox" value="{{$permission->id}}" name="permission[]">{{$permission->name}}</label>
                </div>
                @endif
                @endforeach

          </div>
          <!-- /col -->


            
            <div class="col-md-4">
              <label class="col-form-label">Other Permissions</label>
                @foreach($permissions as $permission)
                @if($permission->for == 'other')
                <div class="checkbox">
                <label><input type="checkbox" value="{{$permission->id}}" name="permission[]">{{$permission->name}}</label>
                </div>
                @endif
                @endforeach

          </div>
          <!-- /col -->

            </div>
              <!-- /row-->

              </div>
                <!-- col-md-6 offset-md-3 -->
      

            




      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="form-group" style="margin-left:10px;">
            <button class="btn btn-primary">Create Role</button>
            <a class="btn btn-warning" href="{{route('role.index')}}">Back</a >
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
      This Page Allow You To Create A New role 
    </div>
  </div>
  <!-- /.card -->


@endsection 