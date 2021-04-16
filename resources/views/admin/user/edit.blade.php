@extends('admin.app')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-warning">{{ Session('success') }}</div>
@endif

<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Admin Data</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        {{-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> --}}
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="container">  
          <form action="{{route('user.update' , $admin->id)}}" method="POST">
            @csrf
            @method('PUT')   
        <div class="row">
        <div class="col-md-6 offset-md-4">
          <div class="form-group">
              <label class="col-form-label ml-2">Admin Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $admin->name }}">
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
          <label class="col-form-label ml-2">Admin Email</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $admin->email }}">
          </div>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
          <label class="col-form-label ml-2">Phone Number</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="{{ $admin->phone }}">
          </div>
          </div>
          <!-- /.form-group -->


          <div class="form-group">
          <label class="col-form-label ml-2">Status</label>
          <div class="col-sm-10">
          <input type="checkbox" name="status" value="1" @if($admin->status == 1) checked @endif>
          </div>
          </div>
          <!-- /.form-group -->


          <div class="form-group col-lg-12">
            <div class="row">
            <label style="margin-left:10px;">Assign Role</label>
            </div>
            <div class="row">
              @foreach($roles as $role)
            <div class="col-lg-4">
              <input type="checkbox"  name="role[]" value="{{$role->id}}"
              @foreach($admin->roles as $adminRole)
              @if($adminRole->id == $role->id)
              checked
              @endif
              @endforeach
              >
              <label>{{$role->name}}</label><br>
            </div>

            @endforeach

          </div>
          </div>



          <div class="form-group" style="margin-left:10px;">
            <button class="btn btn-primary">Update Admin</button>
            <a class="btn btn-warning" href="{{route('user.index')}}">Back</a>
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
      This Page Allow You To Edit Existing Category 
    </div>
  </div>
  <!-- /.card -->


@endsection 