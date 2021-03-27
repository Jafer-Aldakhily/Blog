@extends('admin.app')

@section('content')

@if (session()->has('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif


<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Post Data</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        {{-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> --}}
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            
              <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Title" name="post_title">
              </div>

          </div>
          <!-- /.form-group -->
          
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <div class="form-group" style="margin-top:35px;">
            <input type="file" name="post_image">
              <input class="form-check-input" type="checkbox" name="status" value="1">
              <label class="form-check-label">Publish</label>
          </div>
          <!-- /.form-group -->
          
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->


      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Sub Title</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Sub Title" name="sub_title">
          </div>
          </div>
          <!-- /.form-group -->
          
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <div class="form-group">
            <label>Categories</label>
            <select class="select2" multiple="multiple" name="categories[]" data-placeholder="Select a category one or more" style="width: 100%;">
              @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>

          </div>
          <!-- /.form-group -->
          
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->


      <div class="row">
        <div class="col-md-6">
          <div class="form-group">

          <label for="inputPassword3" class="col-sm-2 col-form-label">Slug</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="slug" placeholder="Slug">
          </div>

          <label for="inputPassword3" class="col-sm-2 col-form-label">Posted By</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="posted_by" placeholder="Posted By">
          </div>

          </div>
          <!-- /.form-group -->
          
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <div class="form-group">
            <label>Tags</label>
            <select class="select2" multiple="multiple" name="tags[]" data-placeholder="Select a tag one or more" style="width: 100%;">
              @foreach ($tags as $tag)
              <option value="{{ $tag->id }}">{{ $tag->name }}</option>
              @endforeach
            </select>

          </div>
          <!-- /.form-group -->
          
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->


      
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Post Titles
    </div>
  </div>
  <!-- /.card -->


  <!-- SELECT2 EXAMPLE -->
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Post Description</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      {{-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> --}}
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="">Post Body:</label>
          <textarea name="editor1"></textarea>
        </div>
        <!-- /.form-group -->

        <button type="submit" class="btn btn-primary">Create Post</button>
      </div>
      <!-- /.col -->

    </div>
    <!-- /.row -->

  </form>

  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    This Page Allow You To Create A New Post
  </div>
</div>
<!-- /.card -->


@endsection