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
                <h3 class="card-title">Customer</h3>
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
                    <label>Customer Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Customer Name" value="@isset($customer){{$customer->name}}@endisset{{old('name')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Customer Type</label>
                    <input type="text" name="customer_type" class="form-control" placeholder="Enter Customer Type" value="@isset($customer){{$customer->customer_type}}@endisset{{old('customer_type')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Enter Email</label>
                    <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="Enter Email" value="@isset($customer){{$customer->email}}@endisset{{old('email')}}" required="">
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
                    <input type="number" name="mobile_number" min="1000000000" max="9999999999"  class="form-control" placeholder="Enter Mobile Number" value="@isset($customer){{$customer->mobile_number}}@endisset{{old('mobile_number')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>State</label>
                    <select name="state" class="form-control selectpicker" required onchange="getcity()" id="states">
                        <option value="">Please select state</option>
                      @foreach($states as $state)
                      <option value="<?php print_r($state->id); ?>"  @isset($customer) @if($customer->state == $state->id) selected @endif @endisset @if(old('state') == $state->id) selected @endif>{{$state->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address" value="@isset($customer){{$customer->address}}@endisset{{old('address')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Card Number</label>
                    <input type="number" name="card_number" min="1000000000" max="9999999999999999"  class="form-control" placeholder="Enter Card Number" value="@isset($customer){{$customer->card_number}}@endisset{{old('card_number')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Expiry Date</label>
                    <input type="text" name="expiration_date" min="1000000000" max="9999999"  class="form-control" placeholder="Enter Expiry Date" value="@isset($customer){{$customer->expiration_date}}@endisset{{old('expiration_date')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Security Code</label>
                    <input type="number" name="security_code"   class="form-control" placeholder="Enter Security Code" value="@isset($customer){{$customer->security_code}}@endisset{{old('security_code')}}" required="">
                  </div>
                  </div>
                  
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Billing Address</label>
                    <input type="text" name="billing_address" class="form-control" placeholder="Enter Billing Address" value="@isset($customer){{$customer->billing_address}}@endisset{{old('billing_address')}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Customer Image</label>
                    <input type="file" name="profile_image" class="form-control" @if(!isset($customer)) required @endif  required="">
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
