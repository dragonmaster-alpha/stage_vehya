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




        <!------- Hero Banner Section Start ------->

        <section class="pricing-banner hero-banner-section base-bg">

            <div class="container-fluid">

                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-4 col-12">

                        <!------ Page Hero Title ------>

                        <div class="page-hero-title text-white text-center">

                            <h1 class="russo-font text-uppercase">Pricing</h1>

                            <p class="my-3">

                                At Vehya, we took the guesswork out of getting an EV charger. Our pricing for EV

                                chargers is

                                transparent, and so is the cost for installation.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!------- Hero Banner Section End ------->



        <!------- How Can we Help Section As Equipment Pricing Section Starts ------->

        <section class="pricing can-help">

            <!-- Equipment-Category 1 -->

            <div class="eq-cat cat-1 pt-0">

                <!------- Equipment Category Section Title ------->

                <div class="title mt-lg-5 text-center russo-font position-relative">

                    <h1 class="text-truncate-by-2">Level 2 ev chargers</h1>

                </div>



                <!----- Equipment Section Card ----->

                <div class="row gx-lg-5 gx-0 gy-5 justify-content-between align-items-center pt-2 pt-lg-5">
                    @foreach($pricelist as $list)
                    <div class="col-lg-4 col-12">
                       
                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL').'public/uploads/'}}image/{{$list['product_image']}}"

                                    class="card-img-top default-img img-cover" alt="Product">



                                <div class="img-overlay-rating">

                                    <h3 class="mb-1">4.0</h3>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                </div>



                                <div class="img-overlay-price">

                                    <p class="m-0">${{$list['price']}}</p>

                                </div>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">ChargePoint 250 Express</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Max. Charge</p>

                                        <h3 class="text-truncate mb-0">{{$list['max_charge']}}Kw</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Amperage</p>

                                        <h3 class="text-truncate mb-0">{{$list['amperage']}}A</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Input Voltage</p>

                                        <h3 class="text-truncate mb-0">{{$list['voltage']}}V</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Safety</p>

                                        <h3 class="text-truncate mb-0">{{$list['safety']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Warranty</p>

                                        <h3 class="text-truncate mb-0">{{$list['warranty']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Cable Length</p>

                                        <h3 class="text-truncate mb-0">{{$list['cable_length']}}+</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Connectivity</p>

                                        <h3 class="text-truncate mb-0">{{$list['connectivity']}}</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Efficiency</p>

                                        <h3 class="text-truncate mb-0">{{$list['efficiency']}}</h3>

                                    </li>

                                </ul>
                                

                            </div>

                        </div>
                       
                    </div>
                    @endforeach
                                
                </div>

            </div>
                                


            <!-- Equipment-Category 2 -->

            <div class="eq-cat cat-2 mt-5 pt-3">

                <!------- Equipment Category Section Title ------->

                <div class="title mt-lg-5 text-center russo-font position-relative">

                    <h1>Level 2+ / High Power EV Chargers</h1>

                </div>



                <!----- Equipment Section Card ----->

                <div class="row gx-lg-5 gx-0 gy-5 justify-content-between align-items-center pt-2 pt-lg-5">

                    @foreach($pricelist as $list)
                    <div class="col-lg-4 col-12">
                       
                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL').'public/uploads/'}}image/{{$list['product_image']}}"

                                    class="card-img-top default-img img-cover" alt="Product">



                                <div class="img-overlay-rating">

                                    <h3 class="mb-1">4.0</h3>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                </div>



                                <div class="img-overlay-price">

                                    <p class="m-0">${{$list['price']}}</p>

                                </div>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">ChargePoint 250 Express</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Max. Charge</p>

                                        <h3 class="text-truncate mb-0">{{$list['max_charge']}}Kw</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Amperage</p>

                                        <h3 class="text-truncate mb-0">{{$list['amperage']}}A</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Input Voltage</p>

                                        <h3 class="text-truncate mb-0">{{$list['voltage']}}V</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Safety</p>

                                        <h3 class="text-truncate mb-0">{{$list['safety']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Warranty</p>

                                        <h3 class="text-truncate mb-0">{{$list['warranty']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Cable Length</p>

                                        <h3 class="text-truncate mb-0">{{$list['cable_length']}}+</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Connectivity</p>

                                        <h3 class="text-truncate mb-0">{{$list['connectivity']}}</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Efficiency</p>

                                        <h3 class="text-truncate mb-0">{{$list['efficiency']}}</h3>

                                    </li>

                                </ul>

                            </div>

                        </div>
                       
                    </div>
                    @endforeach

                </div>

            </div>



            <!-- Equipment-Category 3 -->

            <div class="eq-cat cat-3 mt-5 pt-3">

                <!------- Equipment Category Section Title ------->

                <div class="title mt-lg-5 text-center russo-font position-relative">

                    <h1>Level 3 / DCFC EV Charger</h1>

                </div>



                <!----- Equipment Section Card ----->

                <div class="row gx-lg-5 gx-0 gy-5 align-items-center pt-2 pt-lg-5">

                   
                    <div class="col-lg-4 col-12">
                       
                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL').'public/uploads/'}}image/{{$list['product_image']}}"

                                    class="card-img-top default-img img-cover" alt="Product">



                                <div class="img-overlay-rating">

                                    <h3 class="mb-1">4.0</h3>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                </div>



                                <div class="img-overlay-price">

                                    <p class="m-0">${{$list['price']}}</p>

                                </div>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">ChargePoint 250 Express</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Max. Charge</p>

                                        <h3 class="text-truncate mb-0">{{$list['max_charge']}}Kw</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Amperage</p>

                                        <h3 class="text-truncate mb-0">{{$list['amperage']}}A</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Input Voltage</p>

                                        <h3 class="text-truncate mb-0">{{$list['voltage']}}V</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Safety</p>

                                        <h3 class="text-truncate mb-0">{{$list['safety']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Warranty</p>

                                        <h3 class="text-truncate mb-0">{{$list['warranty']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Cable Length</p>

                                        <h3 class="text-truncate mb-0">{{$list['cable_length']}}+</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Connectivity</p>

                                        <h3 class="text-truncate mb-0">{{$list['connectivity']}}</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Efficiency</p>

                                        <h3 class="text-truncate mb-0">{{$list['efficiency']}}</h3>

                                    </li>

                                </ul>

                            </div>

                        </div>
                       
                    </div>
                    <div class="col-lg-4 col-12">
                       
                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL').'public/uploads/'}}image/{{$list['product_image']}}"

                                    class="card-img-top default-img img-cover" alt="Product">



                                <div class="img-overlay-rating">

                                    <h3 class="mb-1">4.0</h3>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                </div>



                                <div class="img-overlay-price">

                                    <p class="m-0">${{$list['price']}}</p>

                                </div>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">ChargePoint 250 Express</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Max. Charge</p>

                                        <h3 class="text-truncate mb-0">{{$list['max_charge']}}Kw</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Amperage</p>

                                        <h3 class="text-truncate mb-0">{{$list['amperage']}}A</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Input Voltage</p>

                                        <h3 class="text-truncate mb-0">{{$list['voltage']}}V</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Safety</p>

                                        <h3 class="text-truncate mb-0">{{$list['safety']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Warranty</p>

                                        <h3 class="text-truncate mb-0">{{$list['warranty']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Cable Length</p>

                                        <h3 class="text-truncate mb-0">{{$list['cable_length']}}+</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Connectivity</p>

                                        <h3 class="text-truncate mb-0">{{$list['connectivity']}}</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Efficiency</p>

                                        <h3 class="text-truncate mb-0">{{$list['efficiency']}}</h3>

                                    </li>

                                </ul>

                            </div>

                        </div>
                       
                    </div>
                    <div class="col-lg-4 col-12">
                       
                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL').'public/uploads/'}}image/{{$list['product_image']}}"

                                    class="card-img-top default-img img-cover" alt="Product">



                                <div class="img-overlay-rating">

                                    <h3 class="mb-1">4.0</h3>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                </div>



                                <div class="img-overlay-price">

                                    <p class="m-0">${{$list['price']}}</p>

                                </div>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">ChargePoint 250 Express</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Max. Charge</p>

                                        <h3 class="text-truncate mb-0">{{$list['max_charge']}}Kw</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Amperage</p>

                                        <h3 class="text-truncate mb-0">{{$list['amperage']}}A</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Input Voltage</p>

                                        <h3 class="text-truncate mb-0">{{$list['voltage']}}V</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Safety</p>

                                        <h3 class="text-truncate mb-0">{{$list['safety']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Warranty</p>

                                        <h3 class="text-truncate mb-0">{{$list['warranty']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Cable Length</p>

                                        <h3 class="text-truncate mb-0">{{$list['cable_length']}}+</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Connectivity</p>

                                        <h3 class="text-truncate mb-0">{{$list['connectivity']}}</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Efficiency</p>

                                        <h3 class="text-truncate mb-0">{{$list['efficiency']}}</h3>

                                    </li>

                                </ul>

                            </div>

                        </div>
                       
                    </div>
                    <span id="dots"></span>
                    <span id="more" style="display: none;" class="row gx-lg-5 gx-0 gy-5 align-items-center pt-2 pt-lg-5">
                    <div class="col-lg-4 col-12">
                       
                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL').'public/uploads/'}}image/{{$list['product_image']}}"

                                    class="card-img-top default-img img-cover" alt="Product">



                                <div class="img-overlay-rating">

                                    <h3 class="mb-1">4.0</h3>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                </div>



                                <div class="img-overlay-price">

                                    <p class="m-0">${{$list['price']}}</p>

                                </div>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">ChargePoint 250 Express</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Max. Charge</p>

                                        <h3 class="text-truncate mb-0">{{$list['max_charge']}}Kw</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Amperage</p>

                                        <h3 class="text-truncate mb-0">{{$list['amperage']}}A</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Input Voltage</p>

                                        <h3 class="text-truncate mb-0">{{$list['voltage']}}V</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Safety</p>

                                        <h3 class="text-truncate mb-0">{{$list['safety']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Warranty</p>

                                        <h3 class="text-truncate mb-0">{{$list['warranty']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Cable Length</p>

                                        <h3 class="text-truncate mb-0">{{$list['cable_length']}}+</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Connectivity</p>

                                        <h3 class="text-truncate mb-0">{{$list['connectivity']}}</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Efficiency</p>

                                        <h3 class="text-truncate mb-0">{{$list['efficiency']}}</h3>

                                    </li>

                                </ul>

                            </div>

                        </div>
                       
                    </div>
                    <div class="col-lg-4 col-12">
                       
                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL').'public/uploads/'}}image/{{$list['product_image']}}"

                                    class="card-img-top default-img img-cover" alt="Product">



                                <div class="img-overlay-rating">

                                    <h3 class="mb-1">4.0</h3>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                </div>



                                <div class="img-overlay-price">

                                    <p class="m-0">${{$list['price']}}</p>

                                </div>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">ChargePoint 250 Express</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Max. Charge</p>

                                        <h3 class="text-truncate mb-0">{{$list['max_charge']}}Kw</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Amperage</p>

                                        <h3 class="text-truncate mb-0">{{$list['amperage']}}A</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Input Voltage</p>

                                        <h3 class="text-truncate mb-0">{{$list['voltage']}}V</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Safety</p>

                                        <h3 class="text-truncate mb-0">{{$list['safety']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Warranty</p>

                                        <h3 class="text-truncate mb-0">{{$list['warranty']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Cable Length</p>

                                        <h3 class="text-truncate mb-0">{{$list['cable_length']}}+</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Connectivity</p>

                                        <h3 class="text-truncate mb-0">{{$list['connectivity']}}</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Efficiency</p>

                                        <h3 class="text-truncate mb-0">{{$list['efficiency']}}</h3>

                                    </li>

                                </ul>

                            </div>

                        </div>
                       
                    </div>
                    <div class="col-lg-4 col-12">
                       
                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL').'public/uploads/'}}image/{{$list['product_image']}}"

                                    class="card-img-top default-img img-cover" alt="Product">



                                <div class="img-overlay-rating">

                                    <h3 class="mb-1">4.0</h3>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                </div>



                                <div class="img-overlay-price">

                                    <p class="m-0">${{$list['price']}}</p>

                                </div>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">ChargePoint 250 Express</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Max. Charge</p>

                                        <h3 class="text-truncate mb-0">{{$list['max_charge']}}Kw</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Amperage</p>

                                        <h3 class="text-truncate mb-0">{{$list['amperage']}}A</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Input Voltage</p>

                                        <h3 class="text-truncate mb-0">{{$list['voltage']}}V</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Safety</p>

                                        <h3 class="text-truncate mb-0">{{$list['safety']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Warranty</p>

                                        <h3 class="text-truncate mb-0">{{$list['warranty']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Cable Length</p>

                                        <h3 class="text-truncate mb-0">{{$list['cable_length']}}+</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Connectivity</p>

                                        <h3 class="text-truncate mb-0">{{$list['connectivity']}}</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Efficiency</p>

                                        <h3 class="text-truncate mb-0">{{$list['efficiency']}}</h3>

                                    </li>

                                </ul>

                            </div>

                        </div>
                       
                    </div>
                    </span>
                   
                </div>
     <div class=" text-center mt-5"><button class="btn-yellow-lg" onclick="myFunction()" id="myBtn">SEE MORE</button></div>
            </div>



            <!-- Equipment-Category 4 -->

            <div class="eq-cat cat-4 mt-5 pt-3">

                <!------- Equipment Category Section Title ------->

                <div class="title mt-lg-5 text-center russo-font position-relative">

                    <h1>Level 4 / High Power EV Chargers</h1>

                </div>



                <!----- Equipment Section Card ----->

                <div class="row gx-lg-5 gx-0 gy-5 justify-content-between align-items-center pt-2 pt-lg-5">

                    @foreach($pricelist as $list)
                    <div class="col-lg-4 col-12">
                       
                        <div class="card basic-card border-0">

                            <div class="basic-card-img position-relative">

                                <img src="{{env('APP_URL').'public/uploads/'}}image/{{$list['product_image']}}"

                                    class="card-img-top default-img img-cover" alt="Product">



                                <div class="img-overlay-rating">

                                    <h3 class="mb-1">4.0</h3>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                    <span><i class="fas fa-star text-warning"></i></span>

                                </div>



                                <div class="img-overlay-price">

                                    <p class="m-0">${{$list['price']}}</p>

                                </div>

                            </div>



                            <div class="card-body py-5 px-5">

                                <h3 class="card-title russo-font text-uppercase py-4">ChargePoint 250 Express</h3>



                                <ul class="card-dis-list row list-unstyled gy-5 gx-lg-5 gx-4">

                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Max. Charge</p>

                                        <h3 class="text-truncate mb-0">{{$list['max_charge']}}Kw</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Amperage</p>

                                        <h3 class="text-truncate mb-0">{{$list['amperage']}}A</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Input Voltage</p>

                                        <h3 class="text-truncate mb-0">{{$list['voltage']}}V</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Safety</p>

                                        <h3 class="text-truncate mb-0">{{$list['safety']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Warranty</p>

                                        <h3 class="text-truncate mb-0">{{$list['warranty']}}</h3>

                                    </li>



                                    <li class="col-4">

                                        <p class="text-muted text-truncate mb-0">Cable Length</p>

                                        <h3 class="text-truncate mb-0">{{$list['cable_length']}}+</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Connectivity</p>

                                        <h3 class="text-truncate mb-0">{{$list['connectivity']}}</h3>

                                    </li>



                                    <li class="col-6">

                                        <p class="text-muted text-truncate mb-0">Efficiency</p>

                                        <h3 class="text-truncate mb-0">{{$list['efficiency']}}</h3>

                                    </li>

                                </ul>

                            </div>

                        </div>
                       
                    </div>
                    @endforeach

                </div>

            </div>

        </section>

        <!------- How Can we Help Section As Equipment Pricing Section End ------->



        <!------- Have a question Section Starts ------->

        <section class="have-question bg-warning">

            <div class="row g-0">

                <div class="col-lg-6 col-12">

                    <div class="title mt-lg-5 pt-lg-3 p-3 russo-font position-relative w-75 mx-auto">

                        <h1>Have Questions &#63;</h1>



                        <div class="hav-que-watermark">

                            <p>Have a que</p>

                        </div>



                        <p class="roboto-font mt-lg-5 mt-3 mb-1">

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut

                            labore et dolore magna aliqua.

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
   
   
   
   <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "SEE MORE"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "SEE LESS"; 
    moreText.style.display = "flex";
  }
}
</script>
   
       @include('veh.includes.footer_assets')
   </body>
   
   
   
   
   
   <!-- Mirrored from iwebwiserprojects.xyz/Vehya_Project/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Dec 2021 06:30:54 GMT -->
   
   </html>

