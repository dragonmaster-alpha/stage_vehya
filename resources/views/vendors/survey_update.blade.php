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
                <h3 class="card-title">Survey</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{env('APP_URL')}}vendors/survey-update/{{$list->id}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                    <!--<p style="color:red;">All fields are mandatory</p>-->
                  <div class="row">
                  <div class="col-md-12">
                  <div class="form-group">
                    <label>Change Order</label>
                    <textarea name="change_order" class="form-control" required="">{{$jobdetail[0]->change_order}}</textarea>
                  </div>
                  </div>
                  <div class="col-md-12">
                      <h3><u>Permit Upload(Upload photocopy)</u></h3>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Customer First Name*</label>
                    <input type="text" name="name" class="form-control" value="{{$list->name}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Customer Last Name*</label>
                    <input type="text" name="lname" class="form-control" value="{{$list->lname}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Full Address*</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter Address" value="{{$list->address}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Permit #*</label>
                    <input type="text" name="permit_number" class="form-control" placeholder="Permit Number" value="{{$jobdetail[0]->permit_number}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Inspection Date*</label>
                    <input type="date" name="inspection_date" class="form-control" placeholder="Date" value="{{$jobdetail[0]->inspection_date}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Inspection Complete?*</label><br>
                    Yes <input type="radio" name="inspection_complete" {{$jobdetail[0]->inspection_complete == 'Yes' ? "checked" : ""}} placeholder="property type" value="Yes" required="">
                    &ensp;&ensp;No <input type="radio" name="inspection_complete" {{$jobdetail[0]->inspection_complete == 'No' ? "checked" : ""}} placeholder="property type" value="No" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Inspector Name*</label>
                    <input type="text" name="inspector_name" class="form-control" placeholder="Name" value="{{$jobdetail[0]->inspector_name}}" required="">
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                    <label>Permit*</label><a class="float-right" href="{{env('APP_URL').'public/uploads/image/'}}{{$jobdetail[0]->permit_image}}" download>Download</a>
                    <input type="file" name="permit_image" class="form-control">
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
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-12">
                      <h3><u>Survey</u></h3>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Was the EV charger functioning at the completion of installation ?</label><br>
                    Yes <input type="radio" name="survey_a" {{$jobdetail[0]->survey_a == 'Yes' ? "checked" : ""}} placeholder="property type" value="Yes" required="">
                    &ensp;&ensp;No <input type="radio" name="survey_a" {{$jobdetail[0]->survey_a == 'No' ? "checked" : ""}} placeholder="property type" value="No" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Did the vehya rep show you how to use the eve charger ?</label><br>
                    Yes <input type="radio" name="survey_b" {{$jobdetail[0]->survey_b == 'Yes' ? "checked" : ""}} placeholder="property type" value="Yes" required="">
                    &ensp;&ensp;No <input type="radio" name="survey_b" {{$jobdetail[0]->survey_b == 'No' ? "checked" : ""}} placeholder="property type" value="No" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Was there a vehicle to demonstrate the ev charger ?</label><br>
                    Yes <input type="radio" name="survey_c" {{$jobdetail[0]->survey_c == 'Yes' ? "checked" : ""}} placeholder="property type" value="Yes" required="">
                    &ensp;&ensp;No <input type="radio" name="survey_c" {{$jobdetail[0]->survey_c == 'No' ? "checked" : ""}} placeholder="property type" value="No" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Are you intrested in a service contract for your EV charger(s) ?</label><br>
                    Yes <input type="radio" name="survey_d" {{$jobdetail[0]->survey_d == 'Yes' ? "checked" : ""}} placeholder="property type" value="Yes" required="">
                    &ensp;&ensp;No <input type="radio" name="survey_d" {{$jobdetail[0]->survey_d == 'No' ? "checked" : ""}} placeholder="property type" value="No" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Surveyed Name*</label>
                    <input type="text" name="surveyed_name" placeholder="Name" class="form-control" value="{{$jobdetail[0]->surveyed_name}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Surveyed Email*</label>
                    <input type="email" name="surveyed_email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="Email" value="{{$jobdetail[0]->surveyed_email}}" required="">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Surveyed Mobile*</label>
                    <input type="number" min="1000000000" max="9999999999" name="surveyed_mobile" class="form-control" placeholder="Mobile Number" value="{{$jobdetail[0]->surveyed_mobile}}" required="">
                  </div>
                  </div>
                  <div class="col-md-12">
                      <h5 style="color:red;">Project Photos</h5>
                      <p>Please provide 1 pic of charger installed, 1 of electrical panel, 1 front exterior of property </p>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                    <label>Charger Installed*</label><a class="float-right" href="{{env('APP_URL').'public/uploads/image/'}}{{$jobdetail[0]->charger_install_image}}" download>Download</a>  
                    <input type="file" name="charger_install_image" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                      <label>Electrical Panel*</label><a class="float-right" href="{{env('APP_URL').'public/uploads/image/'}}{{$jobdetail[0]->electrical_panel_image}}" download>Download</a>  
                    <input type="file" name="electrical_panel_image" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                      <label>Front Exterior of Property*</label><a class="float-right" href="{{env('APP_URL').'public/uploads/image/'}}{{$jobdetail[0]->property_image}}" download>Download</a>  
                    <input type="file" name="property_image" class="form-control">
                  </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" placeholder="Description" required="">{{$jobdetail[0]->description}}</textarea>
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
