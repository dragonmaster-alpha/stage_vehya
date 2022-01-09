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
                <h3 class="card-title">Job Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{env('APP_URL')}}vendors/job-list-update/{{$list->id}}" method="post" enctype="multipart/form-data">
                  @csrf
                  
                <div class="card-body">
                    <p style="color:red;">All fields are mandatory</p>
                  <div class="row">
                  <div class="col-md-6">
                      <h3><u>Customer Information</u></h3>
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Customer First Name" value="{{$list->name}}" required="">
                  </div>
                  </div>
                  <!--<div class="col-md-6">-->
                  <!--<div class="form-group">-->
                  <!--    <label>Assign Vendor</label>-->
                  <!--      <select name="vendor_id" class="form-control selectpicker" required="">-->
                  <!--        @foreach($vendornmaes as $vendornmae)-->
                  <!--        <option value="<?php print_r($vendornmae->id); ?> @isset($job){{$job->name}}@endisset{{old('name')}}">{{$vendornmae->name}}</option>-->
                  <!--        @endforeach-->
                  <!--      </select>-->
                  <!--</div>-->
                  <!--</div>-->
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="Customer Last Name" value="{{$list->lname}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Customer Type</label>
                    <input type="text" name="customer_type" class="form-control" placeholder="Customer Type" value="{{$list->customer_type}}" readonly="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="Email" value="{{$list->email}}" readonly="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="number" name="mobile_number" min="1000000000" max="9999999999"  class="form-control" placeholder="Mobile Number" value="{{$list->mobile_number}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>State</label>
                    <select name="state" class="form-control selectpicker" required onchange="getcity()" id="states">
                        <option value="">Please select state</option>
                      @foreach($states as $state)
                      <option value="<?php print_r($state->id); ?>"  @isset($list) @if($list->state == $state->id) selected @endif @endisset @if(old('state') == $state->id) selected @endif>{{$state->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" placeholder="City" value="{{$list->city}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                      <h3><u>Assessment Question</u></h3>
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Address" value="{{$list->address}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Make</label>
                    <input type="text" name="make" class="form-control" placeholder="Address" value="{{$list->make}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Model</label>
                    <input type="text" name="model" class="form-control" placeholder="Model" value="{{$list->model}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>How far is your breaker panel from the desired EV charger location?</label><br>
                    <!--5ft <input type="radio" name="ev_location" placeholder="EV charger location" value="{{$jobdetail[0]->ev_location}}" required="">-->
                    5ft <input type="radio" {{$jobdetail[0]->ev_location == '5ft' ? "checked" : ""}}  name="ev_location" placeholder="EV charger location" value="5ft" required="">
                    &ensp;&ensp;10Ft <input type="radio" {{$jobdetail[0]->ev_location == '10ft' ? "checked" : ""}} name="ev_location" placeholder="EV charger location" value="10ft" required="">
                    &ensp;&ensp;15Ft <input type="radio" {{$jobdetail[0]->ev_location == '15ft' ? "checked" : ""}} name="ev_location" placeholder="EV charger location" value="15ft" required="">
                    &ensp;&ensp;20Ft <input type="radio" {{$jobdetail[0]->ev_location == '20ft' ? "checked" : ""}} name="ev_location" placeholder="EV charger location" value="20ft" required="">
                    &ensp;&ensp;25Ft <input type="radio" {{$jobdetail[0]->ev_location == '25ft' ? "checked" : ""}} name="ev_location" placeholder="EV charger location" value="25ft" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>How far is your breaker panel from the desired EV charger location?</label><br>
                    Yes <input type="radio" name="ev_location_a" {{$jobdetail[0]->ev_location_a == 'Yes' ? "checked" : ""}} placeholder="EV charger location" value="Yes" required="">
                    &ensp;&ensp;No <input type="radio" name="ev_location_a" {{$jobdetail[0]->ev_location_a == 'No' ? "checked" : ""}} placeholder="EV charger location" value="No" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Is the breaker panel on the same wall as the desired EV charger location?</label><br>
                    Yes <input type="radio" name="ev_location_b" {{$jobdetail[0]->ev_location_b == 'Yes' ? "checked" : ""}} placeholder="EV charger location" value="Yes" required="">
                    &ensp;&ensp;No <input type="radio" name="ev_location_b" {{$jobdetail[0]->ev_location_b == 'No' ? "checked" : ""}} placeholder="EV charger location" value="No" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Is the breaker panel on the same wall as the desired EV charger location?</label><br>
                    Yes <input type="radio" name="ev_location_c" {{$jobdetail[0]->ev_location_c == 'Yes' ? "checked" : ""}} placeholder="EV charger location" value="Yes" required="">
                    &ensp;&ensp;No <input type="radio" name="ev_location_c" {{$jobdetail[0]->ev_location_c == 'No' ? "checked" : ""}} placeholder="EV charger location" value="No" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Is the desired EV charger location interior or exterior?</label><br>
                    Interior <input type="radio" name="ev_location_ie" {{$jobdetail[0]->ev_location_ie == 'Interior' ? "checked" : ""}} placeholder="EV charger location" value="interior" required="">
                    &ensp;&ensp;Exterior <input type="radio" name="ev_location_ie" {{$jobdetail[0]->ev_location_ie == 'Exterior' ? "checked" : ""}} placeholder="EV charger location" value="exterior" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Choose the electrical appliances you have in your home?</label><br>
                    Washer <input type="checkbox" name="electrical_appliances[]" {{in_array("Washer", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Washer">
                    &ensp;&ensp;Dryer <input type="checkbox" name="electrical_appliances[]" {{in_array("Dryer", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Dryer">
                    &ensp;&ensp;Refrigerator <input type="checkbox" name="electrical_appliances[]" {{in_array("Refrigerator", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Refrigerator">
                    &ensp;&ensp;Stove <input type="checkbox" name="electrical_appliances[]" {{in_array("Stove", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Stove">
                    &ensp;&ensp;Microwave <input type="checkbox" name="electrical_appliances[]" {{in_array("Microwave", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Microwave">
                    &ensp;&ensp;Freezer <input type="checkbox" name="electrical_appliances[]" {{in_array("Freezer", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Freezer">
                    &ensp;&ensp;HeatPump Heater <input type="checkbox" name="electrical_appliances[]" {{in_array("HeatPump-Heater", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="HeatPump-Heater">
                    &ensp;&ensp;AC Unit <input type="checkbox" name="electrical_appliances[]"  {{in_array("AC-Unit", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="AC-Unit">
                    &ensp;&ensp;Water Heater<input type="checkbox" name="electrical_appliances[]" {{in_array("Water-Heater", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Water-Heater">
                    &ensp;&ensp;Tankless Water Heater<input type="checkbox" name="electrical_appliances[]" {{in_array("Tankless-Water-Heater", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Tankless-Water-Heater">
                    &ensp;&ensp;Solar Paels<input type="checkbox" name="electrical_appliances[]" {{in_array("Solar-Paels", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Solar-Paels">
                    &ensp;&ensp;Battery Storage <input type="checkbox" name="electrical_appliances[]" {{in_array("Battery-Storage", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Battery-Storage">
                    &ensp;&ensp;Generator <input type="checkbox" name="electrical_appliances[]" {{in_array("Generator", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Generator">
                    
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>What is the area And/Or Industry type</label><br>
                    Automotive <input type="checkbox" name="industry_location[]" {{in_array("Automotive", $industry_location) ? "checked" : ""}} placeholder="EV charger location" value="Automotive">
                    &ensp;&ensp;Hotel <input type="checkbox" name="industry_location[]" {{in_array("Hotel", $industry_location) ? "checked" : ""}} placeholder="EV charger location" value="Hotel">
                    &ensp;&ensp;Municipal <input type="checkbox" name="industry_location[]" {{in_array("Municipal", $industry_location) ? "checked" : ""}} placeholder="EV charger location" value="Municipal">
                    &ensp;&ensp;Office <input type="checkbox" name="industry_location[]" {{in_array("Office", $industry_location) ? "checked" : ""}} placeholder="EV charger location" value="Office">
                    &ensp;&ensp;Parking <input type="checkbox" name="industry_location[]" {{in_array("Parking", $industry_location) ? "checked" : ""}} placeholder="EV charger location" value="Parking">
                    &ensp;&ensp;Residential <input type="checkbox" name="industry_location[]" {{in_array("Residential", $industry_location) ? "checked" : ""}} placeholder="EV charger location" value="Residential">
                    &ensp;&ensp;Retail <input type="checkbox" name="industry_location[]" {{in_array("Retail", $industry_location) ? "checked" : ""}} placeholder="EV charger location" value="Retail">
                    &ensp;&ensp;Other <input type="checkbox" name="industry_location[]" {{in_array("Other", $industry_location) ? "checked" : ""}} placeholder="EV charger location" value="Other">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Are there any additional electrical items on your to-do-list?</label>
                    <input type="text" name="additional_electrical_item" class="form-control" placeholder="Additional electrical items" value="{{$jobdetail[0]->additional_electrical_item}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Within which range would you like to have an install?</label><br>
                    1-2 Weeks <input type="radio" name="time_range" {{$jobdetail[0]->time_range == '1-2 Weeks' ? "checked" : ""}} placeholder="EV charger location" value="1-2 Weeks" required="">
                    &ensp;&ensp;1 Month <input type="radio" name="time_range" {{$jobdetail[0]->time_range == '1 Month' ? "checked" : ""}} placeholder="EV charger location" value="1 Month" required="">
                    &ensp;&ensp;2 Month <input type="radio" name="time_range" {{$jobdetail[0]->time_range == '2 Month' ? "checked" : ""}} placeholder="EV charger location" value="2 Month" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Installation Date</label><br>
                    <input type="date" name="install_date" class="form-control" placeholder="Install Date" value="{{$jobdetail[0]->install_date}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Appointment Date</label><br>
                    <input type="date" name="appointment_date" class="form-control" placeholder="Install Date" value="{{$jobdetail[0]->appointment_date}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Will you need permission from anyone to install this Ev Charger</label><br>
                    Yes <input type="radio" name="permission" {{$jobdetail[0]->permission == 'Yes' ? "checked" : ""}} placeholder="Pemission" value="Yes" required="">
                    &ensp;&ensp;No <input type="radio" name="permission" {{$jobdetail[0]->permission == 'No' ? "checked" : ""}} placeholder="Pemission" value="No" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Number</label><br>
                    <input type="text" name="number" class="form-control" placeholder="Number" value="{{$jobdetail[0]->number}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>What Type of Property</label><br>
                    Rent <input type="radio" name="property_type" {{$jobdetail[0]->property_type == 'Rent' ? "checked" : ""}} placeholder="property type" value="Rent" required="">
                    &ensp;&ensp;Own <input type="radio" name="property_type" {{$jobdetail[0]->property_type == 'Own' ? "checked" : ""}} placeholder="property type" value="Own" required="">
                    &ensp;&ensp;Other <input type="radio" name="property_type" {{$jobdetail[0]->property_type == 'Other' ? "checked" : ""}} placeholder="property type" value="Other" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>What Style of home</label><br>
                    <input type="radio" name="property_type_home" {{$jobdetail[0]->property_type_home == 'Detached' ? "checked" : ""}} placeholder="property type" value="Detached" required=""> &ensp;Detached 
                    &ensp;<input type="radio" name="property_type_home" {{$jobdetail[0]->property_type_home == 'TownHome' ? "checked" : ""}} placeholder="property type" value="TownHome" required="">&ensp;TownHome
                    &ensp;<input type="radio" name="property_type_home" {{$jobdetail[0]->property_type_home == 'Condo' ? "checked" : ""}} placeholder="property type" value="Condo" required="">&ensp;Condo
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>What Style of Property ?</label><br>
                    <input type="radio" name="property_type_land" {{$jobdetail[0]->property_type_land == 'Land' ? "checked" : ""}} placeholder="property type" value="Land" required=""> &ensp;Land 
                    &ensp;<input type="radio" name="property_type_land" {{$jobdetail[0]->property_type_land == 'Commercial' ? "checked" : ""}} placeholder="property type" value="Commercial" required="">&ensp;Commercial
                    &ensp;<input type="radio" name="property_type_land" {{$jobdetail[0]->property_type_land == 'Milti-Unit' ? "checked" : ""}} placeholder="property type" value="Milti-Unit" required="">&ensp;Milti-Unit
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Pc</label><br>
                    <input type="text" name="pc" class="form-control" placeholder="Pc" value="{{$jobdetail[0]->pc}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Are you thinking of providing ev charging as a paid service</label><br>
                    Yes <input type="radio" name="paid_service" {{$jobdetail[0]->paid_service == 'Yes' ? "checked" : ""}} placeholder="property type" value="Yes" required="">
                    &ensp;&ensp;No <input type="radio" name="paid_service" {{$jobdetail[0]->paid_service == 'No' ? "checked" : ""}} placeholder="property type" value="No" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Could Multiple Vehicles be charging at once</label><br>
                    Yes <input type="radio" name="ev_location_d" {{$jobdetail[0]->ev_location_d == 'Yes' ? "checked" : ""}} placeholder="property type" value="Yes" required="">
                    &ensp;&ensp;No <input type="radio" name="ev_location_d" {{$jobdetail[0]->ev_location_d == 'No' ? "checked" : ""}} placeholder="property type" value="No" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>I have my Own Charger</label><br>
                    Yes <input type="radio" name="own_charger" {{$jobdetail[0]->own_charger == 'Yes' ? "checked" : ""}} placeholder="property type" value="Yes" required="">
                    &ensp;&ensp;No <input type="radio" name="own_charger" {{$jobdetail[0]->own_charger == 'No' ? "checked" : ""}} placeholder="property type" value="No" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Let's Start with some basic info which level of EV Chargers do you need ?</label><br>
                    Level 2 <input type="radio" name="own_charger_level" {{$jobdetail[0]->own_charger_level == 'Level 2' ? "checked" : ""}} placeholder="property type" value="Level 2" required="">
                    &ensp;&ensp; Level 3 <input type="radio" name="own_charger_level" {{$jobdetail[0]->own_charger_level == 'Level 3' ? "checked" : ""}} placeholder="property type" value="Level 3" required="">
                    &ensp;&ensp; I have my Own Charger <input type="radio" name="own_charger_level" {{$jobdetail[0]->own_charger_level == '1' ? "checked" : ""}} placeholder="property type" value="1" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Are you Intrested in Financing ?</label><br>
                    Yes <input type="radio" name="financing" {{$jobdetail[0]->financing == 'Yes' ? "checked" : ""}} placeholder="property type" value="Yes" required="">
                    &ensp;&ensp;No <input type="radio" name="financing" {{$jobdetail[0]->financing == 'No' ? "checked" : ""}} placeholder="property type" value="No" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Are you Considering an additional EV within the next year ?</label><br>
                    Yes <input type="radio" name="next_year" {{$jobdetail[0]->next_year == 'Yes' ? "checked" : ""}} placeholder="property type" value="Yes" required="">
                    &ensp;&ensp;No <input type="radio" name="next_year" {{$jobdetail[0]->next_year == 'No' ? "checked" : ""}} placeholder="property type" value="No" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Will the EV Charger be located on the same wall as the breaker panel?</label><br>
                    Yes <input type="radio" name="breaker_panel" {{$jobdetail[0]->breaker_panel == 'Yes' ? "checked" : ""}} placeholder="property type" value="Yes" required="">
                    &ensp;&ensp;No <input type="radio" name="breaker_panel" {{$jobdetail[0]->breaker_panel == 'No' ? "checked" : ""}} placeholder="property type" value="No" required="">
                  </div>
                  </div>
                  
                  
                  
                  
                  
                  
                  </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>
                    <!--<button type="submit" class="btn btn-primary">Submit</button>-->
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
