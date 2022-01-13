<!DOCTYPE html>
<html lang="en">
    <!------- Vehya Project Starts ON Friday,10-Dec-2021 at 4.00PM ------->
    <link rel="stylesheet" href="{{env('APP_URL')}}public/veh/assets/css/accordion.css" type="text/css">
    <!--<link rel="stylesheet" href="{{env('APP_URL')}}public/veh/assets/css/style1.css" type="text/css">-->
@include('veh.includes.assets')
<body>
    <!------- Main Container Starts ------->
    <div class="main-container">
        <!------- Header section Starts ------->
        @include('veh.includes.header')
        <!------- Header section End ------->
        <h1 class="mt-5 text-center">Federal & State Electric Vehicle Tax Credits,<br> Incentives & Rebates</h1>

        <section class="sec1 d-flex justify-content-center text-center">
            <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/SaveBackground.png" alt="GET A QUOTE" style="width:100%;height:auto;">
        </section>
        <div class="text-center mx-2 my-4">
                <h1 style="font-size: 32px; font-weight: normal; width: 90%;margin: auto;" >In addition to broad-scale electric vehicle incentives, states and utilities provide incentive programs, rebates and tax credits specifically for purchasing and installing EV charging equipment across the country. Search what is available in your area below.</h1>
        </div>


    <!--<div style="position: relative;background: #242424;" class="price_sec1 d-flex flex-column text-center">-->
    <!--    <div class="mt-2">-->
    <!--        <h3 style="filter: invert(100%);" class="heading_russoone">Federal Electric Vehicle Tax Credits, Incentives-->
    <!--            & Rebates</h3>-->
    <!--        <h4 style="filter: invert(100%);" class="subheading_roboto"-->
    <!--            style="margin:auto;text-align: center; padding:1em">-->

    <!--            In addition to broad-scale electric vehicle incentives, states and utilities provide incentive programs,-->
    <!--            rebates and tax credits specifically for purchasing and installing EV Charging equiptment across the-->
    <!--            country. Search what is available in your area below. </h4>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- <div class="detailexample mt-5 p-md-5 p-xs-1 ">
        <div class="row col-12 d-flex justify-content-center">
            <div class="col-lg-5 col-sm-12 current-accordion-card" style=" padding-top: 2em; padding-left: 3em;">

                <div class="current-accordion-card-header">
                    <div class="mb-4 btn-yellow p-4 rounded">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                    </div>
                    <div class="header-text ">
                        <div class="header-title mb-3">
                            Charging Station Incentivies
                        </div>
                        <div class="header-desc mb-3">
                            Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                    </div>
                </div>
                <div class="current-accordion-card-body mt-1">
                    <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                        installation
                        costs (up to $1,000). You must purchase and install the EV Charger by December 31, 2021 as
                        well
                        as claim the credit on your federal tax return.</p>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 current-accordion-card" style=" padding-top: 2em; padding-left: 3em;">
                <div class="current-accordion-card-header">

                    <div class="mb-4 btn-yellow p-4 rounded">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                    </div>
                    <div class="header-text ">
                        <div class="mb-3 header-title">
                            Vehicle Tax Credits and Rebates
                        </div>
                        <div class="mb-3 header-desc my-1">
                            Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                    </div>
                </div>
                <div class="current-accordion-card-body ">
                    <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                        depends
                        on the car's battery capacity.</p>
                </div>
            </div>
        </div>
    </div> -->

    <section class=" container-fluid">
        <details>
            <summary>Federal Incentives</summary>

            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary class="pr-5">Alabama</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">electricity discounts</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">AELP Commercial Charging Rate</span>
                            </div>
                            <p>Alabama Power offers a Business Electric Vehicle Time-of-Use (BEVT) rate for electricity purchased to charge PEVs fleets.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Alaska</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500 - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">electricity discounts</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">AELP Commercial Charging Rate</span>
                            </div>
                            <p>Alabama Power offers a Business Electric Vehicle Time-of-Use (BEVT) rate for electricity purchased to charge PEVs fleets.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">
                                Charging Station Incentivies
                            </div>
                            <div class="header-desc">
                                Federal Tax Credit
                                <span>up to $1000</span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation
                            costs (up to $1,000). You must purchase and install the EV Charger by December 31, 2021 as
                            well
                            as claim the credit on your federal tax return.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">
                                Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                Federal Tax Credit
                                <span>$2500 - $7500</span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends
                            on the car's battery capacity.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">
                                Electricity Discounts
                            </div>
                            <div class="header-desc">
                                AELP Commercial Charging Rate
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <p>Alabama Power offers a Business Electric Vehicle Time-of-Use (BEVT) rate for electricity
                            purchased
                            to charge PEVs fleets.</p>
                    </div>
                </div> -->
            </div>
        </details>
        <details>
            <summary>Arizona</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Arkansas</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>California</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">electricity discounts</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">AELP Commercial Charging Rate</span>
                            </div>
                            <p>Alabama Power offers a Business Electric Vehicle Time-of-Use (BEVT) rate for electricity purchased to charge PEVs fleets.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">driving perks</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">D.C. Alternative Fuel Vehicle Title Tax Exemption</span>
                            </div>
                            <p>Electric Vehicles displaying a white "100% Clean Fuel" sticker may park free at the silver meters in Downtown Hermosa Beach. Some locations in Hermosa Beach feature free charging.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Colorado</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">electricity discounts</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">AELP Commercial Charging Rate</span>
                            </div>
                            <p>Alabama Power offers a Business Electric Vehicle Time-of-Use (BEVT) rate for electricity purchased to charge PEVs fleets.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Connecticut</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Delaware</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>District of Columbia</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Driving Perks</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">D.C. Alternative Fuel Vehicle Title Tax Exemption</span>
                            </div>
                            <p>EVs are exempt from the excise tax imposed on an original certificate of title.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Florida</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Georgia</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">electricity discounts</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">AELP Commercial Charging Rate</span>
                            </div>
                            <p>Alabama Power offers a Business Electric Vehicle Time-of-Use (BEVT) rate for electricity purchased to charge PEVs fleets.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Hawai</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">electricity discounts</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">AELP Commercial Charging Rate</span>
                            </div>
                            <p>Alabama Power offers a Business Electric Vehicle Time-of-Use (BEVT) rate for electricity purchased to charge PEVs fleets.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Idaho</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Illinois</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Indiana</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">electricity discounts</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">AELP Commercial Charging Rate</span>
                            </div>
                            <p>Alabama Power offers a Business Electric Vehicle Time-of-Use (BEVT) rate for electricity purchased to charge PEVs fleets.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">driving perks</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Indiana Electric Vehicle Registration Fee Reduction</span>
                            </div>
                            <p>The owner of a dedicated EV may register for a discounted registration fee.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Iowa</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Kansas</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Kentucky</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Louisiana</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Maine</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Maryland</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">electricity discounts</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">BGE PEV Charging Rate Incentive</span>
                            </div>
                            <p>Baltimore Gas and Electric Company (BGE) offers a time-of-use (TOU) rate for BGE residential customers who purchase or lease an EV.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Massachusetts</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">electricity discounts</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Utilities: Massachusetts EverSource - Residential up to $300</span>
                            </div>
                            <p>Customers who are planning to purchase a new EV charger are eligible to enroll after installing and activating the charger and will receive $300 for signing up with a 3-year commitment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Michigan</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Minnisota</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">electricity discounts</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">LREC PEV Charging Rate</span>
                            </div>
                            <p>Lake Region Electric Cooperative (LREC) members enrolled in the ChargeWise program receive a reduced rate for the electricity used to charge PEVs between specified off-peak hours.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Mississippi</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Missouri</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Montana</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Nebraska</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Nevada</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">electricity discounts</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">NV Energy Residential Charging Rate Reduction</span>
                            </div>
                            <p>NV Energy offers discounted electricity rates to residential customers who charge electric or plug-in hybrid electric vehicles during off-peak hours.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>New Hampshire</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">electricity discounts</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Utilities: New Hampshire Electric Co-op (NHEC) - Residential up to $300</span>
                            </div>
                            <p>New Hampshire Electric Co-op (NHEC) provides rebates of $300 to residential members who install Level 2 EV charging stations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>New Jersey</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>New Maxico</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>New York</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">electricity discounts</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">New York Con Edison Commercial Charging Rate</span>
                            </div>
                            <p>Con Edison offers businesses in New York City and Westchester County that has a publicly accessible DC fast charger, a rate reduction of 34-39%. Con Edison also offers residential customers a reduced price for electricity during designated off-peak hours.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>North Carolina</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>North Dakota</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Ohio</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Oklahoma</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Oregon</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </details>
        <details>
            <summary>Pennsylvania</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Rhode Island</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>South Carolina</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>South Dakota</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Tennessee</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Texas</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">electricity discounts</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Austin Energy Plug-In Electric Vehicle (PEV) Charging Rate Incentive</span>
                            </div>
                            <p>Austin Energy offers a pilot time-of-use charging rate to residential customers with PEVs and electric vehicle supply equipment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Utah</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">electricity discounts</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Utilities: Utah Rocky Mountain Power - Residential up to $200</span>
                            </div>
                            <p>Rocky Mountain Power offers residential customers with PEVs $200 to enroll in a time-of-use (TOU) rate pilot. Participants may choose between two rate plans. The TOU rate will apply to all household energy use.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Vermont</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ElectricityDiscount.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">electricity discounts</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">BED Residential Charging Rate</span>
                            </div>
                            <p>Burlington Electric Department (BED) offers a per kilowatt-hour discount for residential customers to charge PEVs during off-peak times. To qualify, customers must install a WiFi enabled EVSE.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Virginia</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Washington</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>West Virginia</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Wisconsin</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Wyoming</summary>
            <div class="content" style="display: block;">
                <div class="box-group">
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/ChageIncentive.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Charging Station Incentives</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit up to 1000$</span>
                            </div>
                            <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus installation costs (up to 1,000$). You must purchase and install the EV Charger by December 2021, 31 as well as claim the credit 
                            on your federal tax return.
                            </p>
                        </div>
                    </div>
                    <div class="box-detail">
                        <img src="{{env('APP_URL')}}public/veh/assets/img/savepage/VehicleTax.png" alt="Incentive">
                        <div class="description-box">
                            <div class="mb-5">
                                <p class="text-uppercase">Vehicle tax credits and rebates</p>
                                <span style="color: #F4CD1E; font-size:18px; line-height: 0;">Federal Tax Credit $2500$ - $7500</span>
                            </div>
                            <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount depends on the car's battery capacity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </details>
    </section>
    <section class="text-center bg-dark text-white">
        <p class="text-capitalize my-5" style="font-size: 40px;">stay updated with our newsletter</p>
        <p style="margin-bottom: 50px!important; font-size: 48px; width: 72%; line-height: 1em; margin: auto; font-weight: 300; color: #FFC107">Get alerts on upcoming EV products, installation information, and upcoming events sent directly to your inbox</p>
        <input type="text" place_holder="" style="margin-bottom: 50px!important; width: 72%; display: block; margin: auto; height: 40px;">
        <button class="btn-yellow-lg text-uppercase" >Subscribe</button>
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