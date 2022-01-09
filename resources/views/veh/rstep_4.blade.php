<!DOCTYPE html>

<html lang="en">
    
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}public/veh/assets/css/style1.css">
    <link rel="stylesheet" type="text/css" href="{{env('APP_URL')}}public/veh/assets/css/style2.css">
@include('veh.includes.assets')
<body style="background-image: url('{{env('APP_URL')}}public/web/images/charles-forerunner.svg');background-size: cover;">
  <!-- ************** Header Start *************** -->
 @include('veh.includes.header')
  <!-- *------------------Header End-----------------*   -->


  <div class="m-auto review">   

    <p class="co-y">Review Your Details</p>

    <form  action="" method="post" enctype="multipart/form-data">
        @csrf 
      <div class="row d-flex flex-column">
      <div class="m-auto">
        <table class="table ">

          <tbody>
            <thead>
            </thead>
            <tr>
              <td style>Electrical Vehicle Brand</td>
              <td colspan="1" class="co-y text-center">{{$detail[0]->make}}</td>
            </tr>
            <tr>
              <td>Electrical Vehicle Type</td>
              <td class="co-y text-center">{{$detail[0]->model}}</td>
            </tr>
            <tr>
              <td>EV Charger</td>
              <td class="co-y text-center">ChargePoint Home Flex ($600)</td>
            </tr>
            <tr>
              <td>How far is your breaker panel from the desired EV charger location?</td>
              <td class="co-y text-center">{{$details[0]->ev_location}}-  ${{$details[0]->ev_amount}}</td>
            </tr>
            <tr>
              <td>Desired EV charger location?</td>
              <td class="co-y text-center">{{$details[0]->ev_location_ie}}</td>
            </tr>
            <tr>
              <td>Is the breaker panel in the same room as desired EV charger location?</td>
              <td class="co-y text-center">{{$details[0]->ev_location_a}}</td>
            </tr>
            <tr>
              <td>Is the breaker panel on the same wall as the desired EV charger location?</td>
              <td class="co-y text-center">{{$details[0]->ev_location_b}}</td>
            </tr>
            <tr>
              <td>Is the breaker panel on the same level as the desired EV charger location?</td>
              <td class="co-y text-center">{{$details[0]->ev_location_c}}</td>
            </tr>
            <tr>
              <td>Is the breaker panel on the same level as the desired EV charger location?</td>
              <td class="co-y text-center">{{$details[0]->electrical_appliances}}</td>
            </tr>
            <tr>
              <td>Within which range would you like to have an install?</td>
              <td class="co-y text-center">{{$details[0]->time_range}}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div >
        <p>Total estimated amount based on your online assessment is: ${{600 + $details[0]->ev_amount}} </p>
        <input type="hidden" name="total_amount" value="{{600 + $details[0]->ev_amount}}">
      </div>
      <div class="m-auto">
        <button class="my-2 " type="button" id="prevBtn" onclick="">GO BACK to STEP 3</button>
        <button style="width: 8em;" class="my-2   " type="submit" id="nextBtn" onclick="">Submit    <i class="fas fa-caret-right"></i></button>
      </div>
    </div>
    </form>
  </div>



@include('veh.includes.footer')
</div>
@include('veh.includes.footer_assets')  
</body>
</html>