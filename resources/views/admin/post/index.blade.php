@extends('admin.app')

@section('content')

@if (session()->has('success'))
    <div class="alert alert-danger">{{ session('success') }}</div>
@endif


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Posts List</h3>
      <center><a href="{{ route('post.create') }}" class="btn btn-success">Add New</a></center>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Sub Title</th>
          <th>Slug</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
          @php
              $i = 1;
          @endphp
          @foreach ($posts as $post)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->sub_title }}</td>
                <td>{{ $post->slug }}</td>
                <td><a href="{{ route('post.edit',$post->id) }}"><i class="fas fa-edit"></i></a></td>
                <form id="delete-post-{{ $post->id }}" method="POST" action="{{ route('post.destroy',$post->id) }}" style="none;">
                  @csrf
                  @method('DELETE')
                  <td><a href=""><i class="fas fa-trash-alt text-danger" onclick=" 
                  if(confirm('Are tou sure delete it ?'))
                  {
                    event.preventDefault();
                    document.getElementById('delete-post-{{ $post->id }}').submit();
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
        {{-- <tfoot>
        <tr>
          <th>Rendering engine</th>
          <th>Browser</th>
          <th>Platform(s)</th>
          <th>Engine version</th>
          <th>CSS grade</th>
        </tr>
        </tfoot> --}}
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  


@endsection