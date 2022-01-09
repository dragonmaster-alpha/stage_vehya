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
                <h3 class="card-title">Product Update</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{env('APP_URL')}}admin/product-list-update/{{$list->id}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                    <p style="color:red;">All fields are mandatory</p>
                  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name" class="form-control" value="{{$list->name}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Enter Producs Price</label>
                    <input type="number" name="price"  class="form-control" placeholder="Enter Product Price" value="{{$list->price}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Maxmimum Charges</label>
                    <input type="text" name="max_charge"  class="form-control" placeholder="Enter Maximum Charges" value="{{$list->max_charge}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Amperage</label>
                    <input type="text" name="amperage"  class="form-control" placeholder="Enter Amperage" value="{{$list->amperage}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Voltage</label>
                    <input type="text" name="voltage"  class="form-control" placeholder="Enter Voltage" value="{{$list->voltage}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Safety</label>
                    <input type="text" name="safety"  class="form-control" placeholder="Enter Safety" value="{{$list->safety}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Warranty</label>
                    <input type="text" name="warranty"  class="form-control" placeholder="Enter Warranty" value="{{$list->warranty}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Cable Length</label>
                    <input type="text" name="cable_length"  class="form-control" placeholder="Enter Cable Length" value="{{$list->cable_length}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Connectivity</label>
                    <input type="text" name="connectivity"  class="form-control" placeholder="Enter Connectivity" value="{{$list->connectivity}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Efficiency</label>
                    <input type="text" name="efficiency"  class="form-control" placeholder="Enter Efficiency" value="{{$list->efficiency}}" required="">
                  </div>
                  </div>
                  
                  
                  
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Product Image</label>
                    <input type="file" name="product_image" class="form-control" @if(!isset($product)) required @endif  required="">
                    {{$list->product_image}}
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
