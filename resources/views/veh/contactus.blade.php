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
      <h3 style="filter: invert(100%);justify-content: center;" class="heading_russoone ">Contact Us</h3>
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
      <!-- One "tab" for each step in the form: -->
      <div class="tab col-12 mt-5">
        <div class="col-12">
          <div class="row stepss">
            
          </div>
        </div>
        <div class="row ">
              
          <div class="col-md-6 col-sm-12 mt-2">
            <h6 style="font-family: Roboto;font-style: normal;font-weight: bold;line-height: 34px;color: #030303;"
              class="">NAME</h6>
            <p><input type="text" name="name" placeholder="First Name" oninput="this.className = ''" value="@isset($commercial){{$commercial->name}}@endisset{{old('name')}}" required=""></p>
          </div>
          <div class="col-md-6 col-sm-12 mt-2">
            <h6>EMAIL</h6>
            <p><input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" placeholder="Email" value="@isset($commercial){{$commercial->email}}@endisset{{old('email')}}" oninput="this.className = ''" required=""></p>
          </div>
          <div class="col-md-6 col-sm-12 mt-2">
            <h6>PHONE NUMBER</h6>
            <p><input type="number" name="mobile_number" min="1000000000" max="9999999999"  placeholder="Enter Mobile Number" value="@isset($commercial){{$commercial->mobile_number}}@endisset{{old('mobile_number')}}" oninput="this.className = ''" required=""></p>
          </div>
          <div class="col-md-6 col-sm-12 mt-2">
            <h6>MESSAGE</h6>
            <p><input type="text" name="message" placeholder="Message" oninput="this.className = ''" value="@isset($commercial){{$commercial->message}}@endisset{{old('message')}}" required=""></p>
          </div>
          <div class="col-md-6 col-sm-12 mt-2">
            <button type="submit" oninput="this.className = ''">Submit</button>
          </div>
          
          
        </div>
       </form> 
      </div>

      <div class="tab">
        <div class="col-12">
          
        </div>
        <div class="col-12 content d-flex  ">
          <div class="row">
            <div class=" d-flex flex-column col-lg-4 col-md-6 col-sm-12">
              <form class="" action="">
                <fieldset>

                  <div class="image-fluid card_img">
                    <img class="image-fluid" width="100%" src="{{env('APP_URL')}}public/web/images/my-how-charger.svg" alt="">
                  </div>
                  <div class="btn-black  price_tag  m-auto">
                    SELECT</div>
                </fieldset>
              </form>
              <div class=" card_content d-flex flex-column text-center p-auto justify-content-center " style="
              height: -webkit-fill-available">
                <p style="font-family: Russo One;
                font-style: normal;
                font-weight: normal;
                font-size: 30px;">Already Have My Own
                  EV Charger</p>
                <div class="d-flex">

                </div>
              </div>
            </div>
            <div class=" d-flex flex-column col-lg-4 col-md-6 col-sm-12">
              <form class="" action="">
                <fieldset>
                  <div style="position: absolute;z-index: 1;" class=" m-2 ">
                    <p class="co-w"> 4.0</p>
                    <div class="d-flex">
                      <img class="mr-1 starss" src="{{env('APP_URL')}}public/web/images/star000.svg" alt="">
                      <img class="mr-1 starss" src="{{env('APP_URL')}}public/web/images/star000.svg" alt="">
                      <img class="mr-1 starss" src="{{env('APP_URL')}}public/web/images/star000.svg" alt="">
                      <img class="mr-1 starss" src="{{env('APP_URL')}}public/web/images/star000.svg" alt="">
                    </div>
                  </div>
                  <div class="image-fluid card_img">
                    <img class="image-fluid" width="100%" src="{{env('APP_URL')}}public/web/images/box4ii.svg" alt="">
                  </div>
                  <div class="btn-yellow  price_tag m-auto">
                    $540.299 </div>
                </fieldset>
              </form>
              <div class=" card_content d-flex flex-column  ">
                <h4>LEVEL2 CHARGER</h4>
                <div class=" col-12  card_data d-flex flex-column">
                  <div class="d-flex mt-1 ">
                    <div class="col-md-4 col-sm-4 d-flex flex-column">
                      <p class="p_head">Lorem ipsum</p>
                      <p class="p_detail">lorem Ipsum </p>
                    </div>
                    <div class="col-md-4 col-sm-4 d-flex flex-column">
                      <p class="p_head">Lorem ipsum</p>
                      <p class="p_detail">lorem Ipsum </p>
                    </div>
                  </div>
                  <div class="d-flex mt-1 ">
                    <div class="col-md-4 col-sm-4 d-flex flex-column">
                      <p class="p_head">Lorem ipsum</p>
                      <p class="p_detail">lorem Ipsum </p>
                    </div>
                    <div class="col-md-4 col-sm-4 d-flex flex-column">
                      <p class="p_head">Lorem ipsum</p>
                      <p class="p_detail">lorem Ipsum </p>
                    </div>
                    <div class="col-md-4 col-sm-4 d-flex flex-column">
                      <p class="p_head">Lorem ipsum</p>
                      <p class="p_detail">lorem Ipsum </p>
                    </div>
                  </div>
                </div>

                <div class="d-flex">

                </div>
              </div>
            </div>
            <div class=" d-flex flex-column col-lg-4 col-md-6 col-sm-12">
              <form class="" action="">
                <fieldset>
                  <div style="position: absolute;z-index: 1;" class=" m-2 ">
                    <p class="co-w"> 4.0</p>
                    <div class="d-flex">
                      <img class="mr-1 starss" src="{{env('APP_URL')}}public/web/images/star000.svg" alt="">
                      <img class="mr-1 starss" src="{{env('APP_URL')}}public/web/images/star000.svg" alt="">
                      <img class="mr-1 starss" src="{{env('APP_URL')}}public/web/images/star000.svg" alt="">
                      <img class="mr-1 starss" src="{{env('APP_URL')}}public/web/images/star000.svg" alt="">
                    </div>
                  </div>
                  <div class="image-fluid card_img">
                    <img class="image-fluid" width="100%" src="{{env('APP_URL')}}public/web/images/box4iii.svg" alt="">
                  </div>
                  <div class=" btn-yellow price_tag m-auto ">$540.299</div>
                </fieldset>
              </form>
              <div class=" card_content d-flex flex-column  ">
                <h4>LEVEL3 CHARGER</h4>
                <div class=" col-12  card_data d-flex flex-column">
                  <div class="d-flex mt-1 ">
                    <div class="col-md-4 col-sm-4 d-flex flex-column">
                      <p class="p_head">Lorem ipsum</p>
                      <p class="p_detail">lorem Ipsum </p>
                    </div>
                    <div class="col-md-4 col-sm-4 d-flex flex-column">
                      <p class="p_head">Lorem ipsum</p>
                      <p class="p_detail">lorem Ipsum </p>
                    </div>
                  </div>
                  <div class="d-flex mt-1 ">
                    <div class="col-md-4 col-sm-4 d-flex flex-column">
                      <p class="p_head">Lorem ipsum</p>
                      <p class="p_detail">lorem Ipsum </p>
                    </div>
                    <div class="col-md-4 col-sm-4 d-flex flex-column">
                      <p class="p_head">Lorem ipsum</p>
                      <p class="p_detail">lorem Ipsum </p>
                    </div>
                    <div class="col-md-4 col-sm-4 d-flex flex-column">
                      <p class="p_head">Lorem ipsum</p>
                      <p class="p_detail">lorem Ipsum </p>
                    </div>
                  </div>
                </div>

                <div class="d-flex">

                </div>
              </div>
            </div>
          </div>
         
        </div>
        <!-- <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
        <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p> -->
      </div>
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


                <div class=" col-md-6 col-lg-4 col-sm-8   text-center">
                  <div class=" my-4 bg_img"
                    style="background-image: url({{env('APP_URL')}}public/web/images/automotive.svg); background-size: cover;">
                    <div>
                      <h4 style="
    top: 4em;
    position: relative;" class="co-w">Automotive</h4>
                    </div>
                  </div>
                </div>
                <div class=" col-md-6 col-lg-4 col-sm-8   text-center">
                  <div class=" my-4 bg_img"
                    style="background-image: url({{env('APP_URL')}}public/web/images/municipal.svg); background-size: cover;">
                    <div>
                      <h4 style="
    top: 4em;
    position: relative;" class="co-w">Municipal</h4>
                    </div>
                  </div>
                </div>
                <div class=" col-md-6 col-lg-4 col-sm-8   text-center">
                  <div class=" my-4 bg_img" style="background-image: url({{env('APP_URL')}}public/web/images/office.svg); background-size: cover;">
                    <div>
                      <h4 style="
    top: 4em;
    position: relative;" class="co-w">Office</h4>
                    </div>
                  </div>
                </div>
                <div class=" col-md-6 col-lg-4 col-sm-8   text-center">
                  <div class=" my-4 bg_img" style="background-image: url({{env('APP_URL')}}public/web/images/ev-board.svg); background-size: cover;">
                    <div>
                      <h4 style="
    top: 4em;
    position: relative;" class="co-w">Parking</h4>
                    </div>
                  </div>
                </div>
                <div class=" col-md-6 col-lg-4 col-sm-8   text-center">
                  <div class=" my-4 bg_img"
                    style="background-image: url({{env('APP_URL')}}public/web/images/residential.svg); background-size: cover;">
                    <div>
                      <h4 style="
    top: 4em;
    position: relative;" class="co-w">Residental</h4>
                    </div>
                  </div>
                </div>
                <div class=" col-md-6 col-lg-4 col-sm-8    text-center">
                  <div class=" my-4 bg_img" style="background-image: url({{env('APP_URL')}}public/web/images/retail.svg); background-size: cover;">
                    <div>
                      <h4 style="
    top: 4em;
    position: relative;" class="co-w">Retail</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>

      <div style="overflow:auto;">
        <div style="margin:auto;position: relative;text-align: center;margin-top: 1em;margin-bottom: 3em;">
          <button class="my-2" type="button" id="prevBtn" onclick="nextPrev(-1)">GO BACK to STEP 1</button>
          <button class="my-2" type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-caret-right"></i></button>
        </div>
      </div>
      <!-- Circles which indicates the steps of the form: -->
      <div style="height: 0px; width: 0px; ">
        <span style="height: 0px; width: 0px; " class="step"></span>
        <span style="height: 0px; width: 0px; " class="step"></span>
        <span style="height: 0px; width: 0px; " class="step"></span>
        <span style="height: 0px; width: 0px; " class="step"></span>
      </div>
    </form>
</div>
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



@include('veh.includes.footer')
</div>
@include('veh.includes.footer_assets')  
</body>
</html>
