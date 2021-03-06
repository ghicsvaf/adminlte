<!DOCTYPE html>
<html>
@include ('ahead')
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    {{ $error or ''}}
    <form action="{{ route('status') }}" method="post">
    <?php echo csrf_field(); ?>
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" 
        placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" 
        placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">
          Sign In
          </button>
        </div>
        <!-- /.col -->
      </div>
    </form>
@include ('fbgg')
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="{{ url('dangky') }}" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@include ('script')
</body>
</html>