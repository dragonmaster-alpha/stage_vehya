<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Session;

use DB;

use App\Http\Atquery;

use App\Http\Atmail;

use Illuminate\Http\Request;

use App\Models\Admin;

use App\Models\Cmspage;


use App\Models\Vendor;
use App\Models\VendorType;
use App\Models\Electrician;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Job;
use App\Models\Contactus;
use App\Models\Newsletter;
use App\Models\Industry;
use App\Models\Testimonial;

use App\Mail\TestMail;

use App\Models\States;

use App\Models\Cities;

use Illuminate\Support\Facades\Storage;

class HomeController extends Controller

{
    
// ************** Start Commercial Residential   ***************************** 

public  function getQuote(Request $request)
   { 
       if(!empty($request->quote)){
           return redirect(env('APP_URL').'veh/get-quote/'.$request->quote);
       }
                    
     return view('veh/get_quote');
    }

public  function thankyou(Request $request)
   { 
       
     return view('veh.thankyou');
    }


public function commercial(Request $request)
    {
        if(!empty($request->post('_token'))){ 
            
        $input = new Customer;
        $input->customer_type = "Commercial";
        $input->name = $request->name;
        $input->lname = $request->lname;
        $input->email = $request->email;
        $input->mobile_number = $request->mobile_number;
        $input->address = $request->address;
        $input->city = $request->city;
        $input->state = $request->state;
        
        
        try{

            Session::flash('message', 'Successfully Done');

            Session::flash('alert_class', 'success');
            $input->save();
            
            $job = new Job;
            $job->customer_id = $input->id;
            $job->own_charger_level = $request->own_charger_level;
            $job->ev_location_d = $request->ev_location_d;
            $job->paid_service = $request->paid_service;
            $job->number = $request->number;
            $job->pc = $request->pc;
            $job->property_type_land = $request->property_type_land;
            $job->property_type = $request->property_type;
            $job->permission = $request->permission;
            $job->industry_location = implode(', ',$request->industry_location);
            $job->time_range = $request->time_range;
            $job->total_amount = $request->total_amount;
            
            $job->save();
            //var_dump($request->email);die;
                $data = ['name'=>$request->name, 'data'=> ""];
                $user['to'] = $request->email; //'quicksnetolution@gmail.com';
                Mail::send('mail', $data, function($message) use ($user) {
                $message->to($user['to']);
                $message->subject("Vehya");
                });
                
                $admint_message ="Hi, Admin You received a notification";
                $data = ['name'=>"Vish", 'data'=> "Hello Vish"];
                $user['to']='demomailfortesting88@gmail.com';
                Mail::raw($admint_message, function ($message) use ($user) {
                    $message->to($user['to']);
                    $message->subject("Notification");
                });

            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Somthing Error');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'veh/get-quote/thankyou')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'veh/get-quote/thankyou');
        
        } 
        $data['states'] = DB::select("SELECT * FROM `states` WHERE country_id=233");
        if(old('state')){
        $data['cities'] = DB::select("SELECT * FROM `cities` WHERE state_id=".old('state'));
        }
        return view('veh/commercial', $data);
        //return response()->json($data);
    }  
        

public function residential(Request $request)
    {
        
        if(!empty($request->post('_token'))){ 
            
        $input = new Customer;
        $input->customer_type = "Residential";
        $input->name = $request->name;
        $input->lname = $request->lname;
        $input->email = $request->email;
        $input->mobile_number = $request->mobile_number;
        $input->address = $request->address;
        $input->city = $request->city;
        $input->state = $request->state;
        $input->make = $request->make;
        $input->model = $request->model;
        
        
        try{

            // Session::flash('message', 'Successfully Done');

            // Session::flash('alert_class', 'success');

            $input->save();
            
            $job = new Job;
            $job->customer_id = $input->id;
            $job->own_charger = $request->own_charger;
            $job->next_year = $request->next_year;
            $job->number = $request->number;
            $job->pc = $request->pc;
            $job->property_type_home = $request->property_type_home;
            $job->property_type = $request->property_type;
            $job->ev_location = $request->ev_location;
            if($request->ev_location == '5ft'){
                $ev_amount = 600;   
                }elseif($request->ev_location == '10ft'){
                $ev_amount = 900;   
                }elseif($request->ev_location == '15ft'){
                $ev_amount = 1300;   
                }elseif($request->ev_location == '20ft'){
                $ev_amount = 1800;   
                }elseif($request->ev_location == '25ft'){
                $ev_amount = 200;   
                }
            $job->ev_amount = $ev_amount;
            $job->ev_location_ie = $request->ev_location_ie;
            $job->permission = $request->permission;
            $job->breaker_panel = $request->breaker_panel;
            $job->electrical_appliances = implode(', ',$request->electrical_appliances);
            $job->time_range = $request->time_range;
            $job->financing = $request->financing;
            if($request->own_charger == 'I-have-my-own-charger'){
                $catm = 0;
            }else{
                $catm = 750;
            }
            $job->total_amount = 700+100+65+$ev_amount+$catm;
            $job->save();
            
                $data = ['name'=>$request->name, 'data'=> ""];
                $user['to'] = $request->email; //'quicksnetolution@gmail.com';
                Mail::send('mail', $data, function($message) use ($user) {
                $message->to($user['to']);
                $message->subject("Vehya");
                });
                
                $admint_message ="Hi, Admin You received a notification";
                $data = ['name'=>"Vish", 'data'=> "Hello Vish"];
                $user['to']='demomailfortesting88@gmail.com';
                Mail::raw($admint_message, function ($message) use ($user) {
                    $message->to($user['to']);
                    $message->subject("Notification");
                });
                
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            // Session::flash('message', 'Somthing Error');

            // Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'veh/get-quote/thankyou')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'veh/get-quote/thankyou');
        
        } 
        
        $data['states'] = DB::select("SELECT * FROM `states` WHERE country_id=233");
        if(old('state')){
        $data['cities'] = DB::select("SELECT * FROM `cities` WHERE state_id=".old('state'));
        }
        return view('veh/residential', $data);
        //return response()->json($data);
    }



public function addCommercial(Request $request,$step,$id=0){
    
        if($step == 'step_1'){
        if(!empty($request->post('_token'))){
        $input = new Customer;
        $input->name = $request->name;
        $input->lname = $request->lname;
        $input->email = $request->email;
        $input->mobile_number = $request->mobile_number;
        $input->country = 233;
        $input->state = $request->state;
        $input->city = $request->city;
        // $input->location_ip = $request->location_ip;
        $input->customer_type = "Commercial";
        try{
            // Session::flash('message', 'Submit Successfully');
            // Session::flash('alert_class', 'success');
            $input->save();
            $job = new Job;
            $job->customer_id = $input->id;
            $job->save();
            return redirect(env('APP_URL').'veh/add-commercial/step_2/'.$input->id);
            }catch(\Exception $exception)
        {
            $errormsg = 'Database error! ' . $exception->getCode();
            // return redirect(env('APP_URL').'veh/add-commercial/step_1')->withInput();
            var_dump($exception);
            exit;
        }
        }
        $data['states'] = DB::select("SELECT * FROM `states` WHERE country_id=233");
        if(old('state')){
        $data['cities'] = DB::select("SELECT * FROM `cities` WHERE state_id=".old('state'));
        }
        return view('veh.step_1',$data);
        }elseif($step == 'step_2'){
            if(!empty($request->post('_token'))){ 
        try{
            // Session::flash('message', 'Submit Successfully');
            // Session::flash('alert_class', 'success');
            Customer::where('id',$id)->update(["product_id"=>$request->product_id]);
            return redirect(env('APP_URL').'veh/add-commercial/step_3/'.$id);
            }catch(\Exception $exception)
        {
            $errormsg = 'Database error! ' . $exception->getCode();
            return redirect(env('APP_URL').'veh/add-commercial/step_2/'.$id)->withInput();
            exit;
        }
        }
        $data['pricelist'] = Product::all();
        return view('veh.step_2',$data);
        }elseif($step == 'step_3'){
            if(!empty($request->post('_token'))){ 
        try{
            // Session::flash('message', 'Submit Successfully');
            // Session::flash('alert_class', 'success');
            Customer::where('id',$id)->update(["industry_location_id"=>$request->industry_location_id]);
            return redirect(env('APP_URL').'veh/thankyou');
            }catch(\Exception $exception)
        {
            $errormsg = 'Database error! ' . $exception->getCode();
            return redirect(env('APP_URL').'veh/add-commercial/step_3/'.$id)->withInput();
            exit;
        }
        }
        $data['industrylist'] = Industry::all();
        return view('veh.step_3', $data);
        }
}

public function addResidential(Request $request,$step,$id=0){
    
        if($step == 'rstep_1'){
        if(!empty($request->post('_token'))){
        $input = new Customer;
        $input->name = $request->name;
        $input->lname = $request->lname;
        $input->email = $request->email;
        $input->mobile_number = $request->mobile_number;
        $input->country = 233;
        $input->state = $request->state;
        $input->city = $request->city;
        $input->make = $request->make;
        $input->model = $request->model;
        $input->terms = $request->terms;
        // $input->location_ip = $request->location_ip;
        $input->customer_type = "Residential";
        try{
            // Session::flash('message', 'Submit Successfully');
            // Session::flash('alert_class', 'success');
            $input->save();
            return redirect(env('APP_URL').'veh/add-residential/rstep_2/'.$input->id);
            }catch(\Exception $exception)
        {
            $errormsg = 'Database error! ' . $exception->getCode();
            return redirect(env('APP_URL').'veh/add-residential/rstep_1')->withInput();
            exit;
        }
        }
        $data['states'] = DB::select("SELECT * FROM `states` WHERE country_id=233");
        if(old('state')){
        $data['cities'] = DB::select("SELECT * FROM `cities` WHERE state_id=".old('state'));
        }
        return view('veh.rstep_1',$data);
        }elseif($step == 'rstep_2'){
            if(!empty($request->post('_token'))){ 
        try{
            // Session::flash('message', 'Submit Successfully');
            // Session::flash('alert_class', 'success');
            Customer::where('id',$id)->update(["product_id"=>$request->product_id]);
            return redirect(env('APP_URL').'veh/add-residential/rstep_3/'.$id);
            }catch(\Exception $exception)
        {
            $errormsg = 'Database error! ' . $exception->getCode();
            return redirect(env('APP_URL').'veh/add-residential/rstep_2/'.$id)->withInput();
            exit;
        }
        }
        $data['pricelist'] = Product::all();
        return view('veh.rstep_2',$data);
        }elseif($step == 'rstep_3'){
            if(!empty($request->post('_token'))){ 
                $job = Job::where('customer_id',$id);
                if($request->ev_location == '5ft'){
                $ev_amount = 600;   
                }elseif($request->ev_location == '10ft'){
                $ev_amount = 900;   
                }elseif($request->ev_location == '15ft'){
                $ev_amount = 1300;   
                }elseif($request->ev_location == '20ft'){
                $ev_amount = 1800;   
                }elseif($request->ev_location == '25ft'){
                $ev_amount = 2400;   
                }
                $electrical_appliances = implode(', ', $request->electrical_appliances);
                
                $input = new Job;
                $input->customer_id = $id;
                $input->ev_location = $request->ev_location;
                if($request->ev_location == '5ft'){
                 $input->ev_amount = 600;   
                }elseif($request->ev_location == '10ft'){
                 $input->ev_amount = 900;   
                }elseif($request->ev_location == '15ft'){
                 $input->ev_amount = 1300;   
                }elseif($request->ev_location == '20ft'){
                 $input->ev_amount = 1800;   
                }elseif($request->ev_location == '25ft'){
                 $input->ev_amount = 2400;   
                }
                $input->ev_location_a = $request->ev_location_a;
                $input->ev_location_b = $request->ev_location_b;
                $input->ev_location_c = $request->ev_location_c;
                $input->ev_location_ie = $request->ev_location_ie;
                $input->electrical_appliances = implode(', ', $request->electrical_appliances);
                $input->additional_electrical_item = $request->additional_electrical_item;
                $input->time_range = $request->time_range;
        try{
            if($job->count() > 0){
                        $job->update(["ev_location"=>$request->ev_location,"ev_amount"=>$ev_amount,"ev_location_a"=>$request->ev_location_a,"ev_location_b"=>$request->ev_location_b,"ev_location_c"=>$request->ev_location_c,"ev_location_ie"=>$request->ev_location_ie,"electrical_appliances"=>$electrical_appliances,"time_range"=>$request->time_range]);
            }else{
                $input->save();
            }
            //return response()->json($input); die();
            return redirect(env('APP_URL').'veh/add-residential/rstep_4/'.$id);
            }catch(\Exception $exception)
        {
            $errormsg = 'Database error! ' . $exception->getCode();
            return redirect(env('APP_URL').'veh/add-residential/rstep_3/'.$id)->withInput();
            exit;
        }
        }
        return view('veh.rstep_3');
        }elseif($step == 'rstep_4'){
            if(!empty($request->post('_token'))){ 
                
        try{
            
            Job::where('customer_id',$id)->update(["total_amount"=>$request->total_amount]);
            //return response()->json($input); die();
            return redirect(env('APP_URL').'veh/thankyou');
            }catch(\Exception $exception)
        {
            $errormsg = 'Database error! ' . $exception->getCode();
            return redirect(env('APP_URL').'veh/add-residential/rstep_4/'.$id)->withInput();
            exit;
        }
        }
        $data['details'] =Job::where('customer_id', $id)->get();
        $data['detail'] =Customer::where('id', $id)->get();
        //return response()->json($data['details']); die();
        return view('veh.rstep_4', $data);
        }
}

public function contactUs(Request $request){
    
        
        if(!empty($request->post('_token'))){ 
        
        $input = new Contactus;
        $input->name = $request->name;
        $input->email = $request->email;
        $input->mobile_number = $request->mobile_number;
        $input->message = $request->message;
        
        try{

            Session::flash('message', 'Submit Successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Somthing error');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'veh/contactus')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'veh/contactus');
        
        }
        
        

        return view('veh.contactus');
}

public function newsLetter(Request $request){
    
        
        if(!empty($request->post('_token'))){ 
        
        $input = new Newsletter;
        $input->email = $request->email;
        
        $input->save();
        Session::flash('message', 'Your Data Successfully Sent');
        Session::flash('alert_class', 'danger');
        return redirect(env('APP_URL').'veh/');
        
        } 

        
         
}

public function index(Request $request){

          $data['productlist'] = Product::all();
          $data['industrylist'] = Industry::all();
          $data['testimoniallist'] = Testimonial::all();
          return view('veh/index', $data);
          //return response()->json($data);
    }
    
public function price(Request $request){

          $data['pricelist'] = Product::all();

          return view('veh/pricing', $data);
          //return response()->json($data);
    }
    
public function commercialProduct(Request $request){

          $data['pricelist'] = Product::all();
          $data['states'] = DB::select("SELECT * FROM `states` WHERE country_id=233");
          return view('veh.commercial_quote', $data);
          //return response()->json($data);
    }
    

// ************** End Commercial & Residential ***************************** 


// ************** Start Cms pages ***************************** 

public  function about(Request $request)
    {
        $data['about'] = Cmspage::all();
        return view('veh/about_us', $data);
        //return response()->json($data);
    }

public  function career(Request $request)
    {
        $data['career'] = Cmspage::all();
        return view('veh/careers', $data);
        //return response()->json($data);
    }

public  function blog(Request $request)
    {
        $data['blog'] = Cmspage::all();
        return view('veh/blog', $data);
        //return response()->json($data);
    }














// public function index(){

//         return view('web.index');
//     }
    
    // public function indexx(){    

    //     return view('veh.index');
    // }
    
    public function pricing(){

        return view('veh.pricing');
    }
    
    public function all_blog(){

        return view('veh.all_blog');
    }
    public function application_auto(){
    
            return view('veh.application_auto');
        }
    public function about_us(){
        
                return view('veh.about_us');
            }
    public function application_municipal(){
        
                return view('veh.application_municipal');
            }
    public function application_offices(){
        
                return view('veh.application_offices');
            }
    public function application_residential(){
        
                return view('veh.application_residential');
            }
    public function application_retail(){
        
                return view('veh.application_retail');
            }
    // public function blog_1(){
        
    //             return view('veh.blog_1');
    //         }
    // public function careers(){

    //     return view('veh.careers');
    // }
    public function get_quote(){
    return view('veh.get_quote');
    }
    public function commercial_quote(){

        return view('veh.commercial_quote');
    }
    public function residential_quote(){

        return view('veh.residential_quote');
    }
    public function tax_credits(){

        return view('veh.tax_credits');
    }




    


    
}