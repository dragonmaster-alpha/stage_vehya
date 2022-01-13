<!DOCTYPE html>

<html lang="en">

<!------- Vehya Project Starts ON Friday,10-Dec-2021 at 4.00PM ------->

<style>

/*About*/

.about-main-bg{
    background:url({{asset('public/veh/assets/img/about-2.png') }}) no-repeat;
    background-size:100%;
    padding: 200px 50px;
}
.about-main-info h1, .workforce-details h1, .ev-fleet-info h1, .eduction-info h1{ 
    color: #fff;
    font-weight: 500;
}
.about-main-info h2, .workforce-details h2, .ev-fleet-info h2, .eduction-info h2{
    color: #fff;
}
.ev-bg{
    background:url({{asset('public/veh/assets/img/about-7.png') }}) no-repeat;
    background-size:100%;
    padding: 200px 50px;
}
.workforce-bg{
    background:url({{asset('public/veh/assets/img/work-bg.png') }}) no-repeat;
    background-size:100%;
    padding: 100px 50px;
}
.ev-fleet-bg{
    background:url({{asset('public/veh/assets/img/about-9.png') }}) no-repeat;
    background-size:100%;
    padding: 200px 50px;
}
.eduction-bg{
    background:url({{asset('public/veh/assets/img/about-1.png') }}) no-repeat;
    background-size:100%;
    padding: 200px 50px;
}
.workforce-details{
    min-height: 100%;
    display: flex;
    justify-content: center;
}
.meet-team {
    background:url({{asset('public/veh/assets/img/about-3.jpg') }}) no-repeat;
    background-size:100%;
    padding: 100px 50px;
}
.user-name{
    padding: 10px;
    border-radius: 10px;
    background-color: #efc523;
    margin-top: 25px;
}

.mb2-5 {
    font-size: 3.5rem !important;
    margin-bottom: 0.5rem !important;
    font-weight: 400 !important;
    line-height: 1.2 !important;
}
</style>
@include('veh.includes.assets')

<body>
    <!------- Main Container Starts ------->

    <div class="main-container">

        <!------- Header section Starts ------->

        @include('veh.includes.header')

        <!------- Header section End ------->
        <h1 class="text-center">"At Vehya we are Committed to WorkforceDevelopment, Ev<br>
        Infrastructure, <br>
        and a Carbon neutral Future."</h1>
<div class="charge-img text-center">
	<img src="{{env('APP_URL')}}public/veh/assets/img/about-3.jpg" class="img-fluid">
</div>
<div class="ev-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6">
				<div class="ev-details">
					<h1 class="mb-5">EV Infrastructure</h1>
					<h2 class="mb2-5">Infrastructure is key to mass <br>
						electric vehicle adoption. With <br>
						every charger installed Vehya is <br>
						making it easier to own an EV.</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="workforce-bg mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="workforce-details">
					<div class="workforce-info">
					<h1 class="mb-5">Workforce Development</h1>
					<h2 class="mb2-5">Vehya is committed to maintaining the <br>
						current electricalworkforce and <br>
						building the next generation of <br>
						electricians. We pledge to creating <br>
						100,000 electrical professionals by 2030.</h2>
						</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="story-detail text-center">
					<img src="{{env('APP_URL')}}public/veh/assets/img/_Image_.png" class="img-fluid w-50 m-auto">
					<div class="text-center">
					<button type="button" class="btn mt-4">SEE DELONTES'S STORY</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="nature-img text-center mt-5">
	<img src="{{env('APP_URL')}}public/veh/assets/img/about-5.jpg" class="img-fluid">
</div>
<div class="carbon-section mt-5 text-center">
	<h1 class="">Carbon-Neutral Future</h1>
	<img src="{{env('APP_URL')}}public/veh/assets/img/about-4.png" class="img-fluid">
	<h2 class="mb2-5">Creating a carbon-neutral future is at the heart of Vehya’s purposes. <br>
     Here are just a few of the steps we’re taking toward that future:</h2>
</div>
<div class="ev-fleet-bg mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6">
				<div class="ev-fleet-details">
					<div class="ev-fleet-info">
						<h1 class="mb-5">EV fleet</h1>
						<h2 class="mb2-5">We plan to maintain 90% EVs across <br>
							Vehya’s fleet, with 100% EV adoption <br>
							by no later than 2030.</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="meet-team text-center mt-5">
	<h1>Meet our Team</h1>
	<div class="row">
		<div class="col-md-6">
			<div class="team-menber text-center">
				<img src="{{env('APP_URL')}}public/veh/assets/img/user_img.png" class="img-fluid w-50 pb-5 m-auto">
				<div class="user-name w-50 m-auto text-center">
					<h3>	WILLIAM <br>
					FOUNDER & CEO </h3>
				</div>
				<img src="{{env('APP_URL')}}public/veh/assets/img/linkedin.png" class="img-fluid mt-4">
			</div>
		</div>
		<div class="col-md-6">
			<div class="team-menber text-center">
				<img src="{{env('APP_URL')}}public/veh/assets/img/user_img.png" class="img-fluid pb-5 w-50 m-auto">
				<div class="user-name w-50 m-auto text-center">
					<h3>	WILLIAM <br>
					FOUNDER & CEO </h3>

				</div>
				<img src="{{env('APP_URL')}}public/veh/assets/img/linkedin.png" class="img-fluid mt-4">
			</div>
		</div>
	</div>
</div>
<div class="eduction-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="eduction-details">
					<div class="eduction-info">
						<h1 class="mb-5">Education</h1>
						<h2 class="mb2-5">Through the Vehya website, app, <br>
							and with every install, we educate <br>
							our customers and workforce on <br>
							the advantages of a <br>
							carbon-neutral future.</h2>
					</div>
				</div>
			</div>
			<div class="col-md-6"></div>
		</div>
	</div>
</div>
<div class="about-main-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="about-main-details">
                    <div class="about-main-info">
                        <h1 class="mb-5">Partnerships</h1>
                        <h2 class="mb2-5">We value our partners and want <br>
                            work with people who believe in <br>
                            a carbon-neutral future.</h2>
                            <button type="button" class="btn">BECOME A PARTNER</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
      <!------- Footer Section Starts ------->

      @include('veh.includes.footer')

      <!------- Footer Section End ------->

  </div>




  @include('veh.includes.footer_assets')
</body>





<!-- Mirrored from iwebwiserprojects.xyz/Vehya_Project/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Dec 2021 06:30:54 GMT -->

</html>