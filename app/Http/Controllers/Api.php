<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Session;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Atquery;
use App\Http\Atmail;
use Illuminate\Http\Request;
use App\Models\Admin;

use App\Models\Electrician;
use App\Models\Job;


use App\Mail\MyTestMail;
use App\Models\Countries;
use App\Models\States;
use App\Models\Cities;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail; 
use Illuminate\Support\Facades\Storage;

class Api extends Controller
{
    public function login(Request $request){
        if(empty($request->post('email')) or empty($request->post('password'))){
            return json_encode(array('status'=>405,'message'=>'All Required parameter not received'));
        }else{
            $Atquery = new Atquery;
            $ext = $Atquery->real($request->post());
            extract($ext);
            $electrician = Electrician::where(["email"=>$email, "password"=>md5($password)]);
            if($electrician->count() == 1){
                return json_encode(array('status'=>200,'message'=>'Login successfull','data'=>$electrician->get()));
            }else{
                 return json_encode(array('status'=>300,'message'=>'Email or password not match'));
            }
    }
    }
    
    
    
public function forgotPassword(Request $request){
            if (!empty($request->post('email'))){
                $email = $request->post('email');
                $check = DB::SELECT("SELECT * FROM `electricians` WHERE email='".$email."'");
                if(!empty($check)){
                    $token = md5(date('ymdHis').rand(100000,999999));
                    DB::INSERT("INSERT INTO `password_resets`(`email`, `type`, `token`) VALUES ('$email',3,'$token')");
                    $Atmail = new Atmail;
                    $maildata['templete'] = 'electrician_forgot_password';
                    $maildata['name'] = $check[0]->name;
                    $maildata['token'] = $token;
                    if($Atmail->mailit($request->post('email'),$maildata)){
                    Session::flash('email', $request->post('email')); 
                    return response(json_encode(['status'=>200,'message'=>'Email Sent successfully']));
                    }
                }else{
                    Session::flash('message', 'Email not match');
                    Session::flash('alert_class', 'danger');
                    return response(json_encode(['status'=>200,'message'=>'Email Not Found']));
                }
            }
    }
        

public function countries(){
        return json_encode(array('status'=>200,'data'=>Countries::where('active',1)->get()));
    }
public function states($cid){
        return json_encode(array('status'=>200,'data'=>States::where('country_id',$cid)->get()));
    }
public function cities($cid){
        return json_encode(array('status'=>200,'data'=>Cities::where('state_id',$cid)->get()));
    }
    
// Electrician Profile
public  function jobList(Request $request, $id)
    {
        $data['job'] = Job::where('id', $id)->get();
        return json_encode(['status'=>200, "data"=>$data]);
        
    } 
    
public  function jobListByElectrician(Request $request, $eid, $sid)
    {
        $data['job'] = Job::where('electricians_id', $eid)->where('status', $sid)->get();
        return json_encode(['status'=>200, "data"=>$data]);
        
    } 
    
public  function jobListByJobId(Request $request, $eid, $id)
    {
        $data['job'] = Job::where('electricians_id', $eid)->where('id', $id)->get();
        return json_encode(['status'=>200, "data"=>$data]);
        
    } 

public  function profile($id)
    {
        $data['profile'] = Electrician::where('id', $id)->get();
        return json_encode(['status'=>200,"data"=>$data]);
        //return response()->json($profile);
    }  
    
public function jobUpdate(Request $request, $id){
    
        
        $data['input'] = Job:: find($id);
        $data['input']->first_name = $request->first_name;
        $data['input']->last_name = $request->last_name;
        $data['input']->customer_type = $request->customer_type;
        $data['input']->email = $request->email;
        $data['input']->mobile_number = $request->mobile_number;
        $data['input']->electricians_id = $request->electricians_id;
        $data['input']->make = $request->make;
        $data['input']->model = $request->model;
        $data['input']->electricians_id = $request->electricians_id;
        $data['input']->ev_location = $request->ev_location;
        $data['input']->ev_location_a = $request->ev_location_a;
        $data['input']->ev_location_b = $request->ev_location_b;
        $data['input']->ev_location_c = $request->ev_location_c;
        $data['input']->ev_location_d = $request->ev_location_d;
        $data['input']->ev_location_ie = $request->ev_location_ie;
        $data['input']->electrical_appliances = $request->electrical_appliances;
        $data['input']->pcname = $request->pcname;
        $data['input']->pcaddress = $request->pcaddress;
        $data['input']->country = 233;
        $data['input']->state = $request->state;
        $data['input']->address = $request->address;
        $data['input']->install_date = $request->install_date;
        $data['input']->assessment = $request->assessment;
        $data['input']->description = $request->description;
        $data['input']->codescription = $request->codescription;
        $data['input']->time_range = $request->time_range;
        $data['input']->status = $request->status;
        
        if ($request->hasFile('charger_image')) {

                $filenameWithExt = $request->file('charger_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('charger_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('charger_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendor']->logo;
                
                }
                
                $data['input']->charger_image= $fileNameToStore; 
                
        if ($request->hasFile('charger_install_image')) {

                $filenameWithExt = $request->file('charger_install_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('charger_install_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('charger_install_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendor']->logo;
                
                }
                
                $data['input']->charger_install_image= $fileNameToStore;  
                
        if ($request->hasFile('electrical_panel_image')) {

                $filenameWithExt = $request->file('electrical_panel_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('electrical_panel_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('electrical_panel_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendor']->logo;
                
                }
                
                $data['input']->electrical_panel_image= $fileNameToStore;   
                
        if ($request->hasFile('permit_image')) {

                $filenameWithExt = $request->file('permit_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('permit_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('permit_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendor']->logo;
                
                }
                
                $data['input']->permit_image= $fileNameToStore;  
                
            
        if ($request->hasFile('property_image')) {

                $filenameWithExt = $request->file('property_image')->getClientOriginalName ();
                
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                $extension = $request->file('property_image')->getClientOriginalExtension();
                
                if(in_array($extension,['JPG','PNG','JPEG','jpg','png','jpeg'])){
                
                $fileNameToStore = $filename. '_'. time().'.'.$extension;
                
                $path = $request->file('property_image')->storeAs('image', $fileNameToStore);

                }}
                
                else {
                
                $fileNameToStore = $data['vendor']->logo;
                
                }
                
                $data['input']->property_image= $fileNameToStore;         
        
        try{
            $data['input']->save();
            return response(json_encode(['status'=>200,'message'=>'Updated successfully', $data]));
            }catch(\Exception $exception)

        {

            $errormsg = 'Database error! ' . $exception->getCode();
            return response(json_encode(['status'=>300,'message'=>'Somthing error']));
            exit;

        }
        
    }       

}

        
