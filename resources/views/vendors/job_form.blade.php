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
              @if(Session::has('message'))
                <div class="alert alert-{{Session::get('alert_class')}}">
                  {{ Session::get('message')}}
                </div>
              @endif
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Job</h3>
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
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" placeholder="Enter First Name" value="@isset($job){{$job->first_name}}@endisset{{old('first_name')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Enter First Name" value="@isset($job){{$job->last_name}}@endisset{{old('last_name')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Enter Email</label>
                    <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="Enter Email" value="@isset($job){{$job->email}}@endisset{{old('email')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Customer Type</label>
                    <select name="customer_type" class="form-control selectpicker" required="">
                      <option value="Commercial">Commercial</option>
                      <option value="Residential">Residential</option>
                    </select>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Enter Mobile Number</label>
                    <input type="number" min="1000000000" max="9999999999" name="mobile_number" class="form-control" placeholder="Enter Mobile Number" value="@isset($job){{$job->mobile_number}}@endisset{{old('mobile_number')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Make</label>
                    <select name="make" class="form-control selectpicker" required="">
                      @foreach($jobmakes as $jobmake)
                      <option value="<?php print_r($jobmake->id); ?> @isset($job){{$job->job_make}}@endisset{{old('job_make')}}">{{$jobmake->job_make}}</option>
                      @endforeach
                    </select>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Model</label>
                    <select name="model" class="form-control selectpicker" required="">
                      @foreach($jobmodels as $jobmodel)
                      <option value="<?php print_r($jobmodel->id); ?> @isset($job){{$job->job_model}}@endisset{{old('job_model')}}">{{$jobmodel->job_model}}</option>
                      @endforeach
                    </select>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Assign Electrician</label>
                    <select name="electricians_id" class="form-control selectpicker" required="">
                      @foreach($electricians as $electrician)
                      <option value="<?php print_r($electrician->id); ?> @isset($job){{$job->name}}@endisset{{old('name')}}">{{$electrician->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Country</label>
                    <select name="country" class="form-control selectpicker" required="">
                      <option value="233" @isset($vendor) @if($vendor->country == 233) selected @endif @endisset @if(old('country') == 233) selected @endif>United States</option>
                    </select>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>State</label>
                    <select name="state" class="form-control selectpicker" required onchange="getcity()" id="states">
                        <option value="">Please select state</option>
                      @foreach($states as $state)
                      <option value="<?php print_r($state->id); ?>"  @isset($vendor) @if($vendor->state == $state->id) selected @endif @endisset @if(old('state') == $state->id) selected @endif>{{$state->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address" value="@isset($job){{$job->address}}@endisset{{old('address')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Installation Date</label>
                    <input type="date" name="install_date" class="form-control" placeholder="Enter Installation Date" value="@isset($job){{$job->install_date}}@endisset{{old('install_date')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Assessment</label>
                    <select name="assessment" class="form-control selectpicker" required="">
                      <option value="Progress">Progress</option>
                      <option value="Complete">Complete</option>
                    </select>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control" placeholder="Enter Description" value="@isset($job){{$job->description}}@endisset{{old('description')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Change Order Description</label>
                    <input type="text" name="codescription" class="form-control" placeholder="Enter Description" value="@isset($job){{$job->codescription}}@endisset{{old('codescription')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Permit Customer Name</label>
                    <input type="text" name="pcname" class="form-control" placeholder="Enter Permit Customer Name" value="@isset($job){{$job->pcname}}@endisset{{old('pcname')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Permit Customer Address</label>
                    <input type="text" name="pcaddress" class="form-control" placeholder="Enter Permit Customer Address" value="@isset($job){{$job->pcaddress}}@endisset{{old('pcaddress')}}" required="">
                  </div>
                  </div>
                  
                  
                  
                  
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Charger Image</label>
                    <input type="file" name="charger_image" class="form-control" value="@isset($job){{$job->charger_image}}@endisset{{old('charger_image')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Charger Install Image</label>
                    <input type="file" name="charger_install_image" class="form-control" value="@isset($job){{$job->charger_install_image}}@endisset{{old('charger_install_image')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Electrical Panel Image</label>
                    <input type="file" name="electrical_panel_image" class="form-control" value="@isset($job){{$job->electrical_panel_image}}@endisset{{old('electrical_panel_image')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Property Image</label>
                    <input type="file" name="property_image" class="form-control" value="@isset($job){{$job->property_image}}@endisset{{old('property_image')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Permit Image</label>
                    <input type="file" name="permit_image" class="form-control" value="@isset($job){{$job->permit_image}}@endisset{{old('permit_image')}}" required="">
                  </div>
                  </div>
                  
                  
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>EV Charger Location</label><br>
                          <input type="radio" name="ev_location" value="5ft" required=""> 5ft
                    &emsp;<input type="radio" name="ev_location" value="10ft" required=""> 10ft
                    &emsp;<input type="radio" name="ev_location" value="15ft" required=""> 15ft
                    &emsp;<input type="radio" name="ev_location" value="20ft" required=""> 20ft
                    &emsp;<input type="radio" name="ev_location" value="30ft" required=""> 30ft
                    &emsp;<input type="radio" name="ev_location" value="40ft" required=""> 40ft
                    &emsp;<input type="radio" name="ev_location" value="50ft" required=""> 50ft
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Panel From EV Charger Location</label><br>
                          <input type="radio" name="ev_location_a" value="Yes" required=""> Yes
                    &emsp;<input type="radio" name="ev_location_a" value="No" required=""> No
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Panel Wall EV Charger Location</label><br>
                          <input type="radio" name="ev_location_b" value="Yes" required=""> Yes
                    &emsp;<input type="radio" name="ev_location_b" value="No" required=""> No
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Panel Same Level EV Charger Location</label><br>
                          <input type="radio" name="ev_location_c" value="Yes" required=""> Yes
                    &emsp;<input type="radio" name="ev_location_c" value="No" required=""> No
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Panel Same Level EV Charger Location</label><br>
                          <input type="radio" name="ev_location_d" value="Yes" required=""> Yes
                    &emsp;<input type="radio" name="ev_location_d" value="No" required=""> No
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Interior Or Exterior Charger Location</label><br>
                          <input type="radio" name="ev_location_ie" value="Interior" required=""> Interior
                    &emsp;<input type="radio" name="ev_location_ie" value="Exterior" required=""> Exterior
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Electrical Appliances</label><br>
                          <input type="radio" name="electrical_appliances" value="Washer" required=""> Washer
                    &emsp;<input type="radio" name="electrical_appliances" value="Dryer" required=""> Dryer
                    &emsp;<input type="radio" name="electrical_appliances" value="Microwave" required=""> Microwave
                    &emsp;<input type="radio" name="electrical_appliances" value="Range" required=""> Range
                    &emsp;<input type="radio" name="electrical_appliances" value="Water Heater" required=""> Water Heater
                    &emsp;<input type="radio" name="electrical_appliances" value="Ac Unit" required=""> Ac Unit
                    &emsp;<input type="radio" name="electrical_appliances" value="Dishwasher" required=""> Dishwasher
                    &emsp;<input type="radio" name="electrical_appliances" value="HeatPump" required=""> HeatPump
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Time Range</label><br>
                          <input type="radio" name="time_range" value="1-2 Weeks" required=""> 1-2 Weeks
                    &emsp;<input type="radio" name="time_range" value="1 Month" required=""> 1 Month
                    &emsp;<input type="radio" name="time_range" value="2 Month" required=""> 2 Month
                  </div>
                  </div>
                  
                  
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Term's & Condition</label>
                    <input type="checkbox"  name="terms"  value="agree" required="">
                  </div>
                  </div>
                  
                  
                  </div>
                  </div>
                
                <!-- /.card-body -->

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
