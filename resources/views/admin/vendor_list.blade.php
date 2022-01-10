<!DOCTYPE html>
<html lang="en">
<html lang="en">
@include('admin.includes.assets')
<style type="text/css">
  #example1_filter,#example1_paginate{
    float: right;
  }
</style>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  @include('admin.includes.nav')
  @include('admin.includes.aside')
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
                <h3 class="card-title">Vendors List</h3>
                <a href="add-vendor" class="btn btn-success" style="float:right;">Add Vendor</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Status</th>
                    <th>Pending/Approved</th>
                    <th class="text-center">Action</th> 
                  </tr>
                  </thead>
                  <tbody>
                      <?php $i = 1;?>
                      @foreach($vendorlist as $list)
                  <tr>
                    <td>{{$i}}</td>
                    <td>{{$list['name']}}</td>
                    <td>{{$list['email']}}</td>
                    <td>{{$list['mobile_number']}}</td>
                    <td>
                    <form action="{{env('APP_URL')}}admin/vendor-disable/{{$list->id}}" method="post" enctype="multipart/form-data">
                      @csrf
                      
                     <input type="hidden" name="vendor_status" value="{{$list['vendor_status'] == 0 ? 1 : 0 }}">
                    <button type=submit class="btn btn-info"><i aria-hidden="true">@if($list['vendor_status'] == 0)Disabled @else Enabled @endif</i></button>
                    </form>
                    </td>
                     <td>
                       <form action="{{env('APP_URL')}}admin/vendor-active/{{$list->id}}" method="post" enctype="multipart/form-data">
                          @csrf
                          
                         <input type="hidden" name="status" value="{{$list['status'] == 0 ? 1 : 0 }}">
                        <button type=submit class="btn btn-info"><i aria-hidden="true">@if($list['status'] == 0)Pending @else Approved @endif</i></button>
                        </form>
                        </td>
                        <td>
                    <!--<a href="vendor-list-view/{{$list['id']}}"><button class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></button></a>-->
                    <a href="vendor-list-show/{{$list['id']}}"><button class="btn btn-info"><i class="fas fa-edit"></i></button></a>
                    <!--<button class="btn btn-info"><i aria-hidden="true">@if($list['status'] == 1) Active @else Disable  @endif</button>-->
                    <!--<button class="btn btn-info" onclick="a('{{$list['id']}}')"><i class="fa fa-trash" aria-hidden="true"></i></button>-->
                    </td>
                  </tr>
                  <?php $i++;?>
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
  @include('admin.includes.footer')
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
             location.replace("{{env('APP_URL')}}admin/vendor-list/"+id)
         } else {
            }
}
</script>
</body>
</html>
