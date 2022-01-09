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
            <h1>Customer</h1>
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
                    <h3 class="profile-username text-center">{{$list->name}}</h3>

                    <p class="text-muted text-center">{{$list->customer_type}}<br>{{$list->state}}<br>{{$list->city}}<br>{{$list->updated_at}}</p>   
                </div>
                <a href="#" class="btn btn-primary btn-block"><b>{{$list->total_amount}}</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                    <h3 class="profile-username text-center">{{$list->name}}</h3>

                    <p class="text-muted text-center">
                        A small Job
                    </p>   
                </div>
                <a href="#" class="btn btn-primary btn-block"><b>Profile</b></a>
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
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Project Information</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div>
                        <span class="username">
                            <a href="#"><b>Customer Type</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->customer_type}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Country</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->country}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>State</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->state}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Address</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->address}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Card Number</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->card_number}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Expiry Date</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->expiration_date}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Security Code</b></a>
                          
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->security_code}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Billing Address</b></a>
                          
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->billing_address}}</p>
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
