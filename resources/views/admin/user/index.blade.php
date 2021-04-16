@extends('admin.app')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-danger">{{ Session('success') }}</div>
@endif


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Admins List</h3>
      <center><a href="{{ route('user.create') }}" class="btn btn-success">Add New</a></center>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Assigned Roles</th>
          <th>Status</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
          @php
              $i = 1;
          @endphp
          @foreach ($admins as $admin)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>@foreach($admin->roles as $adminRole)
                  {{$adminRole->name}},
                  @endforeach
                  
                </td>
                <td>@if($admin->status == 1)
                  <span class="text-primary">Active</span>
                  @else
                  <span class="text-danger">Not Active</span>
                  @endif
                </td>
                <td><a href="{{ route('user.edit',$admin->id) }}"><i class="fas fa-edit"></i></a></td>
                <form id="delete-user-{{ $admin->id }}" method="POST" action="{{ route('user.destroy',$admin->id) }}" style="none;">
                  @csrf
                  @method('DELETE')
                  <td><a href=""><i class="fas fa-trash-alt text-danger" onclick="
                  if(confirm('Are tou sure delete it ?'))
                  {
                    event.preventDefault();
                    document.getElementById('delete-user-{{ $admin->id }}').submit();
                  }


                  else
                  {
                    event.preventDefault();
                  }

                  "></i></a></td>
                </form>

              </tr>
          @endforeach


        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->



@endsection
