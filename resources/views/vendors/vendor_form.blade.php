<!DOCTYPE html>
<html lang="en">
@include('vendor.includes.assets')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
@include('vendor.includes.nav')
@include('vendor.includes.aside')
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
                <h3 class="card-title">Vendor</h3>
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
                    <label>Company Name</label>
                    <input type="text" name="company_name" class="form-control" placeholder="Enter Company Name Name" value="@isset($vendor){{$vendor->company_name}}@endisset{{old('company_name')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Type Of Vendor</label>
                    <select name="vendor_type" class="form-control selectpicker" required="">
                      @foreach($vendortypes as $vendortype)
                      <option value="<?php print_r($vendortype->id); ?> @isset($vendor){{$vendor->vendor_type}}@endisset{{old('vendor_type')}}">{{$vendortype->vendor_type}}</option>
                      @endforeach
                    </select>
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
                    <input type="password" name="password" minlength="8"  maxlength="20" class="form-control" placeholder="Enter Password">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Enter Mobile Number</label>
                    <input type="number" min="1000000000" max="9999999999" name="mobile_number" class="form-control" placeholder="Enter Mobile Number" value="@isset($vendor){{$vendor->mobile_number}}@endisset{{old('mobile_number')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Alternate Mobile Number (Optional)</label>
                    <input type="number" min="1000000000" max="9999999999" name="altr_mobile_number" class="form-control" placeholder="Enter Alternate Mobile Number" value="@isset($vendor){{$vendor->altr_mobile_number}}@endisset{{old('altr_mobile_number')}}" required="">
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
                  <!--<div class="col-md-6">-->
                  <!--<div class="form-group">-->
                  <!--  <label>Cities</label>-->
                  <!--  <select name="city" class="form-control selectpicker" required id="city">-->
                  <!--    @if(isset($cities))-->
                  <!--    @foreach($cities as $city)-->
                  <!--    <option value="<?php print_r($city->id); ?>" <?php if(old('city') == $city->id){ echo 'selected'; }?>>{{$city->name}}</option>-->
                  <!--    @endforeach-->
                  <!--    @endif-->
                  <!--    @if(isset($vendor))-->
                  <!--    @foreach($cities as $city)-->
                  <!--    <option value="<?php print_r($city->id); ?>" <?php if($vendor->city == $city->id){ echo 'selected'; }?>>{{$city->name}}</option>-->
                  <!--    @endforeach-->
                  <!--    @endif-->
                  <!--  </select>-->
                  <!--</div>-->
                  <!--</div>-->
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address" value="@isset($vendor){{$vendor->address}}@endisset{{old('address')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Zip Code</label>
                    <input type="text" name="zip_code" class="form-control" placeholder="Enter Zip Code" value="@isset($vendor){{$vendor->zip_code}}@endisset{{old('zip_code')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="profile_image" class="form-control" @if(!isset($vendor)) required @endif  required="">
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
  @include('vendor.includes.footer')
</div>
<!-- ./wrapper -->

@include('vendor.includes.footer_assets')
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
