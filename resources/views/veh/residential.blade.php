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

                <!-- BRAND AND MODEL OF CHARGER -->
                 <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">Let's start with some basic info. <br> What type of EV do you have?</div>
                    </h1>
                    <div class="forms form-design text-center " style="margin-top: 6em; width: fit-content;">
                        <div class="row d-flex">
                            <div class="col-xl-6 col-lg-12 col-xs-12"> <label class="">
                                    <input type="text" name="make" placeholder="BRAND" />

                                </label></div>

                            <div class="col-xl-6 col-lg-12 col-xs-12">
                                <label class="">
                                    <input type="text" name="model" placeholder='MODEL'  />

                                </label>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- EV CHARGERS WE ARE PROVIDING -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">Here are the EV chargers we provide based on your vehicle.
                        </div>
                    </h1>
                    <div class="d-flex justify-content-center">
                        
                        <div class="col-4 gx-5 mx-2"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-Chargers-01.svg" alt="">
                        <input type="radio" name="own_charger" value="Charge-Point-Home-Flex"  onclick="camtf()"/>
                        </div>
                        <div class="col-4 gx-5 mx-2"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-Chargers-02.svg" alt="">
                        <input type="radio" name="own_charger" value="Enelx-JuiceBox-48"  onclick="camtf()"/>
                        </div>
                        <div class="col-4 gx-5 mx-2"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-Chargers-03.svg" alt="">
                        <input type="radio" name="own_charger" value="WallBox-Pulsar-Plus-48"  onclick="camtf()"/>
                        </div>
                    </div>
                    
                    <div class="forms form-design my-5">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="own_charger" value="I-have-my-own-charger"  onclick="camtfa()"/>
                                i have my own charger
                            </label>
                        </div>
                    </div>
                </div> 
                <!-- ADDITIONAL EV CHARGER IN NEXT YEAR? -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">Are you considering an additional <br> EV within the next year?</div>
                    </h1>
                    <div class="forms form-design my-5">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="next_year" value="Yes"  />
                                Yes
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="next_year" value="No"  />
                                    No
                                </label></div>
                    </div>

                </div>
                <!-- CONTACT INFO -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">We'll need some contact information</div>
                    </h1>
                    <div class="forms form-design text-center " style="
                    width: fit-content; margin-top: 5em;">
                        <div class="row d-flex">
                            <div class="col-xl-6 col-lg-12 col-xs-12"> <label class="">
                                    <input type="text" name="name" placeholder="FIRST NAME"  />

                                </label></div>

                            <div class="col-xl-6 col-lg-12 col-xs-12">
                                <label class="">
                                    <input type="text" name="lname" placeholder='LAST NAME'  />

                                </label>
                            </div>
                        </div>
                        <div class="row d-flex">
                            <div class="col-xl-6 col-lg-12 col-xs-12">
                                <label class="">
                                    <input type="text" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$" placeholder="EMAIL"  />

                                </label>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-xs-12">
                                <label class="">
                                    <input type="text" name="mobile_number" min="1000000000" max="9999999999"  placeholder="PHONE"  />

                                </label>
                            </div>
                        </div>
                        <div class=" text-center my-4">

                            <div class="termCondition">By clicking on NEXT, you are agreeing to our terms and policy
                            </div>


                        </div>


                    </div>
                </div>
                <!-- ADDRESS  -->
                 <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng"><b>GREAT! What's the address where <br> the EV charger will be installed?</b>

                            <div class="middleImg">
                                <img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Commercial-06.png" alt="">
                            </div>
                        </div>
                    </h1>
                    <div class="row" style="
                     text-align: center;">

                        <div class="col-md-2"> <label class="formcontrolinput">
                                <input type="text" name="address" placeholder="STREET" id="streetinput"  />

                            </label></div>

                        <div class="col-md-2">
                            <label class="formcontrolinput">
                                <input type="text" name="number" placeholder='NUMBER'  />

                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="formcontrolinput">
                                <select name="state" required onchange="getcity()" id="states">
                                    <option value="">Please select state</option>
                                      @foreach($states as $state)
                                    <option value="<?php print_r($state->id); ?>"  @isset($list) @if($list->state == $state->id) selected @endif @endisset @if(old('state') == $state->id) selected @endif>{{$state->name}}</option>
                                      @endforeach
                                </select>
                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="formcontrolinput">
                                <input type="text" name="city" placeholder="CITY" />

                            </label>
                        </div>
                        <div class="col-md-2">
                            <label class="formcontrolinput">
                                <input type="text" name="pc" placeholder="P.C"  />

                            </label>
                        </div>
                    </div>
                </div> 
               <!-- STYLE OF HOME -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">WHAT STYLE OF HOME?</div>
                    </h1>
                    <div class="forms">
                        <div class="showProperty row" >
                            <div class="col-md-3">
                               <label for="detached"><div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-Detached-07 1.svg" alt=""></div>
                                <div class="lndText"><input type="radio" name="property_type_home" value="Detached" id="detached" ></div></label> 
                            </div>
                            <div class="col-md-3">
                                <label for="townhome"><div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-Townhome-07 1.svg" alt=""></div>
                                <div class="lndText"><input type="radio" name="property_type_home" value="TownHome" id="townhome" ></div></label>
                            </div>

                            <div class="col-md-3">
                               <label for="condo"><div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-Condo-07 1.svg" alt=""></div>
                                <div class="lndText"><input type="radio" name="property_type_home" value="Condo" id="condo" ></div></label>
                            </div>
                            <div class="col-md-3">
                                <label for="other"><div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-Other-07 1.svg" alt=""></div>
                                <div class="lndText"><input type="radio" name="property_type_home" value="Other" id="other" ></div></label>
                            </div>
                        </div>
                        <div class=" col-12 justify-content-center showTSelecProperty row" style="width: 100%;">
                            <div class="col-xl-3 col-lg-12  items">
                                <label class="formcontrolinput">
                                    <input type="radio" name="property_type" value="Rent"  />
                                    rent
                                </label>
                            </div>

                            <div class="col-xl-3 col-lg-12 items">
                                <label class="formcontrolinput">
                                    <input type="radio" name="property_type" value="Own"  />
                                    Ownership Type
                                </label>
                            </div>

                            <div class="col-xl-3 col-lg-12 items">
                                <label class="formcontrolinput">
                                    <input type="radio" name="property_type" value="Other"  />
                                    Other
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
               <!-- NEED PERMISSION? -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">WILL YOU NEED PERMISSION FROM ANYONE <br> TO INSTALL THIS EV CHARGER</div>
                    </h1>
                    <div class="forms form-design py-5">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="permission" value="Yes"   />
                                Yes
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="permission" value="No"  />
                                No
                            </label></div>


                    </div>
                </div>
                <!-- GETTING POWER -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">Getting power to your EV charger is key.</div>
                    </h1>
                    <div class="col-12 py-5">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-PowerIllustration-09.svg" alt="">
                    </div>
                </div>
                <!-- WHERE INSTALLATION INTERIOR OR Exterior -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">Where will the EV Charger be installed?</div>
                    </h1>
                    <div class="forms form-design py-5">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="ev_location_ie" value="Interior"   />
                                Interior
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="ev_location_ie" value="Exterior" />
                                Exterior
                            </label></div>


                    </div>
                </div>
                <!-- DISTANCE 5FT 10FT 15FT 20FT -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">Approximately how far is it from the <br> breaker panel to the EV charger?</div>
                    </h1>
                    <div class="forms form-design py-5" style="width: 100%;">
                        <div class="distance">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-11.png" style="width:100%;" alt="">
                            <div class="col-12 justify-content-center d-flex text-center">
                                <div class="col-2">
                                    <input type="radio" name="ev_location" value="5ft"   id="5ft" onclick="total_amount(600)">
                                    <label for="5ft">5FT</label> 
                                </div>
                                <div class="col-2">
                                    <input type="radio" name="ev_location" value="10ft"   id="10ft" onclick="total_amount(900)">
                                    <label for="10ft"> 10FT</label>
                                </div>
                                <div class="col-2">
                                    <input type="radio" name="ev_location" value="15ft"   id="15ft" onclick="total_amount(1300)">
                                   <label for="15ft">15FT</label> 
                                </div>
                                <div class="col-2">
                                    <input type="radio" name="ev_location" value="20ft"   id="20ft" onclick="total_amount(1800)">
                                  <label for="20ft"> 20FT</label> 
                                </div>
                                <div class="col-2">
                                    <input type="radio" name="ev_location" value="25ft"   id="20ft+" onclick="total_amount(200)">
                                    <label for="20ft+">  20FT+</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- EV CHARGER LOCATION ON SAME WALL?  -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">will the ev charger be located on the <br> same wall as the breaker panel?</div>
                    </h1>
                    <div class="forms form-design py-5">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="breaker_panel" value="Yes"  >
                                Yes
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="breaker_panel" value="No"   />
                                No
                            </label></div>


                    </div>
                </div>
                <!-- Because EV chargers have power requirements, we need to understand the types of electrical items you have at your home. -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps py-5">
                        <div class="headng">Because EV chargers have power requirements, we need to understand the types of electrical items you have at your home. </div>
                    </h1>
                    
                </div>
                <!-- Please choose the electrical items at your home. -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">Please choose the electrical items at your home.</div>
                    </h1>
                    <div class="forms">

                        <div class="text-center">Choose all that apply</div>
                        <div class="showProperty imgLayout row justify-content-center">
                            <div class="chooseItemSet">
                                <label for="automative">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-19.svg" alt=""></div>
                                    <div class="lndText"><input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Washer"  id="automative">
                                    </div>
                                </label>

                            </div>
                            <div class="chooseItemSet">
                                <label for="hotel">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-20.svg" alt=""></div>
                                    <div class="lndText"> <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Dryer"  id="hotel"></div>
                                </label>

                            </div>
                            <div class="chooseItemSet">
                                <label for="munciple">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-21.svg" alt=""></div>
                                    <div class="lndText"> <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Refrigerator"  id="munciple">
                                    </div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="office">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-22.svg" alt=""></div>
                                    <div class="lndText"> <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Stove"  id="office"></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="parking">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-23.svg" alt=""></div>
                                    <div class="lndText"> <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Microwave"  id="parking"></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="residential">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-24.svg" alt=""></div>
                                    <div class="lndText"> <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Freezer" 
                                            id="residential"></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="retail">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-25.svg" alt=""></div>
                                    <div class="lndText"> <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="HeatPump-Heater"  id="retail"></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="others">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-26 1.svg" alt=""></div>
                                    <div class="lndText"> <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="AC-Unit"  id="others"></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="others">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-27 1.svg" alt=""></div>
                                    <div class="lndText"> <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Water-Heater"  id="others"></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="others">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-28 1.svg" alt=""></div>
                                    <div class="lndText"> <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Tankless-Water-Heater"  id="others"></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="others">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-29 1.svg" alt=""></div>
                                    <div class="lndText"> <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Solar-Paels"  id="others"></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="others">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-30 1.svg" alt=""></div>
                                    <div class="lndText"> <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Battery-Storage"  id="others"></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="others">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-31 1.svg" alt=""></div>
                                    <div class="lndText"> <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Generator"  id="others"></div>
                                </label>
                            </div>

                        </div>






                    </div>
                </div>
                <!-- WRAP -->
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
                <!-- when are you looking to install your ev charger? -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">when are you looking to install your ev charger?</div>
                    </h1>
                    <div class="forms form-design">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio"name="time_range" value="1-2 Weeks"    />
                                1-3 weeks
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="time_range" value="1 Month"    />
                                    1 month
                                </label></div>
                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="time_range" value="2 Month"    />
                                    1 month+
                                </label></div>


                    </div>
                </div>
                    <!-- QUOTE IS HERE -->
                <div class="tab">

                    <h1 class="text-center mt-2 caps">

                        <div class="headng"><b>base on the vehya online assessnment <br> here's your Quote</b> </div>
                    </h1>

                    <div class="forms text-center ">

                        <div class="cost" style="font-size: 2em;">total cost:$<span id="total_amount">1515</span></div>
                        <ul style="font-size: 2em;">
                            <li>charerpoint charger:$<span id="chargeramt"></span></li>
                            <li>installation:$700</li>
                            <li>permit:$100</li>
                            <li>service fee:$65</li>
                        </ul>
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
                <!-- ARE YOU Interested IN Financing? -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">Are You Interested in Financing?</div>
                    </h1>
                    <div class="forms form-design">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="financing" value="Yes"   />
                                Yes
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="financing" value="No"  />
                                    No
                                </label></div>
                    </div>
                </div>
                <!-- calander -->
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
                          
                </div>
                <!-- thankyout step -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">Thank you for choosing Vehya, <br> EV charger install & service made easy.</div>
                    </h1>
                    <div class="col-12 py-5 text-center">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/LastScreen-01 1.svg" alt="">
                    </div>
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">We look forward to working with you. <br> One of our representatives will contact you for the remaining details! 
                        </div>
                    </h1>
                    <button type="submit" class="btn-yellow-lg">Submit</button> 
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
<script type="text/javascript" src="{{env('APP_URL')}}public/veh/assets/js/commercial_quote.js"></script>
<script>
let camt = 0;
    function camtf(){
        camt = 750;
    }
    function camtfa(){
        camt = 0;
    }
    function total_amount(evamt){
        let a = camt+700+100+65+evamt;
        $('#total_amount').html(a);
        $('#chargeramt').html(evamt);
    }
</script>
<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDo9gQ563Vudr-5zck8Q10A66mvajHUEA&libraries=places&callback=initMap">
</script>
<script>
// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 40.749933, lng: -73.98633 },
    zoom: 13,
    mapTypeControl: false,
  });
  const input = document.getElementById("streetinput");
  const options = {
    fields: ["formatted_address", "geometry", "name"],
    strictBounds: false,
    types: ["establishment"],
  };

function submit(btn){
    console.log(btn)
}
  const autocomplete = new google.maps.places.Autocomplete(input, options);

  const infowindow = new google.maps.InfoWindow();
  const infowindowContent = document.getElementById("infowindow-content");

  infowindow.setContent(infowindowContent);

  const marker = new google.maps.Marker({
    map,
    anchorPoint: new google.maps.Point(0, -29),
  });

  autocomplete.addListener("place_changed", () => {
    infowindow.close();
    marker.setVisible(false);

    const place = autocomplete.getPlace();

    if (!place.geometry || !place.geometry.location) {
      // User entered the name of a Place that was not suggested and
      // pressed the Enter key, or the Place Details request failed.
      window.alert("No details available for input: '" + place.name + "'");
      return;
    }

    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17);
    }

    marker.setPosition(place.geometry.location);
    marker.setVisible(true);
    infowindowContent.children["place-name"].textContent = place.name;
    infowindowContent.children["place-address"].textContent =
      place.formatted_address;
    infowindow.open(map, marker);
  });

  // Sets a listener on a radio button to change the filter type on Places
  // Autocomplete.
  function setupClickListener(id, types) {
    const radioButton = document.getElementById(id);

    radioButton.addEventListener("click", () => {
      autocomplete.setTypes(types);
      input.value = "";
    });
  }

  setupClickListener("changetype-all", []);
  setupClickListener("changetype-address", ["address"]);
  setupClickListener("changetype-establishment", ["establishment"]);
  setupClickListener("changetype-geocode", ["geocode"]);
  setupClickListener("changetype-cities", ["(cities)"]);
  setupClickListener("changetype-regions", ["(regions)"]);
  biasInputElement.addEventListener("change", () => {
    if (biasInputElement.checked) {
      autocomplete.bindTo("bounds", map);
    } else {
      // User wants to turn off location bias, so three things need to happen:
      // 1. Unbind from map
      // 2. Reset the bounds to whole world
      // 3. Uncheck the strict bounds checkbox UI (which also disables strict bounds)
      autocomplete.unbind("bounds");
      autocomplete.setBounds({ east: 180, west: -180, north: 90, south: -90 });
      strictBoundsInputElement.checked = biasInputElement.checked;
    }

    input.value = "";
  });
  strictBoundsInputElement.addEventListener("change", () => {
    autocomplete.setOptions({
      strictBounds: strictBoundsInputElement.checked,
    });
    if (strictBoundsInputElement.checked) {
      biasInputElement.checked = strictBoundsInputElement.checked;
      autocomplete.bindTo("bounds", map);
    }

    input.value = "";
  });
}
</script>
<!------- Main Container End ------->

@include('veh.includes.footer_assets')
</body>

</html>