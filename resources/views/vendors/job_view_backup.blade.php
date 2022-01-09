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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Job Details</h1>
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
                       src="{{env('APP_URL').'public/'}}uploads/image/"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$list->first_name}} {{$list->last_name}}</h3>
                

                <p class="text-muted text-center">{{$list->email}}<br>
                {{$list->mobile_number}}</p>
                

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
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Job Details</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div>
                        <span class="username">
                            <a href="#"><b>Job Make</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->make}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Model</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->model}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Electrician Name</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->electricians_id}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>EV Charger Location</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->ev_location}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Panel From EV Charger Location</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->ev_location_a}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Panel Wall EV Charger Location</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->ev_location_b}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Panel Same Level EV Charger Location</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->ev_location_c}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Panel Same Level EV Charger Location</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->ev_location_d}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Interior Or Exterior Charger Location</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->ev_location_ie}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Electrical Appliances</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->electrical_appliances}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Time Range</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->time_range}}</p>
                    
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
                      <p>United States</p>
                    <div>
                        <span class="username">
                            <a href="#"><b>Address</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->address}}</p>
                    <div>
                        <span class="username">
                            <a href="#"><b>Installation Date</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->date}}</p>
                    <div>
                        <span class="username">
                            <a href="#"><b>Assessment</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->assessment}}</p>
                    <div>
                        <span class="username">
                            <a href="#"><b>Description</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->description}}</p>
                    <div>
                        <span class="username">
                            <a href="#"><b>Change Order Description</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->codescription}}</p>
                    <div>
                        <span class="username">
                            <a href="#"><b>Permit Customer Name</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->pcname}}</p>
                    <div>
                        <span class="username">
                            <a href="#"><b>Permit Customer Address</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->pcaddress}}</p>
                    
                    
                    
                      
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
