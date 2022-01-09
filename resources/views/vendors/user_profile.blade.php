<!DOCTYPE html>
<html lang="en">
@include('vendors.includes.assets')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 @include('vendors.includes.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('vendors.includes.aside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        
                @if(Session::has('message'))
                    <div class="alert alert-{{Session::get('alert_class')}}">
                      {{ Session::get('message')}}
                    </div>
                @endif
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#danger" data-toggle="tab">Reset Password</a></li>
                </ul>
                
                
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <form action="" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="row">
                  
                  <!--<div class="col-md-6">
                  <div class="form-group">
                    <label>Old Password</label>
                    <input type="password" name="old_password" minlength="8"  maxlength="20" class="form-control" placeholder="Enter Old Password">
                  </div>
                  </div>
                  --><div class="col-md-6">
                  <div class="form-group">
                    <label>New Password</label>
                    <input type="password" name="password" minlength="8"  maxlength="20" class="form-control" placeholder="Enter New Password">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" minlength="8"  maxlength="20" class="form-control" placeholder="Enter Confirm Password">
                  </div>
                  </div>
                  
                 
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Reset</button>
                </div>
              </form>

                  </div>

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('vendors.includes.footer')
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{env('APP_URL').'public/'}}plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{env('APP_URL').'public/'}}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{env('APP_URL').'public/'}}dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{env('APP_URL').'public/'}}dist/js/demo.js"></script>
</body>
</html>
