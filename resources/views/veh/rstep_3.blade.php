<html lang="en">
    
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}public/veh/assets/css/style1.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}public/veh/assets/css/style2.css">
@include('veh.includes.assets')
<body style="background-image: url('{{env('APP_URL')}}public/web/images/charles-forerunner.svg');background-size: cover;">
  <!-- ************** Header Start *************** -->
 @include('veh.includes.header')
  <!-- *------------------Header End-----------------*   -->

    <div class="questions">

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
            <p style="font-family: Roboto;
      font-style: normal;
      font-weight: bold;
      font-size: 3.4em;
      line-height: 34px;
      text-align: center;
      color: #F4CD1E;"> Assessment</p>

            <div class="form_inputs">
                <form style="padding: auto 3em;" action="" method="post" enctype="multipart/form-data">
                    @csrf 
                    <div class="quest mb-5">
                        <p>How far is your breaker panel from the desired EV charger location?</p>
                        
                            <div class="row justify-content-center pl-5">
                            
                            <div class="col-xl-2 col-lg-4 d-flex ">
                                <input class="s_1em " type="radio" id="q1o1" name="ev_location" value="5ft"  required="">
                                <label for="q1o1" >5ft</label><br>
                            </div>
                            <div class="col-xl-2 col-lg-4 d-flex">
                                <input class="s_1em" type="radio" id="q1o2" name="ev_location" value="10ft"  required="">
                                <label for="q1o2" >10ft</label><br>
                            </div>
                            <div class="col-xl-2 col-lg-4 d-flex">
                                <input class="s_1em" type="radio" id="q1o3" name="ev_location" value="15ft" required="">
                                <label forf="q1o3" >15ft</label><br>
                            </div>
                            <div class="col-xl-2 col-lg-4 d-flex">
                                <input class="s_1em" type="radio" id="q1o4" name="ev_location" value="20ft" required="">
                                <label for="q1o4" >20ft</label><br>
                            </div>
                            <div class="col-xl-2 col-lg-4 d-flex">
                                <input class="s_1em" type="radio" id="q1o5" name="ev_location" value="25ft" required="">
                                <label for="q1o5" >25ft</label><br>
                            </div>
                        </div>
                        
                    </div>
                    <br>
                    <div class="quest mb-5">
                        <p>How far is your breaker panel from the desired EV charger location?</p>
                        <div class="d-flex col-10 m-auto px-5 ">
                            
                            <div class="col-3 offset-md-2 d-flex ">
                                  <input class="s_1em   pr-0" type="radio" id="q2o1" name="ev_location_a" value="Yes"
                                     required="">
                                 <label  for="q2o1" >Yes</label><br>
                            </div>
                            <div class="col-3 offset-md-2 d-flex">
                                  <input class="s_1em " type="radio" id="q2o2" name="ev_location_a" value="No" required="">
                                  <label  for="q2o2" >No</label><br>
                            </div>
                            

                        </div>

                       
                    </div>
                    <div class="quest mb-5">
                        <p>Is the breaker panel on the same wall as the desired EV charger location?</p>
                        <div class="d-flex col-10 m-auto px-5 ">
                            
                            <div class="col-3 offset-md-2 d-flex ">
                                  <input class="s_1em  pr-0" type="radio" id="q3o1" name="ev_location_b" value="Yes"
                                    required="">
                                 <label  for="q3o1" style="text-align: left;">Yes</label><br>
                            </div>
                            <div class="col-3 offset-md-2 d-flex">
                                  <input class="s_1em" type="radio" id="q3o2" name="ev_location_b" value="No" required="">
                                  <label  for="q3o2" style="text-align: left;">No</label><br>
                            </div>
                            

                        </div>
                    </div>
                    <div class="quest mb-5">
                        <p>Is the breaker panel on the same wall as the desired EV charger location?</p>
                        <div class="d-flex col-10 m-auto px-5 ">
                            
                            <div class="col-3 offset-md-2 d-flex ">
                                  <input class="s_1em   pr-0" type="radio" id="q4o1" name="ev_location_c" value="Yes"
                                    required="">
                                 <label  for="q4o1" style="text-align: left;">Yes</label><br>
                            </div>
                            <div class="col-3 offset-md-2 d-flex">
                                  <input class="s_1em" type="radio" id="q4o2" name="ev_location_c" value="No" required="">
                                  <label  for="q4o2" >No</label><br>
                            </div>
                            

                        </div>
                    </div>
                    <div class="quest mb-5">
                        <p>Is the desired EV charger location interior or exterior?</p>
                        <div class="d-flex col-10 m-auto px-5 ">
                            
                            <div class="col-5 offset-md-2 d-flex ">
                                  <input class="s_1em  pr-0" type="radio" id="q5o1" name="ev_location_ie" value="Interior"
                                    required="">
                                 <label  for="q5o1" style="text-align: left;">Interior</label><br>
                            </div>
                            <div class="col-5 offset-md-2 d-flex">
                                  <input class="s_1em" type="radio" id="q5o2" name="ev_location_ie" value="Exterior" required="">
                                  <label  for="q5o2" style="text-align: left;">Exterior</label><br>
                            </div>
                            

                        </div>
                    </div>
                    <div class="quest mb-5">
                        <p>Choose the electrical appliances you have in your home?</p>
                        <div  class="d-flex col-12 m-auto ">
                            <div class="offset-md-2 row">
                                <div class="  col-xl-3 col-lg-6 col-sm-12 d-flex ">
                                     <input type="checkbox" class="checkbox-round" id="" name="electrical_appliances[]" value="Washer">
                                    <label for="">Washer</label><br>
                                </div>
                                <div class="  col-xl-3 col-lg-6 col-sm-12 d-flex  ">
                                     <input type="checkbox" class="checkbox-round" id="" name="electrical_appliances[]" value="Dryer">
                                    <label for="">Dryer</label><br>
                                </div>
                                <div class="  col-xl-3 col-lg-6 col-sm-12 d-flex ">
                                     <input type="checkbox" class="checkbox-round" id="" name="electrical_appliances[]" value="Microwave">
                                    <label for="">Microwave</label><br>
                                </div>
                                <div class="  col-xl-3 col-lg-6 col-sm-12 d-flex  ">
                                    <input type="checkbox" class="checkbox-round" id="" name="electrical_appliances[]" value="Range">
                                    <label for="">Range</label><br>  
                                </div>
                                <div class="  col-xl-3 col-lg-6 col-sm-12 d-flex  ">
                                    <input type="checkbox" class="checkbox-round" id="" name="electrical_appliances[]" value="Water Heater">
                                    <label for="">Water Heater</label><br>  
                                </div>
                                <div class="  col-xl-3 col-lg-6 col-sm-12 d-flex  ">
                                    <input type="checkbox" class="checkbox-round" id="" name="electrical_appliances[]" value="AC Unit">
                                    <label for="">AC Unit</label><br>  
                                </div>
                                <div class="  col-xl-3 col-lg-6 col-sm-12 d-flex  ">
                                    <input type="checkbox" class="checkbox-round" id="" name="electrical_appliances[]" value="Dishwasher">
                                    <label for="">Dishwasher</label><br>  
                                </div>
                                <div class="  col-xl-3 col-lg-6 col-sm-12 d-flex  ">
                                    <input type="checkbox" class="checkbox-round" id="" name="electrical_appliances[]" value="HeatPump">
                                    <label for="">HeatPump</label><br>  
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="quest mb-5">
                        <p>Are there any additional electrical items on your to-do-list?</p>
                        <div  class="d-flex col-7 m-auto py-5">
                            <input type="text" name="additional_electrical_item" id=""  placeholder="Type Here">
                        </div>
                    </div>
                    <div class="quest mb-5">
                        <p>Within which range would you like to have an install?</p>
                        <div class="d-flex col-10 m-auto px-5 justify-content-center pl-5 py-5 ">
                            
                            <div class=" offset-md-1 col-xl-3 col-md-6 col-sm-12  d-flex  ">
                                  <input class="s_1em   pr-0" type="radio" id="q8o1" name="time_range" value="1-2 Weeks" required="">
                                 <label  for="q8o1" >1-2 Weeks</label><br>
                            </div>
                            <div class=" offset-md-1 col-xl-3 col-md-6 col-sm-12  d-flex ">
                                  <input class="s_1em " type="radio" id="q8o2" name="time_range" value="1 Month" required="">
                                  <label  for="q8o2" >1 Month</label><br>
                            </div>
                            <div class=" offset-md-1 col-xl-3 col-md-6 col-sm-12  d-flex ">
                                  <input class="s_1em " type="radio" id="q8o2" name="time_range" value="2 Months" required="">
                                  <label  for="q8o2" >2 Months</label><br>
                            </div>
                            

                        </div>
                    </div>

                    <button class="my-2" type="button" id="prevBtn" onclick="nextPrev(-1)">GO BACK to STEP 3</button>
      <button class="my-2" type="submit" id="nextBtn" onclick="nextPrev(1)">Submit</button>
                </form>
            </div>

        </div>

    </div>
    
    
@include('veh.includes.footer')
</div>
@include('veh.includes.footer_assets')  
</body>
</html>