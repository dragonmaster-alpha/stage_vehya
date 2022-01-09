<!DOCTYPE html>
<html lang="en">
@include('admin.includes.assets')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  @include('admin.includes.nav')
  @include('admin.includes.aside')
  <div class="content-wrapper">
    <section class="content-header">
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
              
            <!-- general form elements -->
            <div class="card card-primary">
                @if(Session::has('message'))
                    <div class="alert alert-{{Session::get('alert_class')}}">
                      {{ Session::get('message')}}
                    </div>
                @endif
              <div class="card-header">
                <h3 class="card-title">Term Condition Policy</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">
                  @csrf
                <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                      <textarea id="summernote" name="term_condition">{{$term_condition[0]->term_condition}}</textarea>
                  </div>
                </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @include('admin.includes.footer')
</div>
<!-- ./wrapper -->

@include('admin.includes.footer_assets')
<script type="text/javascript">
  function valito(){
    let maxDate = $('#valifrom').val();
    $('#txtDate').attr('min', maxDate);
}
</script>
<script>
$('#summernote').summernote();
</script>
</body>
</html>
