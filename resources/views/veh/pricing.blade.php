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
            <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/PricingBackground.png" alt="Pricing Background" style="width:100%;height:auto;">
            <h1 class="mt-5" style="top: auto">At Vehya, we took the guesswork<br>out of getting an EV charger</h1>
        </section>
        <div class=" text-center my-4">
                <h1 style="font-size: 44px; font-weight: 300;" >Our pricing for EV chargers is transparent,<br> and so is the cost for installation.</h1>
           </div>

        <!------- Hero Banner Section Start ------->

        <!--<section class="pricing-banner hero-banner-section base-bg">-->
        <!--    <div class="container-fluid">-->
        <!--        <div class="row justify-content-center align-items-center">-->
        <!--            <div class="col-lg-4 col-12">-->
                        <!------ Page Hero Title ------>
        <!--                <div class="page-hero-title text-white text-center">-->
        <!--                    <h1 class="russo-font text-uppercase">Pricing</h1>-->
        <!--                    <p class="my-3">-->
        <!--                        At Vehya, we took the guesswork out of getting an EV charger. Our pricing for EV chargers is transparent, and so is the cost for installation.-->
        <!--                    </p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->

        <!------- Hero Banner Section End ------->



        <!------- How Can we Help Section As Equipment Pricing Section Starts ------->

        <section class="charger-group-container">
            <h1 class="text-center text-uppercase charger-lv-caption">level 2 ev chargers</h1>
            <div class="charger-group-box">
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
            </div>
        </section>

        <section class="charger-group-container">
            <h1 class="text-center text-uppercase charger-lv-caption">level 2+ / High Power ev chargers</h1>
            <div class="charger-group-box">
                <div class="charger-individual-box">
                    <div class="charger-sub-box">
                        <div class="charger-caption-image">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/3.png" alt="">
                        </div>
                        <div class="cap-price-container">
                            <p class="cap-title text-capitalize">Abb Terra AC Wallbox</p>
                            <div class="position-relative">
                                <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/11.png" alt="" style="width: 150px;height: 60px;">
                                <span class="price-label1 position-absolute">14,239.99$</span>
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
                    <div id="id-more-information11" class="more-info-box">
                        <div class="individual-info">
                            <span class="info-l">Max. Charge</span>
                            <span class="info-r">22.5kW</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Amperage</span>
                            <span class="info-r">80amp</span>
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
                            <span class="info-r">2 years</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Cabel Length</span>
                            <span class="info-r">24ft</span>
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
                    <div id="readMore11" class="show-more-less" onclick="showMoreOrLess(11)">SHOW MORE</div>
                </div>
                <div class="charger-individual-box">
                    <div class="charger-sub-box">
                        <div class="charger-caption-image">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/3.png" alt="">
                        </div>
                        <div class="cap-price-container">
                            <p class="cap-title text-capitalize">Blink IQ 200 Level 2</p>
                            <div class="position-relative">
                                <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/11.png" alt="" style="width: 150px;height: 60px;">
                                <span class="price-label1 position-absolute">3,499.99$</span>
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
                    <div id="id-more-information12" class="more-info-box">
                        <div class="individual-info">
                            <span class="info-l">Max Charge</span>
                            <span class="info-r">19.2kW</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Amperage</span>
                            <span class="info-r">100amp</span>
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
                    <div id="readMore12" class="show-more-less" onclick="showMoreOrLess(12)">SHOW MORE</div>
                </div>
                <div class="charger-individual-box">
                    <div class="charger-sub-box">
                        <div class="charger-caption-image">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/3.png" alt="">
                        </div>
                        <div class="cap-price-container">
                            <p class="cap-title text-capitalize">Enel X Juicebox Pro 80</p>
                            <div class="position-relative">
                                <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/11.png" alt="" style="width: 150px;height: 60px;">
                                <span class="price-label1 position-absolute">1,599.99$</span>
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
                    <div id="id-more-information13" class="more-info-box">
                        <div class="individual-info">
                            <span class="info-l">Max. Charge</span>
                            <span class="info-r">19.2kW</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Amperage</span>
                            <span class="info-r">80amp</span>
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
                    <div id="readMore13" class="show-more-less" onclick="showMoreOrLess(13)">SHOW MORE</div>
                </div>
            </div>
        </section>

        <section class="charger-group-container">
            <h1 class="text-center text-uppercase charger-lv-caption">level 3 / DCFC ev chargers</h1>
            <div class="charger-group-box">
                <div class="charger-individual-box">
                    <div class="charger-sub-box">
                        <div class="charger-caption-image">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/3.png" alt="">
                        </div>
                        <div class="cap-price-container">
                            <p class="cap-title text-capitalize">Abb Terra DC Wallbox</p>
                            <div class="position-relative">
                                <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/11.png" alt="" style="width: 150px;height: 60px;">
                                <span class="price-label1 position-absolute">19,308.00$</span>
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
                    <div id="id-more-information4" class="more-info-box">
                        <div class="individual-info">
                            <span class="info-l">Max. Charge</span>
                            <span class="info-r">24kW</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Amperage</span>
                            <span class="info-r">60amp</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Input Voltage</span>
                            <span class="info-r">480v</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Connectivity</span>
                            <span class="info-r">Cellular Modem</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Warranty</span>
                            <span class="info-r">2 years</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Cabel Length</span>
                            <span class="info-r">23ft</span>
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
                    <div id="readMore4" class="show-more-less" onclick="showMoreOrLess(4)">SHOW MORE</div>
                </div>
                <div class="charger-individual-box">
                    <div class="charger-sub-box">
                        <div class="charger-caption-image">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/3.png" alt="">
                        </div>
                        <div class="cap-price-container">
                            <p class="cap-title text-capitalize">ABB Terra DC 54</p>
                            <div class="position-relative">
                                <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/11.png" alt="" style="width: 150px;height: 60px;">
                                <span class="price-label1 position-absolute">37,640.00$</span>
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
                    <div id="id-more-information5" class="more-info-box">
                        <div class="individual-info">
                            <span class="info-l">Max Charge</span>
                            <span class="info-r">50kW</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Amperage</span>
                            <span class="info-r">125amp</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Input Voltage</span>
                            <span class="info-r">480v</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Connectivity</span>
                            <span class="info-r">Cellular/Ethernet</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Warranty</span>
                            <span class="info-r">2 years</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Cabel Length</span>
                            <span class="info-r">20ft</span>
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
                    <div id="readMore5" class="show-more-less" onclick="showMoreOrLess(5)">SHOW MORE</div>
                </div>
                <div class="charger-individual-box">
                    <div class="charger-sub-box">
                        <div class="charger-caption-image">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/3.png" alt="">
                        </div>
                        <div class="cap-price-container">
                            <p class="cap-title text-capitalize">Blink DCFC 50kW</p>
                            <div class="position-relative">
                                <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/11.png" alt="" style="width: 150px;height: 60px;">
                                <span class="price-label1 position-absolute">35,999.00$</span>
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
                    <div id="id-more-information6" class="more-info-box">
                        <div class="individual-info">
                            <span class="info-l">Max. Charge</span>
                            <span class="info-r">50kW</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Amperage</span>
                            <span class="info-r">120amp</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Input Voltage</span>
                            <span class="info-r">480v</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Connectivity</span>
                            <span class="info-r">Cellular/Ethernet</span>
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
                    <div id="readMore6" class="show-more-less" onclick="showMoreOrLess(6)">SHOW MORE</div>
                </div>
            </div>
            <div class="charger-group-box">
                <div class="charger-individual-box">
                    <div class="charger-sub-box">
                        <div class="charger-caption-image">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/3.png" alt="">
                        </div>
                        <div class="cap-price-container">
                            <p class="cap-title text-capitalize">Chargepoint 250 Express</p>
                            <div class="position-relative">
                                <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/11.png" alt="" style="width: 150px;height: 60px;">
                                <span class="price-label1 position-absolute">36,999.00$</span>
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
                    <div id="id-more-information7" class="more-info-box">
                        <div class="individual-info">
                            <span class="info-l">Max Charge</span>
                            <span class="info-r">62kW</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Amperage</span>
                            <span class="info-r">120amp</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Input Voltage</span>
                            <span class="info-r">480v</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Connectivity</span>
                            <span class="info-r">Cellular/Ethernet</span>
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
                    <div id="readMore7" class="show-more-less" onclick="showMoreOrLess(7)">SHOW MORE</div>
                </div>
                <div class="charger-individual-box">
                    <div class="charger-sub-box">
                        <div class="charger-caption-image">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/3.png" alt="">
                        </div>
                        <div class="cap-price-container">
                            <p class="cap-title text-capitalize">Enel X Juicepump 50</p>
                            <div class="position-relative">
                                <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/11.png" alt="" style="width: 150px;height: 60px;">
                                <span class="price-label1 position-absolute">29,999.00$</span>
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
                    <div id="id-more-information8" class="more-info-box">
                        <div class="individual-info">
                            <span class="info-l">Max Charge</span>
                            <span class="info-r">50kW</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Amperage</span>
                            <span class="info-r">120amp</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Input Voltage</span>
                            <span class="info-r">480v</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Connectivity</span>
                            <span class="info-r">Cellular/Ethernet</span>
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
                    <div id="readMore8" class="show-more-less" onclick="showMoreOrLess(8)">SHOW MORE</div>
                </div>
                <!-- hidden one -->
                <div class="charger-individual-box" style="visibility: hidden">
                    <div class="charger-sub-box">
                        <div class="charger-caption-image" style="display: none">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/3.png" alt="">
                        </div>
                        <div class="cap-price-container">
                            <p class="cap-title text-capitalize">Enel X Juicepump 50</p>
                            <div class="position-relative">
                                <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/11.png" alt="" style="width: 150px;height: 60px;">
                                <span class="price-label1 position-absolute">29,999.00$</span>
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
                    <div id="id-more-information9" class="more-info-box">
                        <div class="individual-info">
                            <span class="info-l">Max Charge</span>
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
                    <div id="readMore9" class="show-more-less" onclick="showMoreOrLess(9)">SHOW MORE</div>
                </div>
            </div>
        </section>

        <section class="charger-group-container">
            <h1 class="text-center text-uppercase charger-lv-caption">level 4 / High Power ev chargers</h1>
            <div class="charger-group-box">
                <div class="charger-individual-box">
                    <div class="charger-sub-box">
                        <div class="charger-caption-image">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/2.png" alt="">
                        </div>
                        <div class="cap-price-container">
                            <p class="cap-title text-capitalize">ABB Terra HP 175</p>
                            <div class="position-relative">
                                <img src="{{env('APP_URL')}}public/veh/assets/img/pricingpage/11.png" alt="" style="width: 160px;height: 64px;">
                                <span class="price-label2 position-absolute">143,130.00$</span>
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
                    <div id="id-more-information10" class="more-info-box">
                        <div class="individual-info">
                            <span class="info-l">Max Charge</span>
                            <span class="info-r">175kW</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Amperage</span>
                            <span class="info-r">300amp</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Input Voltage</span>
                            <span class="info-r">480v</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Connectivity</span>
                            <span class="info-r">Cellular/Ethernet</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Warranty</span>
                            <span class="info-r">2 years</span>
                        </div>
                        <div class="individual-info">
                            <span class="info-l">Cabel Length</span>
                            <span class="info-r">20ft</span>
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
                    <div id="readMore10" class="show-more-less" onclick="showMoreOrLess(10)">SHOW MORE</div>
                </div>
                <div class="charger-individual-box" style="visibility: hidden">
                    <div class="charger-sub-box">
                        <div class="charger-caption-image" style="display: none">
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
                            <span class="info-l">Max Charge</span>
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
                <div class="charger-individual-box" style="visibility: hidden">
                    <div class="charger-sub-box">
                        <div class="charger-caption-image" style="display: none">
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
                            <span class="info-l">Max Charge</span>
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
            </div>
        </section>

        
        <section class="other_service">
            <div class="service-container">
                <h1 class="heaing-txt mb-5" style="z-index:2">Other Services</h1>
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="pricing-box mb-5">
                            <div class="d-flex align-items-center">
                                <div class="pri-box-img">
                                    <img src="{{env('APP_URL')}}public/veh/assets/img/img1.png" alt="">
                                </div>						
                                <div class="pri-box-Txt">
                                    <h5 class="text-center">BLINK HOME
                                    LEVEL 2</h5>
                                    <div class="position-relative">
                                        <img src="{{env('APP_URL')}}public/veh/assets/img/price-bg-shape.png">
                                        <span class="position-absolute set-pos">$700</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-box">
                            <div class="d-flex align-items-center">
                                <div class="pri-box-img">
                                    <img src="{{env('APP_URL')}}public/veh/assets/img/img2.png" alt="">
                                </div>						
                                <div class="pri-box-Txt">
                                    <h5 class="text-center">Electrical Panel Upgrade</h5>
                                    <div class="position-relative">
                                        <img src="{{env('APP_URL')}}public/veh/assets/img/price-bg-shape.png">
                                        <span class="position-absolute set-pos">$2500</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/other_service.png" style="margin-top: -70px;z-index:1">
                    </div>
                    <div class="col-lg-5 text-center ">
                        <h2 class="heaing-txt" style="margin-bottom: 20px;">Installation</h2>
                        <button type="button" class="btn">GET A QUOTE</button>
                    </div>
                </div>
            </div>
        </section>  

        <!------- How Can we Help Section As Equipment Pricing Section End ------->



        <!------- Have a question Section Starts ------->

        <!-- <section class="have-question bg-warning">

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

        </section> -->

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

