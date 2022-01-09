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
use App\Models\Customer;
use App\Models\Job;
use App\Models\Industry;
use App\Models\Testimonial;

use App\Mail\MyTestMail;

use App\Models\Countries;

use App\Models\States;

use App\Models\Cities;

use Illuminate\Support\Facades\Storage;

class AdminController extends Controller

{

public function index(){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');

        $data['user'] = $this->user($user_id);
        $data['vendorlist'] = Vendor::orderBy('id', 'desc')->get();

        $data['active'] = 'job';

        return redirect(env('APP_URL').'admin/customer-list/pending');

        }else{

            return redirect(env('APP_URL').'admin/login');

        }

    }

public function login(Request $request){

        if(empty(Session::get('admin'))){

        if(!empty($request->post('_token'))){

            $Atquery = new Atquery;

            $ext = $Atquery->real($request->post());

            extract($ext);

            $admin = Admin::where(["email"=>$email, "password"=>md5($password)]);

            if($admin->count() == 1){

                $request->session()->put('admin', $admin->get()[0]->id);

                return redirect(env('APP_URL').'admin/customer-list/pending');
                //return redirect(env('APP_URL').'admin/dashboard');

            }else{

                Session::flash('message', 'Wrong email or password');

                Session::flash('alert_class', 'danger');

                return redirect(env('APP_URL').'admin/login');

            }

        }else{

        return view('admin.login');

        }

    }else{

        return redirect(env('APP_URL').'admin/');

    }

    }

public function forgetPassword(Request $request){

        if(empty(Session::get('admin'))){

            if (!empty($request->post('_token'))){

                $email = $request->post('email');

                $check = DB::SELECT("SELECT * FROM `admins` WHERE email='".$email."'");

                if(!empty($check)){

                    $token = md5(date('ymdHis').rand(100000,999999));

                    DB::INSERT("INSERT INTO `password_resets`(`email`, `type`, `token`) VALUES ('$email',1,'$token')");

                    $Atmail = new Atmail;

                    $maildata['templete'] = 'forgot_password';

                    $maildata['name'] = $check[0]->name;

                    $maildata['token'] = $token;

                    if($Atmail->mailit($request->post('email'),$maildata)){

                    Session::flash('email', $request->post('email')); 

                    return view('admin.message');

                    }

                }else{

                    Session::flash('message', 'Email not match');

                    Session::flash('alert_class', 'danger');

                    return redirect(env('APP_URL').'admin/forget-password');

                }

            }else{

                return view('admin.forget_password');

            }

        }else{

            return redirect(env('APP_URL').'admin/customer-list/pending');

        }

    }

public function recover_password($token,Request $request){

        if(empty(Session::get('admin'))){

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

                DB::UPDATE("UPDATE `admins` SET `password`=md5('$password') WHERE email='".$check[0]->email."'");

            }else{



            }

            DB::DELETE("DELETE FROM `password_resets` WHERE id=".$check[0]->id);

            Session::flash('message', 'Password changed successfully');

            Session::flash('alert_class', 'success');

            return redirect(env('APP_URL').'admin/login');

            }else

            return view('admin.recover_password');

        }

        else{

            return redirect(env('APP_URL').'admin/login');

        }

        }else{

            return redirect(env('APP_URL').'admin/customer-list/pending');

        }

    }

    

public function userProfile(Request $request){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');

        $data['user'] = $this->user($user_id);

        if(!empty($request->post('_token'))){

            $ext = $request->post();

            // if($ext['old_password'] == $data['user']->password){

            if($ext['confirm_password'] == $ext['password']){

                Admin::where('id',$user_id)->update(['password'=>$ext['password']]);
                
                Session::flash('message', 'User Password Reset successfully');

                Session::flash('alert_class', 'success');
            }

            // }
             return redirect(env('APP_URL').'admin/user-profile');

        }else{

        $data['page'] = "Edit";

        $data['active'] = 'admin';

        return view('admin.user_profile',$data);

        }

        }else{

            return redirect(env('APP_URL').'admin/login');

        }

    }


// ************** Start Vendor *****************************    
public function addVendor(Request $request){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        if(!empty($request->post('_token'))){ 
        
        $input = new Vendor;
        $input->name = $request->name;
        $input->email = $request->email;
        $input->password = md5($request->password);
        $input->mobile_number = $request->mobile_number;
        // $input->address = $request->address;
        // $input->status = $request->status;
        
        $achecke = Admin::where('email', $input->email)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same email');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/add-vendor')->withInput();

            exit;

            }
            
        $achecke = Vendor::where('email', $input->email)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same email');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/add-vendor')->withInput();

            exit;

            }
            
          $achecke = Vendor::where('mobile_number', $input->mobile_number)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same mobile Number');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/add-vendor')->withInput();

            exit;

            }
            
        try{

            Session::flash('message', 'Vendor Created successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            //var_dump($request->name); die();
                $data = ['name'=>$request->name,'email'=>$request->email,'password'=>$request->password];
                $user['to'] = $request->email;
                Mail::send('create_vendor', $data, function($message) use ($user) {
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

            Session::flash('message', 'Vendor already exists');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/add-vendor')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'admin/vendor-list');
        
        }

        $data['active'] = 'vendor';
        return view('admin.vendor_form',$data);
        }else{

            return redirect(env('APP_URL').'admin/login');

        }

    }

public function vendorList(Request $request){

       if(!empty(Session::get('admin'))){

          $user_id = Session::get('admin');

          $data['user'] = $this->user($user_id);

          $data['vendorlist'] = Vendor::orderBy('id', 'desc')->get();

          $data['active'] = 'vendor';

          return view('admin.vendor_list',$data);

        }else{

            return redirect(env('APP_URL').'admin/login');

        }

    }
    
public function vendorDelete($id){
    
      if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
 
      $list = Vendor:: find($id);

        try{

            Session::flash('message', 'Vendor Deleted successfully');

            Session::flash('alert_class', 'success');

            $list->delete();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Vendor do not Delete');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/vendor-list')->withInput();

            exit;

        }

      return redirect(env('APP_URL').'admin/vendor-list');
      
      }else{
            return redirect(env('APP_URL').'admin/login');
        }
    }    
    
public function vendorShow($id){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        
        $data['list'] = Vendor:: find($id);
        $data['states'] = DB::select("SELECT * FROM `states` WHERE country_id=233");

        if(old('state')){

        $data['cities'] = DB::select("SELECT * FROM `cities` WHERE state_id=".old('state'));
        }    
        $data['active'] = 'vendor';

        return view('admin.vendor_form_update', $data);

        }else{
            return redirect(env('APP_URL').'admin/login');
        }

} 
    
public function vendorUpdate(Request $request, $id){
    
        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        //$input = $request->input();
        $data['vendors'] = Vendor:: find($id);
        $input = Vendor:: find($id);
        $input->name = $request->name;
        $input->company_name = $request->company_name;
        $input->password = $request->password;
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
    
        $achecke = Admin::where('email', $input->email)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same email');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/vendor-list')->withInput();

            exit;

            }
            
         if ($request->hasFile('profile_image')) {

                $filenameWithExt = $request->file('profile_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('profile_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','pdf'])){
                
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

            Session::flash('message', 'Vendor  Does Not Update successfully');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/vendor-list-show/'.$id)->withInput();

            exit;

        }
        return redirect(env('APP_URL').'admin/vendor-list-show/'.$id);
        $data['active'] = 'vendor';
        
        return redirect(env('APP_URL').'admin/vendor-list-show/'.$id);
      
      }else{
            return redirect(env('APP_URL').'admin/login');
        }
    }    

public function vendorView($id){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');

        $data['user'] = $this->user($user_id);

        // $data['page'] = "Edit";

        $data['list'] = Vendor:: find($id);

        // print_r($data['list'][0]->category_name);

        // exit;
        
         
        $data['active'] = 'vendor';

        return view('admin.vendor_view',$data);

        }else{

            return redirect(env('APP_URL').'admin/login');

        }

    }
    
public function vendorActive(Request $request, $id){
    
        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        //$input = $request->input();
        
        $input = Vendor:: find($id);
        $input->status = $request->status;
        
    
        try{

            Session::flash('message', ' Successfully Done');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Somthing Error');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/vendor-list-show/'.$id)->withInput();

            exit;

        }
        return redirect(env('APP_URL').'admin/vendor-list-show/'.$id);
        
        $data['active'] = 'vendor';
        
        return redirect(env('APP_URL').'admin/vendor-list-show/'.$id);
      
      }else{
            return redirect(env('APP_URL').'admin/login');
        }
    }  
    
public function vendorDisable(Request $request, $id){
    
        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        //$input = $request->input();
        
        $input = Vendor:: find($id);
        $input->vendor_status = $request->vendor_status;
    
        try{

            Session::flash('message',  'successfully Done');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Somthing Error');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/vendor-list')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'admin/vendor-list');
        
        $data['active'] = 'vendor';
        
        return redirect(env('APP_URL').'admin/vendor-list');
      
      }else{
            return redirect(env('APP_URL').'admin/login');
        }
    }   
    

    
// ************** End Vendor  ***************************** 

// ************** Start Electrician  ***************************** 
public function addElectrician(Request $request){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        if(!empty($request->post('_token'))){ 
        
        $input = new Electrician;
        $input->name = $request->name;
        $input->email = $request->email;
        $input->password = $request->password;
        $input->mobile_number = $request->mobile_number;
        
        $achecke = Admin::where('email', $input->email)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same email');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/add-electrician')->withInput();

            exit;

            }
            
        $achecke = Vendor::where('email', $input->email)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same email');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/add-electrician')->withInput();

            exit;

            }
            
          $achecke = Electrician::where('email', $input->email)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same email');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/add-electrician')->withInput();

            exit;

            }
            
          $achecke = Electrician::where('mobile_number', $input->mobile_number)->count();

            if($achecke > 0){

            Session::flash('message', 'User already exists with same mobile Number');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/add-electrician')->withInput();

            exit;

            }
            
        if ($request->hasFile('electrician_image')) {

                $filenameWithExt = $request->file('electrician_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('electrician_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('electrician_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['product']->logo;
                
                }
                
                $input->electrician_image= $fileNameToStore;
        
            
            
        try{

            Session::flash('message', 'Electrician Created successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Electrician already exists');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/add-electrician')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'admin/electrician-list');
        
        }

        $data['active'] = 'electrician';

        return view('admin.electrician_form',$data);

        }else{
            return redirect(env('APP_URL').'admin/login');
        }

}

    

public function electricianList(Request $request){

       if(!empty(Session::get('admin'))){

          $user_id = Session::get('admin');

          $data['user'] = $this->user($user_id);

          $data['electricianlist'] = Electrician::orderBy('id', 'desc')->get();

          $data['active'] = 'electrician';

          return view('admin.electrician_list',$data);

        }else{

            return redirect(env('APP_URL').'admin/login');

        }

    }
    
public function electricianDelete($id){
    
      if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
 
      $list = Electrician:: find($id);

        try{

            Session::flash('message', 'Electrician Deleted successfully');

            Session::flash('alert_class', 'success');

            $list->delete();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Electrician do not Delete');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/electrician-list')->withInput();

            exit;

        }

      return redirect(env('APP_URL').'admin/electrician-list');
      
      }else{
            return redirect(env('APP_URL').'admin/login');
        }
    }  
    
public function electricianShow($id){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        
        $data['list'] = Electrician:: find($id);
            
        $data['active'] = 'electrician';

        return view('admin.electrician_form_update', $data);

        }else{
            return redirect(env('APP_URL').'admin/login');
        }

} 
    
public function electricianUpdate(Request $request, $id){
    
        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        //$input = $request->input();
        
        $input = Electrician:: find($id);
        $input->name = $request->name;
        $input->email = $request->email;
        $input->mobile_number = $request->mobile_number;
        
        if ($request->hasFile('electrician_image')) {

                $filenameWithExt = $request->file('electrician_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('electrician_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('electrician_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['product']->logo;
                
                }
                
                $input->electrician_image= $fileNameToStore;
        
        try{

            Session::flash('message', 'Electrician Updated successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Electrician  Does Not Update successfully');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/electrician-list')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'admin/electrician-list');
        
        $data['active'] = 'electrician';
        
        return redirect(env('APP_URL').'admin/electrician-list');
      
      }else{
            return redirect(env('APP_URL').'admin/login');
        }
    }     
  
// ************** End Electrician  *****************************     

// ************** Start Product  ***************************** 
public function addProduct(Request $request){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        if(!empty($request->post('_token'))){ 
        
        $input = new Product;
        $input->name = $request->name;
        $input->price = $request->price;
        $input->max_charge = $request->max_charge;
        $input->amperage = $request->amperage;
        $input->voltage = $request->voltage;
        $input->safety = $request->safety;
        $input->warranty = $request->warranty;
        $input->cable_length = $request->cable_length;
        $input->connectivity = $request->connectivity;
        $input->efficiency = $request->efficiency;
        $input->product_image = $request->product_image;
        
        if ($request->hasFile('product_image')) {

                $filenameWithExt = $request->file('product_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('product_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('product_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['product']->logo;
                
                }
                
                $input->product_image= $fileNameToStore;
        
        try{

            Session::flash('message', 'Product Created successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Product already exists');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/add-product')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'admin/product-list');
        
        }

        $data['active'] = 'product';

        return view('admin.product_form', $data);

        }else{
            return redirect(env('APP_URL').'admin/login');
        }

}

public function productList(Request $request){

       if(!empty(Session::get('admin'))){

          $user_id = Session::get('admin');

          $data['user'] = $this->user($user_id);

          $data['productlist'] = Product::orderBy('id', 'desc')->get();

          $data['active'] = 'product';

          return view('admin.product_list',$data);

        }else{

            return redirect(env('APP_URL').'admin/login');

        }

    }
    
public function productDelete($id){
    
      if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
 
      $list = Product:: find($id);

        try{

            Session::flash('message', 'Product Deleted successfully');

            Session::flash('alert_class', 'success');

            $list->delete();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Product do not Delete');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/product-list')->withInput();

            exit;

        }

      return redirect(env('APP_URL').'admin/product-list');
      
      }else{
            return redirect(env('APP_URL').'admin/login');
        }
    } 
    
public function productShow($id){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        
        $data['list'] = Product:: find($id);
        //print_r($data['list']); die();    
        $data['active'] = 'product';

        return view('admin.product_form_update', $data);

        }else{
            return redirect(env('APP_URL').'admin/login');
        }

} 
    
public function productUpdate(Request $request, $id){
    
        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        //$input = $request->input();
        
        $input = Product:: find($id);
        $input->name = $request->name;
        $input->price = $request->price;
        $input->max_charge = $request->max_charge;
        $input->amperage = $request->amperage;
        $input->voltage = $request->voltage;
        $input->safety = $request->safety;
        $input->warranty = $request->warranty;
        $input->cable_length = $request->cable_length;
        $input->connectivity = $request->connectivity;
        $input->efficiency = $request->efficiency;
        $input->product_image = $request->product_image;
        
        if ($request->hasFile('product_image')) {

                $filenameWithExt = $request->file('product_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('product_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('product_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['product']->logo;
                
                }
                
                $input->product_image= $fileNameToStore;
                
                
        try{

            Session::flash('message', 'Product Updated successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Product  Does Not Update successfully');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/product-list')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'admin/product-list');
        
        $data['active'] = 'product';
        
        return redirect(env('APP_URL').'admin/product-list');
      
      }else{
            return redirect(env('APP_URL').'admin/login');
        }
    }   
    
public function productView($id){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');

        $data['user'] = $this->user($user_id);

        // $data['page'] = "Edit";

        $data['list'] = Product:: find($id);

        // print_r($data['list'][0]->category_name);

        // exit;
        
         
        $data['active'] = 'product';

        return view('admin.product_view',$data);

        }else{

            return redirect(env('APP_URL').'admin/login');

        }

    }    
    
// ************** End Products  *****************************  

// ************** Start Industry ***************************** 
public function addIndustry(Request $request){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        if(!empty($request->post('_token'))){ 
        
        $input = new Industry;
        $input->name = $request->name;
        $input->industry_image = $request->industry_image;
        
        if ($request->hasFile('industry_image')) {

                $filenameWithExt = $request->file('industry_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('industry_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','svg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('industry_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['industry']->logo;
                
                }
                
                $input->industry_image= $fileNameToStore;
        
        try{

            Session::flash('message', 'Industry Created successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Industry already exists');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/add-industry')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'admin/industry-list');
        
        }

        $data['active'] = 'industry';

        return view('admin.industry_form', $data);

        }else{
            return redirect(env('APP_URL').'admin/login');
        }

}

public function industryList(Request $request){

       if(!empty(Session::get('admin'))){

          $user_id = Session::get('admin');

          $data['user'] = $this->user($user_id);

          $data['industrylist'] = Industry::orderBy('id', 'desc')->get();

          $data['active'] = 'industry';

          return view('admin.industry_list',$data);

        }else{

            return redirect(env('APP_URL').'admin/login');

        }

    }
    
public function industryDelete($id){
    
      if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
 
      $list = Industry:: find($id);

        try{

            Session::flash('message', 'Industry Deleted successfully');

            Session::flash('alert_class', 'success');

            $list->delete();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Industry do not Delete');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/industry-list')->withInput();

            exit;

        }

      return redirect(env('APP_URL').'admin/industry-list');
      
      }else{
            return redirect(env('APP_URL').'admin/login');
        }
    }  
    
public function industryShow($id){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        
        $data['list'] = Industry:: find($id);
        //print_r($data['list']); die();    
        $data['active'] = 'industry';

        return view('admin.industry_form_update', $data);

        }else{
            return redirect(env('APP_URL').'admin/login');
        }

} 
    
public function industryUpdate(Request $request, $id){
    
        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        //$input = $request->input();
        
        $input = Industry:: find($id);
        $input->name = $request->name;
        $input->industry_image = $request->industry_image;
        
        if ($request->hasFile('industry_image')) {

                $filenameWithExt = $request->file('industry_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('industry_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','svg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('industry_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['industry']->logo;
                
                }
                
                $input->industry_image= $fileNameToStore;
                
                
        try{

            Session::flash('message', 'Industry Updated successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Industry  Does Not Update successfully');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/industry-list')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'admin/industry-list');
        
        $data['active'] = 'industry';
        
        return redirect(env('APP_URL').'admin/industry-list');
      
      }else{
            return redirect(env('APP_URL').'admin/login');
        }
    }      

// ************** End Industry  ***************************** 

// ************** Start Testimonial ***************************** 
public function addTestimonial(Request $request){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        if(!empty($request->post('_token'))){ 
        
        $input = new Testimonial;
        $input->name = $request->name;
        $input->country = $request->country;
        $input->message = $request->message;
        $input->testimonial_image = $request->testimonial_image;
        
        if ($request->hasFile('testimonial_image')) {

                $filenameWithExt = $request->file('testimonial_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('testimonial_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','svg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('testimonial_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['testimonial']->logo;
                
                }
                
                $input->testimonial_image= $fileNameToStore;
        
        try{

            Session::flash('message', 'Testimonial Created successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Testimonial already exists');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/add-testimonial')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'admin/testimonial-list');
        
        }

        $data['active'] = 'testimonial';

        return view('admin.testimonial_form', $data);

        }else{
            return redirect(env('APP_URL').'admin/login');
        }

}

public function testimonialList(Request $request){

       if(!empty(Session::get('admin'))){

          $user_id = Session::get('admin');

          $data['user'] = $this->user($user_id);

          $data['testimoniallist'] = Testimonial::orderBy('id', 'desc')->get();

          $data['active'] = 'testimonial';

          return view('admin.testimonial_list',$data);

        }else{

            return redirect(env('APP_URL').'admin/login');

        }

    }
    
public function testimonialDelete($id){
    
      if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
 
      $list = Testimonial:: find($id);

        try{

            Session::flash('message', 'Testimonial Deleted successfully');

            Session::flash('alert_class', 'success');

            $list->delete();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Testimonial do not Delete');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/testimonial-list')->withInput();

            exit;

        }

      return redirect(env('APP_URL').'admin/testimonial-list');
      
      }else{
            return redirect(env('APP_URL').'admin/login');
        }
    }  
    
public function testimonialShow($id){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        
        $data['list'] = Testimonial:: find($id);
        //print_r($data['list']); die();    
        $data['active'] = 'testimonial';

        return view('admin.testimonial_form_update', $data);

        }else{
            return redirect(env('APP_URL').'admin/login');
        }

} 
    
public function testimonialUpdate(Request $request, $id){
    
        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        //$input = $request->input();
        
        $input = Testimonial:: find($id);
        $input->name = $request->name;
        $input->country = $request->country;
        $input->message = $request->message;
        $input->testimonial_image = $request->testimonial_image;
        
        if ($request->hasFile('testimonial_image')) {

                $filenameWithExt = $request->file('testimonial_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('testimonial_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg','svg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('testimonial_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['testimonial']->logo;
                
                }
                
                $input->testimonial_image= $fileNameToStore;
                
                
        try{

            Session::flash('message', 'Testimonial Updated successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Testimonial  Does Not Update successfully');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/testimonial-list')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'admin/testimonial-list');
        
        $data['active'] = 'testimonial';
        
        return redirect(env('APP_URL').'admin/testimonial-list');
      
      }else{
            return redirect(env('APP_URL').'admin/login');
        }
    }      

// ************** End Testimonial  ***************************** 

// ************** Start Customer  ***************************** 
public function addCustomer(Request $request){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        if(!empty($request->post('_token'))){ 
        
        $input = new Customer;
        $input->name = $request->name;
        $input->customer_type = $request->customer_type;
        $input->email = $request->email;
        $input->password = $request->password;
        $input->mobile_number = $request->mobile_number;
        $input->country = "United State";
        $input->state = $request->state;
        $input->address = $request->address;
        $input->card_number = $request->card_number;
        $input->expiration_date = $request->expiration_date;
        $input->security_code = $request->security_code;
        $input->billing_address = $request->billing_address;
        $input->profile_image = $request->profile_image;
        
        
        if ($request->hasFile('profile_image')) {

                $filenameWithExt = $request->file('profile_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('profile_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('profile_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['product']->logo;
                
                }
                
                $input->profile_image= $fileNameToStore;
        
        try{

            Session::flash('message', 'Customer Created successfully');

            Session::flash('alert_class', 'success');

            $input->save();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Customer already exists');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/add-customer')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'admin/customer-list');
        
        }
        $data['states'] = DB::select("SELECT * FROM `states` WHERE country_id=233");
        
        $data['active'] = 'customer';

        return view('admin.customer_form', $data);

        }else{
            return redirect(env('APP_URL').'admin/login');
        }

}

public function customerList($status){

       if(!empty(Session::get('admin'))){

          $user_id = Session::get('admin');

          $data['user'] = $this->user($user_id);

          $data['customerlist'] = DB::table('jobs')
          //->select('jobs.*','customers.*','states.name AS state','vendors.name AS vendor_id')
          ->select('jobs.*','customers.*','states.name AS state')
          ->join('customers', 'jobs.customer_id', "=", 'customers.id')
          ->join('states', 'customers.state', "=", 'states.id')
          //->join('vendors', 'jobs.vendor_id', "=", 'vendors.id')
          ->where('jobs.status',$status)
        //   ->join('states', 'customers.state', "=", 'states.id')
          ->get();
          $data['vendornmaes'] = Vendor::where("status",1)->get();
          $data['active'] = 'customer';
          $data['status'] = $status;
          //return response($data);
          return view('admin.customer_list',$data);

        }else{
            return redirect(env('APP_URL').'admin/login');
        }

    }
    
public function jobListStatus($id){
    if(!empty(Session::get('admin'))){
        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        try{
            Session::flash('message', 'Successfully Done');
            Session::flash('alert_class', 'success');
            Job::where('customer_id',$id)->update(["admin_status"=>1]);
            return redirect(env('APP_URL').'admin/customer-list/complete');
            }catch(\Exception $exception)
        {
            $errormsg = 'Database error! ' . $exception->getCode();
            Session::flash('message', 'Vendor Not assigned');
            Session::flash('alert_class', 'danger');
            return redirect(env('APP_URL').'admin/customer-list/complete');
            exit;
        }
    }else{
            return redirect(env('APP_URL').'admin/login');
    }
}
    
public function customerDelete($id){
    
      if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
 
      $list = Customer:: find($id);

        try{

            Session::flash('message', 'Customer Deleted successfully');

            Session::flash('alert_class', 'success');

            $list->delete();
            
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Customer do not Delete');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/customer-list')->withInput();

            exit;

        }

      return redirect(env('APP_URL').'admin/customer-list');
      
      }else{
            return redirect(env('APP_URL').'admin/login');
        }
    }  

public function survey($id){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        
        
        $data['list'] = Customer:: find($id);
        //print_r($data['list']); die(); 
        $data['jobdetail'] = Job::where("customer_id", $id)->get();
        //echo "<pre />";print_r($data['jobdetail'][0]->change_order); die();
        $data['active'] = 'customer';
        return view('admin.survey_update', $data);
        }else{
            return redirect(env('APP_URL').'admin/login');
        }

} 

public function surveyUpdate(Request $request, $id){
    
        if(!empty(Session::get('admin'))){
        $user_id = Session::get('admin');
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

            return redirect(env('APP_URL').'admin/survey/'.$id)->withInput();

            exit;

        }
        return redirect(env('APP_URL').'admin/survey/'.$id);
        
        $data['active'] = 'job';
        
        return redirect(env('APP_URL').'admin/survey/'.$id);
      
      }else{
            return redirect(env('APP_URL').'admin/login');
        }
    } 
    

public function customerShow($id){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        
        $data['list'] = Customer:: find($id);
        //$data['list'] = Customer::where("customer_type", $cid)->where("customer_type", $cid)->get();
        //print_r($data['list']); die(); 
        $data['states'] = DB::select("SELECT * FROM `states`  WHERE country_id=233");
        $data['vendornmaes'] = Vendor::where("status",1)->get();
        $data['jobdetail'] = Job::where("customer_id", $id)->get();
        //echo "<pre />";print_r($data['jobdetail'][0]->electrical_appliances); die();
        // $data['jobdetail'][0]->electrical_appliances
         $data['electrical_appliances'] = array_map('trim', explode(",",$data['jobdetail'][0]->electrical_appliances));
        $data['industry_location'] = array_map('trim', explode(",",$data['jobdetail'][0]->industry_location));
        // print_r($data['jobdetail']); exit();
        $data['active'] = 'customer';
        

        return view('admin.customer_form_update', $data);

        }else{
            return redirect(env('APP_URL').'admin/login');
        }

} 
    
public function customerUpdate(Request $request, $id){
    
        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        //$input = $request->input();
        
        $input = Customer:: find($id);
        $input->name = $request->name;
        $input->lname = $request->lname;
        $input->customer_type = $request->customer_type;
        $input->email = $request->email;
        $input->mobile_number = $request->mobile_number;
        // $input->country = "United State";
        $input->state = $request->state;
        $input->city = $request->city;
        $input->address = $request->address;
        if($request->customer_type == 'Residential'){
        $input->make = $request->make;
        $input->model = $request->model;
        }
        
        try{

            Session::flash('message', 'Customer Updated successfully');
            Session::flash('alert_class', 'success');
            $input->save();
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
        if($request->customer_type == 'Commercial'){
            Job::where('customer_id',$id)->update(["property_type"=>$request->property_type,"total_amount"=>$request->total_amount,"permission"=>$request->permission,"number"=>$request->number,"pc"=>$request->pc,"install_date"=>$request->install_date,"appointment_date"=>$request->appointment_date,"time_range"=>$request->time_range,"own_charger_level"=>$request->own_charger_level,"ev_location_d"=>$request->ev_location_d,"paid_service"=>$request->paid_service,"property_type_land"=>$request->property_type_land,"industry_location"=>implode(', ', $request->industry_location)]);
            
            
        }elseif($request->customer_type == 'Residential'){
            Job::where('customer_id',$id)->update(["property_type"=>$request->property_type,"total_amount"=>$request->total_amount,"permission"=>$request->permission,"install_date"=>$request->install_date,"appointment_date"=>$request->appointment_date,"time_range"=>$request->time_range,"own_charger"=>$request->own_charger,"number"=>$request->number,"pc"=>$request->pc,"next_year"=>$request->next_year,"property_type_home"=>$request->property_type_home,"ev_location_ie"=>$request->ev_location_ie,"breaker_panel"=>$request->breaker_panel,"electrical_appliances"=>implode(', ', $request->electrical_appliances),"ev_location"=>$request->ev_location, "ev_amount"=>$ev_amount,"financing"=>$request->financing]);
        } 
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Customer  Does Not Update successfully');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/customer-list-show/'.$id)->withInput();

            exit;

        }
        return redirect(env('APP_URL').'admin/customer-list-show/'.$id);
        
        $data['active'] = 'customer';
        
        return redirect(env('APP_URL').'admin/customer-list-show/'.$id);
      
      }else{
            return redirect(env('APP_URL').'admin/login');
        }
    }    
    
public function customerView($id){

        if(!empty(Session::get('admin'))){

        $user_id = Session::get('admin');

        $data['user'] = $this->user($user_id);

        // $data['page'] = "Edit";
        $data['list'] = DB::table('jobs')->where('customers.id',$id)
          ->join('customers', 'jobs.customer_id', "=", 'customers.id')
          ->get()[0];
        // $data['list'] = Customer:: find($id);
        $data['vendornmaes'] = Vendor::where("status",1)->get();
        $data['active'] = 'customer';

        return view('admin.customer_view',$data);

        }else{

            return redirect(env('APP_URL').'admin/login');

        }

    }   
    
public function assignVendor(Request $request){

        if(!empty(Session::get('admin'))){
        $user_id = Session::get('admin');
        $data['user'] = $this->user($user_id);
        if(!empty($request->post('_token'))){ 
            // print_r($request->post());exit;
        try{
            Session::flash('message', 'Vendor Assigned successfully');
            Session::flash('alert_class', 'success');
             
            $data['vendor'] = Job::where('customer_id',$request->id)->update(["vendor_id"=>$request->vendor_id, "status"=>'assign']);
            // return response($data); die();
            $dta['details'] = Vendor::where("id", $request->vendor_id)->where("status",1)->get();
            //echo ($dta['details'][0]->email); die();
            //var_dump($data['details']); die();
                $data = ['name'=>$dta['details'][0]->name, 'data'=> ""];
                $user['to'] = $dta['details'][0]->email; //'quicksnetolution@gmail.com';
                Mail::send('emails.assign_vendor', $data, function($message) use ($user) {
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
            
            return redirect(env('APP_URL').'admin/customer-list/assign');
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();

            Session::flash('message', 'Vendor Not assigned');

            Session::flash('alert_class', 'danger');

            return redirect(env('APP_URL').'admin/customer-list/assign')->withInput();

            exit;

        }
        return redirect(env('APP_URL').'admin/customer-list/assign');
        
        }
        $data['active'] = 'customer';
        return view('admin.customer_form', $data);

        }else{
            return redirect(env('APP_URL').'admin/login');
        }

}    

// ************** Start Cms Page ***************************** 
public function about(Request $request){
        if(!empty(Session::get('admin'))){
          $user_id = Session::get('admin');
          $data['user'] = $this->user($user_id);
          if(!empty($request->post('_token'))){
              $ext = $request->post();
              unset($ext['_token']);
              unset($ext['files']);
            //   print_r($ext);exit;
              Cmspage::where('id',2)->update($ext);
              Session::flash('message', 'Updated successfully');

              Session::flash('alert_class', 'success');
              return redirect(env('APP_URL').'admin/about');
          }else{
          $data['active'] = 'cms';
          $data['about'] = Cmspage::all();
        return view('admin.about',$data);
          }
        }else{

            return redirect(env('APP_URL').'admin/login');

        }
    }
    
public function career(Request $request){
        if(!empty(Session::get('admin'))){
          $user_id = Session::get('admin');
          $data['user'] = $this->user($user_id);
          if(!empty($request->post('_token'))){
              $ext = $request->post();
              unset($ext['_token']);
              unset($ext['files']);
            //   print_r($ext);exit;
              Cmspage::where('id',2)->update($ext);
              Session::flash('message', 'Updated successfully');

              Session::flash('alert_class', 'success');
              return redirect(env('APP_URL').'admin/career');
          }else{
          $data['active'] = 'cms';
          $data['career'] = Cmspage::all();
        return view('admin.career',$data);
          }
        }else{

            return redirect(env('APP_URL').'admin/login');

        }
    }
    
public function blog(Request $request){
        if(!empty(Session::get('admin'))){
          $user_id = Session::get('admin');
          $data['user'] = $this->user($user_id);
          if(!empty($request->post('_token'))){
              $ext = $request->post();
              unset($ext['_token']);
              unset($ext['files']);
            //   print_r($ext);exit;
              Cmspage::where('id',2)->update($ext);
              Session::flash('message', 'Updated successfully');

              Session::flash('alert_class', 'success');
              return redirect(env('APP_URL').'admin/blog');
          }else{
          $data['active'] = 'cms';
          $data['blog'] = Cmspage::all();
        return view('admin.blog',$data);
          }
        }else{

            return redirect(env('APP_URL').'admin/login');

        }
    }
    

public function returnRefund(Request $request){
        if(!empty(Session::get('admin'))){
          $user_id = Session::get('admin');
          $data['user'] = $this->user($user_id);
          if(!empty($request->post('_token'))){
              $ext = $request->post();
              unset($ext['_token']);
              unset($ext['files']);
            //   print_r($ext);exit;
              Cmspage::where('id',2)->update($ext);
              Session::flash('message', 'Updated successfully');

              Session::flash('alert_class', 'success');
              return redirect(env('APP_URL').'admin/return-refund');
          }else{
          $data['active'] = 'cms';
          $data['return_refund'] = Cmspage::all();
        return view('admin.return_refund',$data);
          }
        }else{

            return redirect(env('APP_URL').'admin/login');

        }
    }
    
public function termCondition(Request $request){
        if(!empty(Session::get('admin'))){
          $user_id = Session::get('admin');
          $data['user'] = $this->user($user_id);
          if(!empty($request->post('_token'))){
              $ext = $request->post();
              unset($ext['_token']);
              unset($ext['files']);
            //   print_r($ext);exit;
              Cmspage::where('id',2)->update($ext);
              Session::flash('message', 'Updated successfully');

              Session::flash('alert_class', 'success');
              return redirect(env('APP_URL').'admin/term-condition');
          }else{
          $data['active'] = 'cms';
          $data['term_condition'] = Cmspage::all();
        return view('admin.term_condition',$data);
          }
        }else{

            return redirect(env('APP_URL').'admin/login');

        }
    }
    
 public function privacyPolicy(Request $request){
        if(!empty(Session::get('admin'))){
          $user_id = Session::get('admin');
          $data['user'] = $this->user($user_id);
          if(!empty($request->post('_token'))){
              $ext = $request->post();
              unset($ext['_token']);
              unset($ext['files']);
            //   print_r($ext);exit;
              Cmspage::where('id',2)->update($ext);
              Session::flash('message', 'Updated successfully');

              Session::flash('alert_class', 'success');
              return redirect(env('APP_URL').'admin/privacy-policy');
          }else{
          $data['active'] = 'cms';
          $data['privacy_policy'] = Cmspage::all();
        return view('admin.privacy_policy',$data);
          }
        }else{

            return redirect(env('APP_URL').'admin/login');

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

        return redirect(env('APP_URL').'admin/login');

    }

public function user($user_id){

        $user = DB::select("SELECT * FROM `admins` WHERE id = $user_id");

        if(!empty($user)){

        return $user[0];

        }else{

        print_r("<script>window.location.replace('".env('APP_URL').'logout'."');</script>");

        exit;

        }

    }







}