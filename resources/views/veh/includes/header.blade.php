 <!--------------Header Start ------------>
 <header class="nav">
            <div class="col-md-3" style="position:absolute;left:1em;top:2em">
                <div class=" mx-2  hamburger">
                    <div id="menutoggler" class=" menutoggler" style="font-size: 2em;margin-top: -1em;">
                        <i class="fa fa-bars"></i>
                    </div>
                </div>
                <div class=" col-md-12  my-4 ml-5 leftnav">
                    <ul class="d-flex">
                        <a href="{{env('APP_URL')}}veh/pricing"><li style="text-align:center">COMPARE</li></a> <span class="mx-3">|</span>
                        <a href="{{env('APP_URL')}}veh/tax_credits"><li style="text-align:center">SAVE</li></a> <span class="mx-3">|</span>
                        <a href="#"><li style="text-align:center">BLOG</li></a> <span class="mx-3">|</span>
                        <a href="{{env('APP_URL')}}veh/about_us"><li style="text-align:center">ABOUT</li></a>
                        <a href="{{env('APP_URL')}}veh/get_quote"><li><button style="display: none;" class=" m-auto btn-yellow-lg">GET A QUOTE</button></li></a>
                    </ul>
                </div>
            </div>
            <div class=" col-md-3  col-xs-10  text-center centernav" style="margin:auto;margin-top:0;padding-right: 19em;">
               <a href="{{env('APP_URL')}}"> <img src="{{env('APP_URL')}}public/veh/assets/img/logo.png" alt=""></a>
            </div>

            <div class="text-right col-sm-0 col-md-4 my-4 rightnav" style="position:absolute;margin-right: 6em;top:1.5em;right:1em">
               <a href="{{env('APP_URL')}}veh/get-quote"><button class="btn-yellow-lg" style="float:right">GET A QUOTE</button></a>
            </div>
        </header>
        <!--------------Header End ------------>