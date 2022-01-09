<!DOCTYPE html>

<html lang="en">



<!------- Vehya Project Starts ON Friday,10-Dec-2021 at 4.00PM ------->





<!-- Mirrored from iwebwiserprojects.xyz/Vehya_Project/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Dec 2021 06:22:14 GMT -->
<title>Vehya-Home</title>
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
            <h1 class="text-center mt-2 caps">            
            <div class="imgs"> <img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Commercial-01.png" alt="" srcset=""> </div>
            <div class="headng"><b>great tell me about where the <br>av charger will be installed?</b> 
            
            <div class="middleImg">
                <img src="{{env('APP_URL')}}public/veh/assets/img/GQ-Commercial-06.png" alt="">
            </div></div>
                </h1>  
            
            <div class="row">
                <form action="" class="formFields">
                  <div class="col-md-3"> <label class="formcontrolinput">
                      <input type="input" name="firstname" placeholder="STREET" />
                      
                    </label></div> 
                  
                    <div class="col-md-3"> 
                        <label class="formcontrolinput">
                            <input type="input" name="lastname" placeholder='NUMBER' />

                    </label></div>
                    <div class="col-md-3"> 
                        <label class="formcontrolinput">
                            <input type="input" name="email" placeholder="CITY" />

                    </label></div>
                    <div class="col-md-3">
                        <label class="formcontrolinput">
                            <input type="input" name="phone" placeholder="P.C" />

                    </label></div>
                    <div class=" text-center my-4 submit">
                        <button class="my-4 btn-yellow">Next</button>


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