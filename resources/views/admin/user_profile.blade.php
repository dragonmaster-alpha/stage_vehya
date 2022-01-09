<!DOCTYPE html>
<html lang="en">
@include('admin.includes.assets')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 @include('admin.includes.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.includes.aside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Profile</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{env('APP_URL').'public/'}}dist/img/logo.png"
                       alt="User profile picture">
                </div>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Name</b> <a class="float-right">{{$user->name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{$user->email}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Mobile</b> <a class="float-right">{{$user->mobile}}</a>
                  </li>
                </ul>

                <!--<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Reset Password</a></li>
                </ul>
                
                @if(Session::has('message'))
                    <div class="alert alert-{{Session::get('alert_class')}}">
                      {{ Session::get('message')}}
                    </div>
                @endif
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <form action="" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="row">
                  
                  <!--<div class="col-md-6">-->
                  <!--<div class="form-group">-->
                  <!--  <label>Old Password</label>-->
                  <!--  <input type="password" name="old_password" minlength="8"  maxlength="20" class="form-control" placeholder="Enter Old Password">-->
                  <!--</div>-->
                  <!--</div>-->
                  <div class="col-md-6">
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
  @include('admin.includes.footer')
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
