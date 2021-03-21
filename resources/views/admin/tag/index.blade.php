@extends('admin.app')

@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Tags List</h3>
      <center><a href="{{ route('tag.create') }}" class="btn btn-success">Add New</a></center>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Tag Name</th>
          <th>Tag Slug</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <tr>
          <td>Trident</td>
          <td>Internet
            Explorer 4.0
          </td>
          <td>Win 95+</td>
          <td> 4</td>
          <td>X</td>
        </tr>

        <tr>
            <td>Browser</td>
            <td>Microsoft Edge</td>
            <td>Win 95+</td>
            <td>4</td>
            <td>X</td>
          </tr>

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  


@endsection