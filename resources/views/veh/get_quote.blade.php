<!DOCTYPE html>

<html lang="en">



<!------- Vehya Project Starts ON Friday,10-Dec-2021 at 4.00PM ------->





<!-- Mirrored from iwebwiserprojects.xyz/Vehya_Project/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Dec 2021 06:22:14 GMT -->
<title>Vehya - Get A QUOTE</title>
@include('veh.includes.assets')



<body>

    <!------- Main Container Starts ------->

    <div class="main-container">

        <!------- Header section Starts ------->

        @include('veh.includes.header')


        <!------- Header section End ------->
        <section class="sec2 bg-none" style="background:none;"></section>
        <hr>
        <div class="center">
            <h1 class="text-center caps" style="margin-top: 58px;">
                <div class="imgs"> <img src="{{env('APP_URL')}}public/veh/assets/img/HermealPhoto-01.png" alt="" srcset=""> </div>
                <div class="headng">Hi. I'm Hermela. <br> I'me here to make your EV charger installation easy.<br/>Please tell me the type of EV charger installation.</div>
            </h1>
            
            <div class="forms">
                <form action="" method="post" class="form-design">
                    @csrf
                  <div class="items"> <label class="formcontrolinput">
                      <input type="radio" name="quote" id="residq" value="residential"   />
                      Residential
                    </label></div> 
                  
                    <div class="items"> <label class="formcontrolinput">
                        <label class="formcontrolinput">
                      <input type="radio" name="quote" id="commerq" value="commercial" />
                      Commercial
                    </label></div>
                    <div class=" text-center my-4">
                       <a href="{{env('APP_URL')}}veh/residential_quote"><button class="my-4 btn-yellow" id="resid" style="display:none">Next</button></a>
                       <a href="{{env('APP_URL')}}veh/commercial_quote"><button class="my-4 btn-yellow" id="commer" style="display:none">Next</button></a>

                        <button class="my-4 btn-yellow" id="demoo">Next</button>
                    </div>
                  </form>
            </div>

        </div>
 
        <section class="sec3 mt-5">
            
        </section>
 
    

        <!------- Footer Section Starts ------->

     @include('veh.includes.footer')

<!------- Footer Section End ------->

</div>

<!------- Main Container End ------->

@include('veh.includes.footer_assets')
</body>

</html>