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


<form action="{{ route('user.store') }}" method="POST">
          @csrf
          <div class="container">
            <div class="row">
                <div class="col-md-8">
                  
                  <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email Address</label>
              <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password" id="phone" required data-validation-required-message="Please enter your phone number.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" id="sendMessageButton">login in</button>
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Register</button>
        </form>
      </div>
    </div>
  </div>

                </div>
            </div>
              
          </div>

          



  @endsection