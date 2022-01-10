<!DOCTYPE html>
<html lang="en">
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
                <h3 class="card-title">My Electricians</h3>
                <a href="add-electrician" class="btn btn-success" style="float:right;">Add Electrician</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th class="text-center">Action</th> 
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($electricianlist as $list)
                  <tr>
                    <td>{{$list['name']}}</td>
                    <td>{{$list['email']}}</td>
                    <td>{{$list['mobile_number']}}</td>
                     <td>
                    <a href="electrician-list-show/{{$list['id']}}"><button class="btn btn-info"><i class="fas fa-edit"></i></button></a>
                    <button class="btn btn-info" onclick="a('{{$list['id']}}')"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
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
      
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
<script>
function a(id){
    var r = confirm("Are you sure ?");
         if (r == true) {
             location.replace("{{env('APP_URL')}}vendors/electrician-list/"+id)
         } else {
            }
}
</script>
</body>
</html>
