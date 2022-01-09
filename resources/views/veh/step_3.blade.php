<!DOCTYPE html>

<html lang="en">
    
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}public/veh/assets/css/style1.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}public/veh/assets/css/style2.css">
@include('veh.includes.assets')
<body style="background-image: url('{{env('APP_URL')}}public/web/images/charles-forerunner.svg');background-size: cover;">
  <!-- ************** Header Start *************** -->
 @include('veh.includes.header')
  <!-- *------------------Header End-----------------*   -->

  <div style="background: transparent;position: relative; top: 4em; width: 100%; padding: auto 2em;" class="price_sec1 d-flex flex-column text-center">
    <div class="mt-5">
      <h3 style="filter: invert(100%);justify-content: center;" class="heading_russoone ">Commercial</h3>
      <h4 style="filter: invert(100%);" class="subheading_roboto" style="margin:auto;text-align: center; padding:1em">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</h4>
    </div>
  </div>
  <div style="margin-top: 5em;margin-bottom: 2em;" class="mx-auto commercialcontent">

              @if(Session::has('message'))
                <div class="alert alert-{{Session::get('alert_class')}}">
                  {{ Session::get('message')}}
                </div>
              @endif
            
    <form id="regForm" action="" method="post" enctype="multipart/form-data">
        @csrf 
      <div class="tab">
        <div class="col-12">
          <div class="row stepss">
            <div class=" d-flex">
              <p>STEP 1------</p>
              <p>------STEP 2------</p>
              <p>------STEP 3</p>
            </div>
          </div>
        </div>
        <div class="text-center">
          <p style="color: #F4CD1E;font-family: Roboto;
          font-style: normal;
          font-weight: bold;
          font-size: 1.5em;
          line-height: 34px;"> Which industry or area applies to you?</p>

          <div class="box5  ">



            <!-- ---------------------------------Box5 Cards start------------------------ -->
            <div class="col-12   d-flex  pl-5 ">
              <div class="row container-fluid">
               <form action="{{env('APP_URL')}}veh/add-commercial-location" method="post" enctype="multipart/form-data">
              @csrf
                @foreach($industrylist as $list)
                <div class=" col-md-6 col-lg-4 col-sm-8   text-center">
                  <div class=" my-4 bg_img"
                    style="background-image: url({{env('APP_URL').'public/uploads/'}}image/{{$list['industry_image']}}); background-size: cover;">
                    <div>
                      <h4 style="
    top: 4em;
    position: relative;" class="co-w">{{$list['name']}}</h4>
                    </div>
                  </div>
                  <input type="radio" name="industry_location_id" value="{{$list['id']}}">
                </div>
                @endforeach
                
                <div class="col-md-12 col-sm-12 mt-2">
                  <button type="submit" oninput="this.className = ''">Submit</button>
               </div>
               </form>    
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
      var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab

      function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        console.log(x)
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
          document.getElementById("prevBtn").style.display = "none";
        } else {
          document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
          document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
          document.getElementById("nextBtn").innerHTML = "CONTINUE to STEP 2";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
      }

      function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
          // ... the form gets submitted:
          document.getElementById("regForm").submit();
          return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
      }

      function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
          // If a field is empty...
          if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
          }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
          document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
      }

      function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
          x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
      }
    </script>
    
<script>
$(document).ready(function() {
    $('#wselect_test').selectpicker("refresh");
});
</script>
<script>
function getcity(){
    let state = $('#states').val();
    console.log("{{env('APP_URL')}}city/"+state);
    $.get("{{env('APP_URL')}}city/"+state,
    function(data, status){
    $('#city').html(data);
  });
}
@if(isset($sub_admin))getcity()@endif
</script>


@include('veh.includes.footer')
</div>
@include('veh.includes.footer_assets')  
</body>
</html>
