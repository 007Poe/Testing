<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="_token" content="{!! csrf_token() !!}" />

  <title>PICO Admin - Login</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="/images/default/favicon.png">
  <!-- Custom fonts for this template-->
  <link href="{{ asset('Admin/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{ asset('Admin/css/login.css') }}" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post" action="/login" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" value="{{ old('email') }}">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" value="Sign In">
        </form>
        <!-- <div class="text-center">
          <a class="d-block small mt-3" href="#">Register an Account</a>
          <a class="d-block small" href="#">Forgot Password?</a>
        </div> -->
      </div>
      @if(count($errors))
      <ul>
      	@foreach($errors->all() as $error)
      	<li style="color: red;">{{ $error }}</li>
      	@endforeach
      </ul>
      @endif
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('Admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('Admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('Admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

</body>

</html>
