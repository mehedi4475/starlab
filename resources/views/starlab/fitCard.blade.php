<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="{{URL::to('/css/fit-card-style.css')}}">
</head>
<body>
	<div class="mainRow">
	    <div class="floatLeft">
	        <h3>LABORATORY INVESTIGATIONS</h3>
	        <table class="details_table" border="1" cellspacing="0" cellpadding="0">
	           <!--Part One -->
                 <tr>
	               <td colspan="2">Type of Lab investigation</td>
                   <td class="thridCol">Results</td>
                   <td rowspan="25"></td>
                   <td class="frontrightside" colspan="5" rowspan='25'>
	                   <h2 class="titleh2">Health Examination Certificate</h2>
	                   <h1 class="titleh1">FIT CARD</h1>
	                   <img class="starlablogoatcard" src="img/logo.png" width="160px" height="60px" alt="logo">
	                </td>
	            </tr>
	            <tr>
	                <td class="firstCol" rowspan="4">Urine</td>
                    <td class="secCol">Sugar</td>
                    <td>{!! $patientInfo->urine_sugar !!}</td>
	            </tr>
	            <tr>
	                <td>Albumine</td>
	                <td>{!! $patientInfo->urine_alburmine !!}</td>
	            </tr>
	            <tr>
	                <td>Bilharziasis</td>
	                <td>{!! $patientInfo->urine_bilharziasis !!}</td>
	            </tr>
	            <tr>
	                <td>Pregnancy Test</td>
	                <td>{!! $patientInfo->urine_pregnancy_test !!}</td>
	            </tr>
	            
	            <!--Part Two -->           
	      
	            <tr>
	                <td rowspan="5">Stool</td>
                    <td>Helminthes</td>
                    <td>{!! $patientInfo->stool_helminthes !!}</td>
	            </tr>
	            <tr>
	                <td>Guardia</td>
	                <td>{!! $patientInfo->stool_guardia !!}</td>
	            </tr>
	            <tr>
	                <td>Bilharziasis</td>
	                <td>{!! $patientInfo->stool_bilharziasis !!}</td>
	            </tr>
	            <tr>
	                <td>Salmonella</td>
	                <td>{!! $patientInfo->stool_salmonella !!}</td>
	            </tr>
	            <tr>
	                <td>V. Cholerae</td>
	                <td>{!! $patientInfo->stool_v_cholerae !!}</td>
	            </tr>
	            
	            
	           <!--Part Three-->
	        
	            <tr>
	                <td rowspan="3">Blood</td>
                    <td>Haemoglobin</td>
                    <td>{!! $patientInfo->blood_haemoglobin !!}</td>
	            </tr>
	            <tr>
	                <td>Malaria</td>
	                <td>{!! $patientInfo->blood_malaria !!}</td>
	            </tr>
	            <tr>
	                <td>Micro Filaria</td>
	                <td>{!! $patientInfo->blood_micro_filaria !!}</td>
	            </tr>        
	            
	            <!-- Part Four-->	            
	             
	            <tr>
	                <td rowspan="4">Serology</td>
                    <td>F.B.S</td>
                    <td>{!! $patientInfo->serology_fbs !!}</td>
	            </tr>
	            <tr>
	                <td>L.F.T-S Bil / SGPT</td>
	                <td>{!! $patientInfo->serology_lfts_bil !!}</td>
	            </tr>
	            <tr>
	                <td>SGOT</td>
	                <td>{!! $patientInfo->serology_sgot !!}</td>
	            </tr>
	            <tr>
	                <td>Creatinine</td>
	                <td>{!! $patientInfo->serology_creatinine !!}</td>
	            </tr>
	            
	            <!-- Part Five -->
	             
	            <tr>
	                <td rowspan="5">Elisa</td>
                    <td>HIV 1+2</td>
                    <td>{!! $patientInfo->elisa_hiv !!}</td>
	            </tr>
	            <tr>
	                <td>HBsAg</td>
	                <td>{!! $patientInfo->elisa_hbsag !!}</td>
	            </tr>
	            <tr>
	                <td>Anti HCV</td>
	                <td>{!! $patientInfo->elisa_anti_hcv !!}</td>
	            </tr>
	            <tr>
	                <td>VDRL</td>
	                <td>{!! $patientInfo->elisa_vdrl !!}</td>
	            </tr>
	            <tr>
	                <td>TPHA (if VDRL)</td>
	                <td>{!! $patientInfo->elisa_tpha !!}</td>
	            </tr>
	            <tr>
	                <td></td>
	                <td>Blood Group</td>
	                <td>{!! $patientInfo->blood_group !!}</td>
	            </tr>	        
	           <tr>
	                <td colspan="3">
	                   <p class="note">Notes about medical and laboratory investigations</p>
	                   <p class="report_title">NO ABNORMALITY DETECTED<hr></p>
                       <p>Dear Sir, Mensioned abobe is the medical report for</p>
                <p class="report_title">{!! $patientInfo->first_name !!} {!! $patientInfo->last_name !!}<hr></p>
                       <p class="note">He/She is FIT for the above mentioned job.</p>
                        
	                </td>
	            </tr>
	            <tr>	               
	                <td colspan="2">Signature <br>Name</td>
	                <td>Chief Physician</td>
	            </tr>
	       </table> 
	        
	    </div>	   
	</div>
	
	<!--End Font Page -->
	
	
	
	
	<div style="page-break-before: always;">
	
	
	
	<!--Start Back Page -->	
       
	        <table>
	            <tr>
	                <td class="br_country">COUNTRY NAME: {!! $patientInfo->country !!}</td><td class="br_medical">MEDICAL EXAMINATIONS</td>
	            </tr>
	        </table>
	        
	        <table class="details_table" border="1" cellspacing="0" cellpadding="0">
	           <tr>
	               <td>
	                   <img width="100px" height="100px" src="{{ URL('patients-photos') }}/{!! $patientInfo->photo_name !!}" alt="Patient Photo" />
	               </td>
	               
	               <td class="bl_firstrow">
                      
                      <table>
                          <tr>
                              <td>Card SL:</td><td><b class="bl_card">{!! $patientInfo->card_serial !!}</b></td> 
                          </tr>
                          <tr>
                              <td>Card Issue Date:</td><td><b class="bl_card">{!! $patientInfo->created_at !!}</b></td>
                          </tr>
                          <tr>
                              <td>Card Expiry Date:</td><td><b class="bl_card">{!! $patientInfo->created_at !!}</b></td>
                          </tr>
                          <tr>
                              <td>BOESL Code:</td><td><b class="bl_boesl">{!! $patientInfo->boesl_code !!}</b></td>
                          </tr>
                          <tr>
                              <td>Passport No: </td><td><b class="bl_passport">{!! $patientInfo->passport_no !!}</b></td>
                            </tr>
                             <tr>
                              <td>Date of issue:</td><td><b class="bl_card">{!! $patientInfo->passport_issue_date !!}</b></td>
                            </tr>
                             <tr>
                              <td>Place of issue:</td><td><b class="bl_card">{!! $patientInfo->passport_issue_place !!}</b></td>
                          </tr>
                      </table>
	               </td>
	               
	               <!--back right-->
                                                                  
                                                          
                   <td rowspan="2" colspan="25" class="br_space">
                    
                   </td>                                              
                                                          
                   <td rowspan="2" colspan="25">
                       <table>
                           <tr>
                               <td colspan="2" class="br_medical_examination"><b>Type of Medical Examination</b></td><td class="br_results"><b>Results</b></td>
                           </tr>
                           <tr>
                               <td rowspan="2">Eye</td><td>Rt.</td><td>{!! $patientInfo->eye_right !!}</td>                               
                           </tr>
                           <tr>
                               <td>Lt.</td><td>{!! $patientInfo->eye_left !!}</td>
                           </tr>
                           
                           <tr>
                               <td rowspan="2">Ear</td><td>Rt.</td><td>{!! $patientInfo->eye_right !!}</td>                               
                           </tr>
                           <tr>
                               <td>Lt.</td><td>{!! $patientInfo->eye_left !!}</td>
                           </tr>
                           
                           <tr>
                               <td colspan="3" ><b>SYSTEMIN EXAMINATIONS</b></td>
                           </tr>
                           <tr>                               
                               <td colspan="3" ><b>CARDIO VASCULAR</b></td>                             
                           </tr>
                           <tr>
                               <td colspan="2" >B.P</td><td>{!! $patientInfo->blood_pressure !!}</td>
                           </tr>
                           <tr>
                               <td colspan="2" >Heart</td><td>{!! $patientInfo->heart !!}</td>
                           </tr>
                           <tr>
                               <td colspan="3" ><b>RESPIRATORY SYSTEM</b></td>
                           </tr>
                           <tr>
                               <td colspan="2" >Lungs</td><td>{!! $patientInfo->lungs !!}</td>
                           </tr>
                           <tr>
                               <td colspan="2" >Chest X-Ray</td><td>{!! $patientInfo->ches_x_ray !!}</td>
                           </tr>
                           <tr>
                               <td colspan="3" ><b>GASTRO INTESTINAL</b></td>
                           </tr>
                           <tr>
                               <td colspan="2" >Abdomen</td><td>{!! $patientInfo->urine_alburmine !!}</td>
                           </tr>
                           <tr>
                               <td colspan="3" ><b>OTHERS</b></td>
                           </tr>
                           <tr>
                               <td colspan="2" >Hemia</td><td>{!! $patientInfo->hernia !!}</td>
                           </tr>
                           <tr>
                               <td colspan="2" >Varicose Veins</td><td>{!! $patientInfo->varicose_veins !!}</td>
                           </tr>
                           <tr>
                               <td colspan="2" >Extremities</td><td>{!! $patientInfo->extremities !!}</td>
                           </tr>
                           <tr>
                               <td colspan="2" >Deformities</td><td>{!! $patientInfo->deformities !!}</td>
                           </tr>
                           <tr>
                               <td colspan="2" >Skin</td><td>{!! $patientInfo->skin !!}</td>
                           </tr>
                           <tr>
                               <td colspan="2" >CNS</td><td>{!! $patientInfo->cns !!}</td>
                           </tr>
                           <tr>
                               <td colspan="2" >Psychiatry</td><td>{!! $patientInfo->psychiatry !!}</td>
                           </tr>
                           <tr>
                               <td colspan="2" >Venereal Diseases Clinical</td><td>{!! $patientInfo->clinical !!}</td>
                           </tr>
                           
                           
                           
                           
                       </table>
                   </td>
                    
                                                                                                             	             	             
	               	             	             	             
	           </tr>
               <tr>
                   <td class="bl_secondrow" colspan="2">
                      <table>
                          <tr>
                              <td colspan="2"><h2 class="bl_medical_rep">MEDICAL REPORT</h2></td>
                          </tr>
                          <tr>
                              <td>Last Name:</td><td><b class="bl_lastName">{!! $patientInfo->last_name !!}</b></td>
                          </tr>
                          <tr>
                              <td>First Name: </td><td><b class="bl_firstName">{!! $patientInfo->first_name !!}</b></td>
                          </tr>
                          <tr>
                              <td colspan="2">
                                  Ht: <span class="bl_ht">{!! $patientInfo->height !!}cm</span>, Wt: <span class="bl_wt">{!! $patientInfo->weight !!}kg</span>, Sex: {!! $patientInfo->gender !!}, Age: <span class="bl_years">00</span> Years
                              </td>
                          </tr>
                          <tr>
                              <td colspan="2">Marital Status: {!! $patientInfo->marital !!}, Nationality: {!! $patientInfo->nationality !!}</td>
                          </tr>
                          <tr>
                              <td colspan="2">Position Applied for: {!! $patientInfo->applied_position !!}</td>
                          </tr>
                          <tr>
                              <td colspan="2">Recruiting Agency: {!! $patientInfo->recruiting_agency_name !!}</td>
                          </tr>
                          <tr>
                              <td colspan="2">History of any significant past illness including.</td>
                          </tr>
                          <tr>
                              <td colspan="2">1)Psychiatric & Neurological Disorders (Epilepsy, Depression. NIL)</td>
                          </tr>
                          <tr>
                              <td colspan="2">2)Allergy: Absents 3) Others: <b>NIL</b></td>
                          </tr>
                      </table>
                    
                   </td>
               </tr>
                
                
                
	            
	       </table> 

	
</body>
</html>