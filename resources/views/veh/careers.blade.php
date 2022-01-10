<!DOCTYPE html>
<html lang="en">
@include('veh.includes.assets')
<body>

    <!------- Main Container Starts ------->

    <div class="main-container">

        <!------- Header section Starts ------->

        @include('veh.includes.header')


        <!------- Header section End ------->

           <section class="sec1 d-flex justify-content-center text-center bg-dark">
            <img src="{{env('APP_URL')}}public/veh/assets/img/HomePage.jpg" alt="GET A QUOTE" style="width:100%;height:auto;">
               <h1 class="mt-5">Calling All Engineers</h1>
        </section>
        <div class="text-center my-4">
                <h1 style="font-size: 32px; font-weight: normal;" ><p>We're looking for creative innovators, who share our passion for bots, AI, and technology</p><p>Makers whol love to build stuff with their own hands and challenge the status quo.</p></h1>
        </div>


        <!------- Hero Banner Section Start ------->

        <!--<section class="pricing-banner hero-banner-section base-bg">-->
        <!--    <div class="container-fluid">-->
        <!--        <div class="row justify-content-center align-items-center">-->
        <!--            <div class="col-lg-4 col-12">-->
                        <!------ Page Hero Title ------>
        <!--                <div class="page-hero-title text-white text-center">-->
        <!--                    <h1 class="russo-font text-uppercase">Careers with<br>Vehya</h1>-->
        <!--                    <p class="my-3">-->
        <!--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor-->
        <!--                        incididunt ut labore et dolore magna-->
        <!--                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut-->
        <!--                        aliquip ex ea.-->
        <!--                    </p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->

        <!------- Hero Banner Section End ------->



        <!------- About Us(Why Vehya) section Start ------->

        <section class="careers-section why-vehya">

            <div class="row justify-content-evenly gy-5">

                <div class="col-lg-5 col-12 mx-">

                    <div class="card mb-3 border-0 p-5">

                        <div class="card-header bg-transparent border-0">

                            <div class="why-img p-0">

                                <img src="{{env('APP_URL')}}public/veh/assets/img/web-logo-dark.svg"

                                    class="default-img img-cover position-relative" alt="About us Image">

                            </div>

                        </div>



                        <div class="card-body">

                            <h1 class="card-title russo-font text-warning">Apprentice Electrician</h1>



                            <ul class="list-unstyled why-points-list d-flex align-items-center py-3">

                                <li>

                                    <p>Posted <b>1 Month Ago</b></p>

                                </li>



                                <li class="mx-auto">

                                    <p>Location <b>MI</b></p>

                                </li>

                            </ul>



                            <p class="card-text text-uppercase">

                                <small class="text-muted">

                                    <?php echo $career[0]->career; ?>

                                </small>

                            </p>



                            <a href="#" class="btn bg-warning text-uppercase rounded-0 px-5 py-3">

                                <b>Learn more</b> <i class="fas fa-caret-right ms-3"></i>

                            </a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-5 col-12">

                    <div class="card mb-3 border-0 p-5">

                        <div class="card-header bg-transparent border-0">

                            <div class="why-img p-0">

                                <img src="{{env('APP_URL')}}public/veh/assets/img/web-logo-dark.svg"

                                    class="default-img img-cover position-relative" alt="About us Image">

                            </div>

                        </div>



                        <div class="card-body">

                            <h1 class="card-title russo-font text-warning">Apprentice Electrician</h1>



                            <ul class="list-unstyled why-points-list d-flex align-items-center py-3">

                                <li>

                                    <p>Posted <b>1 Month Ago</b></p>

                                </li>



                                <li class="mx-auto">

                                    <p>Location <b>MI</b></p>

                                </li>

                            </ul>



                            <p class="card-text text-uppercase">

                                <small class="text-muted">

                                    <?php echo $career[0]->career; ?>

                                </small>

                            </p>



                            <a href="#" class="btn bg-warning text-uppercase rounded-0 px-5 py-3">

                                <b>Learn more</b> <i class="fas fa-caret-right ms-3"></i>

                            </a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-5 col-12">

                    <div class="card mb-3 border-0 p-5">

                        <div class="card-header bg-transparent border-0">

                            <div class="why-img p-0">

                                <img src="{{env('APP_URL')}}public/veh/assets/img/web-logo-dark.svg"

                                    class="default-img img-cover position-relative" alt="About us Image">

                            </div>

                        </div>



                        <div class="card-body">

                            <h1 class="card-title russo-font text-warning">Apprentice Electrician</h1>



                            <ul class="list-unstyled why-points-list d-flex align-items-center py-3">

                                <li>

                                    <p>Posted <b>1 Month Ago</b></p>

                                </li>



                                <li class="mx-auto">

                                    <p>Location <b>MI</b></p>

                                </li>

                            </ul>



                            <p class="card-text text-uppercase">

                                <small class="text-muted">

                                    <?php echo $career[0]->career; ?>

                                </small>

                            </p>



                            <a href="#" class="btn bg-warning text-uppercase rounded-0 px-5 py-3">

                                <b>Learn more</b> <i class="fas fa-caret-right ms-3"></i>

                            </a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-5 col-12">

                    <div class="card mb-3 border-0 p-5">

                        <div class="card-header bg-transparent border-0">

                            <div class="why-img p-0">

                                <img src="{{env('APP_URL')}}public/veh/assets/img/web-logo-dark.svg"

                                    class="default-img img-cover position-relative" alt="About us Image">

                            </div>

                        </div>



                        <div class="card-body">

                            <h1 class="card-title russo-font text-warning">Apprentice Electrician</h1>



                            <ul class="list-unstyled why-points-list d-flex align-items-center py-3">

                                <li>

                                    <p>Posted <b>1 Month Ago</b></p>

                                </li>



                                <li class="mx-auto">

                                    <p>Location <b>MI</b></p>

                                </li>

                            </ul>



                            <p class="card-text text-uppercase">

                                <small class="text-muted">

                                    <?php echo $career[0]->career; ?>

                                </small>

                            </p>



                            <a href="#" class="btn bg-warning text-uppercase rounded-0 px-5 py-3">

                                <b>Learn more</b> <i class="fas fa-caret-right ms-3"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section>



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