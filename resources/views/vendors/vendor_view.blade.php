<!DOCTYPE html>
<html lang="en">
@include('vendor.includes.assets')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 @include('vendor.includes.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('vendor.includes.aside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vendor Profile</h1>
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
                       src="{{env('APP_URL').'public/'}}uploads/image/{{$list->profile_image}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$list->name}}</h3>

                <p class="text-muted text-center">{{$list->email}}<br>{{$list->mobile_number}}</p>
                

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
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Vendor Details</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div>
                        <span class="username">
                            <a href="#"><b>Company Name</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->company_name}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Email</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->email}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Mobile Number</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->mobile_number}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Alternate Mobile Number</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->altr_mobile_number}}</p>
                      <div>
                        <span class="username">
                            <a href="#"><b>Country</b></a>
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>United State</p>
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
                            <a href="#"><b>Zip Code</b></a>
                          
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>{{$list->zip_code}}</p>
                      <div>
                        <!--<span class="username">-->
                        <!--    <a href="#"><b>Sub Merchant</b></a>-->
                          
                        <!--</span>-->
                      </div>
                      <!-- /.user-block -->
                      <!--<p>{{$list->sub_merchant}}</p>-->
                      
                      <!--<p>-->
                      <!--  <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>-->
                      <!--  <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>-->
                      <!--  <span class="float-right">-->
                      <!--    <a href="#" class="link-black text-sm">-->
                      <!--      <i class="far fa-comments mr-1"></i> Comments (5)-->
                      <!--    </a>-->
                      <!--  </span>-->
                      <!--</p>-->

                      <!--<input class="form-control form-control-sm" type="text" placeholder="Type a comment">-->
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    
                    <!-- /.post -->

                    <!-- Post -->
                    
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  
                  <!-- /.tab-pane -->

                  
                  <!-- /.tab-pane -->
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
  @include('vendor.includes.footer')
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
