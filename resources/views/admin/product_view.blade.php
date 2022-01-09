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
            <h1>Product</h1>
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
                       src="{{env('APP_URL').'public/'}}uploads/image/{{$list->product_image}}"
                       alt="User profile picture">
                </div>
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
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Product Details</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div>
                        <span class="username">
                            <a href="#"><b>Product Name</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->name}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Enter Producs Price</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->price}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Maxmimum Charges</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->max_charge}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Amperage</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->amperage}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Voltage</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->voltage}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Safety</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->safety}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Warranty</b></a>
                          
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->warranty}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Cable Length</b></a>
                          
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->cable_length}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Connectivity</b></a>
                          
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->connectivity}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Efficiency</b></a>
                          
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->efficiency}}</p>
                      <div>
                        
                      </div>
                      </div>
                    
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
