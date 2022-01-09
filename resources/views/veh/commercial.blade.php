<!DOCTYPE html>

<html lang="en">



<!------- Vehya Project Starts ON Friday,10-Dec-2021 at 4.00PM ------->





 <link rel="stylesheet" href="{{env('APP_URL')}}public/veh/assets/css/stylenew.css" type="text/css">
@include('veh.includes.assets')



<body>

    <!------- Main Container Starts ------->

    <div class="main-container">

        <!------- Header section Starts ------->

        @include('veh.includes.header')


        <!------- Header section End ------->

        <section class="sec2"></section>
        <hr>
        <div class="center">
            <h1 class="text-center caps" style="margin-top: 58px;">
                <div class="imgs"> <img src="{{env('APP_URL')}}public/veh/assets/img/HermealPhoto-01.png" alt="" srcset=""> </div>
            </h1> 
            <form action="" id="regForm" method="post" enctype="multipart/form-data">
                  @csrf
                <!-- One "tab" for each step in the form: -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">Let's start with some basic info. <br> Which level of EV chargers do you need? </div>
                    </h1>
                    
                    <div class="forms form-design">

                        <span class="centerText ">Please select all the apply</span>

                        <div class="items "> <label class="formcontrolinput">
                                <input type="radio" name="own_charger_level" value="Level 2" />
                                level2
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="own_charger_level" value="Level 3" />
                                    level3
                                </label></div>
                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="own_charger_level" value="1" />
                                    i have my own charger
                                </label></div>

                    </div>
                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">COULD MULTIPLE VEHICLES BE CHARGING AT ONCE?</div>
                    </h1>
                    <div class="forms form-design">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="ev_location_d" value="Yes" />
                                Yes
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="ev_location_d" value="No" />
                                    No
                                </label></div>


                    </div>
                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">ARE YOU THINKING OF PROVIDING <br> OF EV CHARGING AS A PAID SERVICE?</div>
                    </h1>
                    <div class="forms form-design">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="paid_service" value="Yes" />
                                Yes
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="paid_service" value="No" />
                                    No
                                </label></div>
                    </div>

                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">WE'LL NEED SOME CONTACT INFORMATION</div>
                    </h1>
                    <div class="forms form-design text-center " style="
                    width: fit-content;
                ">
                        <div class="row d-flex">
                            <div class="col-xl-6 col-lg-12 col-xs-12"> <label class="">
                                    <input type="text" name="name" placeholder="FIRST NAME" />

                                </label></div>

                            <div class="col-xl-6 col-lg-12 col-xs-12">
                                <label class="">
                                    <input type="text" name="lname" placeholder='LAST NAME' />

                                </label>
                            </div>
                        </div>
                        <div class="row d-flex">
                            <div class="col-xl-6 col-lg-12 col-xs-12">
                                <label class="">
                                    <input type="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" placeholder="EMAIL" />

                                </label>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-xs-12 phone_number">
                                <label class="phn">
                                    <input type="number"  name="mobile_number" min="1000000000" max="9999999999" placeholder="PHONE" />

                                </label>
                            </div>
                        </div>
                        <div class=" text-center my-4 submit">

                            <div class="termCondition">By clicking on NEXT, you are agreeing to our terms and policy
                            </div>


                        </div>


                    </div>
                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng"><b>GREAT! TELL ME ABOUT WHERE THE EV CHARGER WILL BE INSTALLED?</b>

                            <div class="middleImg">
                                <img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Commercial-06.png" alt="">
                            </div>
                        </div>
                    </h1>
                    <div class="row selectOption" style="
                     text-align: center;">

                        <div class="col-md-2"> <label class="">
                                <input type="text" name="address" placeholder="STREET" />

                            </label></div>

                        <div class="col-md-2">
                            <label class="">
                                <input type="text" name="number" placeholder='NUMBER' />

                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="">
                                <select name="state" required onchange="getcity()" id="states">
                                    <option value="">Please select state</option>
                                      @foreach($states as $state)
                                    <option value="<?php print_r($state->id); ?>"  @isset($list) @if($list->state == $state->id) selected @endif @endisset @if(old('state') == $state->id) selected @endif>{{$state->name}}</option>
                                      @endforeach
                                </select>

                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="">
                                <input type="text" name="city" placeholder="CITY" />

                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="">
                                <input type="text" name="pc" placeholder="P.C" />

                            </label>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">WHAT TYPE OF PROPERTY?</div>
                    </h1>
                    <div class="forms">
                        <div class="showProperty row" id='thumb_images'>
                            <div class="col-md-4">
                                <label for="land">
                                <div class="land"><img  src="{{env('APP_URL')}}public/veh/assets/img/pr1.png" alt=""></div>
                                <div class="lndText">Land</div>
                                <input type="radio"  id='land' name="property_type_land" value="Land" /></label>
                            </div>
                            <div class="col-md-4">
                                <label for='Commercial'>
                                <div class="land"><img  src="{{env('APP_URL')}}public/veh/assets/img/pr2.png" alt=""></div>
                                <div class="lndText">Commercial</div>
                                <input type="radio"  id='Commercial' name="property_type_land" value="Commercial" /></label>
                            </div>

                            <div class="col-md-4">
                                <label for='multi'>
                                <div class="land"><img  src="{{env('APP_URL')}}public/veh/assets/img/pr3.png" alt=""></div> 
                                <div class="lndText">multi-until</div>
                                <input type="radio"  id='multi' name="property_type_land" value="Milti-Unit" /></label>
                            </div>
                        </div>
                        <div class="showTSelecProperty row">
                            <div class="items">
                                <label class="formcontrolinput">
                                    <input type="radio" name="property_type" value="Rent" />
                                    rent
                                </label>
                            </div>

                            <div class="items">
                                <label class="formcontrolinput">
                                    <input type="radio" name="property_type" value="Own" />
                                    Own
                                </label>
                            </div>

                            <div class="items">
                                <label class="formcontrolinput">
                                    <input type="radio" name="property_type" value="Other" />
                                    Other
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">WILL YOU NEED PERMISSION FROM ANYONE <br> TO INSTALL THIS EV CHARGER</div>
                    </h1>
                    <div class="forms form-design">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="permission" value="Yes" />
                                Yes
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="permission" value="No" />
                                No
                            </label></div>


                    </div>
                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">what is the area and / or industry type?</div>
                    </h1>
                    <div class="forms">

                        <div class="text-center">choose all type apply</div>
                        <div class="showProperty imgLayout row">
                            <div class="chooseItemSet">
                                <label for="automative">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/1.png" alt=""></div>
                                    <div class="lndText">automative<input class="mx-2" type="checkbox" name="industry_location[]" value="Automotive" id="automative">
                                    </div>
                                </label>

                            </div>
                            <div class="chooseItemSet">
                                <label for="hotel">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/2.png" alt=""></div>
                                    <div class="lndText">hotel <input class="mx-2" type="checkbox" name="industry_location[]" value="Hotel" id="hotel"></div>
                                </label>

                            </div>
                            <div class="chooseItemSet">
                                <label for="munciple">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/3.png" alt=""></div>
                                    <div class="lndText">munciple <input class="mx-2" type="checkbox" name="industry_location[]" value="Municipal" id="munciple">
                                    </div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="office">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/4.png" alt=""></div>
                                    <div class="lndText">office <input class="mx-2" type="checkbox" name="industry_location[]" value="Office" id="office"></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="parking">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/5.png" alt=""></div>
                                    <div class="lndText">parking <input class="mx-2" type="checkbox" name="industry_location[]" value="Parking" id="parking"></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="residential">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/6.png" alt=""></div>
                                    <div class="lndText">residential <input class="mx-2" type="checkbox" name="industry_location[]" value="Residential" id="residential"></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="retail">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/7.png" alt=""></div>
                                    <div class="lndText">retail <input class="mx-2" type="checkbox" name="industry_location[]" value="Retail" id="retail"></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="others">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/8.png" alt=""></div>
                                    <div class="lndText">others <input class="mx-2" type="checkbox" name="industry_location[]" value="Other" id="others"></div>
                                </label>
                            </div>

                        </div>






                    </div>
                </div> 
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">we'll wrap this quote up for you.</div>
                    </h1>
                    <div class="forms">


                        <div class="form-design wrap">
                            <img src="./img/GQ-Commercial-10.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">when are you looking to install your ev charger?</div>
                    </h1>
                    <div class="forms form-design">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="time_range" value="1-2 Weeks" />
                                within 2-1 weeks
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="time_range" value="1 Month" />
                                    1 month
                                </label></div>
                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="time_range" value="2 Month" />
                                    1 month+
                                </label></div>


                    </div>
                </div>
                <div class="tab">

                    <h1 class="text-center mt-2 caps">

                        <div class="headng"><b>base on the vehya online assessnment here's your Quote</b> </div>
                    </h1>

                    <div class="forms text-center ">

                        <div class="cost" style="font-size: 2em;">total cost:${{700 + 100 + 65}}</div>
                        <ul style="font-size: 2em;">
                            <!--<li>charerpoint charger:$650</li>-->
                            <li>installation:$700</li>
                            <li>permit:$100</li>
                            <li>service fee:$65</li>
                        </ul>
                        <input type="hidden" name="total_amount" value="{{700 + 100 + 65}}">
                        <!-- <div class=" text-center my-4 submit m-auto">
                            <div class="d-flex textstate m-auto justify-content-center text-center"><span class="left"
                                    style="font-size: 1em;">Place your state and see federal state rebates
                                    and credits</span>
                                <div class="col-md-3"> <label class="formcontrolinput">
                                        <input type="input" name="firstname" placeholder="STATE">

                                    </label></div>
                            </div>




                        </div> -->


                    </div>

                </div>
                <div class="tab">
                    <h1 class="text-center mt-2 caps">

                        <div class="headng"><b>when is a good date and time to call and get the remaining details for
                                your ev charger installation.</b> </div>
                        <h5 class="text-center">PLEASE NOTE: You should have access to your breaker panel when
                            scheduling a date and time</h5>
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
</body>

</html>