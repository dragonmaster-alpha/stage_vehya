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
                <h3 class="card-title">Vendor Update</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{env('APP_URL')}}vendors/vendor-list-update/{{$list->id}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                    <p style="color:red;">All fields are mandatory</p>
                  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Vendor Name</label>
                    <input type="text" name="name" class="form-control" value="{{$list->name}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" name="company_name" class="form-control" placeholder="Enter Company Name Name" value="{{$list->company_name}}">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Enter Email</label>
                    <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="Enter Email" value="{{$list->email}}" readonly="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Enter Mobile Number</label>
                    <input type="number" min="1000000000" max="9999999999" name="mobile_number" class="form-control" placeholder="Enter Mobile Number" value="{{$list->mobile_number}}" required="">
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
                      <option value="<?php print_r($state->id); ?>"  @isset($list) @if($list['state'] == $state->id) selected @endif @endisset>{{$state->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" placeholder="Enter Address" value="{{$list->city}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address" value="{{$list->address}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Zip Code</label>
                    <input type="text" name="zip_code" class="form-control" placeholder="Enter Zip Code" value="{{$list->zip_code}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Tax Company Name</label>
                    <input type="text" name="tax_company_name" class="form-control" placeholder="Enter Tax Company Name" value="{{$list->tax_company_name}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Ein No</label>
                    <input type="text" name="ein" class="form-control" placeholder="Enter Ein No" value="{{$list->ein}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Poc</label>
                    <input type="text" name="poc" class="form-control" placeholder="Enter Poc" value="{{$list->poc}}" required="">
                  </div>
                  </div>
                  
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="profile_image" class="form-control" @if(!isset($vendors)) required @endif  required="">{{$list->profile_image}}
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Driver License Image</label>
                    <input type="file" name="driver_license_image" class="form-control" @if(!isset($vendors)) required @endif  required="">{{$list->driver_license_image}}
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Electrical Contractor License Image</label>
                    <input type="file" name="electrical_contractor_license_image" class="form-control" @if(!isset($vendors)) required @endif  required="">{{$list->electrical_contractor_license_image}}
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Vehicle Insurance Image</label>
                    <input type="file" name="vehicle_insurance_image" class="form-control" @if(!isset($vendors)) required @endif  required="">{{$list->vehicle_insurance_image}}
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Liability Insurance Image</label>
                    <input type="file" name="liability_insurance_image" class="form-control" @if(!isset($vendors)) required @endif  required="">{{$list->liability_insurance_image}}
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Vehya Ev Certification Image</label>
                    <input type="file" name="vehya_agreement_image" class="form-control" @if(!isset($vendors)) required @endif  required="">{{$list->vehya_agreement_image}}
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Vehya Ev Certification Image</label>
                    <input type="file" name="vehya_ev_certification_image" class="form-control" @if(!isset($vendors)) required @endif  required="">{{$list->vehya_ev_certification_image}}
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>W9 Image</label>
                    <input type="file" name="w9_image" class="form-control" @if(!isset($vendors)) required @endif  required="">{{$list->w9_image}}
                  </div>
                  </div>
                  
                  
                  
                  
                  </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
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
