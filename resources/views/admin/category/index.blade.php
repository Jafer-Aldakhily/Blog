@extends('admin.app')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-danger">{{ Session('success') }}</div>
@endif


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Categories List</h3>
      <center><a href="{{ route('category.create') }}" class="btn btn-success">Add New</a></center>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Category Name</th>
          <th>Category Slug</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
          @php
              $i = 1;
          @endphp
          @foreach ($categories as $category)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td><a href="{{ route('category.edit',$category->id) }}"><i class="fas fa-edit"></i></a></td>
                <form id="delete-category-{{ $category->id }}" method="POST" action="{{ route('category.destroy',$category->id) }}" style="none;">
                  @csrf
                  @method('DELETE')
                  <td><a href=""><i class="fas fa-trash-alt text-danger" onclick="
                  if(confirm('Are tou sure delete it ?'))
                  {
                    event.preventDefault();
                    document.getElementById('delete-category-{{ $category->id }}').submit();
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
