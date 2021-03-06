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
                <h3 class="card-title">Edit Customer Job</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{env('APP_URL')}}admin/customer-list-update/{{$list->id}}" method="post" enctype="multipart/form-data">
                  @csrf
                  
                <div class="card-body">
                    <p style="color:red;">All fields are mandatory</p>
                  <div class="row">
                  <div class="col-md-12">
                      <h4><u>Customer Information</u></h4>
                      </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Customer First Name" value="{{$list->name}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="Customer Last Name" value="{{$list->lname}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Customer Type</label>
                    <select name="customer_type" class="form-control">
                        <option value="Commercial" @if($list->customer_type == 'Commercial'){{'selected'}}@endif>Commercial </option>
                        <option value="Residential" @if($list->customer_type == 'Residential'){{'selected'}}@endif>Residential </option>
                    </select>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="Email" value="{{$list->email}}">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Mobile</label>
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
                    <label>Street</label>
                    <input type="text" name="address" class="form-control" placeholder="Address" value="{{$list->address}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" placeholder="City" value="{{$list->city}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>State</label><br>
                    <input type="text" name="number" class="form-control" placeholder="State" value="{{$jobdetail[0]->number}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Zip Code</label><br>
                    <input type="text" name="pc" class="form-control" placeholder="Zip Code" value="{{$jobdetail[0]->pc}}" required="">
                  </div>
                  </div>
                  <div class="col-md-12">
                      <h4><u>Online Assessment Information</u></h4>
                      </div>
                      @if($list->customer_type == 'Residential')
                <div class="col-md-12" id="residential">
                    <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Make</label>
                    <input type="text" name="make" class="form-control" placeholder="Make" value="{{$list->make}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Model</label>
                    <input type="text" name="model" class="Let's Start with some form-control" placeholder="Model" value="{{$list->model}}" required="">
                  </div>
                  </div>
                  <div class="col-md-9">
                  <div class="form-group">
                    <label>Here are the EV Chargers we provide based on your vihicle</label><br>
                    <input type="radio" name="own_charger" {{$jobdetail[0]->own_charger == 'I-have-my-own-charger' ? "checked" : ""}} placeholder="property type" value="I-have-my-own-charger" required=""> Own charger
                    &ensp;&ensp;<input type="radio" name="own_charger" {{$jobdetail[0]->own_charger == 'Charge-Point-Home-Flex' ? "checked" : ""}} placeholder="property type" value="Charge-Point-Home-Flex" required=""> Charge Point Home Flex
                    &ensp;&ensp;<input type="radio" name="own_charger" {{$jobdetail[0]->own_charger == 'Enelx-JuiceBox-48' ? "checked" : ""}} placeholder="property type" value="Enelx-JuiceBox-48" required=""> Enelx JuiceBox 48
                    &ensp;&ensp;<input type="radio" name="own_charger" {{$jobdetail[0]->own_charger == 'WallBox-Pulsar-Plus-48' ? "checked" : ""}} placeholder="property type" value="WallBox-Pulsar-Plus-48" required=""> WallBox Pulsar Plus 48
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Are you Considering an additional EV within the next year ?</label><br>
                    <input type="radio" name="next_year" {{$jobdetail[0]->next_year == 'Yes' ? "checked" : ""}} placeholder="property type" value="Yes" required=""> Yes
                    &ensp;&ensp;<input type="radio" name="next_year" {{$jobdetail[0]->next_year == 'No' ? "checked" : ""}} placeholder="property type" value="No" required=""> No
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>What Style of home</label><br>
                    <input type="radio" name="property_type_home" {{$jobdetail[0]->property_type_home == 'Detached' ? "checked" : ""}} placeholder="property type" value="Detached" required=""> Detached 
                    &ensp;<input type="radio" name="property_type_home" {{$jobdetail[0]->property_type_home == 'TownHome' ? "checked" : ""}} placeholder="property type" value="TownHome" required=""> TownHome
                    &ensp;<input type="radio" name="property_type_home" {{$jobdetail[0]->property_type_home == 'Condo' ? "checked" : ""}} placeholder="property type" value="Condo" required=""> Condo
                    &ensp;<input type="radio" name="property_type_home" {{$jobdetail[0]->property_type_home == 'Other' ? "checked" : ""}} placeholder="property type" value="Other" required=""> Other
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Where will the EV charger be installed</label><br>
                    <input type="radio" name="ev_location_ie" {{$jobdetail[0]->ev_location_ie == 'Interior' ? "checked" : ""}} value="Interior" required=""> Interior
                    &ensp;&ensp;<input type="radio" name="ev_location_ie" {{$jobdetail[0]->ev_location_ie == 'Exterior' ? "checked" : ""}} value="Exterior" required=""> Exterior
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Will the EV Charger be located on the same wall as the breaker panel?</label><br>
                    <input type="radio" name="breaker_panel" {{$jobdetail[0]->breaker_panel == 'Yes' ? "checked" : ""}} placeholder="property type" value="Yes" required=""> Yes
                    &ensp;&ensp;<input type="radio" name="breaker_panel" {{$jobdetail[0]->breaker_panel == 'No' ? "checked" : ""}} placeholder="property type" value="No" required=""> No
                  </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                    <label>Please Choose the electrical items at your home?</label><br>
                    <input type="checkbox" name="electrical_appliances[]" {{in_array("Washer", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Washer"> Washer
                    &ensp;&ensp;<input type="checkbox" name="electrical_appliances[]" {{in_array("Dryer", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Dryer"> Dryer
                    &ensp;&ensp;<input type="checkbox" name="electrical_appliances[]" {{in_array("Refrigerator", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Refrigerator"> Refrigerator
                    &ensp;&ensp;<input type="checkbox" name="electrical_appliances[]" {{in_array("Stove", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Stove"> Stove
                    &ensp;&ensp;<input type="checkbox" name="electrical_appliances[]" {{in_array("Microwave", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Microwave"> Microwave
                    &ensp;&ensp;<input type="checkbox" name="electrical_appliances[]" {{in_array("Freezer", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Freezer"> Freezer
                    &ensp;&ensp;<input type="checkbox" name="electrical_appliances[]" {{in_array("HeatPump-Heater", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="HeatPump-Heater"> Heatpump Heater <br/>
                    &ensp;&ensp;<input type="checkbox" name="electrical_appliances[]"  {{in_array("AC-Unit", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="AC-Unit"> AC Unit
                    &ensp;&ensp;<input type="checkbox" name="electrical_appliances[]" {{in_array("Water-Heater", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Water-Heater"> Water Heater
                    &ensp;&ensp;<input type="checkbox" name="electrical_appliances[]" {{in_array("Tankless-Water-Heater", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Tankless-Water-Heater"> Tankless Water Heater
                    &ensp;&ensp;<input type="checkbox" name="electrical_appliances[]" {{in_array("Solar-Paels", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Solar-Paels"> Solar Panels
                    &ensp;&ensp;<input type="checkbox" name="electrical_appliances[]" {{in_array("Battery-Storage", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Battery-Storage"> Battery Storage
                    &ensp;&ensp;<input type="checkbox" name="electrical_appliances[]" {{in_array("Generator", $electrical_appliances) ? "checked" : ""}} placeholder="EV charger location" value="Generator"> Generator
                    
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Approximately How far is it from the breaker panel to the EV charger ?</label><br>
                    <!--5ft <input type="radio" name="ev_location" placeholder="EV charger location" value="{{$jobdetail[0]->ev_location}}" required="">-->
                    <input type="radio" {{$jobdetail[0]->ev_location == '5ft' ? "checked" : ""}}  name="ev_location" placeholder="EV charger location" value="5ft" required=""> 5ft
                    &ensp;&ensp;<input type="radio" {{$jobdetail[0]->ev_location == '10ft' ? "checked" : ""}} name="ev_location" placeholder="EV charger location" value="10ft" required=""> 10ft
                    &ensp;&ensp;<input type="radio" {{$jobdetail[0]->ev_location == '15ft' ? "checked" : ""}} name="ev_location" placeholder="EV charger location" value="15ft" required=""> 15ft
                    &ensp;&ensp;<input type="radio" {{$jobdetail[0]->ev_location == '20ft' ? "checked" : ""}} name="ev_location" placeholder="EV charger location" value="20ft" required=""> 20 ft
                    &ensp;&ensp;<input type="radio" {{$jobdetail[0]->ev_location == '25ft' ? "checked" : ""}} name="ev_location" placeholder="EV charger location" value="25ft" required=""> 20+ft
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Are you Intrested in Financing ?</label><br>
                    <input type="radio" name="financing" {{$jobdetail[0]->financing == 'Yes' ? "checked" : ""}} placeholder="property type" value="Yes" required=""> Yes
                    &ensp;&ensp;<input type="radio" name="financing" {{$jobdetail[0]->financing == 'No' ? "checked" : ""}} placeholder="property type" value="No" required=""> No
                  </div>
                  </div>
                </div>
                </div>
                @elseif($list->customer_type == 'Commercial')
                <!-- Residential end -->  
                
                <!-- Commercial Start -->  
                <div class="col-md-12" id="commercial">
                    <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Let's Start with some basic info which level of EV Chargers do you need ?</label><br>
                    <input type="radio" name="own_charger_level" {{$jobdetail[0]->own_charger_level == 'Level 2' ? "checked" : ""}} placeholder="property type" value="Level 2" required=""> Level 2 
                    &ensp;&ensp;<input type="radio" name="own_charger_level" {{$jobdetail[0]->own_charger_level == 'Level 3' ? "checked" : ""}} placeholder="property type" value="Level 3" required=""> Level 3 
                    &ensp;&ensp;<input type="radio" name="own_charger_level" {{$jobdetail[0]->own_charger_level == '1' ? "checked" : ""}} placeholder="property type" value="1" required=""> I have my Own Charger 
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Could Multiple Vehicles be charging at once</label><br>
                    <input type="radio" name="ev_location_d" {{$jobdetail[0]->ev_location_d == 'Yes' ? "checked" : ""}} placeholder="property type" value="Yes" required=""> Yes
                    &ensp;&ensp;<input type="radio" name="ev_location_d" {{$jobdetail[0]->ev_location_d == 'No' ? "checked" : ""}} placeholder="property type" value="No" required=""> No
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Are you thinking of providing ev charging as a paid service</label><br>
                    <input type="radio" name="paid_service" {{$jobdetail[0]->paid_service == 'Yes' ? "checked" : ""}} placeholder="property type" value="Yes" required=""> Yes
                    &ensp;&ensp;<input type="radio" name="paid_service" {{$jobdetail[0]->paid_service == 'No' ? "checked" : ""}} placeholder="property type" value="No" required=""> No
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>What Style of Property ?</label><br>
                    <input type="radio" name="property_type_land" {{$jobdetail[0]->property_type_land == 'Land' ? "checked" : ""}} placeholder="property type" value="Land" required=""> Land 
                    &ensp;<input type="radio" name="property_type_land" {{$jobdetail[0]->property_type_land == 'Commercial' ? "checked" : ""}} placeholder="property type" value="Commercial" required=""> Commercial
                    &ensp;<input type="radio" name="property_type_land" {{$jobdetail[0]->property_type_land == 'Milti-Unit' ? "checked" : ""}} placeholder="property type" value="Milti-Unit" required=""> Multi-Unit
                  </div>
                  </div>
                  <div class="col-md-9">
                  <div class="form-group">
                    <label>What is the area And/Or Industry type</label><br>
                    <input type="checkbox" name="industry_location[]" {{in_array("Automotive", $industry_location) ? "checked" : ""}} placeholder="EV charger location" value="Automotive"> Automotive
                    &ensp;&ensp;<input type="checkbox" name="industry_location[]" {{in_array("Hotel", $industry_location) ? "checked" : ""}} placeholder="EV charger location" value="Hotel"> Hotel
                    &ensp;&ensp;<input type="checkbox" name="industry_location[]" {{in_array("Municipal", $industry_location) ? "checked" : ""}} placeholder="EV charger location" value="Municipal"> Municipal
                    &ensp;&ensp;<input type="checkbox" name="industry_location[]" {{in_array("Office", $industry_location) ? "checked" : ""}} placeholder="EV charger location" value="Office"> Office
                    &ensp;&ensp;<input type="checkbox" name="industry_location[]" {{in_array("Parking", $industry_location) ? "checked" : ""}} placeholder="EV charger location" value="Parking"> Parking
                    &ensp;&ensp;<input type="checkbox" name="industry_location[]" {{in_array("Residential", $industry_location) ? "checked" : ""}} placeholder="EV charger location" value="Residential"> Residential
                    &ensp;&ensp;<input type="checkbox" name="industry_location[]" {{in_array("Retail", $industry_location) ? "checked" : ""}} placeholder="EV charger location" value="Retail"> Retail
                    &ensp;&ensp;<input type="checkbox" name="industry_location[]" {{in_array("Other", $industry_location) ? "checked" : ""}} placeholder="EV charger location" value="Other"> Other
                  </div>
                  </div>
                <!-- Commercial end -->    
                </div>
                </div>
                @endif
                <!-- Common Start-->
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>What Type of Property</label><br>
                    <input type="radio" name="property_type" {{$jobdetail[0]->property_type == 'Rent' ? "checked" : ""}} placeholder="property type" value="Rent" required=""> Rent
                    &ensp;&ensp;<input type="radio" name="property_type" {{$jobdetail[0]->property_type == 'Own' ? "checked" : ""}} placeholder="property type" value="Own" required=""> Own
                    &ensp;&ensp;<input type="radio" name="property_type" {{$jobdetail[0]->property_type == 'Other' ? "checked" : ""}} placeholder="property type" value="Other" required=""> Other
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Will you need permission from anyone to install this Ev Charger</label><br>
                    <input type="radio" name="permission" {{$jobdetail[0]->permission == 'Yes' ? "checked" : ""}} placeholder="Pemission" value="Yes" required=""> Yes
                    &ensp;&ensp;<input type="radio" name="permission" {{$jobdetail[0]->permission == 'No' ? "checked" : ""}} placeholder="Pemission" value="No" required=""> No
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
                    <label>When are you looking to install your EV charger?</label><br>
                    <input type="radio" name="time_range" {{$jobdetail[0]->time_range == '1-2 Weeks' ? "checked" : ""}} placeholder="EV charger location" value="1-2 Weeks" required=""> 1-2 Weeks
                    &ensp;&ensp;<input type="radio" name="time_range" {{$jobdetail[0]->time_range == '1 Month' ? "checked" : ""}} placeholder="EV charger location" value="1 Month" required=""> 1 Month
                    &ensp;&ensp;<input type="radio" name="time_range" {{$jobdetail[0]->time_range == '2 Month' ? "checked" : ""}} placeholder="EV charger location" value="2 Month" required=""> 1+ Month
                  </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                    <label>Based on the vehya online assessment here's your quote (USD $)</label><br>
                     {{$jobdetail[0]->total_amount ? '' : ''}} <input type="text" name="total_amount" class="form-control" placeholder="Amount" value="{{$jobdetail[0]->total_amount}}" required="">
                   
                  </div>
                  </div>
                  <!-- Common end -->  
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
