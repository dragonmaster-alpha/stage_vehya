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
use App\Models\Electrician;
use App\Models\Product;
use App\Models\Job;
use App\Models\Customer;
use App\Models\Industry;
use App\Models\Testimonial;

use App\Mail\MyTestMail;

use App\Models\Countries;

use App\Models\States;

use App\Models\Cities;

use Illuminate\Support\Facades\Storage;

class VendorController extends Controller

{

public function index(){

        if(!empty(Session::get('vendors'))){

        $user_id = Session::get('vendors');

        $data['user'] = $this->user($user_id);

        $data['active'] = 'job';

        return redirect(env('APP_URL').'vendors/job-list/assign');
        //return view('vendors.dashboard',$data);

        }else{

            return redirect(env('APP_URL').'vendors/login');

        }

    }



public function login(Request $request){

        if(empty(Session::get('vendors'))){

        if(!empty($request->post('_token'))){

            $Atquery = new Atquery;

            $ext = $Atquery->real($request->post());

            extract($ext);

            $vendor = Vendor::where(["email"=>$email, "password"=>md5($password)]);

            if($vendor->count() == 1){

                $request->session()->put('vendors', $vendor->get()[0]->id);

                return redirect(env('APP_URL').'vendors/job-list/assign');
                //return redirect(env('APP_URL').'vendors/dashboard');

            }else{

                Session::flash('message', 'Wrong email or password');

                Session::flash('alert_class', 'danger');

                return redirect(env('APP_URL').'vendors/login');

            }

        }else{

        return view('vendors.login');

        }

    }else{

        return redirect(env('APP_URL').'vendors/');

    }

    }

public function forgetPassword(Request $request){

        if(empty(Session::get('vendors'))){

            if (!empty($request->post('_token'))){

                $email = $request->post('email');

                $check = DB::SELECT("SELECT * FROM `vendors` WHERE email='".$email."'");

                if(!empty($check)){

                    $token = md5(date('ymdHis').rand(100000,999999));

                    DB::INSERT("INSERT INTO `password_resets`(`email`, `type`, `token`) VALUES ('$email',1,'$token')");

                    $Atmail = new Atmail;

                    $maildata['templete'] = 'vendor_forgot_password';

                    $maildata['name'] = $check[0]->name;

                    $maildata['token'] = $token;

                    if($Atmail->mailit($request->post('email'),$maildata)){

                    Session::flash('email', $request->post('email')); 

                    return view('vendors.message');

                    }

                }else{

                    Session::flash('message', 'Email not matched');

                    Session::flash('alert_class', 'danger');

                    return redirect(env('APP_URL').'vendors/forget-password');

                }

            }else{

                return view('vendors.forget_password');

            }

        }else{

            return redirect(env('APP_URL').'vendors/dashboard');

        }

    }
    
public function recover_password($token,Request $request){

        if(empty(Session::get('vendors'))){

        $check = DB::SELECT("SELECT * FROM `password_resets` WHERE token='$token'");

        if(!empty($check)){

            if($request->post('password')){

            $validator = request()->validate([

            'password' => 'required| min:8| max:20|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',

            'password_confirmation' => 'required|same:password',

            ]);    

            $Atquery = new Atquery;

            $ext = $Atquery->real($request->post());

            extract($ext);

            if($check[0]->type == 1){

                DB::UPDATE("UPDATE `vendors` SET `password`=md5('$password') WHERE email='".$check[0]->email."'");

            }else{



            }

            DB::DELETE("DELETE FROM `password_resets` WHERE id=".$check[0]->id);

            Session::flash('message', 'Password changed successfully');

            Session::flash('alert_class', 'success');

            return redirect(env('APP_URL').'vendors/login');

            }else

            return view('vendors.recover_password');

        }

        else{

            return redirect(env('APP_URL').'vendors/login');

        }

        }else{

            return redirect(env('APP_URL').'vendors/dashboard');

        }

    }
    
// public function electricianRecoverPassword($token, Request $request){

        
//         $check = DB::SELECT("SELECT * FROM `password_resets` WHERE token='$token'");

//         if(!empty($check)){

//             if($request->password){

//             $validator = request()->validate([

//             'password' => 'required| min:8| max:20|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',

//             'password_confirmation' => 'required|same:password',

//             ]);    
//             print_r($request->password); die();
             
//             $input = new VendorType; 
//             $input = $request->password; 
//             $reset =  Electrician::update(['password'=>$request->password]);  
//             print_r($reset); die();
            
//             return redirect(env('APP_URL').'vendor/thanks');

//             }else

//             return view('vendor.electrician_recover_password');

//         }
//     }

public function userProfile(Request $request){

        if(!empty(Session::get('vendors'))){

        $user_id = Session::get('vendors');

        $data['user'] = $this->user($user_id);

        if(!empty($request->post('_token'))){

            $ext = $request->post();

            // if($ext['old_password'] == $data['user']->password){

            if($ext['confirm_password'] == $ext['password']){

                Vendor::where('id',$user_id)->update(['password'=>md5($ext['password'])]);
                
                Session::flash('message', 'User password reset successfully');

                Session::flash('alert_class', 'success');
            }

            // }
             return redirect(env('APP_URL').'vendors/user-profile');

        }else{

        $data['page'] = "Edit";

        $data['active'] = 'user';

        return view('vendors.user_profile',$data);

        }

        }else{

            return redirect(env('APP_URL').'vendors/login');

        }

    }
    

// ************** Start Vendor *****************************    
public function addVendor(Request $request){

        if(!empty(Session::get('vendor'))){

        $user_id = Session::get('vendor');
        $data['user'] = $this->user($user_id);
        if(!empty($request->post('_token'))){ 
        
        $input = new Vendor;
        $input->name = $request->name;
        $input->company_name = $request->company_name;
        $input->vendor_type = $request->vendor_type;
        $input->email = $request->email;
        $input->password = md5($request->password);
        $input->mobile_number = $request->mobile_number;
        $input->altr_mobile_number = $request->altr_mobile_number;
        $input->country = $request->country;
        $input->state = $request->state;
        // $input->city = $request->city;
        $input->address = $request->address;
        $input->zip_code = $request->zip_code;
        
        
        $achecke = Admin::where('email', $input->email)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same email');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendor/add-vendor')->withInput();

            exit;

            }
            
        $achecke = Vendor::where('email', $input->email)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same email');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendor/add-vendor')->withInput();

            exit;

            }
            
          $achecke = Vendor::where('mobile_number', $input->mobile_number)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same mobile Number');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendor/add-vendor')->withInput();

            exit;

            }
           
            
            if ($request->hasFile('profile_image')) {

                $filenameWithExt = $request->file('profile_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('profile_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('profile_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendor']->logo;
                
                }
                
                $input->profile_image= $fileNameToStore;
            
        try{

            Session::flash('message', 'Vendor created successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Vendor already exists');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendor/add-vendor')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'vendor/vendor-list');
        
        }

        $data['vendortypes'] = DB::select("SELECT * FROM `vendor_types`");
        
        $data['states'] = DB::select("SELECT * FROM `states` WHERE country_id=233");

        if(old('state')){

        $data['cities'] = DB::select("SELECT * FROM `cities` WHERE state_id=".old('state'));

        }

        $data['active'] = 'vendor';

        return view('vendor.vendor_form',$data);

        }else{
            return redirect(env('APP_URL').'vendor/login');
        }

}
    

public function vendorList(Request $request){

       if(!empty(Session::get('vendor'))){

          $user_id = Session::get('vendor');

          $data['user'] = $this->user($user_id);

          $data['vendorlist'] = Vendor::orderBy('id', 'desc')->get();

          $data['active'] = 'vendor';

          return view('vendor.vendor_list',$data);

        }else{

            return redirect(env('APP_URL').'vendor/login');

        }

    }
    
public function vendorDelete($id){
    
      if(!empty(Session::get('vendor'))){

        $user_id = Session::get('vendor');
        $data['user'] = $this->user($user_id);
 
      $list = Vendor:: find($id);

        try{

            Session::flash('message', 'Vendor deleted successfully');

            Session::flash('alert_class', 'success');

            $list->delete();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Vendor could not be deleted');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendor/vendor-list')->withInput();

            exit;

        }

      return redirect(env('APP_URL').'vendor/vendor-list');
      
      }else{
            return redirect(env('APP_URL').'vendor/login');
        }
    }    
    
public function vendorShow($id){

        if(!empty(Session::get('vendors'))){

        $user_id = Session::get('vendors');
        $data['user'] = $this->user($user_id);
        
        $data['list'] = Vendor:: find($id);
            
        //print_r($list); die();
        $data['states'] = DB::select("SELECT * FROM `states` WHERE country_id=233");

        if(old('state')){

        $data['cities'] = DB::select("SELECT * FROM `cities` WHERE state_id=".old('state'));
        }
        $data['active'] = 'user';

        return view('vendors.vendor_form_update', $data);

        }else{
            return redirect(env('APP_URL').'vendors/login');
        }

} 
    
public function vendorUpdate(Request $request, $id){
    
        if(!empty(Session::get('vendors'))){

        $user_id = Session::get('vendors');
        $data['user'] = $this->user($user_id);
        //$input = $request->input();
        $data['vendors'] = Vendor:: find($id);
        $input = Vendor:: find($id);
        $input->name = $request->name;
        $input->company_name = $request->company_name;
        $input->mobile_number = $request->mobile_number;
        $input->country = "United State";
        $input->state = $request->state;
        $input->address = $request->address;
        $input->dl_number = $request->dl_number;
        $input->ecl_state = $request->ecl_state;
        $input->ecl_number = $request->ecl_number;
        $input->ecl_name = $request->ecl_name;
        $input->insurer = $request->insurer;
        $input->policy_number = $request->policy_number;
        $input->liability_insurer = $request->liability_insurer;
        $input->liability_policy_number = $request->liability_policy_number;
        $input->tax_company_name = $request->tax_company_name;
        $input->ein = $request->ein;
        $input->poc = $request->poc;
        $input->coverage_amount = $request->coverage_amount;
        $input->vehicle_type = $request->vehicle_type;
        $input->license_company_name = $request->license_company_name;
        
         if ($request->hasFile('profile_image')) {

                $filenameWithExt = $request->file('profile_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('profile_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','pdf','docx'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('profile_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->profile_image;
                
                }
                
                $input->profile_image= $fileNameToStore;
                
        if ($request->hasFile('driver_license_image')) {

                $filenameWithExt = $request->file('driver_license_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('driver_license_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','pdf','docx'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('driver_license_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->driver_license_image;
                
                }
                
                $input->driver_license_image= $fileNameToStore;
                
        if ($request->hasFile('electrical_contractor_license_image')) {

                $filenameWithExt = $request->file('electrical_contractor_license_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('electrical_contractor_license_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','pdf','docx'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('electrical_contractor_license_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->electrical_contractor_license_image;
                
                }
                
                $input->electrical_contractor_license_image= $fileNameToStore;
                
        if ($request->hasFile('vehicle_insurance_image')) {

                $filenameWithExt = $request->file('vehicle_insurance_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('vehicle_insurance_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','pdf','docx'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('vehicle_insurance_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->vehicle_insurance_image;
                
                }
                
                $input->vehicle_insurance_image= $fileNameToStore;
                
        if ($request->hasFile('liability_insurance_image')) {

                $filenameWithExt = $request->file('liability_insurance_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('liability_insurance_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','pdf','docx'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('liability_insurance_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->liability_insurance_image;
                
                }
                
                $input->liability_insurance_image= $fileNameToStore;
                
        if ($request->hasFile('vehya_agreement_image')) {

                $filenameWithExt = $request->file('vehya_agreement_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('vehya_agreement_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','pdf','docx'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('vehya_agreement_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->vehya_agreement_image;
                
                }
                
                $input->vehya_agreement_image= $fileNameToStore;
                
        if ($request->hasFile('vehya_ev_certification_image')) {

                $filenameWithExt = $request->file('vehya_ev_certification_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('vehya_ev_certification_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','pdf','docx'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('vehya_ev_certification_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->vehya_ev_certification_image;
                
                }
                
                $input->vehya_ev_certification_image= $fileNameToStore;
                
        if ($request->hasFile('w9_image')) {
            
            $filenameWithExt = $request->file('w9_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('w9_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','pdf','pdf','docx'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('w9_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->w9_image;
                
                }
                
                $input->w9_image= $fileNameToStore;
             
        try{

            Session::flash('message', 'Vendor Updated successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Vendor could not be updated');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/vendor-list-show/'.$id)->withInput();

            exit;

        }
        return redirect(env('APP_URL').'vendors/vendor-list-show/'.$id);
        $data['active'] = 'vendor';
        
        return redirect(env('APP_URL').'vendors/vendor-list-show/'.$id);
      
      }else{
            return redirect(env('APP_URL').'vendors/login');
        }
    }  

// public function vendorView($id){

//         if(!empty(Session::get('vendor'))){

//         $user_id = Session::get('vendor');

//         $data['user'] = $this->user($user_id);

//         // $data['page'] = "Edit";

//         $data['list'] = Vendor:: find($id);

//         // print_r($data['list'][0]->category_name);

//         // exit;
        
         
//         $data['active'] = 'vendor';

//         return view('vendor.vendor_view',$data);

//         }else{

//             return redirect(env('APP_URL').'vendor/login');

//         }

//     }
    
// ************** End Vendor  ***************************** 

// ************** Start Electrician  ***************************** 
public function addElectrician(Request $request){

        if(!empty(Session::get('vendors'))){

        $user_id = Session::get('vendors');
        $data['user'] = $this->user($user_id);
        if(!empty($request->post('_token'))){ 
        //print_r($user_id); die();
        $input = new Electrician;
        //print_r($input); die();
        //echo "<pre />";print_r($input); die();
        $input->vendor_id = $user_id;
        $input->name = $request->name;
        $input->email = $request->email;
        $input->password = md5($request->password);
        $input->mobile_number = $request->mobile_number;
        
        $achecke = Admin::where('email', $input->email)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same email');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/add-electrician')->withInput();

            exit;

            }
            
        $achecke = Vendor::where('email', $input->email)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same email');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/add-electrician')->withInput();

            exit;

            }
            
          $achecke = Electrician::where('email', $input->email)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same email');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/add-electrician')->withInput();

            exit;

            }
            
          $achecke = Electrician::where('mobile_number', $input->mobile_number)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same mobile Number');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/add-electrician')->withInput();

            exit;

            }
            
           
        try{

            Session::flash('message', 'Electrician created successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            
                //var_dump($request->name); die();
                $data = ['name'=>$request->name,'email'=>$request->email,'password'=>$request->password];
                $user['to'] = $request->email;
                Mail::send('emails.create_electrician', $data, function($message) use ($user) {
                $message->to($user['to']);
                $message->subject("Vehya Login Details");
                });
                
                // $admint_message ="Hi, ". $request->name .' '. "/ Email:- ". $request->email . ' '. "/ Password: ". $request->password . ' '. "/ Click here: ". "https://www.obtclientprojects.com/vehya/vendors/login";
                // $data = ['name'=>"Vish", 'data'=> "Hello Vish"];
                // $user['to']=$request->email;
                // Mail::raw($admint_message, function ($message) use ($user) {
                //     $message->to($user['to']);
                //     $message->subject("Vehya Login Details");
                // });
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Electrician already exists');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/add-electrician')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'vendors/electrician-list');
        
        }

        $data['active'] = 'electrician';

        return view('vendors.electrician_form',$data);

        }else{
            return redirect(env('APP_URL').'vendors/login');
        }

}
    
public function electricianList(Request $request){

       if(!empty(Session::get('vendors'))){

          $user_id = Session::get('vendors');

          $data['user'] = $this->user($user_id);

          $data['electricianlist'] = Electrician::orderBy('id', 'desc')->where('vendor_id', $user_id)->get();

          $data['active'] = 'electrician';

          return view('vendors.electrician_list',$data);

        }else{

            return redirect(env('APP_URL').'vendors/login');

        }

    }
    
public function electricianDelete($id){
    
      if(!empty(Session::get('vendors'))){

        $user_id = Session::get('vendors');
        $data['user'] = $this->user($user_id);
 
      $list = Electrician:: find($id);

        try{

            Session::flash('message', 'Electrician deleted successfully');

            Session::flash('alert_class', 'success');

            $list->delete();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Electrician could not be deleted');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/electrician-list')->withInput();

            exit;

        }

      return redirect(env('APP_URL').'vendors/electrician-list');
      
      }else{
            return redirect(env('APP_URL').'vendors/login');
        }
    }  
    
public function electricianShow($id){

        if(!empty(Session::get('vendors'))){

        $user_id = Session::get('vendors');
        $data['user'] = $this->user($user_id);
        
        $data['list'] = Electrician:: find($id);
            
        $data['active'] = 'electrician';

        return view('vendors.electrician_form_update', $data);

        }else{
            return redirect(env('APP_URL').'vendors/login');
        }

} 
    
public function electricianUpdate(Request $request, $id){
    
        if(!empty(Session::get('vendors'))){

        $user_id = Session::get('vendors');
        $data['user'] = $this->user($user_id);
        //$input = $request->input(); die();
        $data['details'] = Electrician:: find($id);
        $input = Electrician:: find($id);
        $input->name = $request->name;
        $input->email = $request->email;
        $input->mobile_number = $request->mobile_number;
        $input->address = $request->address;
        
        if ($request->hasFile('electrician_image')) {

                $filenameWithExt = $request->file('electrician_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('electrician_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','pdf','docx'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('electrician_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['details']->electrician_image;
                
                }
                
                $input->electrician_image= $fileNameToStore; 
        
        try{

            Session::flash('message', 'Electrician updated successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Electrician could not be updated');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/electrician-list')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'vendors/electrician-list');
        
        $data['active'] = 'electrician';
        
        return redirect(env('APP_URL').'vendors/electrician-list');
      
      }else{
            return redirect(env('APP_URL').'vendors/login');
        }
    }     
  
// ************** End Electrician  *****************************     

// ************** Start Electrician  ***************************** 
public function addJob(Request $request){

        if(!empty(Session::get('vendors'))){

        $user_id = Session::get('vendors');
        $data['user'] = $this->user($user_id);
        if(!empty($request->post('_token'))){ 
        
        $input = new Job;
        $input->first_name = $request->first_name;
        $input->last_name = $request->last_name;
        $input->customer_type = $request->customer_type;
        $input->email = $request->email;
        $input->mobile_number = $request->mobile_number;
        $input->make = $request->make;
        $input->model = $request->model;
        $input->electricians_id = $request->electricians_id;
        $input->ev_location = $request->ev_location;
        $input->ev_location_a = $request->ev_location_a;
        $input->ev_location_b = $request->ev_location_a;
        $input->ev_location_c = $request->ev_location_c;
        $input->ev_location_d = $request->ev_location_d;
        $input->ev_location_ie = $request->ev_location_ie;
        $input->electrical_appliances = $request->electrical_appliances;
        $input->time_range = $request->time_range;
        $input->country = $request->country;
        $input->state = $request->state;
        $input->address = $request->address;
        $input->address = $request->address;
        $input->install_date = $request->install_date;
        $input->install_date = $request->install_date;
        $input->assessment = $request->assessment;
        $input->description = $request->description;
        $input->codescription = $request->codescription;
        $input->pcname = $request->pcname;
        $input->pcaddress = $request->pcaddress;
        $input->terms = $request->terms;
        
        $achecke = Admin::where('email', $input->email)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same email');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/add-job')->withInput();

            exit;

            }
        $achecke = Vendor::where('email', $input->email)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same email');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/add-job')->withInput();

            exit;

            }
            
        $achecke = Job::where('email', $input->email)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same email');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/add-job')->withInput();

            exit;

            }
            
            
          $achecke = Job::where('mobile_number', $input->mobile_number)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same mobile number');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/add-job')->withInput();

            exit;

            }
        
         if ($request->hasFile('charger_image')) {

                $filenameWithExt = $request->file('charger_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('charger_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('charger_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->logo;
                
                }
                
                $input->charger_image= $fileNameToStore;  
                
        if ($request->hasFile('charger_install_image')) {

                $filenameWithExt = $request->file('charger_install_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('charger_install_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('charger_install_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->logo;
                
                }
                
                $input->charger_install_image= $fileNameToStore;  
                
        if ($request->hasFile('electrical_panel_image')) {

                $filenameWithExt = $request->file('electrical_panel_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('electrical_panel_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('electrical_panel_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->logo;
                
                }
                
                $input->electrical_panel_image= $fileNameToStore;    
        if ($request->hasFile('permit_image')) {

                $filenameWithExt = $request->file('permit_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('permit_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('permit_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->logo;
                
                }
                
                $input->permit_image= $fileNameToStore;  
                
            
        if ($request->hasFile('property_image')) {

                $filenameWithExt = $request->file('property_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('property_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('property_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->logo;
                
                }
                
                $input->property_image= $fileNameToStore;    
            
          
          
          
          
          
            
        try{

            Session::flash('message', 'Job created successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Job already exists');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/add-job')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'vendors/job-list');
        
        }
        
        $data['states'] = DB::select("SELECT * FROM `states` WHERE country_id=233");

        if(old('state')){

        $data['cities'] = DB::select("SELECT * FROM `cities` WHERE state_id=".old('state'));

        }
        
        $data['jobmakes'] = DB::select("SELECT * FROM `job_makes`");
        $data['jobmodels'] = DB::select("SELECT * FROM `job_models`");
        $data['electricians'] = DB::select("SELECT * FROM `electricians`");
        
        $data['active'] = 'job';

        return view('vendors.job_form',$data);

        }else{
            return redirect(env('APP_URL').'vendors/login');
        }

}
    
public function jobList($status){

       if(!empty(Session::get('vendors'))){

          $user_id = Session::get('vendors');

          $data['user'] = $this->user($user_id);

        //   $data['joblist'] = Job::where('vendor_id',$user_id)
        //   ->where('status',$status)
        //   ->join('customers', 'jobs.customer_id', "=", 'customers.id')
        //   ->orderBy('customers.id', 'desc')
        //   ->get();
          $data['joblist'] = Job::where('vendor_id',$user_id)
          ->where('status',$status)
          ->join('customers', 'jobs.customer_id', "=", 'customers.id')
          //->select("jobs.*", "customers.*", "states.name AS state", "electricians.name AS electrician_id")
          ->select("jobs.*", "customers.*", "states.name AS state")
          ->join('states', 'customers.state', "=", 'states.id')
          //->join('electricians', 'jobs.electrician_id', "=", 'electricians.id')
          ->orderBy('customers.id', 'desc')
          ->get();
          // $data['joblist'] = Job::where('vendor_id',$user_id)->where('status',$status)->orderBy('id', 'desc')->get();
          $data['electricians'] = Electrician::all();
          $data['active'] = 'job';
          $data['status'] = $status;
         

          return view('vendors.job_list',$data);

        }else{

            return redirect(env('APP_URL').'vendors/login');

        }

    }

public function jobListStatus($status,$id){
    if(!empty(Session::get('vendors'))){
        $user_id = Session::get('vendors');
        $data['user'] = $this->user($user_id);
        try{
            Session::flash('message', 'Successfully done');
            Session::flash('alert_class', 'success');
            if($status == 'accept'){
            Job::where('customer_id',$id)->update(["status"=>'active']);
            return redirect(env('APP_URL').'vendors/job-list/active');
            }elseif($status == 'cancle'){
            Job::where('customer_id',$id)->update(["vendor_id"=>null,"status"=>'pending']);
            
            //echo ($data['details'][0]->email); die();
            //var_dump($data['details']); die();
                $admint_message ="Hi, Admin- Your Assigned Job Decline";
                $data = ['name'=>"Vish", 'data'=> "Hello Vish"];
                $user['to']='amitrathuarpsit@gmail.com';
                Mail::raw($admint_message, function ($message) use ($user) {
                    $message->to($user['to']);
                    $message->subject("Vehya Job Decline");
                });
            
            return redirect(env('APP_URL').'vendors/job-list/assign');
            }elseif($status == 'complete'){
            Job::where('customer_id',$id)->update(["status"=>'complete']);
            return redirect(env('APP_URL').'vendors/job-list/complete');
            }
            }catch(\Exception $exception)
        {
            $errormsg = 'Database error! ' . $exception->getCode();
            Session::flash('message', 'Vendor not assigned');
            Session::flash('alert_class', 'danger');
            return redirect(env('APP_URL').'vendors/job-list')->withInput();
            exit;
        }
    }else{
            return redirect(env('APP_URL').'vendors/login');
    }
}

public function jobShow($id){

        if(!empty(Session::get('vendors'))){

        $user_id = Session::get('vendors');
        $data['user'] = $this->user($user_id);
        
        $data['list'] = Customer:: find($id);
        //$data['list'] = Customer::where("customer_type", $cid)->where("customer_type", $cid)->get();
        //print_r($data['list']); die(); 
        $data['vendornmaes'] = Vendor::where("status",1)->get();
        $data['jobdetail'] = Job::where("customer_id", $id)->get();
        //echo "<pre />";print_r($data['jobdetail'][0]->electrical_appliances); die();
        // $data['jobdetail'][0]->electrical_appliances
         $data['electrical_appliances'] = array_map('trim', explode(",",$data['jobdetail'][0]->electrical_appliances));
        $data['industry_location'] = array_map('trim', explode(",",$data['jobdetail'][0]->industry_location));
        // print_r($data['jobdetail']); exit();
        $data['active'] = 'customer';
        

        return view('vendors.job_view', $data);

        }else{
            return redirect(env('APP_URL').'vendors/login');
        }

} 

public function jobUpdate(Request $request, $id){
    
        if(!empty(Session::get('vendors'))){

        $user_id = Session::get('vendors');
        $data['user'] = $this->user($user_id);
        //$input = $request->input();
        
        $input = Job:: find($id);
        $input->first_name = $request->first_name;
        $input->last_name = $request->last_name;
        $input->customer_type = $request->customer_type;
        $input->email = $request->email;
        $input->mobile_number = $request->mobile_number;
        $input->make = $request->make;
        $input->model = $request->model;
        $input->electricians_id = $request->electricians_id;
        $input->ev_location = $request->ev_location;
        $input->ev_location_a = $request->ev_location_a;
        $input->ev_location_b = $request->ev_location_b;
        $input->ev_location_c = $request->ev_location_c;
        $input->ev_location_d = $request->ev_location_d;
        $input->ev_location_ie = $request->ev_location_ie;
        $input->electrical_appliances = $request->electrical_appliances;
        $input->country = $request->country;
        $input->state = $request->state;
        $input->address = $request->address;
        $input->install_date = $request->install_date;
        $input->assessment = $request->assessment;
        $input->description = $request->description;
        $input->codescription = $request->codescription;
        $input->pcname = $request->pcname;
        $input->pcaddress = $request->pcaddress;
        $input->time_range = $request->time_range;
        $input->terms = 'agree';
        $input->status = 2;
        
        if ($request->hasFile('charger_image')) {

                $filenameWithExt = $request->file('charger_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('charger_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('charger_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->logo;
                
                }
                
                $input->charger_image= $fileNameToStore;
                
                
        if ($request->hasFile('charger_install_image')) {

                $filenameWithExt = $request->file('charger_install_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('charger_install_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('charger_install_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->logo;
                
                }
                
                $input->charger_install_image= $fileNameToStore;  
                
        if ($request->hasFile('electrical_panel_image')) {

                $filenameWithExt = $request->file('electrical_panel_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('electrical_panel_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('electrical_panel_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->logo;
                
                }
                
                $input->electrical_panel_image= $fileNameToStore;    
        if ($request->hasFile('permit_image')) {

                $filenameWithExt = $request->file('permit_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('permit_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('permit_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->logo;
                
                }
                
                $input->permit_image= $fileNameToStore;  
                
            
        if ($request->hasFile('property_image')) {

                $filenameWithExt = $request->file('property_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('property_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('property_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendors']->logo;
                
                }
                
                $input->property_image= $fileNameToStore;    
            
                 
                
        
        try{

            Session::flash('message', 'Job Updated successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Job  Does Not Update successfully');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/job-list')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'vendors/job-list');
        
        $data['states'] = DB::select("SELECT * FROM `states` WHERE country_id=233");

        if(old('state')){

        $data['cities'] = DB::select("SELECT * FROM `cities` WHERE state_id=".old('state'));

        }
        
        $data['active'] = 'job';
        
        return redirect(env('APP_URL').'vendors/job-list');
      
      }else{
            return redirect(env('APP_URL').'vendors/login');
        }
    }   
    
public function survey($id){

        if(!empty(Session::get('vendors'))){

        $user_id = Session::get('vendors');
        $data['user'] = $this->user($user_id);
        
        
        $data['list'] = Customer:: find($id);
        //print_r($data['list']); die(); 
        $data['jobdetail'] = Job::where("customer_id", $id)->get();
        //echo "<pre />";print_r($data['jobdetail'][0]->change_order); die();
        $data['active'] = 'job';
        return view('vendors.survey_update', $data);
        }else{
            return redirect(env('APP_URL').'vendors/login');
        }

} 

public function surveyUpdate(Request $request, $id){
    
        if(!empty(Session::get('vendors'))){
        $user_id = Session::get('vendors');
        $data['user'] = $this->user($user_id);
        //$input = $request->input();
        
        $input = Customer:: find($id);
        $input->name = $request->name;
        $input->lname = $request->lname;
        $input->address = $request->address;
        
        
        try{

            Session::flash('message', 'Survey successfully Done');

            Session::flash('alert_class', 'success');
            $input->save();
            
        $data['jobs'] = Job::where('customer_id', $id)->get();
        if ($request->hasFile('permit_image')) {

                $filenameWithExt = $request->file('permit_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('permit_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','pdf','docx'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('permit_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['jobs'][0]->permit_image;
                
                }
                
                $input->permit_image = $fileNameToStore;  
                
        if ($request->hasFile('charger_install_image')) {

                $filenameWithExt = $request->file('charger_install_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('charger_install_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','pdf','docx'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('charger_install_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['jobs'][0]->charger_install_image;
                
                }
                
                $input->charger_install_image= $fileNameToStore;  
                
        if ($request->hasFile('electrical_panel_image')) {

                $filenameWithExt = $request->file('electrical_panel_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('electrical_panel_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','pdf','docx'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('electrical_panel_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['jobs'][0]->electrical_panel_image;
                
                }
                
                $input->electrical_panel_image= $fileNameToStore;    
                
                
        if ($request->hasFile('property_image')) {

                $filenameWithExt = $request->file('property_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('property_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','pdf','docx'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('property_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['jobs'][0]->property_image;
                
                }
                
                $input->property_image= $fileNameToStore;  
        //echo "<pre />";print_r($data['jobs']); die();           
        $data['update'] = Job::where('customer_id', $id)->update(["change_order"=>$request->change_order, "permit_number"=>$request->permit_number, "inspection_date"=>$request->inspection_date, "inspector_name"=>$request->inspector_name, "surveyed_name"=>$request->surveyed_name, "surveyed_mobile"=>$request->surveyed_mobile, "surveyed_email"=>$request->surveyed_email, "description"=>$request->description, "survey_a"=>$request->survey_a, "survey_b"=>$request->survey_b, "survey_c"=>$request->survey_c, "survey_d"=>$request->survey_d, "inspection_complete"=>$request->inspection_complete, "permit_image"=>$input->permit_image, "charger_install_image"=>$input->charger_install_image, "electrical_panel_image"=>$input->electrical_panel_image, "property_image"=>$input->property_image ]);
        //echo "<pre />";print_r($data); die();
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Somthing Error');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/survey/'.$id)->withInput();

            exit;

        }
        return redirect(env('APP_URL').'vendors/survey/'.$id);
        
        $data['active'] = 'job';
        
        return redirect(env('APP_URL').'vendors/survey/'.$id);
      
      }else{
            return redirect(env('APP_URL').'vendors/login');
        }
    } 

public function jobView($id){

        if(!empty(Session::get('vendors'))){

        $user_id = Session::get('vendors');

        $data['user'] = $this->user($user_id);

        $data['list'] = Job:: find($id);

        // print_r($data['list'][0]->category_name);

        // exit;
        
         
        $data['active'] = 'job';

        return view('vendors.job_view', $data);

        }else{

            return redirect(env('APP_URL').'vendors/login');

        }

    }
// ********************* End Job **************************    
    
public function inspectionStatus(Request $request, $id){
    
        if(!empty(Session::get('vendors'))){

        $user_id = Session::get('vendors');
        $data['user'] = $this->user($user_id);
        //$input = $request->input();
        
        $input = Job:: find($id);
        //print_r($input); die();
        $input->inspection_status = $request->inspection_status;
    
        try{

            Session::flash('message',  'successfully Done');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Somthing Error');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/vendor-list')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'vendors/vendor-list');
        
        $data['active'] = 'vendor';
        
        return redirect(env('APP_URL').'vendors/vendor-list');
      
      }else{
            return redirect(env('APP_URL').'vendors/login');
        }
    }      

public function assignElectrician(Request $request){

        if(!empty(Session::get('vendors'))){
        $user_id = Session::get('vendors');
        $data['user'] = $this->user($user_id);
        if(!empty($request->post('_token'))){ 
            // print_r($request->post());exit;
        try{
            Session::flash('message', 'Electrician Assigned successfully');
            Session::flash('alert_class', 'success');
             
            $data['vendor'] = Job::where('customer_id',$request->id)->update(["electrician_id"=>$request->electrician_id,"electrician_status"=>'electrician-assign']);
            // return response($data); die();
            $dta['details'] = Electrician::where("id", $request->electrician_id)->where("status",1)->get();
            //echo ($dta['details'][0]->email); die();
            //var_dump($data['details']); die();
                $data = ['name'=>$dta['details'][0]->name, 'data'=> ""];
                $user['to'] = $dta['details'][0]->email;
                Mail::send('emails.assign_electrician', $data, function($message) use ($user) {
                $message->to($user['to']);
                $message->subject("Notification");
                });
            
                // $admint_message ="Hi, ". $dta['details'][0]->name .' '. "/ You Have Received New Job ";
                // $data = ['name'=>"Vish", 'data'=> "Hello Vish"];
                // $user['to']=$dta['details'][0]->email;
                // Mail::raw($admint_message, function ($message) use ($user) {
                //     $message->to($user['to']);
                //     $message->subject("Vehya Job Assign");
                // });
            
            return redirect(env('APP_URL').'vendors/job-list/active');
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Electrician Not assigned');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'vendors/job-list/active')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'vendors/job-list/active');
        
        }
        $data['active'] = 'customer';
        return view('vendors.customer_form', $data);

        }else{
            return redirect(env('APP_URL').'vendors/login');
        }

}   





























public function city($id){

      $Cities = Cities:: where('state_id',$id)->get();

      foreach($Cities as $city){

          echo "<option value='$city->id'>$city->name</option>";

      }

    }







// *************  User Logout ********************** 
public function logout(Request $request){

        $request->session()->flush();

        return redirect(env('APP_URL').'vendors/login');

    }

public function user($user_id){

        $user = DB::select("SELECT * FROM `vendors` WHERE id = $user_id");

        if(!empty($user)){

        return $user[0];

        }else{

        print_r("<script>window.location.replace('".env('APP_URL').'logout'."');</script>");

        exit;

        }

    }







}