<!DOCTYPE html>
<html>
@include ('ahead')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('aheader')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
@include ('sidebar')
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table of registration</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $value)
                <tr>
                  <th>{{ $value->name}}</th>
                  <th>{{ $value->email}}</th>
                  <th>
                  <form action="<?php echo route('destroy' ,$value->id) ?>" method="post">
                  {{ csrf_field() }}
                      <?php echo method_field('DELETE') ?>
                      <a href="" onclick="confirm_delete(this.parentNode)">Delete </a> 
                  </form
                  </th>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
<script type="text/javascript">
    function confirm_delete(form)
    {
      confirm = 
      confirm('Are you sure to delete this user? Once delete can not be retrieved');
      if (confirm = true)
      {
        form.submit();
      }
      else
      {

      }
    }
</script>
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 
    <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
@include ('aside')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@include ('script')
</body>
</html>
