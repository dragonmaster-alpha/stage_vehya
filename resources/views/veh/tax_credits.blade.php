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

    <section class="sec1 d-flex justify-content-center text-center bg-dark">
            <img src="{{env('APP_URL')}}public/veh/assets/img/HomePage.jpg" alt="GET A QUOTE" style="width:100%;height:auto;">
               <h1 class="mt-5">Federal & State Electric Vehicle Tax<br>Credits, Incentives & Rebates</h1>
        </section>
        <div class="text-center my-4">
                <h1 style="font-size: 32px; font-weight: normal;" >In addition to broad-scale electric vehicle incentives, states and utilities provide incentive programs, rebates and tax credits specifically for purchasing and installing EV charging equipment across the country. Search what is available in your area below.</h1>
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
    <div class="detailexample mt-5 p-md-5 p-xs-1 ">
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
    </div>
    
    <div class="title  mt-lg-5 text-center">
        
        <h2 class=" col-xl-5 col-lg-6 col-sm-12">State Electric Vehicle Tax Credits, Incentives & Rebates</h2>
    </div>
    <section class=" container-fluid">
        <details>
            <summary>Federal Incentives</summary>

            <div class="current-accordion-card">

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
        </details>
        <details>
            <summary class="pr-5">Alabama</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">
                                Charging Station Incentivies
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Alabama EVSE Grant</div>
                        <p>The Alabama Department of Transportation will administer the Electric Transportation
                            Infrastructure
                            Grant Program to distribute grants for EVSE across the state.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Alabama State Commercial EVSE Grant Program</div>
                        <p>The Electric Transportation Infrastructure Grant Program administered by the Alabama
                            Department of
                            Transportation distribute grants to eligible entities to expand EVSE infrastructure.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
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
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Alabama Power Commercial Charging Rate</div>
                        <p>Alabama Power offers a Business Electric Vehicle Time-of-Use (BEVT) rate for electricity
                            purchased
                            to charge PEVs fleets.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Alabama Power Residential Charging Rate</div>
                        <p>Alabama Power offers an optional rate rider for customers with a Plug-in electric vehicle
                            (PEV).
                            The rate rider allows customers to charge their electric vehicle at a discounted rate during
                            off-peak hours.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Alaska</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
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
                </div>
            </div>
        </details>
        <details>
            <summary>Arizona</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">
                                Charging Station Incentivies
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation
                            costs (up to $1,000). You must purchase and install the EV Charger by December 31, 2021 as
                            well
                            as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Arizona Salt River Project (SRP) - Commercial
                            <span>$1500 - $1500</span>
                        </div>
                        <p>Salt River Project (SRP) offers a Business EV charging rebate program for qualified
                            customers. Customers
                            can receive $1,500 for each networked EV charging port installed. Rebate funds are awarded
                            on
                            a first-come, first-served basis. Apply on or before July 31, 2021.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Arizona Tucson Electric Power (TEP) - Commercial
                            <span>$4500 - $24000</span>
                        </div>
                        <p>Tucson Electric Power (TEP) offers a discounted time-of-use (TOU) rate during off-peak
                            periods to
                            customers who own and operate a PEV. Commercial customers who install two to five EVSE ports
                            at their businesses will receive a rebate between $4,500 to $24,000 per port.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Arizona Tucson Electric Power (TEP) - Residential
                            <span>$250 - $500</span>
                        </div>
                        <p>Tucson Electric Power (TEP) residential customers can claim a rebate covering up to 75% of
                            EVSE installation
                            cost. The maximum rebate is $500 for a qualified two-way communicating EVSE or $250 for a
                            one-way,
                            non-communicating EV charger.</p>
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
            </div>
        </details>
        <details>
            <summary>Arkansas</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">
                                Charging Station Incentivies
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">EVSE Incentive- Entergy
                        </div>
                        <p>Qualified Entergy customers are eligible to receive incentives in varying amounts for the
                            purchase
                            of select on- and off-road electric vehicles and Level 2 EVSE. For more information,
                            including
                            eligible technologies, see the Entergy eTech website.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation
                            costs (up to $1,000). You must purchase and install the EV Charger by December 31, 2021 as
                            well
                            as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Arkansas Entergy E-tech - Commercial
                            <span>up to $250</span>
                        </div>
                        <p>Entergy Arkansas provides solutions for businesses of all sizes to increase their efficiency.
                        </p>
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
            </div>
        </details>
        <details>
            <summary>California</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">
                                Charging Station Incentivies
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">California City of Burbank (BWP) - Commercial (2021)
                            <span>$500 - $2000</span>
                        </div>
                        <p>Burbank Water and Power (BWP) provides rebates to commercial customers toward the purchase of
                            Level
                            2 EVSE. Commercial customers who purchase and install EVSE can receive up to $2,000 for each
                            charger and up to four rebates per year.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation
                            costs (up to $1,000). You must purchase and install the EV Charger by December 31, 2021 as
                            well
                            as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">LADWP EVSE Rebate
                            <span>up to $500</span>
                        </div>
                        <p>Residential customers who install wall-mounted chargers can receive up to $500. EVSE must be
                            installed
                            within the LADWP service area. Rebates are available on a first-come, first-served basis
                            through
                            June 30, 2021, or until funds are exhausted.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">LADWP Residential EVSE Rebate
                            <span>up to $500</span>
                        </div>
                        <p>Los Angeles Department of Water and Power (LADWP) residential customers who install Level 2
                            chargers
                            can receive up to $500. EVSE must be installed within the LADWP service area. Rebates are
                            available
                            on a first-come, first-served basis through June 30, 2021, or until funds are exhausted.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">PWP Residential EVSE Rebate
                            <span>up to $600</span>
                        </div>
                        <p>PWP provides rebates of $600 for residential customers toward the installation of a
                            WiFi-enabled
                            EVSE, or $200 toward the installation of a non-WiFi enabled EVSE. Additional terms and
                            conditions
                            apply.
                        </p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">SCP Residential EVSE Incentive
                            <span></span>
                        </div>
                        <p>Qualified Sonoma Clean Power (SCP) customers are eligible to receive a free Level 2 Charger
                            that
                            can be connected to Wifi and communicate with the SCP GridSavvy Community. Customers are
                            responsible
                            for shipping and installation costs.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">SJVAC District Commercial EVSE Incentive
                            <span></span>
                        </div>
                        <p>The SJVAC District is currently accepting applications for its Charge Up! Program. This
                            program provides
                            offers commercial rebates of up to $6,000 per Level 2 charger or $25,000 per DC fast charger
                            installed in the San Joaquin Valley.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: CALeVIP Inland Counties Incentive Project - Commercial
                            <span></span>
                        </div>
                        <p>The Inland Counties Incentive Project offers a base rebate of up to $3,500 per Level 2
                            Charger or
                            up to 75% of project costs.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: CALeVIP Northern California Incentive Project (Commercial)
                            <span>$6000 - $70000</span>
                        </div>
                        <p>The Northern California Incentive Project offers rebates of up to $7,500 per Level 2 Charger
                            and
                            up to $80,000 per DC Fast Charger. To qualify, you must be a site owner or their authorized
                            agent
                            and be a business, nonprofit, California Native American Tribe, or a public entity. Entities
                            in Disadvantaged Communities (DAC) are eligible to receive an additional $500 per Level 2
                            Charger
                            and up to $10,000 per DC Fast Charger.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: CALeVIP Sacramento County Incentive Project (Commercial)
                            <span>$6500 - $80000</span>
                        </div>
                        <p>The Sacramento County Incentive Project offers rebates of up to $5,000 per Level 2 Charger
                            and up
                            to $70,000 per DC Fast Charger. To qualify, you must be a site owner or their authorized
                            agent
                            and be a business, nonprofit, California Native American Tribe, or a public entity. Projects
                            in Disadvantaged Communities (DAC) are eligible to receive an additional $500 per Level 2
                            Charger
                            and up to $10,000 per DC Fast Charger.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: CALeVIP San Joaquin Valley Incentive Project
                            <span>$5000 - $80000</span>
                        </div>
                        <p>The San Joaquin Valley Incentive Project offers rebates of up to $3,500 per Level 2 Charger
                            and up
                            to $70,000 per DC Fast Charger. To qualify, you must be a site owner or their authorized
                            agent
                            and be a business, nonprofit, California Native American Tribe, or a public entity. Projects
                            in Disadvantaged Communities (DAC) are eligible to receive an additional $500 per Level 2
                            Charger
                            and up to $10,000 per DC Fast Charger.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: California BAAQMD Charge! Program - Commercial
                            <span></span>
                        </div>
                        <p>The Bay Area Air Quality Management District (BAAQMD) Charge! Program offers funding for
                            workplaces,
                            destinations, transit parking locations, and multi-unit dwelling facilities to purchase an
                            EV
                            charger.
                        </p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: California CALeVIP Central Coast Incentive Project -
                            Commercial
                            <span>$6500 - $80000</span>
                        </div>
                        <p>The Central Coast Incentive Project offers rebates of up to $6,500 per Level 2 Charger and up
                            to
                            $80,000 per DC Fast Charger. To qualify, you must be a site owner or their authorized agent
                            with
                            a Site Verification Form and be a business, nonprofit, California Native American Tribe or a
                            public or government entity. Entities based in Disadvantaged Communities (DAC) are eligible
                            to
                            receive an additional $500 per Level 2 Charger and up to $10,000 per DC Fast Charger.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: California CALeVIP San Diego County Incentive Project -
                            Commercial
                            <span>$6000 - $80000</span>
                        </div>
                        <p>The San Diego County Incentive Project offers incentives to help cover the cost of installing
                            new
                            EV chargers at commercial and multifamily properties, local governments and nonprofits in
                            San
                            Diego County.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: California CALeVIP Sonoma Coast Incentive Project -
                            Commercial
                            <span>$7500 - $80000</span>
                        </div>
                        <p>The Sonoma Coast Incentive Project offers rebates of up to $7,500 per Level 2 Charger and up
                            to $80,000
                            per DC Fast Charger. To qualify, you must be a site owner or their authorized agent and be a
                            business, nonprofit, California Native American Tribe, or a public entity. Projects in
                            Disadvantaged
                            Communities (DAC) and Low-Income Communities (LIC) are eligible to receive an additional
                            $500
                            per Level 2 Charger and multi-unit dwelling site are eligible to receive an additional
                            $1,000
                            per Level 2 Charger.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California Alameda Municipal Power (AMP) - Residential
                            <span>$800 - $800</span>
                        </div>
                        <p>Alameda Municipal Power (AMP) provides rebates of up to $800 to residential customers who
                            purchase
                            two Level 2 EV charger.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California Anaheim Public Utilities - Commercial
                            <span>$500 - $10000</span>
                        </div>
                        <p>Anaheim Public Utilities offers rebates of up to $500 for residential and commercial
                            customers.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California Anaheim Public Utilities - Residential
                            <span>$400 - $1000</span>
                        </div>
                        <p>Anaheim Public Utilities offers rebates of up to $400 for each Level 2 EV Charger, and up to
                            $1,000
                            per Networked Charger for qualified residential and commercial customers. In addition, up to
                            $2,000 is also available for service upgrades for eligible customers.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California Azusa Light &amp; Water (ALP) - Residential
                            <span>$150 - $150</span>
                        </div>
                        <p>Azusa Light &amp; Water offers an EV Charger Rebate Program where customers who own a Level 2
                            EV
                            Charger
                            are eligible for a rebate of $150.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California Glendale Water and Power (GWP) - Commercial
                            <span>$2000 - $4000</span>
                        </div>
                        <p>Glendale Water and Power (GWP) provides commercial customers who purchase and install EVSE up
                            to
                            $2,000 for each charger and up to four rebates.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California Glendale Water and Power (GWP) -
                            Residential
                            <span>up to $500</span>
                        </div>
                        <p>Glendale Water and Power (GWP) provides residential customers a rebate up to $500 to purchase
                            a Level
                            2 EVSE</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California LADWP - Commercial
                            <span>$75000 - $125000</span>
                        </div>
                        <p>Los Angeles Department of Water and Power (LADWP) commercial customers who install Level 2
                            chargers
                            can receive up to $75,000 per direct current fast charger, and up to $5,000 per Level 2
                            charger
                            if located in Disadvantaged Community, EVSE must be installed within the LADWP service area.
                        </p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California Liberty Utilities - Residential
                            <span>$1000 - $1500</span>
                        </div>
                        <p></p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California Liberty Utilities Small Business -
                            Commercial
                            <span>$2500 - $2500</span>
                        </div>
                        <p>Small Business (up to $2,500 to 250 customers for installations of smart L2 chargers) and
                            DCFC (up
                            to ½ of charger cost for up to nine sites with 4 chargers each, plus make-ready costs
                            covered
                            by the utility).</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California MCE Clean Energy - Commercial
                            <span>$3000 - $3500</span>
                        </div>
                        <p>MCE Clean Energy offers multi-unit dwelling (MUD) and and workplace customers an ability to
                            sign
                            up for PG&amp;E's two EV rate plans.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California PG&amp;E DCFC Program - Commercial
                            <span>up to $25000</span>
                        </div>
                        <p>Pacific Gas &amp; Electric's (PG&amp;E) EV Fast Charger Program offers incentives for
                            customers who
                            purchase
                            an approved DC fast EVSE charger. PG&amp;E will cover the cost to prepare the site for
                            installation,
                            and disadvantaged communities may receive a rebate for the purchase of the charger itself.
                        </p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California Pasadena Water &amp; Power (PWP) -
                            Commercial
                            <span>$1500 - $6000</span>
                        </div>
                        <p>PWP provides rebates of $3,000 per port for commercial, workplace, multi-unit dwelling (MUD),
                            and
                            fleet customers for the installation of networked Level 2 EVSE, or rebates of $1,500 per
                            port
                            for non-networked Level 2 EVSE.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California Pasadena Water and Power (PWP) -
                            Residential
                            <span>$250 - $1250</span>
                        </div>
                        <p>Customers can receive an additional $250 bonus rebate if they purchase or lease an EV from a
                            Pasadena
                            auto dealer.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California SCE - Charge Ready 1 - Commercial
                            <span></span>
                        </div>
                        <p>Southern California Edison's (SCE) Charge Ready Program offers rebates for Multi-Family
                            Properties
                            toward the purchase and installation of a minimum of ten Level 1 or Level 2 EVSE, or a
                            minimum
                            of five Level 1 or Level 2 EVSE in disadvantaged communities.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California SDGE - Commercial
                            <span>$15000 - $75000</span>
                        </div>
                        <p>San Diego Gas &amp; Electric's (SDG&amp;E) Power Your Drive for Fleets program offers
                            commercial
                            customers
                            incentives to install medium- and heavy-duty EVSE. SDGE also offers multi-unit dwellings and
                            workplaces support to purchase, install, and maintain EVSE equipment.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California SMUD - Commercial
                            <span>up to $1500</span>
                        </div>
                        <p>Sacramento Municipal Utility District (SMUD) offers rebates for commercial customers to
                            purchase
                            and install Level 2 EVSE and DC-fast chargers at their business. Eligible applicants may
                            receive
                            up to $1,500 per Level 2 EV Charger.</p>
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
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends
                            on the car's battery capacity.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: California CARB Clean Vehicle Rebate Project - Residential
                            <span>$1500 - $2500</span>
                        </div>
                        <p>The Clean Vehicle Rebate Project (CVRP) offers rebates for the purchase or lease of qualified
                            vehicles.
                            The California EV rebate offers up to $2,500 for light-duty plug-in hybrid and zero-emission
                            vehicles that the California Air Resources Board (ARB) has approved or certified.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Electricity Discounts
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">LADWP PEV Charging Rate
                            <span>up to $250</span>
                        </div>
                        <p>The Los Angeles Department of Water and Power (LADWP) offers a $0.025 per kilowatt-hour
                            discount
                            for electricity used to charge PEVs during off-peak times. Residential customers who install
                            a separate time-of-use meter panel will also receive a $250 credit.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">PG&amp;E Charging Rate
                            <span></span>
                        </div>
                        <p>Pacific Gas &amp; Electric (PG&amp;E) offers discounted Residential Time-of-Use rates for
                            electricity
                            used
                            for plug-in electric vehicle charging.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">SDG&amp;E Plug-In Electric Vehicle Rate Reduction
                            <span></span>
                        </div>
                        <p>San Diego Gas &amp; Electric (SDG&amp;E) provides discounted rate plans to residential
                            customers for
                            electricity
                            used to charge qualified electric vehicles.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California Bear Valley Electric - Residential
                            <span></span>
                        </div>
                        <p>Bear Valley Electric Service (BVES) customers enrolled in the Transportation Electrification
                            Pilot
                            Program offers customers three PEV time-of-use rate plans. The discounted TOU rate is for
                            super
                            off-peak hours.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California Burbank Water and Power (BWP) - Residential
                            <span>$500 - $500</span>
                        </div>
                        <p>Burbank Water and Power (BWP) offers a discounted rate to residential or multi-family
                            customers for
                            electricity used to charge PEVs. Customers must remain on the PEV time-of-use rate for a
                            minimum
                            of one year.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: California LADWP - Residential
                            <span>$500 - $750</span>
                        </div>
                        <p>Los Angeles Department of Water and Power (LADWP) offers discounted Residential Time-of-Use
                            rates
                            for EV owners and electricity used for plug-in electric vehicle charging.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Driving Perks
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Hermosa Beach Free Parking and Charging
                            <span></span>
                        </div>
                        <p>Electric Vehicles displaying a white "100% Clean Fuel" sticker may park free at the silver
                            meters
                            in Downtown Hermosa Beach. Some locations in Hermosa Beach feature free charging.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Santa Monica Free Parking and Charging
                            <span></span>
                        </div>
                        <p>Electric or clean air vehicles with white and green Clean Air Vehicle decals may park free of
                            charge
                            at City of Santa Monica on-street parking meters. Additionally, a number of EV Charging
                            stations
                            have been installed in Santa Monica.</p>
                    </div>
                </div>
            </div>
            </detaixls>
            <summary>Colorado</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation
                            costs (up to $1,000). You must purchase and install the EV Charger by December 31, 2021 as
                            well
                            as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Colorado Black Hills Energy - Commercial
                            <span>up to $500</span>
                        </div>
                        <p>As part of the Delaware Clean Transportation Incentive Program, the Delaware Department of
                            Natural
                            Resources and Environmental Control offers rebates of 75% of the cost of a commercial public
                            access, workplace, and fleet charging stations, and up to 90% of the cost of a charging
                            station
                            located in multi-family, commercial, government or nonprofit sites.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Colorado Black Hills Energy - Residential
                            <span>$500 - $500</span>
                        </div>
                        <p>Black Hills Energy offers residential customers purchasing and installing a Level 2 EVSE a
                            $500 rebate.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Colorado Empire Electric Association - Commercial
                            <span>$1500 - $3000</span>
                        </div>
                        <p>With data collection (smart charger): Level 2 - up to $3,000 ($1500 for ev charger, $1500 for
                            installation)</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Colorado Gunnison County Electric Association (GCEA) -
                            Residential
                            <span>up to $500</span>
                        </div>
                        <p>Gunnison County Electric Association (GCEA) provides rebates to residential customers toward
                            the
                            purchase of Level 2 EVSE. Eligible customers who purchase and install EVSE can receive a
                            rebate
                            of 70% of the cost of the EVSE, up to $500. To qualify, applicants must also sign up for a
                            time-of-use
                            rate.
                        </p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Colorado Poudre Valley REA - Residential
                            <span>$250 - $500</span>
                        </div>
                        <p>Level II charger for private use Rebate is 50% of the cost for equipment, or $250, whichever
                            is lesser.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Colorado San Isabel Electric Association (SIEA) -
                            Residential
                            <span>up to $500</span>
                        </div>
                        <p>San Isabel Electric Association (SIEA) offers residential customers purchasing and installing
                            a Level
                            2 EVSE a $500 rebate.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">Federal Tax Credit
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
                            <div class="header-title">Electricity Discounts
                            </div>
                            <div class="header-desc">Utilities: Colorado Xcel Energy - Residential
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <p>Xcel Energy offers two rate options to qualified residential customers for charging PEVs. The
                            Electric
                            Vehicle (EV) Rate and the Time-of-Day Plan are optional and require a separate meter.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Connecticut</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation
                            costs (up to $1,000). You must purchase and install the EV Charger by December 31, 2021 as
                            well
                            as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Groton Utilities EVSE Rebate
                            <span>up to $600</span>
                        </div>
                        <p>Groton utility customers may also be eligible for a $600 rebate for the installation of a
                            qualifying
                            Level 2 electric vehicle supply equipment (EVSE).</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">NPU Commercial EVSE Rebate
                            <span>up to $2000</span>
                        </div>
                        <p>Norwich Public Utilities offers commercial customers rebates up to $1,500 for level 2 charger
                            installed
                            on commercial or MUD properties and $2,000 for publically accessible level 2 chargers.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">NPU Residential EVSE Rebate
                            <span>up to $500</span>
                        </div>
                        <p>Norwich Public Utilities offers residential customers rebates up to $500 for the purchase and
                            installation
                            of qualified EVSE.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Norwich Public Utilities Residential PEV &amp; EVSE Rebates
                            <span>$500 - $2000</span>
                        </div>
                        <p>Norwich Public Utilities (NPU) offer eligible customers rebates up to $1,000 for the
                            purchasing or
                            leasing of new or used EV or PHEV cars. Additionally NPU offers eligible customers a rebate
                            of
                            $500-$2,000 for purchasing and installing Level 2 chargers.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Connecticut EverSource - Residential
                            <span>up to $300</span>
                        </div>
                        <p>EverSource's EV Home Charger Demand Response Program rewards customers who use less energy
                            during
                            periods of peak demand, when others are using more. Customers who already own an eligible EV
                            charger can earn $150 for joining the Program and then $50 at the end of the year and the
                            next
                            two years. Customers who are planning to purchase a new EV charger are eligible to enroll
                            after
                            installing and activating the charger and will receive $300 for signing up with a 3-year
                            commitment.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends
                            on the car's battery capacity.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Groton Utilities Residential PEV &amp; EVSE Rebates
                            <span>$600 - $2000</span>
                        </div>
                        <p>Groton Utilities offers their customers a limited number of $2,000 rebates for the purchase
                            of a
                            new PEV and $1,000 rebates for the lease of a new PEV. Additionally, a rebate of up to $600
                            is
                            available for qualified Level 2 chargers.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Delaware</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Delaware Commercial EVSE Rebate
                            <span></span>
                        </div>
                        <p>As part of the Delaware Clean Transportation Incentive Program, the Delaware Department of
                            Natural
                            Resources and Environmental Control offers rebates of 75% of the cost of a commercial public
                            access, workplace, and fleet charging stations, and up to 90% of the cost of a charging
                            station
                            located in multi-family, commercial, government or nonprofit sites.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation
                            costs (up to $1,000). You must purchase and install the EV Charger by December 31, 2021 as
                            well
                            as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Delaware Delmarva Power - Residential
                            <span></span>
                        </div>
                        <p>This program offers grants to reduce the cost of purchasing qualified clean energy equipment
                            for
                            your home or business.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends
                            on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>District of Columbia</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation
                            costs (up to $1,000). You must purchase and install the EV Charger by December 31, 2021 as
                            well
                            as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Washington D.C. AFV Infrastructure Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>A tax credit is also available for 50 percent of the equipment costs for the purchase and
                            installation
                            of alternative fuel infrastructure. The maximum credit is $1,000 per residential electric
                            car
                            charging station and $10,000 for each public fueling station.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
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
                            <div class="header-title">Driving Perks
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">D.C. Alternative Fuel Vehicle Title Tax Exemption
                            <span></span>
                        </div>
                        <p>EVs are exempt from the excise tax imposed on an original certificate of title.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Florida</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation
                            costs (up to $1,000). You must purchase and install the EV Charger by December 31, 2021 as
                            well
                            as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">KUA Residential EVSE Rebate
                            <span>up to $100</span>
                        </div>
                        <p>Kissimmee Utility Authority (KUA) provides rebates of $100 to residential customers for the
                            purchase
                            of a new EV and $100 for the purchase and installation of a home EVSE. The EV must be
                            registered
                            to the customer’s address and proof of purchase is required.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: Florida Kissimmee Utility Authority (KUA) - Residential
                            <span>$100 - $100</span>
                        </div>
                        <p>Kissimmee Utility Authority (KUA) offers rebates of $100 to residential customers purchasing
                            a new
                            EV and $100 for the purchase and installation of a home EVSE.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: Florida Sarasota County EVSE Rebate - Commercial
                            <span>$2000 - $4000</span>
                        </div>
                        <p>ChargeUP! Sarasota County offers rebates within Sarasota County for the installation of
                            qualified
                            Level 2 or DC fast charging EVSE. Businesses are eligible for a rebate up to $2,000 and
                            non-profits
                            or government organizations are eligible for a rebate up to $4,000.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends
                            on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Georgia</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
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
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
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
                            <div class="header-title">Electricity Discounts
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Georgia Power Co Plug-In Electric Vehicle Charging Rate Incentive
                            <span></span>
                        </div>
                        <p>Georgia Power offers a Plug-in Electric Vehicle time-of-use electricity rate for residential
                            customers.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Hawai</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Hawaii Energy - Commercial
                            <span>up to $35000</span>
                        </div>
                        <p>The Electric Vehicle Charging Station rebate program offered by the Hawaii Public Utilities
                            Commission and administered by Hawaii Energy, grants rebates to commercial and multifamily
                            dwelling customers for the installation of Level 2 Chargers and DC Fast Chargers.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Electricity Discounts
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Hawaiian Electric Co Inc Plug-In Electric Vehicle Charging Rate
                            Incentive
                            <span></span>
                        </div>
                        <p>Hawaiian Electric Company and its subsidiaries, Maui Electric Company and Hawaii Electric
                            Light Company, offer time-of-use rates for residential and commercial customers with PEVs
                            and electric vehicle supply equipment.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Idaho</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">IDEQ Commercial EVSE Incentives
                            <span>up to $7500</span>
                        </div>
                        <p>The Idaho Department of Environmental Quality (IDEQ) offers funding for entities to build
                            EVSE in strategic locations in Idaho.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Idaho Power - Commercial
                            <span>$7500 - $7500</span>
                        </div>
                        <p>Idaho Power commercial customers are eligible to apply for funding to install EVSEs and other
                            transportation technologies. Idaho Power grants up to $7,500 per Level 1 and 2 charger.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Illinois</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: Illinois IEPA EVSE Grants - Commercial
                            <span></span>
                        </div>
                        <p>The Illinois Environmental Protection Agency (IEPA) offers transportation electrification
                            grants for electric vehicle charging infrastructure and other projects.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Indiana</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Indiana Michigan Power Co. EVSE Rebate
                            <span>up to $2500</span>
                        </div>
                        <p>Indiana Michigan Power provides rebates of up to $2,500 to residential customers who purchase
                            or lease a new EV and install a Level 2 EVSE with a separate meter.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Electricity Discounts
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">IPL Commercial Charging Rates
                            <span></span>
                        </div>
                        <pindianapolis power="" &="" light="" (ipl)="" offers="" special="" pev="" charging="" rates,=""
                            including="" year-round="" time-of-use="" based="" options,="" for="" commercial="" and=""
                            fleet="" customers.="">
                            <p></p>
                        </pindianapolis>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">IPL Residential Charging Rates
                            <span></span>
                        </div>
                        <p>Indianapolis Power &amp; Light (IPL) offers special PEV charging rates, including year-round
                            time-of-use based options, for residential customers who own a licensed PEV.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Indiana Michigan Power Residential Charging Rate
                            <span></span>
                        </div>
                        <p>Indiana Michigan Power offers special time-of-use (TOU) rate to residential customers with
                            PEVs. Off-peak hours are between 9pm and 7am on weekday and all day Saturday and Sunday.
                            Customers may need to install a metering system that track PEV charging to qualify for TOU
                            rate.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Driving Perks
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Indiana Electric Vehicle Registration Fee Reduction
                            <span></span>
                        </div>
                        <p>The owner of a dedicated EV may register for a discounted registration fee.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Iowa</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Kansas</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Kansas Commercial EVSE Tax Credit
                            <span></span>
                        </div>
                        <p>The Kansas Department of Revenue Tax Credit gives corporations 40% of the total EV Charger
                            installation cost. This tax credit is only available to those with corporate income tax
                            liability.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Kentucky</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="header-icon">
                            <i class="fas fa-charging-station"></i>
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="header-icon">
                            <i class="fas fa-charging-station"></i>
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Louisiana</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">SWEPCO Residential EVSE Rebate
                            <span>$250 - $1000</span>
                        </div>
                        <p>Southwestern Electric Power Company (SWEPCO) offers residential customers a rebate of up to
                            $250 for the installation of a ENERGY STAR certified level 2 EVSE.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Maine</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Maryland</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">BGE EVSE Rebate
                            <span>up to $300</span>
                        </div>
                        <p>Baltimore Gas and Electric (BGE) provides rebates to residential and multifamily customers
                            toward the purchase of qualified Level 2 and direct current (DC) fast charging EVSE. BGE
                            offers residential customers a $300 rebate for a Level 2 smart EVSE.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Maryland BGE MUD - Commercial
                            <span>up to $25000</span>
                        </div>
                        <p>Baltimore Gas and Electric (BGE) provides rebates to commercial customers who operate a
                            multifamily property for purchasing of qualified Level 2 and direct current (DC) fast
                            charging EVSE. Multifamily property owners are eligible for a rebate of up to $25,000.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Maryland Delmarva Power - Residential
                            <span>up to $300</span>
                        </div>
                        <p>Delmarva Power provides rebates to residential customers toward the purchase of qualified
                            Level 2 EVSE. Delmarva Power offers residential customers a $300 rebate for a Level 2 smart
                            EVSE.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Maryland Energy Administration (MEA) - Residential
                            <span>up to $700</span>
                        </div>
                        <p>The Maryland Energy Administration (MEA) offers an EVSE rebate program for individuals
                            purchasing and installing qualified EVSE. Rebates are available for up to $700, or up to 40%
                            of the costs of acquiring and installing qualified EVSE.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Maryland Potomac Edison - Commercial
                            <span>up to $20000</span>
                        </div>
                        <p>Potomac Edison offers an EV Driven Program that provides rebates to multifamily customers
                            towards the purchase and installation of a Level 2 charger or a DC Fast Charger. Multi
                            Family homes customers can receive up to $20,000 in rebates. To qualify, the EV Charging
                            station must be from a qualified program vendor, and you must agree to allow Potomac Edison
                            to have access to your EV charging data and periodically share the rate EV drivers pay to
                            charge.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Electricity Discounts
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">BGE PEV Charging Rate Incentive
                            <span></span>
                        </div>
                        <p>Baltimore Gas and Electric Company (BGE) offers a time-of-use (TOU) rate for BGE residential
                            customers who purchase or lease an EV.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Pepco PEV Charging Rate Incentive
                            <span></span>
                        </div>
                        <p>Pepco offers a time-of-use rate to all qualified Pepco residential customers in Maryland who
                            own or lease an EV.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Maryland Baltimore Gas and Electric (BGE) -
                            Residential
                            <span>$300 - $3000</span>
                        </div>
                        <p>Baltimore Gas and Electric (BGE) provides rebates to residential customers toward the
                            purchase of qualified Level 2 and direct current (DC) fast charging EVSE. BGE offers
                            residential customers a $300 rebate for a Level 2 smart EVSE.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Massachusetts</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">BELD Residential EVSE Incentive
                            <span>up to $250</span>
                        </div>
                        <p>Braintree Electric Light Department (BELD) offers residential customers a discount of $250
                            for the purchase of a qualified Level 2 EVSE. To qualify, customers must enroll in the Smart
                            Charging Program.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: Massachusetts MassEVIP DEP Workplace Rebate - Commercial
                            <span>up to $50000</span>
                        </div>
                        <p>The Massachusetts Electric Vehicle Incentive Program (MassEVIP) provides grants for
                            workplaces and multi-unit dwellings. For non-residential sites installing Level 2 EVSE that
                            is accessible to the public for at least 12 hours a day, MassEVIP can provide up to $6,250
                            per port, and a maximum of $50,000 for hardware and software costs per site. For workplaces
                            of at least 15 employees on-site and multi-dwelling with at least 10 residential units,
                            MassEVIP provide funding of up to 60% for EVSE purchasing.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Massachusetts Eversource - Make Ready EV - Commercial
                            <span></span>
                        </div>
                        <p>EverSource's EV Charging Station Make Ready Program connects commercial customers installing
                            EV Charging stations with qualified contractors, who will install EV charging stations at no
                            cost</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Massachusetts National Grid - Commercial
                            <span></span>
                        </div>
                        <p>National Grid's Electric Vehicle Charging Station Program offers non-residential customers
                            with approved projects 100% cost coverage and assistance in installing an EVSE.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Massachusetts Reading Municipal Light Department
                            (RMLD) - Residential
                            <span>up to $750</span>
                        </div>
                        <p>Reading Municipal Light Department (RMLD) offers residential customers a rebate of up to $750
                            towards the purchase of a home EV charging station.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Electricity Discounts
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Massachusetts Braintree (BELD) - Residential
                            <span>up to $250</span>
                        </div>
                        <p>Braintree Electric Light Department (BELD) and Sagewell Inc. offers Braintree Residents up to
                            175 miles of free EV driving each month per vehicle. To qualify, drivers will need to enroll
                            in their EV rewards program, charge at either a Level 1 or Level 2 charger, and only charge
                            from 9pm to 12pm (next day) on weekdays and anytime during the weekend.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Massachusetts EverSource - Residential
                            <span>up to $300</span>
                        </div>
                        <p>EverSource's EV Home Charger Demand Response Program rewards customers who use less energy
                            during periods of peak demand, when others are using more. Customers who already own an
                            eligible EV charger can earn $150 for joining the Program and then $50 at the end of the
                            year and the next two years. Customers who are planning to purchase a new EV charger are
                            eligible to enroll after installing and activating the charger and will receive $300 for
                            signing up with a 3-year commitment.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Michigan</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: Michigan Charge Up Program - Commercial
                            <span>up to $70000</span>
                        </div>
                        <p>The Michigan Department of Environment, Great Lakes, and Energy is offering funding for
                            public and private organizations enrolled in a utility EV program. The funding can support
                            the purchase, installation, site preparation, networking fees and signage for DC Fast
                            Charging projects. Grants will cover up to 33.3% of the total project cost, or up to
                            $70,000.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Consumers Energy - PowerMIDrive Program - Commercial
                            <span>up to $70000</span>
                        </div>
                        <p>Consumers Energy provides rebates for L2 and DCFC stations. Residents can receive a $500
                            rebate for L2 chargers. Public access locations can receive up to $5,000 on Level 2 and up
                            to $70,000 for DC fast charging stations.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Michigan Consumers Energy - Residential
                            <span>up to $500</span>
                        </div>
                        <p>Through the Consumers Energy PowerMIDrive program, residential customers are eligible for a
                            rebate of $500 on the purchase of a qualified level 2 smart charging station.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Michigan Consumers Energy - Residential
                            <span>$500 - $70000</span>
                        </div>
                        <p>Consumers Energy PowerMIDrive Program provides residential customers a $500 rebate to install
                            a Level 2 or DC fast charger. The PowerMIDrive Program also offers commercial customers up
                            to $70,000 per DC fast EVSE installed and up to $5,000 per Level 2 charger.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Michigan DTE Energy - Residential
                            <span>up to $500</span>
                        </div>
                        <pdte offers="" a="" $500="" rebate="" for="" the="" installation="" of="" level="" 2="" evse=""
                            qualified="" residential="" customers="" that="" purchase="" or="" lease="" plug-in=""
                            electric="" vehicle="" (pev)="" and="" enroll="" in="" pev="" charging="" rates.="">
                            <p></p>
                        </pdte>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Michigan DTE Energy Charging Forward EV - Commercial
                            <span>$2500 - $55000</span>
                        </div>
                        <p>Level 2 stations receive $2,500 per port</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Minnisota</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <pthe u.s.="" federal="" tax="" credit="" gives="" individuals="" 30%="" off="" a="" ev=""
                            charger="" home="" charging="" station="" plus="" installation="" costs="" (up="" to=""
                            $1,000).="" you="" must="" purchase="" and="" install="" the="" by="" december="" 31,=""
                            2021="" as="" well="" claim="" on="" your="" return.="">
                            <p></p>
                        </pthe>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">LREC EVSE Rebate
                            <span>up to $500</span>
                        </div>
                        <p>Lake Region Electric Cooperative (LREC) offers a rebate of up to $500 for the installation of
                            Level 1 or Level 2 electric vehicle supply equipment (EVSE).</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Minnesota Connexus Energy - Commercial
                            <span>$500 - $2000</span>
                        </div>
                        <p>For commercial customers, Connexus Energy offers a rebate of up to $2,000 for the purchase
                            and installation of a Level 2 EVSE.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Minnesota Connexus Energy - Residential
                            <span>$500 - $800</span>
                        </div>
                        <p>Connexus Energy offers a $500 rebate to residential customers toward the installation of a
                            qualified Level 2 EVSE. Residential customers are also eligible to receive a $800 rebate
                            when purchasing an EVSE. EVSE must be controlled on an off-peak rate and must be installed
                            within their respective service area.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Minnesota Lake Region Electric (LREC) - Residential
                            <span>$500 - $500</span>
                        </div>
                        <p>Lake Region Electric Cooperative (LREC) offers a rebate of up to $500 for the installation of
                            Level 1 or Level 2 electric vehicle supply equipment (EVSE).</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Minnesota Otter Tail Power Company - Residential
                            <span>$400 - $5000</span>
                        </div>
                        <p>Otter Tail Power Company offers a $400 rebate for residential customers installing a Level 2
                            EVSE.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Minnesota Runestone Electric Association - Residential
                            <span>up to $500</span>
                        </div>
                        <p>Runestone Electric Association offers residential customers rebate of up to $500 for
                            installing a Level 2 EVSE.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Minnesota Xcel Energy - Residential
                            <span></span>
                        </div>
                        <p></p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Xcel CO Light Duty and Bus Fleets Rebate- Commercial
                            <span></span>
                        </div>
                        <p>The Fleet EV Service Pilot will be available to non-residential customers who operate fleets
                            that include light-, medium-, and heavy-duty EVs.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Electricity Discounts
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Connexus Energy Plug-In Electric Vehicle (PEV) Charging Rate
                            Incentive
                            <span></span>
                        </div>
                        <p>Connexus Energy offers reduced electric rates to residential customers in their service
                            territory who charge PEVs.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">LREC PEV Charging Rate
                            <span></span>
                        </div>
                        <p>Lake Region Electric Cooperative (LREC) members enrolled in the ChargeWise program receive a
                            reduced rate for the electricity used to charge PEVs between specified off-peak hours.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Minnesota Dakota Electric - Residential
                            <span></span>
                        </div>
                        <p>Dakota Electric offers a discounted rate for electricity used to charge electric vehicles
                            during off-peak times.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Mississippi</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Entergy Commercial EVSE Incentive
                            <span>$250 - $250</span>
                        </div>
                        <p>Entergy offers qualified customers a cash incentive of $250 to purchase a Level 2 EV charger.
                        </p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Missouri</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Missouri Ameren - Commercial
                            <span>$5000 - $50000</span>
                        </div>
                        <p>Open to most Ameren Missouri business customers. Total incentive allowed for affiliated
                            businesses is $500,000. Incentive of $5,000 per Level 2 port (40amp max) and incentive of
                            $20,000 per DCFC port (50kW nominal max). Maximum incentive is up to 50% of total project
                            cost.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Montana</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Nebraska</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">NEO Commercial EVSE Loan Program
                            <span></span>
                        </div>
                        <p>The Nebraska Energy Office administers the Dollar and Energy Saving Loan Program, which makes
                            low-cost loans for AFV and Fueling infrastructure project, including EVSE purchases and
                            installation.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">NPPD Residential EVSE Rebate
                            <span>up to $500</span>
                        </div>
                        <p>Nebraska Public Power District (NPPD) offers residential customers a rebate of $4,000 for
                            purchasing a new EV and a $500 rebate for installing eligible Level 2 EVSE.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Omaha Public Power District EVSE Rebate
                            <span>up to $500</span>
                        </div>
                        <p>Omaha Public Power District (OPPD) offers residential customers rebates of $500 toward the
                            purchase of qualified Level 2 EVSE. Participants must purchase the EVSE through OPPD.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Nevada</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Nevada NV Energy Fleets - Commercial
                            <span></span>
                        </div>
                        <p>What is good for employees is good for businesses, and electric vehicle workplace charging
                            stations can help attract and retain an educated, dynamic workforce. Other benefits of
                            workplace charging include: Supporting corporate sustainability efforts Providing corporate
                            media recognition Securing LEED points Helping improve local air quality</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Nevada NV Energy MUD - Commercial
                            <span></span>
                        </div>
                        <p>NV Energy offers rebates to eligible business customers for purchasing and installing a Level
                            2 Charger or DC Fast Charger. For workplaces, multi-unit dwellings (MUD), low-income MUD,
                            fleets and public charging sites, up to 75% of project cost may be covered. For government
                            agencies, up to 100% of costs may be covered.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Nevada NV Energy MUD - Commercial
                            <span></span>
                        </div>
                        <p>NV Energy offers rebates to eligible business customers for purchasing and installing a Level
                            2 Charger or DC Fast Charger. For workplaces, multi-unit dwellings (MUD), low-income MUD,
                            fleets and public charging sites, up to 75% of project cost may be covered. For government
                            agencies, up to 100% of costs may be covered.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Electricity Discounts
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">NV Energy Residential Charging Rate Reduction
                            <span></span>
                        </div>
                        <p>NV Energy offers discounted electricity rates to residential customers who charge electric or
                            plug-in hybrid electric vehicles during off-peak hours.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>New Hampshire</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">NHEC EVSE Rebate
                            <span>up to $299</span>
                        </div>
                        <p>NHEC offers rebates for residential customers to install EVSE. Customers may receive a rebate
                            of up to $300 to install EVSE and a separate electric meter.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: New Hampshire NHEC - Commercial
                            <span>up to $5000</span>
                        </div>
                        <p>New Hampshire Electric Co-op (NHEC) provides commercial customers a rebate of up to $5000 to
                            install and purchase EVSEs on each site.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Electricity Discounts
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: New Hampshire Electric Co-op (NHEC) - Residential
                            <span>up to $300</span>
                        </div>
                        <p>New Hampshire Electric Co-op (NHEC) provides rebates of $300 to residential members who
                            install Level 2 EV charging stations.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>New Jersey</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">NJBPU Commercial EVSE Grants
                            <span>up to $1500</span>
                        </div>
                        <p>The New Jersey Board of Public Utilities (NJBPU) offers county and municipal government
                            entities up to $1,500 for purchasing a Level 2 charger.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">New Jersey EVSE Grants
                            <span>$250 - $5000</span>
                        </div>
                        <p>The New Jersey Department of Environmental Protection provides grants for the cost and
                            installation of eligible EVSE at workplaces, government and educational facilities,
                            non-profits, and parking facilities.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: New Jersey Pay$ to Plug In Program - Commercial
                            <span>$750 - $200000</span>
                        </div>
                        <p>The New Jersey Department of Environmental Protection (NJDEP) provide grants through the It
                            Pay$ to Plug In Program for the cost and installation of eligible EVSE at workplaces,
                            government and educational facilities, non-profits, and parking facilities.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">New Jersey Zero Emissions Vehicle (ZEV) Tax Exemption
                            <span>up to $525</span>
                        </div>
                        <p>ZEVs sold, rented, or leased in New Jersey are exempt from state sales and use tax.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>New Maxico</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: New Mexico NMED EVSE Rebate - Commercial
                            <span>up to $20000</span>
                        </div>
                        <p>The New Mexico Environment Department (NMED) offers funding for eligible projects mitigating
                            nitrogen oxide emissions. NMED offers up to $20,000 per dual-port Level 2 EVSE, and can
                            cover up to 70% of installation costs.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>New York</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">New York National Grid Commercial EVSE Program
                            <span></span>
                        </div>
                        <p>National Grid's Electric Vehicle Charging Station Make-Ready Program offers non-residential
                            customers funding up to 100% to purchase and install EVSE. National Grid also offers a DCFC
                            Per Plug Incentive Program, where customers with eligible plugs can earn up to $7,500
                            annually.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">PSEG Long Island $500 Smart Charger Rebate
                            <span>up to $500</span>
                        </div>
                        <p>With electric vehicles, it’s all about the charge. Now when you purchase and activate a Level
                            2 smart charger at home, you may be eligible for a $500 rebate from PSEG Long Island.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">SDGE Commercial EVSE Incentive
                            <span>$500 - $500</span>
                        </div>
                        <p>Public Service Enterprise Group (PSEG) offers residential customers purchasing and installing
                            a Level 2 Charger a rebate of $500 per charger. PSEG also offers customers who own DCFC
                            equipment up to $7000 annually.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: New York NYSERDA EVSE Rebate - Commercial
                            <span>up to $4500</span>
                        </div>
                        <p>The New York State Energy Research and Development Authority's (NYSERDA) Charge Ready NY
                            program offers rebate of $4000 for public and private entities toward the purchase and
                            installation of each Level 2 EVSE at public parking facilities, workplaces, and multi-unit
                            dwellings.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Electricity Discounts
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">New York Con Edison Commercial Charging Rate
                            <span></span>
                        </div>
                        <p>Con Edison offers businesses in New York City and Westchester County that has a publicly
                            accessible DC fast charger, a rate reduction of 34-39%. Con Edison also offers residential
                            customers a reduced price for electricity during designated off-peak hours.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>North Carolina</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">CHEC PEV Charging Rate
                            <span></span>
                        </div>
                        <p>Cape Hatteras Electric Co-Op (CHEC) offers time-of-use (TOU) electricity rates to residential
                            customers with a PEV.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: North Carolina Randolph Electric (EMC) - Residential
                            <span>up to $500</span>
                        </div>
                        <p>Randolph Electric Membership Corporation (EMC) is offering one $500 rebate incentive for
                            Level 2 charging stations to each member who participates in the REVUP Pilot program. The
                            offer is limited to the first 50 REMC residential members to sign up.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>North Dakota</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Ohio</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">AEP Ohio EVSE Incentive
                            <span></span>
                        </div>
                        <p>Incentives in varying amounts are available to all non-residential customers that have a
                            valid AEP Ohio account. EVSE must be installed at a workplace, government facility,
                            multi-unit dwelling, or other publicly available charging location served by AEP Ohio.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Oklahoma</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">PSO Oklahoma EVSE Rebate
                            <span>up to $250</span>
                        </div>
                        <p>Public Service Co. of Oklahoma customers are eligible to receive a rebate of up to $250 for
                            the purchase of an Energy Star certified level 2 EV charger. Equipment for which a rebate is
                            requested must be new and purchased in Oklahoma.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">PSO Residential EVSE Rebate
                            <span>up to $250</span>
                        </div>
                        <p>Public Service Company of Oklahoma (PSO) offers residential customers a rebate of up to $250
                            for an ENERGY STAR certified Level 2 EVSE.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Oregon</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Oregon Central Lincoln - Commercial
                            <span>$250 - $250</span>
                        </div>
                        <p>Central Lincoln offers business, industrial, multifamily dwelling customers a rebate of $250
                            when purchasing a Level 2 Charger.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Oregon Central Lincoln - Residential
                            <span>up to $250</span>
                        </div>
                        <p>Central Lincoln offers residential customers a rebate of $250 when purchasing a Level 2
                            Charger.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Oregon Columbia River - Residential
                            <span></span>
                        </div>
                        <p>Columbia River PUD (CRPUD) offers eligible customers a rebate of $250 to purchase a Level 2
                            EVSE that is rated for 208/240 volts or greater, and 16amps or greater.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Oregon EWEB - Commercial
                            <span>up to $1000</span>
                        </div>
                        <p>Eugene Water &amp; Electric Board (EWEB) is offering eligible commercial customers purchasing
                            a
                            Level 2 charger a rebate of up to $1,000.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>

        </details>
        <details>
            <summary>Pennsylvania</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Driving PA Forward Commercial EVSE Incentive
                            <span>up to $5000</span>
                        </div>
                        <p>Rebates of up to $5,000 per plug are available for Level 2 EVSE on publicly accessible
                            government-owned or non-government-owned property, at workplaces, or at multi-unit dwellings
                            that are not publicly accessible.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Pennsylvania Duquesne Light Company (DLC) - Commercial
                            <span>up to $32000</span>
                        </div>
                        <p>Duquesne Light Company (DLC) offers rebates to commercial customers for the installation of
                            publicly available Level 2 EVSE. Rebates are available for 100% of make-ready installation
                            costs, up to $32,000 per site.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Pennsylvania PECO L2 - Commercial (2020-4)
                            <span>$500 - $5000</span>
                        </div>
                        <p>Transportation electrification has many benefits and PECO strongly supports the growth of
                            this sector, including electric vehicles (EVs). Pennsylvania could gain an estimated $2.8
                            billion in benefits from lower greenhouse gas emissions from EVs. To help realize these
                            economic and environmental benefits, PECO is promoting the build-out of public and workplace
                            fast charging infrastructure, ensuring EV drivers have fast and convenient access to
                            charging.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Rhode Island</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Rhode Island Commercial EVSE Rebate
                            <span>up to $100000</span>
                        </div>
                        <p>The Office of Energy Resources is offering businesses, multi-unit dwellings, and government
                            entities located in Rhode Island up to $100,000 of rebate to purchase and install Level 2 or
                            DCFC chargers.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>South Carolina</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>South Dakota</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Black Hills Energy Commercial EVSE Rebate
                            <span></span>
                        </div>
                        <p>Black Hills Energy Commercial customers are eligible for a rebate up to $2,000 per port for
                            Level 2 chargers, or up to $35,000 for the installation of DC fast chargers.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Black Hills Energy Residential EVSE Rebate
                            <span></span>
                        </div>
                        <p>Black Hills Energy residential customers are eligible for rebates of $500 for smart EV
                            charging stations.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Tennessee</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">TDEC Commercial EVSE Grants
                            <span></span>
                        </div>
                        <p>The Tennessee Department of Environmental and Conservation (TDEC) offers funding for private,
                            public, nonprofit, and government entities to install light-duty EVSE.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Texas</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Austin Energy Commercial EVSE Rebate
                            <span>up to $10000</span>
                        </div>
                        <p>Austin Energy offers a rebate for commercial customers to install approved EVSE at
                            workplaces. Austin Energy provides a rebate of 50% of the cost to install approved Level 1
                            or Level 2 EVSE, up to $4,000 depending on the equipment and provides rebates up to $10,000
                            to workplaces that install a DC fast charger</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: Texas TCEQ TxVEMP Program - Commercial
                            <span>up to $25000</span>
                        </div>
                        <p>The TCEQ is now accepting applications for the fourth round of funding under the TxVEMP with
                            more than $10.4 million available for projects to purchase and install Level 2 light-duty
                            electric vehicle supply equipment used for charging light-duty zero emission vehicles (ZEV)
                            in public areas, workplaces, and multi-unit residences. Grant recipients will be eligible
                            for a reimbursement of up to $2,500 per activity (charging unit installed). Grant amounts
                            may not exceed the following percentages of eligible costs: ? electric chargers available to
                            the public: 70% ? electric chargers available at a workplace or multi-unit dwelling: 60%</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Texas Austin Energy - Commercial
                            <span>$4000 - $10000</span>
                        </div>
                        <p>Austin Energy offers a rebate for commercial customers to install approved EVSE at workplaces
                            or Multi-Unit Dwellings (MUD). Austin Energy provides a rebate of 50% of the cost to install
                            approved EVSE, up to $4,000, and provides rebates up to $10,000 to workplaces or MUDs that
                            install a DC fast charger.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Texas Entergy - Commercial
                            <span>$250 - $250</span>
                        </div>
                        <p>Entergy offers qualified customers a rebate of $250 to purchase each Level 2 and DC Fast EVSE
                            charger.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Texas Southwestern Electric (SWEPCO) - Residential
                            <span>up to $250</span>
                        </div>
                        <p>The Southwestern Electric Power Company (SWEPCO) provides residential customers a $250 rebate
                            for installing an ENERGY STAR certified Level 2 EVSE.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Texas United Cooperative Services (UCS) - Residential
                            <span>up to $500</span>
                        </div>
                        <p>United Cooperative Services (UCS) offers residential customers a rebate of up to $500 for the
                            installation of a Level 2 EVSE.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Electricity Discounts
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Austin Energy Plug-In Electric Vehicle (PEV) Charging Rate
                            Incentive
                            <span></span>
                        </div>
                        <p>Austin Energy offers a pilot time-of-use charging rate to residential customers with PEVs and
                            electric vehicle supply equipment.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Texas Austin Energy - Residential
                            <span>up to $1200</span>
                        </div>
                        <p>Austin Energy offers an EV360 Program for EV charging with reduced off-peak rates from
                            7pm-2pm the next day on weekdays, and anytime on weekends. The lowest rates offered are
                            $30/month.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Utah</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Utah Rocky Mountain Power - Commercial
                            <span>$1000 - $42000</span>
                        </div>
                        <p>Rocky Mountain Power provides rebates to non-residential customers toward the purchase of
                            Level 2 and DC-Fast EVSE. Non-residential customers installing Level 2 EVSE may receive a
                            rebate of 75% of cost, up to $1,000 for single port stations and $1,500 for multi-port
                            stations. Non-residential customers installing DC Fast Chargers may receive a rebate of 75%
                            of the cost, up to $30,000 per single port charge and $42,000 for multi-port chargers.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Electricity Discounts
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Utah Rocky Mountain Power - Residential
                            <span>up to $200</span>
                        </div>
                        <p>Rocky Mountain Power offers residential customers with PEVs $200 to enroll in a time-of-use
                            (TOU) rate pilot. Participants may choose between two rate plans. The TOU rate will apply to
                            all household energy use.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Vermont</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Green Mountain Power EVSE Incentive
                            <span></span>
                        </div>
                        <p>Green Mountain Power (GMP) residential customers are eligible for a free Level 2 EVSE when
                            they purchase a new all-electric vehicle.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: Vermont DHCD Program - Commercial
                            <span></span>
                        </div>
                        <p>The Vermont Department of Housing and Community Development (DHCD) offers governments,
                            businesses, non-profit organizations, homeowner associations, electric utilities, and EVSE
                            providers funding to install eligible EVSEs.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Vermont VEC - Commercial
                            <span>up to $250</span>
                        </div>
                        <p>Vermont Electric Co-op (VEC) offers eligible commercial customers a bill credit of $250 per
                            Level 2 EVSE charger they own and operate.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">VEC Commercial EVSE Rebate
                            <span>up to $250</span>
                        </div>
                        <p>Vermont Electric Co-op (VEC) offers eligible commercial customers a bill credit of $250 per
                            Level 2 EVSE charger they own and operate.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Electricity Discounts
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">BED Residential Charging Rate
                            <span></span>
                        </div>
                        <p>Burlington Electric Department (BED) offers a per kilowatt-hour discount for residential
                            customers to charge PEVs during off-peak times. To qualify, customers must install a WiFi
                            enabled EVSE.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Virginia</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Dominion Energy Commercial EVSE Rebate
                            <span>up to $53000</span>
                        </div>
                        <p>Dominion Energy offers multi-family, workplace, and transit customers rebates to purchase
                            Level 2 and DC fast EVSE chargers. Up to 4,000 may be rewarded for Level 2 EVSE and up to
                            $53,000 may be rewarded for DC Fast chargers.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Washington</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">State: Washington WSDOT EVSE Rebate - Commercial
                            <span></span>
                        </div>
                        <p>The Washington State Department of Transportation (WSDOT) offers the Zero Emission Vehicle
                            Infrastructure Partnerships (ZEVIP). ZEVIP awards grants to nonprofits and government
                            agencies to develop and implement EVSE projects along the West Coast Green Highway.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Washington Seattle City Light - Residential
                            <span></span>
                        </div>
                        <p></p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Washington Snohomish PUD - Residential
                            <span></span>
                        </div>
                        <p>Speed up charging time and save energy by upgrading to a qualified Level 2 EV charger</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Utilities: Washington Tacoma Public Utilities (TPU) - Residential
                            <span>$2000 - $20000</span>
                        </div>
                        <p>Tacoma Public Utility (TPU) offers an incentive project where eligible residential customers
                            who own a PEV and EVSE can receive up to $250 per year in exchange for completing surveys
                            about PEV charging and use.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>West Virginia</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Wisconsin</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
        <details>
            <summary>Wyoming</summary>
            <div class="content" style="display: block;">
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Charging Station Incentives
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>up to $1000</span>
                        </div>
                        <p>The U.S. Federal Tax Credit gives individuals 30% off a EV Charger home charging station plus
                            installation costs (up to $1,000). You must purchase and install the EV Charger by December
                            31, 2021 as well as claim the credit on your federal tax return.</p>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">YTCC EVSE Rebate
                            <span>up to $5000</span>
                        </div>
                        <p>Yellowstone-Teton Clean Cities (YTCC) offers a rebate of $5,000 toward the purchase of
                            publicly accessible EVSE for businesses and municipalities surrounding Grand Teton and
                            Yellowstone National Parks.</p>
                    </div>
                </div>
                <div class="current-accordion-card">
                    <div class="current-accordion-card-header">
                        <div class="mb-4 btn-yellow p-4 rounded">
                            <img src="{{env('APP_URL')}}public/veh/assets/img/headfon.svg" alt="">
                        </div>
                        <div class="header-text">
                            <div class="header-title">Vehicle Tax Credits and Rebates
                            </div>
                            <div class="header-desc">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="current-accordion-card-body">
                        <div class="header-body-title">Federal Tax Credit
                            <span>$2500 - $7500</span>
                        </div>
                        <p>Tax credit for the purchase of a new plug-in electric drive motor vehicle. Credit amount
                            depends on the car's battery capacity.</p>
                    </div>
                </div>
            </div>
        </details>
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