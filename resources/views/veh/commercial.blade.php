<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" href="{{env('APP_URL')}}public/veh/assets/css/stylenew.css" type="text/css">
@include('veh.includes.assets')
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAuGkxTIibaR_uVyYVlEqzKYJEDs1GVSQo"></script> 
<body>
    <!------- Main Container Starts ------->
    <div class="main-container get-quote-page">
        <!------- Header section Starts ------->
        @include('veh.includes.header')
        <!------- Header section End ------->
        <section class="sec2" style="background-color: white"></section>
        <hr>
        <div class="center" style="width: 80%;">
            <h1 class="text-center caps" style="margin-top: 58px;">
                <div class="imgs"> <img src="{{env('APP_URL')}}public/veh/assets/img/HermealPhoto-01.png" alt="" srcset=""> </div>
            </h1> 
            <form action="" id="regForm" method="post" enctype="multipart/form-data">
                  @csrf
                <!-- One "tab" for each step in the form: -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">Let's start with some basic info. <br> Which level of EV chargers do you need? </div>
                    </h1>
                    <div class="forms form-design">

                        <span class="centerText ">Please select all that apply</span>

                        <div class="items "> <label class="formcontrolinput">
                                <input type="radio" name="own_charger_level" value="Level 2" />
                                LEVEL 2
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="own_charger_level" value="Level 3" />
                                    LEVEL 3
                                </label></div>
                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="own_charger_level" value="1" />
                                    I HAVE MY OWN CHARGER
                                </label></div>
                    </div>
                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">Could multiple vehicles be charging at once?</div>
                    </h1>
                    <div class="forms form-design">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="ev_location_d" value="Yes" />
                                YES
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="ev_location_d" value="No" />
                                    NO
                                </label></div>
                    </div>
                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">Are you thinking of providing <br> EV charging as a paid service?</div>
                    </h1>
                    <div class="forms form-design">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="paid_service" value="Yes" />
                                YES
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="paid_service" value="No" />
                                    NO
                                </label></div>
                    </div>

                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">We'll need some contact information</div>
                    </h1>
                    <div class="forms form-design text-center " style="
                    width: fit-content;">
                        <div class="row d-flex">
                            <div class="col-xl-6 col-lg-12 col-xs-12"> 
                            <label class="">
                                <input type="text" name="name" placeholder="FIRST NAME" />
                            </label>
                            </div>

                            <div class="col-xl-6 col-lg-12 col-xs-12">
                            <label class="">
                                <input type="text" name="lname" placeholder='LAST NAME' />
                                </label>
                            </div>
                        </div>

                        <div class="row d-flex">
                            <div class="col-xl-6 col-lg-12 col-xs-12">
                                <label class="">
                                    <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]{1,}+\.[a-z]{2,}$" placeholder="EMAIL" />
                                </label>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-xs-12">
                                <label class="">
                                    <input type="text"  name="mobile_number" min="1000000000" max="9999999999" placeholder="PHONE" />
                                </label>
                            </div>
                        </div>
                        <div class=" text-center my-4 submit">

                            <div class="termCondition">By Clicking On Next, You Are Agreeing To Our Terms And Privacy
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase"><b>Great! Where will the EV chargers be installed?</b>

                            <div class="middleImg">
                                <img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Commercial-06.png" alt="">
                            </div>
                        </div>
                    </h1>
                    <div class="row selectOption d-flex flex-row justify-content-center align-items-center" style="text-align: center;">

                        <div class="col-md-3 px-4">
                                <input type="text" name="address" placeholder="STREET" id="search_input" /></div>

                        <div class="col-md-3 px-4">
                                <input type="text" name="city" placeholder="CITY" id="city"/>
                        </div>
                        <div class="col-md-3 px-4">
                                <input type="text" name="state" placeholder='STATE' id="state" /> 
                        </div>
                        <div class="col-md-3 px-4">
                                <input type="text" name="zip_code" placeholder="ZIP CODE" id="zip_code" />
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">Ownership Type</div>
                    </h1>
                    <div class="forms">
                        <div class="showProperty row" id='thumb_images'>
                            <div class="col-md-4 px-5">
                                <label for="land">
                                <input type="radio"  id='land' name="property_type_land" value="Land" />
                                <div class="land"><img  src="{{env('APP_URL')}}public/veh/assets/img/pr3.png" alt=""></div>
                                <div class="lndText">LAND</div></label>
                            </div>
                            <div class="col-md-4 px-5">
                                <label for='Commercial'>
                                <input type="radio"  id='Commercial' name="property_type_land" value="Commercial" />
                                <div class="land"><img  src="{{env('APP_URL')}}public/veh/assets/img/pr2.png" alt=""></div>
                                <div class="lndText">COMMERCIAL</div></label>
                            </div>

                            <div class="col-md-4 px-5">
                                <label for='multi'>
                                <input type="radio"  id='multi' name="property_type_land" value="Milti-Unit" />
                                <div class="land"><img  src="{{env('APP_URL')}}public/veh/assets/img/pr1.png" alt=""></div> 
                                <div class="lndText">MULTI-UNIT</div></label>
                            </div>
                        </div>
                        <div class="showTSelecProperty row mt-4 d-flex flex-row justify-content-center align-items-center">
                            <div class="items" style="width: 20%">
                                <label class="formcontrolinput">
                                    <input type="radio" name="property_type" value="Rent" />
                                    RENT
                                </label>
                            </div>

                            <div class="items" style="width: 20%">
                                <label class="formcontrolinput">
                                    <input type="radio" name="property_type" value="Own" />
                                    OWN
                                </label>
                            </div>

                            <div class="items" style="width: 20%">
                                <label class="formcontrolinput">
                                    <input type="radio" name="property_type" value="Other" />
                                    OTHER
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">Will you need permission from anyone to install this EV charger?</div>
                    </h1>
                    <div class="forms form-design">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="permission" value="Yes" />
                                YES
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="permission" value="No" />
                                NO
                            </label></div>
                    </div>
                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">what is your type of industry?</div>
                    </h1>
                    <div class="forms">

                        <div class="text-center">Choose All That Apply</div>
                        <div class="showProperty imgLayout row">
                            <div class="chooseItemSet">
                                <label for="automative">
                                    <input class="mx-2" type="checkbox" name="industry_location[]" value="Automotive" id="automative">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/1.png" alt=""></div>
                                    <div class="lndText">AUTOMOTIVE 
                                    </div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="hotel">
                                    <input class="mx-2" type="checkbox" name="industry_location[]" value="Hotel" id="hotel">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/2.png" alt=""></div>
                                    <div class="lndText">HOTEL </div>
                                </label>

                            </div>
                            <div class="chooseItemSet">
                                <label for="munciple">
                                    <input class="mx-2" type="checkbox" name="industry_location[]" value="Municipal" id="munciple">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/3.png" alt=""></div>
                                    <div class="lndText">MUNICIPAL 
                                    </div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="office">
                                    <input class="mx-2" type="checkbox" name="industry_location[]" value="Office" id="office">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/4.png" alt=""></div>
                                    <div class="lndText">OFFICE </div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="parking">
                                    <input class="mx-2" type="checkbox" name="industry_location[]" value="Parking" id="parking">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/5.png" alt=""></div>
                                    <div class="lndText">PARKING </div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="residential">
                                    <input class="mx-2" type="checkbox" name="industry_location[]" value="Residential" id="residential">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/6.png" alt=""></div>
                                    <div class="lndText">RESIDENTIAL </div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="retail">
                                    <input class="mx-2" type="checkbox" name="industry_location[]" value="Retail" id="retail">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/7.png" alt=""></div>
                                    <div class="lndText">RETAIL </div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="others">
                                    <input class="mx-2" type="checkbox" name="industry_location[]" value="Other" id="others">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/8.png" alt=""></div>
                                    <div class="lndText">OTHERS </div>
                                </label>
                            </div>

                        </div>
                    </div>
                </div> 
                <div class="tab">
                   <h1 class="text-center mt-2 caps">
                       <div class="headng text-uppercase">We'll wrap this quote up for you.</div>
                   </h1>
                   <div class="forms">
                       <div class="form-design wrap">
                           <img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Commercial-10.png" alt="">
                       </div>
                   </div>
                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">When are you looking to install<br> your EV charger?</div>
                    </h1>
                    <div class="forms form-design">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="time_range" value="1-2 Weeks" />
                                1-3 WEEKS
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="time_range" value="1 Month" />
                                    1 MONTH
                                </label></div>
                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="time_range" value="2 Month" />
                                    1 MONTH+
                                </label></div>
                    </div>
                </div>

                <div class="tab">
                   <h1 class="text-center mt-2 caps">
                       <div class="headng text-uppercase"><b>Based on the Vehya Online Assessnment, <br>here's your quote</b> </div>
                   </h1>
                   <div class="forms text-center ">
                       <div class="cost" style="font-size: 2em;">TOTAL COST: ${{650 + 700 + 100 + 65}}</div>
                       <ul style="font-size: 2em;">
                           <li>charerpoint charger:$650</li>
                           <li>INSTALLATION: $700</li>
                           <li>PERMIT: $100</li>
                           <li>SERVICE FEE: $65</li>
                       </ul>
                       <div>
                           <span style="margin-right: 40px">Place your state and see federal and state rebates and credits</span>
                           <input type="text" name="state_input" placeholder="STATE" class="p-2" style="border: 1px solid #d3d3d3">
                       </div>
                       <input type="hidden" name="total_amount" value="{{650 + 700 + 100 + 65}}">
                   </div>
                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase"><b>When is a good date and time to call and get the remaining details for your EV charger installation?</b> </div>
                    </h1>
                    <div>
                        <!-- Calendly inline widget begin -->
                        <div class="calendly-inline-widget" data-url="https://calendly.com/vish-15/15min"
                            style="min-width:320px;height:680px;"></div>
                        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"
                            async></script>
                        <!-- Calendly inline widget end -->
                    </div>
                           <!--<button type="submit" class="btn-yellow-lg">Submit</button>-->
                </div>
                <div style="overflow:auto ;margin:2em;">
                    <div style="text-align:center ">
                        <button class="btn-yellow-lg" type="button" id="prevBtn"
                            onclick="nextPrev(-1)">Previous</button>
                        <button class="btn-yellow-lg" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                </div>
                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </form>

        </div>
          <!------- Footer Section Starts ------->
     @include('veh.includes.footer')
<!------- Footer Section End ------->
</div>
<!------- Main Container End ------->
<script>
    $('#thumb_images').on('click' , 'img', function(){
    $('#thumb_images  img').removeClass('active');
    $(this).addClass('active');
});
</script>
<script type="text/javascript" src="{{env('APP_URL')}}public/veh/assets/js/commercial_quote.js"></script>
@include('veh.includes.footer_assets')

<script>
// var searchInput = 'search_input';
 
// $(document).ready(function () {
//  var autocomplete;
//  autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
//   types: ['geocode'],
//  });
  
//  google.maps.event.addListener(autocomplete, 'place_changed', function () {
//   var near_place = autocomplete.getPlace();
//  });
// });
</script>
<script>
function initialize() {
  var input = document.getElementById('search_input');
  var options = {
    types: ['address'],
    componentRestrictions: {
      country: 'us'
    }
  };
  autocomplete = new google.maps.places.Autocomplete(input, options);
  google.maps.event.addListener(autocomplete, 'place_changed', function() {
let street = '';
let city = '';
let state = '';
let country = '';
let zip_code = '';
    var place = autocomplete.getPlace();
    console.log(place);
    for (var i = 0; i < place.address_components.length; i++) {
      for (var j = 0; j < place.address_components[i].types.length; j++) {
        if (place.address_components[i].types[j] == "street_number") {
         street += place.address_components[i].long_name+' ';
         document.getElementById('search_input').value = street;
        }
        if (place.address_components[i].types[j] == "route") {
         street += place.address_components[i].long_name +' ';
         document.getElementById('search_input').value = street;
        }
        if (place.address_components[i].types[j] == "sublocality") {
         street += place.address_components[i].long_name +' ';
         document.getElementById('search_input').value = street;
        }
        if (place.address_components[i].types[j] == "locality") {
         city += place.address_components[i].long_name +' ';
         document.getElementById('city').value = city;
        }
        if (place.address_components[i].types[j] == "administrative_area_level_1") {
         state += place.address_components[i].long_name +' ';
         document.getElementById('state').value = state;
        }
        if (place.address_components[i].types[j] == "postal_code") {
         zip_code += place.address_components[i].long_name +' ';
         document.getElementById('zip_code').value = zip_code;
        }
      }
    }
    console.log(street);
    console.log(city);
    console.log(state);
    console.log(zip_code);
  })
}
google.maps.event.addDomListener(window, "load", initialize);
</script>
</body>
</html>