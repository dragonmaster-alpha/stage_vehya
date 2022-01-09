<!DOCTYPE html>
<html lang="en">
@include('vendors.includes.assets')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
@include('vendors.includes.nav')
@include('vendors.includes.aside')
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
              
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Customer Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                    <p style="color:red;">All fields are mandatory</p>
                  <div class="row">
                  <div class="col-md-12">
                      <h3><u>Customer Information</u></h3>
                      </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>First Name</label>
                    <p>{{$list->name}}</p>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Last Name</label>
                    <p>{{$list->lname}}</p>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Customer Type</label>
                    <p>{{$list->customer_type}}</p>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <p>{{$list->email}}</p>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Mobile Number</label>
                    <p>{{$list->mobile_number}}</p>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>State</label>
                    <p>{{$list->state}}</p>
                    
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Street</label>
                    <p>{{$list->address}}</p>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>City</label>
                    <p>{{$list->city}}</p>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Number</label><br>
                    <p>{{$jobdetail[0]->number}}</p>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Pc</label><br>
                    <p>{{$jobdetail[0]->pc}}</p>
                  </div>
                  </div>
                  <div class="col-md-12" id="residential">
                    <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Installation Date</label>
                    <p>{{$jobdetail[0]->install_date}}</p>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Installation Amount</label>
                    <p>{{$jobdetail[0]->total_amount ? '$' : ''}}{{$jobdetail[0]->total_amount}}</p>
                  </div>
                  </div>
                  </div>
                  </div>
                <!-- /.card-body -->

            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('vendors.includes.footer')
</div>
<!-- ./wrapper -->

@include('vendors.includes.footer_assets')
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
