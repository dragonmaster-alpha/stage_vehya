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
          <ul class="nav nav-pills">
                  <li class="nav-item"><a  href="{{env('APP_URL')}}admin/vendor-list-show/{{$list['id']}}" class="nav-link active fas fa-edit">Update Vendor Profile</a></li>
             </ul>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <form action="{{env('APP_URL')}}admin/vendor-active/{{$list->id}}" method="post" enctype="multipart/form-data">
                  @csrf
              <div class="card-body box-profile">
                  
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{env('APP_URL').'public/'}}uploads/image/{{$list->profile_image}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$list->name}}</h3>

                <p class="text-muted text-center">{{$list->email}}<br>{{$list->mobile_number}}</p>
                <input type="hidden" name="status" value="1">
                <button type=submit class="btn btn-info"><i aria-hidden="true">@if($list['status'] == 0)Pending @else Approved @endif</i></button>
                </form>
                
                 
                <!--<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-8">
             
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Name</b> <a class="float-right">{{$list->name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{$list->email}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{$list->password}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Mobile</b> <a class="float-right">{{$list->mobile_number}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Company Name</b> <a class="float-right">{{$list->company_name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Country</b> <a class="float-right">United State</a>
                  </li>
                  <li class="list-group-item">
                    <b>State</b> <a class="float-right">{{$list->state}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>City</b> <a class="float-right">{{$list->city}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Address</b> <a class="float-right">{{$list->address}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Zip Code</b> <a class="float-right">{{$list->zip_code}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Tax Company Name</b> <a class="float-right">{{$list->tax_company_name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Ein No</b> <a class="float-right">{{$list->ein}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Poc</b> <a class="float-right">{{$list->poc}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Driver License Image</b> <a class="float-right"> 
                    <img class="profile-user-img img-fluid img-circle"
                       src="{{env('APP_URL').'public/uploads/image/'}}{{$list->driver_license_image}}"
                       alt="driver_license_image"></a>
                  </li>
                  <li class="list-group-item">
                    <b>Electrical Contractor License Image</b> <a class="float-right"> 
                    <img class="profile-user-img img-fluid img-circle"
                       src="{{env('APP_URL').'public/uploads/image/'}}{{$list->electrical_contractor_license_image}}"
                       alt="electrical_contractor_license_image"></a>
                  </li>
                  <li class="list-group-item">
                    <b>Vehicle Insurance Image</b> <a class="float-right"> 
                    <img class="profile-user-img img-fluid img-circle"
                       src="{{env('APP_URL').'public/uploads/image/'}}{{$list->vehicle_insurance_image}}"
                       alt="vehicle_insurance_image"></a>
                  </li>
                  <li class="list-group-item">
                    <b>Liability Insurance Image</b> <a class="float-right"> 
                    <img class="profile-user-img img-fluid img-circle"
                       src="{{env('APP_URL').'public/uploads/image/'}}{{$list->liability_insurance_image}}"
                       alt="liability_insurance_image"></a>
                  </li>
                  <li class="list-group-item">
                    <b>Vehya Agreement Image</b> <a class="float-right"> 
                    <img class="profile-user-img img-fluid img-circle"
                       src="{{env('APP_URL').'public/uploads/image/'}}{{$list->vehya_agreement_image}}"
                       alt="vehya_agreement_image"></a>
                  </li>
                  <li class="list-group-item">
                    <b>Vehya Ev Certification Image</b> <a class="float-right"> 
                    <img class="profile-user-img img-fluid img-circle"
                       src="{{env('APP_URL').'public/uploads/image/'}}{{$list->vehya_ev_certification_image}}"
                       alt="vehya_ev_certification_image"></a>
                  </li>
                  <li class="list-group-item">
                    <b>W9 Image</b> <a class="float-right" href="{{env('APP_URL').'public/uploads/image/'}}{{$list->w9_image}}" download>Download</a>
                     
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
