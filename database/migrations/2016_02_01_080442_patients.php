<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Patients extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patients', function(Blueprint $table)
		{
			//Basic entry
            $table->increments('id');            
            $table->string('photo_name');
            $table->string('card_serial');
            $table->string('passport_no');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('country');
            
            //Details entry
            $table->string('boesl_code');
            $table->string('visa_no');
            $table->date('visa_date');
            $table->date('passport_issue_date');
            $table->string('passport_issue_place');
            $table->string('height');
            $table->string('weight');
            
            $table->string('gender');
            $table->string('marital');
            $table->string('nationality');
            $table->string('applied_position');          
            $table->string('recruiting_agency_name');
            
            
            //Medical Examinations
            $table->string('eye_right');
            $table->string('eye_left');
            $table->string('ear_right');
            $table->string('ear_left');
            $table->string('blood_pressure');
            $table->string('heart');
            $table->string('lungs');
            $table->string('ches_x_ray');
            $table->string('hernia');
            $table->string('varicose_veins');
            $table->string('extremities');
            $table->string('deformities');
            $table->string('skin');
            $table->string('cns');
            $table->string('psychiatry');
            $table->string('clinical');
            
            
            //Laboratory Investigations
            $table->string('urine_sugar');
            $table->string('urine_alburmine');
            $table->string('urine_bilharziasis');
            $table->string('urine_pregnancy_test');
            
            $table->string('stool_helminthes');
            $table->string('stool_guardia');
            $table->string('stool_bilharziasis');
            $table->string('stool_salmonella');
            $table->string('stool_shegella');
            $table->string('stool_v_cholerae');
            
            $table->string('blood_haemoglobin');
            $table->string('blood_malaria');
            $table->string('blood_micro_filaria');
            
            $table->string('serology_fbs');
            $table->string('serology_lfts_bil');
            $table->string('serology_sgpt');
            $table->string('serology_sgot');
            $table->string('serology_creatinine');
            
            $table->string('elisa_hiv');
            $table->string('elisa_hbsag');
            $table->string('elisa_anti_hcv');
            $table->string('elisa_vdrl');
            $table->string('elisa_tpha');
            
            $table->string('blood_group');
            
            
            $table->date('date_of_birth');            
            $table->string('physical_fitUnfit');            
            $table->string('physical_Unfit_comment');            
            $table->string('pathology_fitUnfit');            
            $table->string('pathology_Unfit_comment');            
            $table->string('radiology_fitUnfit');            
            $table->string('radiology_Unfit_comment'); 
            $table->string('remarks');  
            
            
            $table->string('profession');  
            $table->string('abdomen');  
            
            
            
            
                
            $table->string('insert_by');
            $table->string('last_edit');
            $table->string('administrator_approve')->default(0);
            $table->string('active')->default(1);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('patients');
	}

}
