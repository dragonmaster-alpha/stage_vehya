<!DOCTYPE html>
<html lang="en">
@include('vendors.includes.assets')
<style type="text/css">
  #example1_filter,#example1_paginate{
    float: right;
  }
</style>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  @include('vendors.includes.nav')
  @include('vendors.includes.aside')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
        @if(Session::has('message'))
            <div class="alert alert-{{Session::get('alert_class')}}">
              {{ Session::get('message')}}
            </div>
        @endif
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Job List</h3>
                <!--<a href="add-job" class="btn btn-success" style="float:right;">Add Job</a>-->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Customer Name</th>
                    <th>Customer Type</th>
                    <th>City || State</th>
                    <th>Installation Amount</th>
                    <th>Installation Date</th>
                    @if($status == "assign")
                    <th class="text-center">Action</th>
                    @elseif($status == "active")
                    <th colspan="2" class="text-center">Assign Electrician</th>
                    <th class="text-center">Action</th>
                    @elseif($status == "complete")
                    <th class="text-center">Assign Electrician</th> 
                    <th class="text-center">Inspection Status</th> 
                    @endif
                  </tr>
                  </thead>
                  
                  <tbody>
                      @foreach($joblist as $list)
                  <tr>
                    <td>{{$list->name}} {{$list->lname}}</td>
                    <td>{{$list->customer_type}}</td>
                    <td>{{$list->city}} || {{$list->state}}</td>
                    <td>@if($list->total_amount == "") @else ${{$list->total_amount}} @endif</td>
                    <td>{{$list->install_date}}</td>
                    @if($status == 'assign')
                    <td>
                    <a href="{{env('APP_URL')}}vendors/job-list-status/accept/{{$list->id}}"><button class="btn btn-info">Accept</button></a>
                    <a href="{{env('APP_URL')}}vendors/job-list-status/cancle/{{$list->id}}"> <button class="btn btn-danger">Decline</button></a>
                    <p>Online assessment completed</p>
                    </td>
                    @elseif($status == "active")
                       <td>
                            <form action="{{env('APP_URL')}}vendors/assign-electrician" method="post" enctype="multipart/form-data">
                                 @csrf
                              <input type="hidden" value="{{$list->customer_id}}" name="id">
                            <div class="form-group">
                                <select name="electrician_id" class="form-control selectpicker" required="">
                                    <option>*********</option>
                                  @foreach($electricians as $electrician)
                                  <option value="<?php print_r($electrician->id); ?>"  @isset($list) @if($list->electrician_id == $electrician->id) selected @endif @endisset @if(old('electrician_id') == $electrician->id) selected @endif>{{$electrician->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </td>
                        <td>
                           <button type="submit" class="btn btn-info">Assign</button>
                        </form>
                        </td>
                        <td>
                           <a href="{{env('APP_URL')}}vendors/job-list-status/complete/{{$list->id}}"><button class="btn btn-info">Complete</button></a>    
                           <a href="{{env('APP_URL')}}vendors/job-list-show/{{$list->customer_id}}"> <button class="btn btn-info"><i class="fas fa-edit"></i></button></a>
                        </td>
                    @elseif($status == "complete")
                        <td>{{$list->electrician_id}}</td>
                        <td>
                           <a href="{{env('APP_URL')}}vendors/survey/{{$list->customer_id}}"> <button class="btn btn-success"><i class="fas fa-edit"></i></button></a>
                        </td>
                    @endif
                  </tr>
                  @endforeach
                   </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('vendors.includes.footer')
</div>
<!-- ./wrapper -->

<script src="{{env('APP_URL').'public/'}}plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{env('APP_URL').'public/'}}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{env('APP_URL').'public/'}}plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{env('APP_URL').'public/'}}plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{env('APP_URL').'public/'}}plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{env('APP_URL').'public/'}}plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{env('APP_URL').'public/'}}plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{env('APP_URL').'public/'}}plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{env('APP_URL').'public/'}}plugins/jszip/jszip.min.js"></script>
<script src="{{env('APP_URL').'public/'}}plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{env('APP_URL').'public/'}}plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{env('APP_URL').'public/'}}plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{env('APP_URL').'public/'}}plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{env('APP_URL').'public/'}}plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{env('APP_URL').'public/'}}dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{env('APP_URL').'public/'}}dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "buttons": [{ 
					  extend: 'excel',
					  text: 'Download Excel'
				   }]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
<script>
function a(id){
    var r = confirm("Are you sure ?");
         if (r == true) {
             location.replace("{{env('APP_URL')}}vendors/job-list/"+id)
         } else {
            }
}
</script>
</body>
</html>
