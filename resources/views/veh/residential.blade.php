<!DOCTYPE html>
<html lang="en">
<!------- Vehya Project Starts ON Friday,10-Dec-2021 at 4.00PM ------->
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
                        <div class="headng text-uppercase">Let's start with some basic info. <br> What type of EV do you have?</div>
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
                <div class="tab charger-group-container">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">Here are the EV chargers we provide based on your vehicle.
                        </div>
                    </h1>
                    <div class="charger-group-box">
                        <label for="chargepoint">
                        <input type="radio" id="chargepoint" name="own_charger" value="Charge-Point-Home-Flex"  onclick="camtf(1)"/>
                        <div class="charger-individual-box">
                            <div class="charger-sub-box">
                                <div class="charger-caption-image">
                                    <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/2.png" alt="">
                                </div>
                                <div class="cap-price-container">
                                    <p class="cap-title text-capitalize">blink home level 2</p>
                                    <div class="position-relative">
                                        <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/11.png" alt="" style="width: 120px;">
                                        <span class="price-label position-absolute">549.99$</span>
                                    </div>
                                </div>
                            </div>
                            <div class="asset-group-box">
                                <div class="asset-individual bg-dark">
                                    <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/5.png" alt="">
                                    <span class="text-white"> 11.2kW </span>
                                </div>
                                <div class="asset-individual bg-dark">
                                    <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/6.png" alt="">
                                    <span class="text-white"> 25ft Cable </span>
                                </div>
                                <div class="asset-individual bg-dark">
                                    <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/7.png" alt="">
                                    <span class="text-white"> Power Share </span>
                                </div>
                            </div>
                            <div id="id-more-information1" class="more-info-box">
                                <div class="individual-info">
                                    <span class="info-l">Max. Charge</span>
                                    <span class="info-r">11.5kW</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Amperage</span>
                                    <span class="info-r">60amp</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Input Voltage</span>
                                    <span class="info-r">240v</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Connectivity</span>
                                    <span class="info-r">Wi-Fi/Smartphone</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Warranty</span>
                                    <span class="info-r">3 years</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Cabel Length</span>
                                    <span class="info-r">25ft</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Safety</span>
                                    <span class="info-r">UL Listed</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Efficiency</span>
                                    <span class="info-r">Energy Star Certified</span>
                                </div>
                            </div>
                            <div id="readMore1" class="show-more-less" onclick="showMoreOrLess(1)">SHOW MORE</div>
                        </div>
                        </label>
                        
                        <label for="enelx">
                        <input type="radio" id="enelx" name="own_charger" value="Enelx-JuiceBox-48"  onclick="camtf(2)"/>
                        <div class="charger-individual-box">
                            <div class="charger-sub-box">
                                <div class="charger-caption-image">
                                    <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/3.png" alt="">
                                </div>
                                <div class="cap-price-container">
                                    <p class="cap-title text-capitalize">Charge point homeflex</p>
                                    <div class="position-relative">
                                        <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/11.png" alt="" style="width: 120px;">
                                        <span class="price-label position-absolute">699.99$</span>
                                    </div>
                                </div>
                            </div>
                            <div class="asset-group-box">
                                <div class="asset-individual bg-dark">
                                    <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/5.png" alt="">
                                    <span class="text-white"> 11.2kW </span>
                                </div>
                                <div class="asset-individual bg-dark">
                                    <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/6.png" alt="">
                                    <span class="text-white"> 25ft Cable </span>
                                </div>
                                <div class="asset-individual bg-dark">
                                    <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/7.png" alt="">
                                    <span class="text-white"> Power Share </span>
                                </div>
                            </div>
                            <div id="id-more-information2" class="more-info-box">
                                <div class="individual-info">
                                    <span class="info-l">Max. Charge</span>
                                    <span class="info-r">11.5kW</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Amperage</span>
                                    <span class="info-r">60amp</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Input Voltage</span>
                                    <span class="info-r">240v</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Connectivity</span>
                                    <span class="info-r">Wi-Fi/Smartphone</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Warranty</span>
                                    <span class="info-r">3 years</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Cabel Length</span>
                                    <span class="info-r">25ft</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Safety</span>
                                    <span class="info-r">UL Listed</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Efficiency</span>
                                    <span class="info-r">Energy Star Certified</span>
                                </div>
                            </div>
                            <div id="readMore2" class="show-more-less" onclick="showMoreOrLess(2)">SHOW MORE</div>
                        </div>
                        </label>
                        <label for="wallbox">
                        <input type="radio" id="wallbox" name="own_charger" value="WallBox-Pulsar-Plus-48"  onclick="camtf(3)"/>
                        <div class="charger-individual-box">
                            <div class="charger-sub-box">
                                <div class="charger-caption-image">
                                    <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/4.png" alt="">
                                </div>
                                <div class="cap-price-container">
                                    <p class="cap-title text-capitalize">Enel X Juicebox</p>
                                    <div class="position-relative">
                                        <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/11.png" alt="" style="width: 120px;">
                                        <span class="price-label position-absolute">649.99$</span>
                                    </div>
                                </div>
                            </div>
                            <div class="asset-group-box">
                                <div class="asset-individual bg-dark">
                                    <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/5.png" alt="">
                                    <span class="text-white"> 11.2kW </span>
                                </div>
                                <div class="asset-individual bg-dark">
                                    <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/6.png" alt="">
                                    <span class="text-white"> 25ft Cable </span>
                                </div>
                                <div class="asset-individual bg-dark">
                                    <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/7.png" alt="">
                                    <span class="text-white"> Power Share </span>
                                </div>
                            </div>
                            <div id="id-more-information3" class="more-info-box">
                                <div class="individual-info">
                                    <span class="info-l">Max. Charge</span>
                                    <span class="info-r">11.5kW</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Amperage</span>
                                    <span class="info-r">60amp</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Input Voltage</span>
                                    <span class="info-r">240v</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Connectivity</span>
                                    <span class="info-r">Wi-Fi/Smartphone</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Warranty</span>
                                    <span class="info-r">3 years</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Cabel Length</span>
                                    <span class="info-r">25ft</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Safety</span>
                                    <span class="info-r">UL Listed</span>
                                </div>
                                <div class="individual-info">
                                    <span class="info-l">Efficiency</span>
                                    <span class="info-r">Energy Star Certified</span>
                                </div>
                            </div>
                            <div id="readMore3" class="show-more-less" onclick="showMoreOrLess(3)">SHOW MORE</div>
                        </div>
                        </label>
                    </div>
                    <!-- <div class="d-flex justify-content-center">
                        
                        <div class="col-4 gx-5 mx-2">
                            <input type="radio" name="own_charger" value="Charge-Point-Home-Flex"  onclick="camtf()"/>
                            <img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-Chargers-01.svg" alt="">
                        
                        </div>
                        <div class="col-4 gx-5 mx-2">
                            <input type="radio" name="own_charger" value="Enelx-JuiceBox-48"  onclick="camtf()"/>
                            <img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-Chargers-02.svg" alt="">                    
                        </div>
                        <div class="col-4 gx-5 mx-2">
                            <input type="radio" name="own_charger" value="WallBox-Pulsar-Plus-48"  onclick="camtf()"/>
                            <img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-Chargers-03.svg" alt="">
                        </div>
                    </div> -->
                    <div class="forms form-design my-5">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="own_charger" value="I-have-my-own-charger" style="visibility: visible!important" onclick="camtfa()"/>
                                i have my own charger
                            </label>
                        </div>
                    </div>
                </div> 
                <!-- ADDITIONAL EV CHARGER IN NEXT YEAR? -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">Are you considering an additional <br> EV within the next year?</div>
                    </h1>
                    <div class="forms form-design my-5">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="next_year" value="Yes"  />
                                YES
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="next_year" value="No"  />
                                    NO
                                </label></div>
                    </div>
                </div>
                <!-- CONTACT INFO -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">We'll need some contact information</div>
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

                            <div class="termCondition">By Clicking On Next, You Are Agreeing To Our Terms And Privacy Policy
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ADDRESS  -->
                 <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase"><b>GREAT! What's the address where <br> the EV charger will be installed?</b>

                            <div class="middleImg">
                                <img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Commercial-06.png" alt="">
                            </div>
                        </div>
                    </h1>
                    <div class="row selectOption d-flex flex-row justify-content-center align-items-center" style="text-align: center;">

                        <div class="col-md-3 px-4">
                                <input type="text" name="address" placeholder="STREET" id="search_input" />
                        </div>
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
               <!-- STYLE OF HOME -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">What style of home?</div>
                    </h1>
                    <div class="forms">
                        <div class="showProperty row" >
                            <div class="col-md-3">
                               <label for="detached">
                               <input type="radio" name="property_type_home" value="Detached" id="detached" >
                                   <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-Detached-07 1.svg" alt=""></div>
                                <div class="lndText"></div></label> 
                            </div>
                            <div class="col-md-3">
                                <label for="townhome">
                                <input type="radio" name="property_type_home" value="TownHome" id="townhome" >
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-Townhome-07 1.svg" alt=""></div>
                                <div class="lndText"></div></label>
                            </div>

                            <div class="col-md-3">
                               <label for="condo"><input type="radio" name="property_type_home" value="Condo" id="condo" ><div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-Condo-07 1.svg" alt=""></div>
                                <div class="lndText"></div></label>
                            </div>
                            <div class="col-md-3">
                                <label for="other"><input type="radio" name="property_type_home" value="Other" id="other" ><div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-Other-07 1.svg" alt=""></div>
                                <div class="lndText"></div></label>
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
               <!-- NEED PERMISSION? -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">Will you need permission from anyone<br> to install the EV charger?</div>
                    </h1>
                    <div class="forms form-design py-5">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="permission" value="Yes"   />
                                YES
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="permission" value="No"  />
                                NO
                            </label></div>
                    </div>
                </div>
                <!-- GETTING POWER -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">Getting power to your EV charger is key.</div>
                    </h1>
                    <div class="col-12 py-5">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-PowerIllustration-09.svg" alt="">
                    </div>
                </div>
                <!-- WHERE INSTALLATION INTERIOR OR Exterior -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">Where will the EV Charger be installed?</div>
                    </h1>
                    <div class="forms form-design py-5">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="ev_location_ie" value="Interior"   />
                                INTERIOR
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="ev_location_ie" value="Exterior" />
                                EXTERIOR
                            </label></div>
                    </div>
                </div>
                <!-- DISTANCE 5FT 10FT 15FT 20FT -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">Approximately how far is it from the breaker<br> panel to the EV charger?</div>
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
                        <div class="headng text-uppercase">Will the EV charger be located on the<br> same wall as the breaker panel?</div>
                    </h1>
                    <div class="forms form-design py-5">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="breaker_panel" value="Yes"  >
                                YES
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="breaker_panel" value="No"   />
                                NO
                            </label></div>
                    </div>
                </div>
                <!-- Because EV chargers have power requirements, we need to understand the types of electrical items you have at your home. -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps py-5">
                        <div class="headng text-uppercase">Because EV chargers have power requirements,<br> we need to understand the types of electrical items you have at your home. </div>
                    </h1>
                    
                </div>
                <!-- Please choose the electrical items at your home. -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">Please Choose The Electrical Items At Your Home.</div>
                    </h1>
                    <div class="forms">

                        <div class="text-center">Choose all that apply</div>
                        <div class="showProperty imgLayout row justify-content-center">
                            <div class="chooseItemSet">
                                <label for="washer">
                                    <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Washer"  id="washer">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-19.svg" alt=""></div>
                                </label>

                            </div>
                            <div class="chooseItemSet">
                                <label for="dryer">
                                    <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Dryer"  id="dryer">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-20.svg" alt=""></div>
                                </label>

                            </div>
                            <div class="chooseItemSet">
                                <label for="refrigerator">
                                    <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Refrigerator"  id="refrigerator">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-21.svg" alt=""></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="stove">
                                    <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Stove"  id="stove">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-22.svg" alt=""></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="microwave">
                                    <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Microwave"  id="microwave">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-23.svg" alt=""></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="freezer">
                                    <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Freezer" id="freezer">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-24.svg" alt=""></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="heat-heater">
                                    <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="HeatPump-Heater"  id="heat-heater">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-25.svg" alt=""></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="acunit">
                                    <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="AC-Unit"  id="acunit">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-26 1.svg" alt=""></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="water-heater">
                                    <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Water-Heater"  id="water-heater">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-27 1.svg" alt=""></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="t-water-heater">
                                    <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Tankless-Water-Heater"  id="t-water-heater">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-28 1.svg" alt=""></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="solar-pael">
                                    <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Solar-Paels"  id="solar-pael">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-29 1.svg" alt=""></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="battery-storage">
                                    <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Battery-Storage"  id="battery-storage">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-30 1.svg" alt=""></div>
                                </label>
                            </div>
                            <div class="chooseItemSet">
                                <label for="generator">
                                    <input class="mx-2" type="checkbox" name="electrical_appliances[]"  value="Generator"  id="generator">
                                    <div class="land"><img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Residential-31 1.svg" alt=""></div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- WRAP -->
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
                <!-- when are you looking to install your ev charger? -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">
                        <div class="headng text-uppercase">When are you looking to install your EV charger?</div>
                    </h1>
                    <div class="forms form-design">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio"name="time_range" value="1-2 Weeks"    />
                                1-3 WEEKS
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="time_range" value="1 Month"    />
                                    1 MONTH
                                </label></div>
                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="time_range" value="2 Month"    />
                                    1 MONTH+
                                </label></div>
                    </div>
                </div>
                    <!-- QUOTE IS HERE -->
                <div class="tab">

                    <h1 class="text-center mt-2 caps">

                        <div class="headng"><b>Based on the Vehya Online Assessnment <br> here's your quote.</b> </div>
                    </h1>

                    <div class="forms text-center ">

                        <div class="cost" style="font-size: 2em;">Total Cost:$<span id="total_amount">1515</span></div>
                        <ul style="font-size: 2em;">
                            <li>CHARGEPOINT CHARGER: $<span id="chargeramt"></span></li>
                            <li>CHARGER FT: $<span id="chargereamt"></span></li>
                            <li>INSTALLATION: $700</li>
                            <li>PERMIT: $100</li>
                            <li>SERVICE FEE: $65</li>
                        </ul>
                        <div>
                           <span style="margin-right: 40px">Place your state and see federal and state rebates and credits</span>
                           <input type="text" name="state_input" placeholder="STATE" class="p-2" style="border: 1px solid #d3d3d3">
                       </div>
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
                        <div class="headng text-uppercase">Are you interested in financing?</div>
                    </h1>
                    <div class="forms form-design">
                        <div class="items"> <label class="formcontrolinput">
                                <input type="radio" name="financing" value="Yes"   />
                                YES
                            </label></div>

                        <div class="items"> <label class="formcontrolinput">
                                <label class="formcontrolinput">
                                    <input type="radio" name="financing" value="No"  />
                                    NO
                                </label></div>
                    </div>
                </div>
                <!-- calander -->
                <div class="tab">
                    <h1 class="text-center mt-2 caps">

                        <div class="headng text-uppercase"><b>When is a good date and time to call and get the remaining details for your EV charger installation?</b> </div>
                        <h5 class="text-center">PLEASE NOTE: You Should Have Access To Your Breaker Panel When Scheduling A Date And Time</h5>
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
                        <div class="headng text-uppercase">Thank you for choosing Vehya, <br> EV charger install & service made easy.</div>
                    </h1>
                    <div class="col-12 py-5 text-center">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/LastScreen-01 1.svg" alt="">
                    </div>
                    <h1 class="text-center mt-2 caps">
                        <div class="headng">We look forward to working with you. <br> One of our representatives will contact you for the remaining details! 
                        </div>
                    </h1>
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
    function camtf(cond){
        switch (cond) {
            case 1:
                camt = 549.99;
                break;
            case 2:
                camt = 699.99;
                break;
            case 3:
                camt = 649.99;
                break;
            default:
                camt = 750;
        }
    }
    function camtfa(){
        camt = 0;
    }
    function total_amount(evamt){
        let a = camt+700+100+65+evamt;
        $('#total_amount').html(a);
        $('#chargeramt').html(camt);
        $('#chargereamt').html(evamt);
    }
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
         street += place.address_components[i].long_name;
         document.getElementById('search_input').value = street;
        }
        if (place.address_components[i].types[j] == "route") {
         street += place.address_components[i].long_name;
         document.getElementById('search_input').value = street;
        }
        if (place.address_components[i].types[j] == "sublocality") {
         street += place.address_components[i].long_name;
         document.getElementById('search_input').value = street;
        }
        if (place.address_components[i].types[j] == "locality") {
         city += place.address_components[i].long_name;
         document.getElementById('city').value = city;
        }
        if (place.address_components[i].types[j] == "administrative_area_level_1") {
         state += place.address_components[i].long_name;
         document.getElementById('state').value = state;
        }
        if (place.address_components[i].types[j] == "postal_code") {
         zip_code += place.address_components[i].long_name;
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
<!------- Main Container End ------->

@include('veh.includes.footer_assets')
</body>

</html>