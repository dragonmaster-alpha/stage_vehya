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
        <section class="sec1 d-flex justify-content-center text-center bg-dark">
            <img src="{{env('APP_URL')}}public/veh/assets/img/HomePage.jpg" alt="GET A QUOTE" style="width:100%;height:auto;">
               <h1 class="mt-5">EV CHARGER INSTALLS <br> & SERVICE MADE EASY</h1>
            <div class=" text-center my-4">
                <a href="{{env('APP_URL')}}veh/get-quote"><button class="btn-yellow-lg" >GET A QUOTE</button></a>
           </div>
        </section>
        <section class="sec2">
            <h1 class="text-center my-5">Compare Major Brands <br> of EV Chargers</h1>
            <img src="{{env('APP_URL')}}public/veh/assets/img/yellowcar.jpg" alt="GET A QUOTE" class="imgcenter ">
            <div class="mx-5 justify-content-center text-center">
                <img src="{{env('APP_URL')}}public/veh/assets/img/customers.jpg" class="imgcenter " alt="">
                <a href="{{env('APP_URL')}}veh/pricing"><button class="my-3 btn-yellow-lg">COMPARE</button></a>
            </div>

        </section>
        <section class="sec3 mt-5">
            <h1 class="text-center mt-2"> Chargers for all Electric Vehicles</h1>
            <img src="{{env('APP_URL')}}public/veh/assets/img/brandlogos.jpg" alt="GET A QUOTE" class="imgcenter ">
            <div class=" text-center my-4">
                <h1 style="font-size: 40px; font-weight: normal;" >And many more...</h1>
                <a href="{{env('APP_URL')}}veh/get-quote"><button class="my-4 btn-yellow-lg">GET A QUOTE</button></a>
            </div>
        </section>
        <section class="sec4 pt-5">

            <h1>At Vehya customer <br> satisfaction is 1#!</h1>
            <div class="starsect d-flex  ">
                <span><i class="fa fa-star text-warning star"></i></span>
                <span><i class="fa fa-star text-warning star"></i></span>
                <span><i class="fa fa-star text-warning star"></i></span>
                <span><i class="fa fa-star text-warning star"></i></span>
                <span><i class="fa fa-star text-warning star"></i></span>
            </div>
            <div class="card-container col-12 mb-5">

                <div class="row justify-content-center d-flex">
                    <div class="card col-md-3 col-sm-10 my-2">
                        <div class="card_header text-left">
                            <p class="d-block mb-0">Bubble_Tea88</p>
                            <div class=" d-flex  ">
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                            </div>
                        </div>
                        <div class="card_body mt-3">
                            <p class="text-justify">Wow @vehya, it was so easy! After answering a few questions, i was
                                able to get an instant quote on my Tesla's TV Charger.No surprises.</p>
                        </div>
                    </div>
                    <div class="card col-md-3 col-sm-10 my-2">
                        <div class="card_header text-left">
                            <p class="d-block mb-0">Carter S</p>
                            <div class=" d-flex  ">
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                            </div>
                        </div>
                        <div class="card_body mt-3">
                            <p class="text-justify">Excellent experience.@vehya installers were great and even offered
                                to come back and show me how to use it (charger) with my new EV.</p>
                        </div>
                    </div>
                    <div class="card col-md-3 col-sm-10 my-2">
                        <div class="card_header text-left">
                            <p class="d-block mb-0">Mckenna G</p>
                            <div class=" d-flex  ">
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                            </div>
                        </div>
                        <div class="card_body mt-3">
                            <p class="text-justify">After calling a few electricians and getting different prices, I
                                decided to use @vehya for my charger installation. They were knowledgable and offered
                                all-inclusive pricing. I like that!</p>
                        </div>
                    </div>
                </div>
                <a href="{{env('APP_URL')}}veh/get-quote"><button class="btn-yellow-lg mt-5">GET A QUOTE</button></a>
            </div>

        </section>
        <section class="sec5 text-center">
            <h1 class="text-center mt-4">Certified Electricians</h1>
            <img src="{{env('APP_URL')}}public/veh/assets/img/certifiedElectricians.png" alt="GET A QUOTE" class="imgcenter ">
            <a href="{{env('APP_URL')}}veh/about_us"><button class="btn-yellow-lg my-5">LEARN MORE</button></a>
        </section>
        <section class="sec6 p-4">
            <h1 class="text-center mt-4">Some Numbers</h1>
            <img src="{{env('APP_URL')}}public/veh/assets/img/numbers.png" alt="GET A QUOTE" class="imgcenter ">

        </section>
         <!------- <section class="sec7 text-center ">
            <h1 class="mb-5">News & Information</h1>

            <div class="col-12 mb-5">

                <div class="row justify-content-center d-flex mb-5">

                    <div class="card-container col-md-4 col-sm-12  ">
                        <div class="card mb-5 mt-2">
                            <div class="card_header text-left">
                                <p class="d-block mb-0"></p>
                                <!-- <div class=" d-flex  ">
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                            </div> 
                            </div>
                            <div class="card_body mt-3">
                                <p class="text-justify"></p>
                            </div>
                        </div>
                        <button class="btn-yellow-lg">READ MORE</button>
                    </div>
                    <div class="card-container col-md-4 col-sm-12  ">
                        <div class="card mb-5 mt-2">
                            <div class="card_header text-left">
                                <p class="d-block mb-0"></p>
                                <!-- <div class=" d-flex  ">
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                            </div> 
                            </div>
                            <div class="card_body mt-3">
                                <p class="text-justify"></p>
                            </div>
                        </div>
                        <button class="btn-yellow-lg">READ MORE</button>
                    </div>
                    <div class="card-container col-md-4 col-sm-12  ">
                        <div class="card mb-5 mt-2">
                            <div class="card_header text-left">
                                <p class="d-block mb-0"></p>
                                <!-- <div class=" d-flex  ">
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                                <span><i class="fa fa-star text-warning star"></i></span>
                            </div> 
                            </div>
                            <div class="card_body mt-3">
                                <p class="text-justify"></p>
                            </div>
                        </div>
                        <button class="btn-yellow-lg">READ MORE</button>
                    </div>


                </div>
                <button class="btn-yellow-lg text-warning mt-5" style="background: black!important;">GO TO BLOG</button>
            </div>
        </section> ------->
        <section class="sec8">
            <h1 class="text-center mt-4">100,000 Electricians by 2030</h1>
            <img src="{{env('APP_URL')}}public/veh/assets/img/electricians.png" alt="" class="imgcenter ">
            <div class="col-12 text-center">
                <div class="d-flex justify-content-center text-center">

                    <h1 class="col-9" style="font-size: 40px; font-weight: normal;">We are committed to EV infrastructure, workforce development, and a carbon-neutral future.</h1>

                    
                </div>
                <a href="{{env('APP_URL')}}veh/about_us"><button class="btn-yellow-lg my-5">ABOUT VEHYA</button></a>
            </div>
        </section>


         <!------- Footer Section Starts ------->

     @include('veh.includes.footer')

<!------- Footer Section End ------->

</div>

<!------- Main Container End ------->

@include('veh.includes.footer_assets')
</body>

</html>