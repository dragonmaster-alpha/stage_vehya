<!DOCTYPE html>

<html lang="en">



<!------- Vehya Project Starts ON Friday,10-Dec-2021 at 4.00PM ------->





<!-- Mirrored from iwebwiserprojects.xyz/Vehya_Project/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Dec 2021 06:22:14 GMT -->
<title>Vehya-Get A QUOTE</title>
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
            </h1>
            
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
            
            
            <div class="forms">
                <div>
                    <img src="{{env('APP_URL')}}public/veh/assets/img/thankks.jpg" alt="">
                </div>
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