@extends('user.app')

@section('content')


<!-- Page Header -->
<header class="masthead" style="background-image: url('{{ asset('user/img/home-bg.jpg') }}')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Clean Blog</h1>
          <span class="subheading">A Blog Theme by Start Bootstrap</span>
        </div>
      </div>
    </div>
  </div>
</header>


<form action="{{route('register.custom')}}" method="POST">
          @csrf
          <div class="container">
            <div class="row">
                <div class="col-md-8">
                  <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Full Name</label>
              <input type="text" class="form-control" placeholder="Full Name" name="name" required data-validation-required-message="Please enter your Full Name.">
              @error('name')
              <p class="help-block text-danger">{{$message}}</p>
              @enderror
            </div>        
            <div class="form-group floating-label-form-group controls">
              <label>Email Address</label>
              <input type="email" class="form-control" placeholder="Email Address" name="email" required data-validation-required-message="Please enter your email address.">
              @error('email')
              <p class="help-block text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password" name="password" required data-validation-required-message="Please enter your password.">
              @error('password')
              <p class="help-block text-danger">{{$message}}</p>
              @enderror
            </div>
            <div class="form-group floating-label-form-group controls">
              <label>Confirm Password</label>
              <input type="password" class="form-control" placeholder="Confirm Password" name="c_pass" required data-validation-required-message="Please enter Confirm Password.">
              @error('c_pass')
              <p class="help-block text-danger">{{$message}}</p>
              @enderror
            </div>
          </div>
          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary">Register</button>
          @if(Session::has('faild'))
          <span class="text-danger">{{Session('faild')}}</span>
          @endif
        </form>
      </div>
    </div>
  </div>

                </div>
            </div>
              
          </div>

          



  @endsection