<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\patients;
use App\Http\Request\post;
use App\Http\Requests\createPatients;
use App\Http\Requests\editPatientsRequest;
use App\Http\Requests\editMedicalExaminationsRequest;
use App\Http\Requests\editLaboratoryInvestigationsRequest;
use App\Http\Requests\searchPatientRequest;
use App\Http\Requests\radiology;
use Illuminate\Support\Facades\Session;
use DB;
use Hash;
use Auth;
use PDF;
use Intervention\Image\ImageManagerStatic as Image;
use App;


class Starlab extends Controller {
    
    //UserType
   // public $user = userPowerSession();
    
  
    //patients
    public $paginate = 15;
    
    
    //Request for administrator approve
    public function requestAdministratorApprove($id){
        DB::table('patients')->where('id','=',$id)->update(array('administrator_approve'=>'0')); 
    }
    
    //User session check
    public function userPowerSession(){
        $userPowerSession = Session::get('userPower'); 
        if($userPowerSession == md5(1)){
            $userPower = 1;
        }
        elseif($userPowerSession == md5(2)){
            $userPower = 2;
        }
        
        return $userPower;
    }
    
    //return yesterday date
    public function yesterday(){
        return $yesterday =  date("Y-m-d",strtotime("-1 day"));
    }
    
    //return last week date
    public function week(){
        return $thisWeek =  date("Y-m-d",strtotime("-1 week")); 
    }
    
    //return last month date
    public function month(){
        return $thisMonth =  date("Y-m-d",strtotime("-1 month")); 
    }
    
    //return last year date
    public function year(){
        return $thisYear =  date("Y-m-d",strtotime("-1 year")); 
    }
    

	//Home page. Login form
	public function index(){  
        
        if(Auth::check()){
            $loginStatus = "logout";
        }
        else{
            $loginStatus = "login";
        }
        
        $posts = patients::paginate(5);
        return view('test/index')->with(array('posts' => $posts, 'loginStatus' => $loginStatus)); 
	}
    
    
    //Login page view
    public function login(){
        
        if(Auth::check()){
           return redirect('/dashboard');
        }
        
        return view('starlab/login');        
    }
    
    
    
    //Login form submit data process for login verification
    public function loginVerification(Request $request){     
            
        $shareholder = new patients;        
        $username = $request->input('username');
        $password = $request->input('password'); 
        
        if (Auth::attempt(array('username' => $username, 'password' => $password))){             
           
           //Current user power
            $userPower =  Auth::user()->user_power;
            $userId =  Auth::user()->id;
            
            //Create session for current user.
            Session::put('userPower', md5($userPower));
            Session::put('userId', $userId);
            
            return redirect('/dashboard');
        }
        else{
            session::flash('message','<b>Username</b> or <b>Password</b> is wrong'); 
            return redirect('/');
        }      
    }
    
    
    //Basic information about patients and results
    public function dashboard(){          
        if(Auth::check()){
            
        /********************************************************************
                                        Patients Information Start
         *********************************************************************/
            
            
         //Today admission
         $todayAdmission = DB::table('patients')->where('created_at','>=', date("Y-m-d"))->where('active','=',1)->count();
            
         //Yesterday Admission 
        $yesterdayAdmission = DB::table('patients')->where('created_at','<', date("Y-m-d"))->where('created_at','>=',$this->yesterday())->where('active','=',1)->count();
            
         //This week Admission
        $thisWeekAdmission = DB::table('patients')->where('created_at','>=', $this->week())->where('active','=',1)->count();
            
         //This month Admission 
        $thisMonthAdmission = DB::table('patients')->where('created_at','>=', $this->month())->where('active','=',1)->count();
            
         //This year Admission  
        $thisYearAdmission = DB::table('patients')->where('created_at','>=', $this->year())->where('active','=',1)->count();
                    
            
        //Total Admission         
        $totalAdmission = DB::table('patients')->where('active','=',1)->count();
            
        $data['todayAdmission'] = $todayAdmission;
        $data['yesterdayAdmission'] = $yesterdayAdmission;
        $data['thisWeekAdmission'] = $thisWeekAdmission;
        $data['thisMonthAdmission'] = $thisMonthAdmission;
        $data['thisYearAdmission'] = $thisYearAdmission;
        $data['totalAdmission'] = $totalAdmission;
            
        /********************************************************************
                                        Patients Information End
         *********************************************************************/    
            
                    
         return view('starlab/dashboard')->with(array('patientInfo'=>$data));         
        }
        
        return view('starlab/login'); 
    }
    
    
    
    //Admin dashboard 
    public function allPatient($id){        
        
        if (Auth::check()){
            
            //Login Status
            $loginStatus = "logout";
            
            //pratient show item 
            if($id=="all"){
                $allpatients = DB::table('patients')->where('active','=','1')->orderBy('id','desc')->paginate($this->paginate);
            }
            //Today admission
            elseif($id=="today"){
               $allpatients = DB::table('patients')->where('created_at','>=',date("Y-m-d"))->where('active','=','1')->orderBy('id','desc')->paginate($this->paginate);
            }
            //Yesterday admission
            elseif($id=="yesterday"){
               $allpatients = DB::table('patients')->where('created_at','<',date("Y-m-d"))->where('created_at','>=', $this->yesterday())->where('active','=','1')->orderBy('id','desc')->paginate($this->paginate);
            }
            //lastWeek admission
            elseif($id=="week"){
               $allpatients = DB::table('patients')->where('created_at','>=', $this->week())->where('active','=','1')->orderBy('id','desc')->paginate($this->paginate);
            }
            //month admission
            elseif($id=="month"){
               $allpatients = DB::table('patients')->where('created_at','>=', $this->month())->where('active','=','1')->orderBy('id','desc')->paginate($this->paginate);
            }
            //year admission
            elseif($id=="year"){
               $allpatients = DB::table('patients')->where('created_at','>=', $this->year())->where('active','=','1')->orderBy('id','desc')->paginate($this->paginate);
            }
            else{
                return view('starlab/404');
            }
                        
            return view('starlab/allpatients')->with(array('allpatients' => $allpatients, 'loginStatus' => $loginStatus,'userPower'=>$this->userPowerSession()));            
        }
        else{
            $loginStatus = "login";
            return redirect('/');
        }        
    }
    
    
    //Logout 
    public function logout(){
        
        Auth::logout();        
        return redirect('/');
        
    }
    
    
    
    //Create a new patient.
	public function create(){                  
        if(Auth::check()){
            return view('starlab/create');
        }
        else{
            return redirect('/');
        }		
	}

    
    
    //Save a new patient request
	public function store(createPatients $request){
    
        if(Auth::check()){
            $post = new patients;
            
            //all input data collect
            $post->card_serial = $request->input('card_serial');
            $post->passport_no = $request->input('passport_no');
            $post->first_name = $request->input('first_name');
            $post->last_name = $request->input('last_name');
            $post->country = $request->input('country_name');
            
            //upload patient photo and save
            $img = Image::make($_FILES['patient_photo']['tmp_name']);                
            $img->fit(144, 182);
            $post->photo_name = $imgName = time().".jpg";
            $img->save('patients-photos/'.$imgName);  
            
            
            //final save all data in form
            $post->save();        
            
            
            Session::flash('message','Successfully save');        
            Session::flash('alert','alert-success');  
            
            notify()->flash('Successfully Add!', 'success');
            return redirect('/dashboard');      
            
        }
        else{
            return redirect('/');
        }  
	}
    
    

    //Show a single post
	public function showPatient($id){
        
        if(Auth::check()){
           $patientInfo = patients::find($id);          
           return view('starlab/show')->with(array('patientInfo' => $patientInfo ,'userPower'=>$this->userPowerSession())); 
        }
        
        return view('starlab/login'); 
        
	}
    
    
    //Print a patient
	public function printPatient($id, $page){
        
        if(Auth::check()){
            
            $patientInfo = patients::find($id);
           
            if($page == "front"){
                return view('starlab/fitCard/front')->with('patientInfo', $patientInfo);
            }
            else if($page == "back"){
                return view('starlab/fitCard/back')->with('patientInfo', $patientInfo);
            }
            else if($page == "moneyReceipt"){
                return view('starlab/moneyReceipt/moneyReceipt')->with('patientInfo', $patientInfo);
            }
            else{
               return view('starlab/login'); 
            }
        
            
        }        
        return view('starlab/login');
        
	}
    
    //test
    public function test(){
        return view('starlab/fitCard');
    }
    


	//Edit a patient basic information
	public function edit($id){  
        
        if(Auth::check()){
            $editPatients = patients::find($id);        
            return view('starlab/editPatient')->with('editPatients', $editPatients);
        }
        else{
            return redirect('/');
        }    
        
	}
    
     
    //Request to administrator for approve the patient
	public function approveOrder($id, $userType, $orderType){  
        
        if(Auth::check()){
            $approvePatients = patients::find($id);
            
            //forward to supper administrator
            if($userType == "admin" && $orderType == "forward"){
                //Notifiy to Administrator and show this applicaiton.
                //Admin can't do any think this application until super administrator approve this application.
                DB::table('patients')->where('id','=',$id)->update(array('administrator_approve'=>'2'));
                         
                notify()->flash('Successfully Forward This Application!', 'success');            
                return redirect('/patients/all');                                
                
            }
            
            //Approve by supper administrator
            else if($userType == "administrator" && $orderType == "approve"){
                //Notifiy to Administrator and show this applicaiton.
                //Admin can't do any think this application until super administrator approve this application.
                DB::table('patients')->where('id','=',$id)->update(array('administrator_approve'=>'1'));
                         
                notify()->flash('Successfully Approve!', 'success');            
                return redirect('/patients/all');                                
                
            }
            
            
            
            
            //Reject by Super Administrator
            else if($userType == "administrator" && $orderType == "reject"){
                //Notifiy to Administrator and show this applicaiton.
                //Admin can't do any think this application until super administrator approve this application.
                DB::table('patients')->where('id','=',$id)->update(array('administrator_approve'=>'3'));
                         
                notify()->flash('Sorry! Rejected This Application', 'error');            
                return redirect('/patients/all');                                
                
            }
            
            //Reject by Super Administrator
            else if($userType == "admin" && $orderType == "editRejectApplication"){
                //Notifiy to Administrator and show this applicaiton.
                //Admin can't do any think this application until super administrator approve this application.
                DB::table('patients')->where('id','=',$id)->update(array('administrator_approve'=>'6'));
                         
                notify()->flash('Successfully Sent Your Request, To Edit This Application', 'success');            
                return redirect('/patients/all');                                
                
            }
            //Approve by Administrator for Edit Rejected Application
            else if($userType == "administrator" && $orderType == "approveForEdit"){
                //Notifiy to Administrator and show this applicaiton.
                //Admin can't do any think this application until super administrator approve this application.
                DB::table('patients')->where('id','=',$id)->update(array('administrator_approve'=>'0'));
                         
                notify()->flash('Successfully Approve For Edit This Application', 'success');            
                return redirect('/patients/all');                                
                
            }
            
            
        
        }
        else{
            return redirect('/');
        }    
        
	}
    
    
    
    
    
    
    
    
    
    
    
    

	
    //Update a patient data after edit
	public function update($id, editPatientsRequest $request)
	{             
        
        if(Auth::check()){            
            $editPatientsRequest = patients::find($id);             
            if($_FILES['patient_photo']['tmp_name']){                
                //Old file location    
                $delete_file_url = $_SERVER['DOCUMENT_ROOT'].'/patients-photos/'.$editPatientsRequest->photo_name;           
                //delete old image              
                @unlink($delete_file_url);                 
                //upload patient photo and save
                $img = Image::make($_FILES['patient_photo']['tmp_name']);                
                $img->fit(144, 182);
                $editPatientsRequest->photo_name = $imgName = time().".jpg";
                $img->save('patients-photos/'.$imgName); 
                
            }            
             
            
            $editPatientsRequest->country = $request->input('country');
            $editPatientsRequest->boesl_code = $request->input('boesl_code');  
            $editPatientsRequest->visa_no = $request->input('visa_no');  
            $editPatientsRequest->visa_date = $request->input('visa_date');
            $editPatientsRequest->passport_no = $request->input('passport_no');  
            $editPatientsRequest->passport_issue_date = $request->input('passport_issue_date');  
            $editPatientsRequest->passport_issue_place = $request->input('passport_issue_place');  
            $editPatientsRequest->first_name = $request->input('first_name');  
            $editPatientsRequest->last_name = $request->input('last_name');  
            $editPatientsRequest->height = $request->input('height');  
            $editPatientsRequest->weight = $request->input('weight');  
            $editPatientsRequest->gender = $request->input('gender');  
            $editPatientsRequest->marital = $request->input('marital');  
            $editPatientsRequest->nationality = $request->input('nationality');  
            $editPatientsRequest->applied_position = $request->input('applied_position');  
            $editPatientsRequest->recruiting_agency_name = $request->input('recruiting_agency_name');  
            $editPatientsRequest->date_of_birth = $request->input('date_of_birth');  
            $editPatientsRequest->profession = $request->input('profession');  
            
            $editPatientsRequest->save();        
            Session::flash('message','Successfully update');
            Session::flash('alert','alert-success');     
            
            //Request to Super Admin for approve
            $this->requestAdministratorApprove($id);
            
            notify()->flash('Successfully Update!', 'success');
            
            return redirect('/patient/'.$id.'/edit');
        }
        else{
            return redirect('/');
        }       
        
		
	}
    
    //Edit Medical Examinations
    public function editMedicalExaminations($id){
         if(Auth::check()){
            $editMedicalExaminations = patients::find($id);        
            return view('starlab/editMedicalExaminations')->with('editMedicalExaminations', $editMedicalExaminations);
        }
        else{
            return redirect('/');
        }
        
    }
    
    //Update Medical Examinations
    public function updateMedicalExaminations($id, editMedicalExaminationsRequest $request){
         if(Auth::check()){
           $editMedicalExaminationsRequest = patients::find($id); 
             
           $editMedicalExaminationsRequest->eye_right = $request->input('eye_right');
           $editMedicalExaminationsRequest->eye_left = $request->input('eye_left');
           $editMedicalExaminationsRequest->ear_right = $request->input('ear_right');
           $editMedicalExaminationsRequest->ear_left = $request->input('ear_left');
           $editMedicalExaminationsRequest->blood_pressure = $request->input('blood_pressure');
           $editMedicalExaminationsRequest->heart = $request->input('heart');
           $editMedicalExaminationsRequest->lungs = $request->input('lungs');           
           $editMedicalExaminationsRequest->hernia = $request->input('hernia');
           $editMedicalExaminationsRequest->varicose_veins = $request->input('varicose_veins');
           $editMedicalExaminationsRequest->extremities = $request->input('extremities');
           $editMedicalExaminationsRequest->deformities = $request->input('deformities');
           $editMedicalExaminationsRequest->skin = $request->input('skin');
           $editMedicalExaminationsRequest->cns = $request->input('cns');
           $editMedicalExaminationsRequest->psychiatry = $request->input('psychiatry');
           $editMedicalExaminationsRequest->clinical = $request->input('clinical');            
           
           $editMedicalExaminationsRequest->physical_fitUnfit = $request->input('physical_fitUnfit');            
           $editMedicalExaminationsRequest->physical_Unfit_comment = $request->input('physical_Unfit_comment');            
             
            $editMedicalExaminationsRequest->save();        
            Session::flash('message','Successfully update');
            Session::flash('alert','alert-success');  
             
            //Request to Super Admin for approve
            $this->requestAdministratorApprove($id); 
             
            notify()->flash('Successfully Update!', 'success');
             
            return redirect('/'.$id.'/edit-medical-examinations'); 
                    
             
        }
        else{
            return redirect('/');
        }
    
    }
    
    
    //Edit laboratory-investigations
    public function editLaboratoryInvestigations($id){
         if(Auth::check()){
            $laboratoryInvestigations = patients::find($id);        
            return view('starlab/laboratoryInvestigations')->with('laboratoryInvestigations', $laboratoryInvestigations);
        }
        else{
            return redirect('/');
        }
        
    }
    
    
    //Update laboratory-investigations
    public function updateLaboratoryInvestigations($id, editLaboratoryInvestigationsRequest $request){
         if(Auth::check()){
             $editMedicalLaboratoryInvestigations = patients::find($id); 
             
             $editMedicalLaboratoryInvestigations->urine_sugar = $request->input('urine_sugar');
             $editMedicalLaboratoryInvestigations->urine_alburmine = $request->input('urine_alburmine');
             $editMedicalLaboratoryInvestigations->urine_bilharziasis = $request->input('urine_bilharziasis');
             $editMedicalLaboratoryInvestigations->urine_pregnancy_test = $request->input('urine_pregnancy_test');
             $editMedicalLaboratoryInvestigations->stool_helminthes = $request->input('stool_helminthes');
             $editMedicalLaboratoryInvestigations->stool_guardia = $request->input('stool_guardia');
             $editMedicalLaboratoryInvestigations->stool_bilharziasis = $request->input('stool_bilharziasis');
             $editMedicalLaboratoryInvestigations->stool_salmonella = $request->input('stool_salmonella');
             $editMedicalLaboratoryInvestigations->stool_shegella = $request->input('stool_shegella');
             $editMedicalLaboratoryInvestigations->stool_v_cholerae = $request->input('stool_v_cholerae');
             $editMedicalLaboratoryInvestigations->blood_haemoglobin = $request->input('blood_haemoglobin');
             $editMedicalLaboratoryInvestigations->blood_malaria = $request->input('blood_malaria');
             $editMedicalLaboratoryInvestigations->blood_micro_filaria = $request->input('blood_micro_filaria');
             $editMedicalLaboratoryInvestigations->serology_fbs = $request->input('serology_fbs');
             $editMedicalLaboratoryInvestigations->serology_lfts_bil = $request->input('serology_lfts_bil');
             $editMedicalLaboratoryInvestigations->serology_sgpt = $request->input('serology_sgpt');
             $editMedicalLaboratoryInvestigations->serology_sgot = $request->input('serology_sgot');
             $editMedicalLaboratoryInvestigations->serology_creatinine = $request->input('serology_creatinine');
             $editMedicalLaboratoryInvestigations->elisa_hiv = $request->input('elisa_hiv');
             $editMedicalLaboratoryInvestigations->elisa_hbsag = $request->input('elisa_hbsag');
             $editMedicalLaboratoryInvestigations->elisa_anti_hcv = $request->input('elisa_anti_hcv');
             $editMedicalLaboratoryInvestigations->elisa_vdrl = $request->input('elisa_vdrl');
             $editMedicalLaboratoryInvestigations->elisa_tpha = $request->input('elisa_tpha');
             $editMedicalLaboratoryInvestigations->blood_group = $request->input('blood_group');
             
             $editMedicalLaboratoryInvestigations->pathology_fitUnfit = $request->input('pathology_fitUnfit');
             $editMedicalLaboratoryInvestigations->pathology_Unfit_comment = $request->input('pathology_Unfit_comment');
             
             $editMedicalLaboratoryInvestigations->abdomen = $request->input('abdomen');
        
             
           
            $editMedicalLaboratoryInvestigations->save();        
            Session::flash('message','Successfully update');
            Session::flash('alert','alert-success');   
             
            //Request to Super Admin for approve
            $this->requestAdministratorApprove($id); 
             
            notify()->flash('Successfully Update!', 'success');
             
            return redirect('/'.$id.'/edit-laboratory-investigations'); 
             
        }
        else{
            return redirect('/');
        }
    
    }

    
    
    
    
     //Edit radilogy
    public function editRadiology($id){
         if(Auth::check()){
            $radiology = patients::find($id);        
            return view('starlab/radilogy')->with('radilogy', $radiology);
        }
        else{
            return redirect('/');
        }
        
    }
    
    
    
      //Update radilogy
    public function updateRadiology($id, radiology $request){
         if(Auth::check()){
             $editRadilogy = patients::find($id); 
             
             
             $editRadilogy->ches_x_ray = $request->input('ches_x_ray');
             $editRadilogy->radiology_fitUnfit = $request->input('radiology_fitUnfit');
             $editRadilogy->radiology_Unfit_comment = $request->input('radiology_Unfit_comment');
             
             
           
            $editRadilogy->save();        
            Session::flash('message','Successfully update');
            Session::flash('alert','alert-success');   
             
            //Request to Super Admin for approve
            $this->requestAdministratorApprove($id); 
             
            notify()->flash('Successfully Update!', 'success');
             
            return redirect('/'.$id.'/edit-radiology'); 
             
        }
        else{
            return redirect('/');
        }
    
    }
    
    
    
    
    
    
	//Delete a a patient
	public function destroy($id){        
        if(Auth::check()){
            $delete = patients::find($id);    
            $id = $delete->id;
            $delete = DB::table('patients')->where('id','=',$id)->update(array('active'=>'0'));            
           
            Session::flash('message','Successfully Delete');
            Session::flash('alert','alert-success');
            
            notify()->flash('Successfully Delete!', 'success');
            
            return redirect('/patients/all');
        }
        else{
            return redirect('/');
        }
	}
    
    
    //Search Patient form
    public function searchPatient(){
        if(Auth::check()){                   
            return view('starlab/searchPatient');
        }
        else{
            return redirect('/');
        }
    }
    
    
    //Search patient at database
    public function searchPatientInfo(searchPatientRequest $request){
         if(Auth::check()){              
           $card_serial = $request->input('card_serial');             
           $patient = DB::table('patients')->where('card_serial','=',$card_serial)->where('active','=','1')->first();
            
             if($patient){
                return redirect('patient/'.$patient->id);
             }
            else{
                notify()->flash('No patient found!', 'error');                
                return redirect('/search-patient');
            }
             
        }
        else{
            return redirect('/');
        }
    }
    
    
    //User Information
    public function user($id){
        if(Auth::check()){              
          
            return "Under Constraction"; 
        }
        else{
            return redirect('/');
        }
    }
    
    
    //fitUnfit button to search an ID
    public function fitUnfit(){
        if(Auth::check()){              
          
            return view('starlab/searchPatientFitUnfit');
            
        }
        else{
            return redirect('/');
        }
    }
    
    
    //fitUnfit show the print button only
    
     
    //Search patient at database
    public function fitUnfitinfo(searchPatientRequest $request){
         if(Auth::check()){              
           $card_serial = $request->input('card_serial');             
           $patient = DB::table('patients')->where('card_serial','=',$card_serial)->where('active','=','1')->where('administrator_approve','=','1')->first();
            
             if($patient){
              
               return view("starlab/fitUnfitPrintButonShow")->with(array('patientInfo'=>$patient, 'userPower'=>$this->userPowerSession()));
              
                               
             }
            else{               
                notify()->flash('Your card is not ready', 'error');               
                return redirect('/fitUnfit');
            }
             
        }
        else{
            return redirect('/');
        }
    }
    

    
    
    

}