<?php

//Fake data insert
/*
use App\Model\patients as Patients;
use App\User as User;
Route::get('fakedata', function(){
    
   $faker = Faker\Factory::create();
    
    for($i=1; $i<=1000; $i++){
        $imageUrl = $faker->imageUrl(300, 500, 'cats');
        
        $user = array(
            'photo_name'=>'1453727985.jpg', 
            'first_name'=>$faker->firstname, 
            'last_name'=>$faker->lastname,
            'passport_no'=>$faker->randomNumber(),
            'card_serial'=>$faker->randomNumber(),
            'country'=>$faker->country,
            'boesl_code'=>$faker->randomNumber(),    
            'visa_date'=>$faker->DateTime(),
            'passport_issue_date'=>$faker->DateTime(),
            'passport_issue_place'=>$faker->cityPrefix,         
            'nationality'=>$faker->country,             
            'active'=>1,
            
 
        );
        
        Patients::create($user);
    }
    
});
*/

//login, logout and dashboard
Route::get('/','Starlab@login');
Route::get('/login','Starlab@login');
Route::post('/login','Starlab@loginVerification');
Route::get('/dashboard','Starlab@dashboard');



//See All patients
Route::get('/patients','Starlab@allPatient');
Route::get('/patients/{id}','Starlab@allPatient');


Route::get('/logout','Starlab@logout');


//Search Patient
Route::get('/search-patient','Starlab@searchPatient');
Route::post('/search-patient','Starlab@searchPatientInfo');


//Add patients
Route::get('/create','Starlab@create');
Route::post('/create','Starlab@store');

//Show and delete patient
Route::get('/patient/{id}','Starlab@showPatient');
Route::get('/patient/{id}/delete', 'Starlab@destroy');


//Approve patients
Route::get('/patient/{id}/approve', 'Starlab@approve');

//Request to Administrator for approve
Route::get('/{id}/{userType}/request/{orderType}', 'Starlab@approveOrder');

//Update basic information
Route::post('/update/{id}','Starlab@update');
Route::get('patient/{id}/edit', 'Starlab@edit');



//Update medical-examinations information
Route::post('/update-medical-examinations/{id}','Starlab@updateMedicalExaminations');
Route::get('/{id}/edit-medical-examinations', 'Starlab@editMedicalExaminations');


//Update laboratory investigations information
Route::post('/update-laboratory-investigations/{id}','Starlab@updateLaboratoryInvestigations');
Route::get('/{id}/edit-laboratory-investigations', 'Starlab@editLaboratoryInvestigations');



//Update laboratory investigations information
Route::post('/update-radiology/{id}','Starlab@updateRadiology');
Route::get('/{id}/edit-radiology', 'Starlab@editRadiology');




//Print
Route::get('/{id}/{back}/print','Starlab@printPatient');


//User
Route::get('/user/{id}/', 'Starlab@user');


//Fit/Unfit for search a approve patient and print front and back page
Route::get('/fitUnfit', 'Starlab@fitUnfit');
Route::post('/fitUnfit', 'Starlab@fitUnfitinfo');


//test
Route::get('/test', 'Starlab@test');



Route::get('/miru', 'Starlab@miru');


    