<!DOCTYPE html>
<html lang="en">
@include('admin.includes.assets')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
@include('admin.includes.nav')
@include('admin.includes.aside')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
              @if(Session::has('message'))
                <div class="alert alert-{{Session::get('alert_class')}}">
                  {{ Session::get('message')}}
                </div>
                @endif
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Vendor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                    <p style="color:red;">All fields are mandatory</p>
                  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Vendor Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Vendor Name" value="@isset($vendor){{$vendor->name}}@endisset{{old('name')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Enter Email</label>
                    <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="Enter Email" value="@isset($vendor){{$vendor->email}}@endisset{{old('email')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="password" minlength="8"  maxlength="20" class="form-control" placeholder="Enter Password" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Enter Mobile Number</label>
                    <input type="number" min="1000000000" max="9999999999" name="mobile_number" class="form-control" placeholder="Enter Mobile Number" value="@isset($vendor){{$vendor->mobile_number}}@endisset{{old('mobile_number')}}" required="">
                  </div>
                  </div>
                  <!--<div class="col-md-6">-->
                  <!--<div class="form-group">-->
                  <!--  <label>Address</label>-->
                  <!--  <input type="text" name="address" class="form-control" placeholder="Enter Address" value="@isset($vendor){{$vendor->address}}@endisset{{old('address')}}" required="">-->
                  <!--</div>-->
                  <!--</div>-->
                  <!--</div>-->
                  </div>
                
                <!-- /.card-body -->
                  <input type="hidden" name="status" value="0">
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin.includes.footer')
</div>
<!-- ./wrapper -->

@include('admin.includes.footer_assets')
<script>
$(document).ready(function() {
    $('#wselect_test').selectpicker("refresh");
});
</script>

<script>
function getcity(){
    let state = $('#states').val();
    console.log(state);
    $.get("{{env('APP_URL')}}city/"+state,
    function(data, status){
    $('#city').html(data);
  });
}
</script>
</body>
</html>
