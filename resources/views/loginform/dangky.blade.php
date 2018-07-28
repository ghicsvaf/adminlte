<!DOCTYPE html>
<html>
@include ('ahead')
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form method="POST" action="{{ route('register') }}" >
   {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="text" name="name" 
        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
        placeholder="Full name" value="{{ old('name') }}" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="email" name="email" 
        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
        placeholder="Email" value="{{ old('email') }}" required>
        @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
      </div>

      <div class="form-group has-feedback">
        <input type="password" name="password" 
        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
        placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password_confirmation" 
        placeholder="Retype password" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">
          Register
          </button>
        </div>
        <!-- /.col -->
      </div>
    </form>
@include('fbgg')
    <a href="{{ url('dangnhap') }}" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

@include ('script')
</body>
</html>