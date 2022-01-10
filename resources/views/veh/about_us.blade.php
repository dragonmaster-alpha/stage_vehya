<!DOCTYPE html>

<html lang="en">



<!------- Vehya Project Starts ON Friday,10-Dec-2021 at 4.00PM ------->





<!-- Mirrored from iwebwiserprojects.xyz/Vehya_Project/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Dec 2021 06:22:14 GMT -->

@include('veh.includes.assets')



<body>

    <!------- Main Container Starts ------->

    <div class="main-container">

        <!------- Header section Starts ------->

        @include('veh.includes.header')


        <!------- Header section End ------->

         <section class="sec1 d-flex justify-content-center text-center bg-dark">
            <img src="{{env('APP_URL')}}public/veh/assets/img/HomePage.jpg" alt="GET A QUOTE" style="width:100%;height:auto;">
               <h1 class="mt-5">Carbon-Neutral Future</h1>
        </section>
        <div class="text-center my-4">
                <h1 style="font-size: 32px; font-weight: normal;" >Creating a carbon-neutral future is at the heart of Vehya's purposes. Here are just a few of the steps we're taking toward that future.</h1>
        </div>
        <!------- Hero Banner Section Start ------->

        <!--<section class="pricing-banner hero-banner-section base-bg">-->
        <!--    <div class="container-fluid">-->
        <!--        <div class="row justify-content-center align-items-center">-->
        <!--            <div class="col-lg-4 col-12">-->
                        <!------ Page Hero Title ------>
        <!--                <div class="page-hero-title text-white text-center">-->
        <!--                    <h1 class="russo-font text-uppercase">About Us</h1>-->
        <!--                    <p class="my-3">-->
        <!--                        Vehya is a group of professionals that include master electricians, EV experts,-->
        <!--                        automotive sales, and engineers.-->
        <!--                    </p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->

        <!------- Hero Banner Section End ------->



        <!------- About Us(Why Vehya) section Start ------->

        <section class="web-about why-vehya">
            <div class="card mb-3 border-0 bg-transparent">
                <div class="row align-items-center g-0 m-0">
                    <div class="col-lg-6 col-12">
                        <div class="why-img p-0 pt-5 pb-lg-5">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/why-img.svg" class="default-img img-cover position-relative" alt="About us Image">
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 ms-auto">
                        <div class="card-body">

                            <!--<p class="card-text text-uppercase">-->

                            <!--    <small class="text-muted fw-bold">About us</small>-->
                            <!--</p>-->

                            <h1 class="card-title russo-font">EV Infrastructure &#63;</h1>
                            <ul class="why-points-list list-unstyled">
                                <li>Infrastructure is key to mass electric vehicle adoption. With every charger installed, Vehya is making it easier to own an EV.</li>
                            </ul>

                            <a href="{{env('APP_URL')}}veh/get-quote" class="btn bg-warning text-uppercase rounded-0 px-5 py-3">
                                <b>Get a quote</b> <i class="fas fa-caret-right ms-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!------- About Us(Why Vehya) section End ------->



        <!------- Multipurpose uses Section Starts ------->

        <section class="multi-use">

            <!----- Multi use Section title ----->

            <div class="title mt-lg-5 mt-3 text-center russo-font position-relative">

                <h1>How it Works</h1>
                <div class="multiuse-watermark pb-5">
                    <p>How it Works</p>
                </div>
            </div>

            <!----- Multipurpose Lists ----->
            <div
                class="row gx-lg-5 gx-lg-0 g-3 gy-5 multi-use-list-container justify-content-lg-evenly justify-content-between">
                <div class="col-lg-3 col-6">
                    <ul class="list-unstyled">
                        <li class="bg-warning solution-icon">
                            <i class="fas fa-coins"></i>
                        </li>

                        <li>
                            <h1>Assessment</h1>
                        </li>

                        <li>
                            <p>A thorough evaluation your EV chargers needed, permits required, and any electrical upgrades necessary for a successful install</p>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-6">
                    <ul class="list-unstyled">
                        <li class="bg-warning solution-icon">
                            <i class="fas fa-headset"></i>
                        </li>
                        <li>
                            <h1>Installation</h1>
                        </li>
                        <li>
                            <p>We then schedule your install with an experienced and licensed electrician</p>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-6">
                    <ul class="list-unstyled">
                        <li class="bg-warning solution-icon">
                            <i class="fas fa-star"></i>
                        </li>

                        <li>
                            <h1>Service</h1>
                        </li>

                        <li>
                            <p>Continued technical support and service of your EV chargers for the long-term</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!------- Multipurpose uses Section End ------->



        <!------- About Us(Why Vehya) section Start ------->

        <section class="why-vehya">
            <div class="card mb-3 border-0 bg-transparent">
                <div class="row align-items-center g-0 m-0">
                    <div class="col-lg-6 col-12">
                        <div class="card-body">
                            <h1 class="card-title russo-font">Education</h1>
                            <ul class="why-points-list list-unstyled">
                                <li>Through the Vehya website, app, and with every install, we educate our customers and workforce on the advantages of a carbin-neutral future.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="why-img p-0 pt-5 pb-lg-5">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/why-img.svg" class="default-img img-cover position-relative" alt="About us Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!------- About Us(Why Vehya) section End ------->

         <section class="why-vehya">
            <div class="card mb-3 border-0 bg-transparent">
                <div class="row align-items-center g-0 m-0">
                    <div class="col-lg-6 col-12">
                        <div class="why-img p-0 pt-5 pb-lg-5">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/why-img.svg" class="default-img img-cover position-relative" alt="About us Image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="card-body">
                            <h1 class="card-title russo-font">EV fleet</h1>
                            <ul class="why-points-list list-unstyled">
                                <li>We plan to maintain 90% EVs across Vehya's fleet, with 100% EV adoption by no later than 2030.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!------- Have a question Section Starts ------->

        <section class="have-question bg-warning">
            <div class="row g-0">
                <div class="col-lg-6 col-12">
                    <div class="title mt-lg-5 p-lg-0 pt-lg-3 p-3  russo-font position-relative w-75 mx-auto">
                        <h1>Have Questions &#63;</h1>
                        <div class="hav-que-watermark">
                            <p>Have a que</p>
                        </div>

                        <p class="roboto-font mt-lg-5 mt-3 mb-1">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>

                        <div class="have-btn mt-lg-5 mt-4">
                            <a href="{{env('APP_URL')}}veh/get_quote" class="btn bg-dark text-white text-uppercase rounded-0 px-3 py-3">
                                <b>Get A Quote</b> <i class="fas fa-caret-right ms-3"></i>
                                <a href="tel:0987654321" class="btn bg-white text-uppercase rounded-0 px-3 py-3">
                                    <i class="fas fa-phone-volume"></i> <b>224 000 22 11 33</b>
                                </a>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="hav-que-img">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/have-question.svg" alt="Question Image" class="default-img img-cover">
                    </div>
                </div>
            </div>
        </section>

        <!------- Have a question Section End ------->



      <!------- Footer Section Starts ------->

      @include('veh.includes.footer')

      <!------- Footer Section End ------->

  </div>

  <!------- Main Container End ------->



  <!------- All Modals Coding Stats Here ------->



  <!----- Modal-1 ----->



  <!------- All Modals Coding Ends Here ------->





  @include('veh.includes.footer_assets')
</body>





<!-- Mirrored from iwebwiserprojects.xyz/Vehya_Project/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Dec 2021 06:30:54 GMT -->

</html>