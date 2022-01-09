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
                <!--<h3 class="card-title">Vendor Update</h3>-->
                <form action="{{env('APP_URL')}}admin/vendor-active/{{$list->id}}" method="post" enctype="multipart/form-data">
                  @csrf
                  
                 <input type="hidden" name="status" value="{{$list['status'] == 0 ? 1 : 0 }}">
                <button type=submit class="btn btn-info"><i aria-hidden="true">@if($list['status'] == 0)Pending @else Approved @endif</i></button>
                </form>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{env('APP_URL')}}admin/vendor-list-update/{{$list->id}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                    <p style="color:red;">All fields are mandatory</p>
                  <div class="row">
                    <hr>
                  <div class="col-md-6">
                    <h4><u>Personal Information</u></h4>
                    <label>Name</label> 
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" value="{{$list->name}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Photo</label><a class="float-right" href="{{env('APP_URL').'public/uploads/image/'}}{{$list->profile_image}}" download>Download</a>
                    <input type="file" name="profile_image" class="form-control">
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
                    <label>Email</label>
                    <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="Enter Email" value="{{$list->email}}" readonly="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" name="password" minlength="8"  maxlength="20" class="form-control" placeholder="Enter Password" value="{{$list->password}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="number" min="1000000000" max="9999999999" name="mobile_number" class="form-control" placeholder="Enter Mobile Number" value="{{$list->mobile_number}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address" value="{{$list->address}}" required="">
                  </div>
                  </div>
                  <div class="col-md-4">
                      <h4><u>Licensing Section</u></h4>
                  <div class="form-group">
                    <label>Driver License State</label>
                    <select name="state" class="form-control selectpicker" required onchange="getcity()" id="states">
                        <option value="">Please select state</option>
                      @foreach($states as $state)
                      <option value="<?php print_r($state->id); ?>"  @isset($list) @if($list['state'] == $state->id) selected @endif @endisset>{{$state->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Driver License Number</label>
                    <input type="text" name="dl_number" class="form-control" placeholder="Enter Driver License Number" value="{{$list->dl_number}}" required="">
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Driver License</label><a class="float-right" href="{{env('APP_URL').'public/uploads/image/'}}{{$list->driver_license_image}}" download>Download</a>
                    <input type="file" name="driver_license_image" class="form-control" >
                  </div>
                  </div>
                  <div class="col-md-3">
                   <h4><u>Electrical Contractor Licensing Section</u></h4>   
                  <div class="form-group">
                    <label>Electrical Contractor License</label><a class="float-right" href="{{env('APP_URL').'public/uploads/image/'}}{{$list->electrical_contractor_license_image}}" download>Download</a>
                    <input type="file" name="electrical_contractor_license_image" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                    <label>Electrical Contractor License State</label>
                    <select name="ecl_state" class="form-control selectpicker" required onchange="getcity()" id="ecl_state">
                        <option value="">Please select state</option>
                      @foreach($states as $state)
                      <option value="<?php print_r($state->id); ?>"  @isset($list) @if($list['state'] == $state->id) selected @endif @endisset>{{$state->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                    <label>Electrical Contractor License Number</label>
                    <input type="text" name="ecl_number" class="form-control" placeholder="Enter Driver License Number" value="{{$list->ecl_number}}" required="">
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                    <label>Electrical Contractor Company Name</label>
                    <input type="text" name="ecl_name" class="form-control" placeholder="Enter Company Name" value="{{$list->ecl_name}}" required="">
                  </div>
                  </div>
                  <div class="col-md-3">
                      <h4><u>Vehicle Insurance</u></h4>
                  <div class="form-group">
                    <label>Vehicle Insurance Upload (Card Photo)</label><a class="float-right" href="{{env('APP_URL').'public/uploads/image/'}}{{$list->liability_insurance_image}}" download>Download</a>
                    <input type="file" name="vehicle_insurance_image" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                    <label>Insurer</label>
                    <input type="text" name="insurer" class="form-control" placeholder="Enter Insurer Name" value="{{$list->insurer}}" required="">
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                    <label>Policy Number</label>
                    <input type="text" name="policy_number" class="form-control" placeholder="Enter Policy Number" value="{{$list->policy_number}}" required="">
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                    <label>Vehicle Type</label><br>
                     <input type="radio" {{$list->vehicle_type == 'Car' ? "checked" : ""}} name="vehicle_type" value="Car" required="">Car&ensp;&ensp;
                     <input type="radio" {{$list->vehicle_type == 'Truck' ? "checked" : ""}}   name="vehicle_type" value="Truck" required="">Truck&ensp;&ensp;
                     <input type="radio" {{$list->vehicle_type == 'Van' ? "checked" : ""}} name="vehicle_type" value="Van" required="">Van
                  </div>
                  </div>
                  <div class="col-md-3">
                      <h4><u>Liability Insurance</u></h4>
                  <div class="form-group">
                    <label>Liability Insurance</label><a class="float-right" href="{{env('APP_URL').'public/uploads/image/'}}{{$list->liability_insurance_image}}" download>Download</a>
                    <input type="file" name="liability_insurance_image" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                    <label>Insurer</label>
                    <input type="text" name="liability_insurer" class="form-control" placeholder="Enter Insurer Name" value="{{$list->liability_insurer}}" required="">
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                    <label>Policy Number</label>
                    <input type="text" name="liability_policy_number" class="form-control" placeholder="Enter Policy Number" value="{{$list->liability_policy_number}}" required="">
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                    <label>Coverage Amount</label>
                    <input type="text" name="coverage_amount" class="form-control" placeholder="Enter Coverage Amount" value="{{$list->coverage_amount}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                      <h4><u>Vehya Section</u></h4>
                  <div class="form-group">
                    <label>Vehya Master Agreement</label><a class="float-right" href="{{env('APP_URL').'public/uploads/image/'}}{{$list->vehya_agreement_image}}" download>Download</a>
                    <input type="file" name="vehya_agreement_image" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Vehya Ev Certification</label><a class="float-right" href="{{env('APP_URL').'public/uploads/image/'}}{{$list->vehya_ev_certification_image}}" download>Download</a>
                    <input type="file" name="vehya_ev_certification_image" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-3">
                         <h4><u>Tax Information</u></h4>
                  <div class="form-group">
                    <label>W9</label><a class="float-right" href="{{env('APP_URL').'public/uploads/image/'}}{{$list->w9_image}}" download>Download</a>
                    <input type="file" name="w9_image" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                    <label>Tax Company Name</label>
                    <input type="text" name="tax_company_name" class="form-control" placeholder="Enter Tax Company Name" value="{{$list->tax_company_name}}" required="">
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                    <label>Ein No</label>
                    <input type="text" name="ein" class="form-control" placeholder="Enter Ein No" value="{{$list->ein}}" required="">
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                    <label>Poc</label>
                    <input type="text" name="poc" class="form-control" placeholder="Enter Poc" value="{{$list->poc}}" required="">
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
