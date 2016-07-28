@extends('starlab/app')

@section('body') 
     
    <div class="row">
      
        <div class="patient-info">
            <div class="well well-lg">
               <table class="table table-bordered">
                   <tr>
                       <td class="alert alert-info">Card Number:</td>
                       <td>{!! $patientInfo->card_serial !!}</td>
                       <td class="alert alert-info">Passport No:</td>
                       <td>{!! $patientInfo->passport_no !!}</td>
                       <td class="alert alert-info"> Full Name:</td>
                       <td>{!! $patientInfo->first_name !!} {!! $patientInfo->last_name !!}</td>
                   </tr>                            
               </table>  
            </div>
        </div>
      
       <div class="patient-info">
        <div class="well well-lg">
        <div class="show-patient">            
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
               <h5 class="alert alert-info">Basic Information</h5>
                <table class="table">
                    <tr>
                        <td><b>Card Serial</b></td><td><i>{!! $patientInfo->card_serial !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>First Name</b></td><td><i>{!! $patientInfo->first_name !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Last Name</b></td><td><i>{!! $patientInfo->last_name !!}</i></td>
                    </tr>
                    <tr>
                        <td><b>Gender</b></td><td><i>{!! $patientInfo->gender !!}</i></td>
                    </tr>
                    <tr>
                        <td><b>Height</b></td><td><i>{!! $patientInfo->height !!}</i></td>
                    </tr>
                    <tr>
                        <td><b>Weight</b></td><td><i>{!! $patientInfo->weight !!}</i></td>
                    </tr>
                    <tr>
                        <td><b>Marital</b></td><td><i>{!! $patientInfo->marital !!}</i></td>
                    </tr>
                    <tr>
                        <td><b>Country</b></td><td><i>{!! $patientInfo->country !!}</i></td>
                    </tr>
                    <tr>
                        <td><b>Nationality</b></td><td><i>{!! $patientInfo->nationality !!}</i></td>
                    </tr>
                    <tr>
                        <td><b>Passport No</b></td><td><i>{!! $patientInfo->passport_no !!}</i></td>
                    </tr>
                    <tr>
                        <td><b>Passport Issue Date</b></td><td><i>{!! $patientInfo->passport_issue_date !!}</i></td>
                    </tr>
                    <tr>
                        <td><b>Passport Issue Place</b></td><td><i>{!! $patientInfo->passport_issue_place !!}</i></td>
                    </tr>
                    <tr>
                        <td><b>Visa No</b></td><td><i>{!! $patientInfo->visa_no !!}</i></td>
                    </tr>
                    <tr>
                        <td><b>Visa Date</b></td><td><i>{!! $patientInfo->visa_date !!}</i></td>
                    </tr>
                    <tr>
                        <td><b>BOESL Code</b></td><td><i>{!! $patientInfo->boesl_code !!}</i></td>
                    </tr>
                    <tr>
                        <td><b>Applied Position</b></td><td><i>{!! $patientInfo->applied_position !!}</i></td>
                    </tr>
                    <tr>
                        <td><b>Recruiting Agency Name</b></td><td><i>{!! $patientInfo->recruiting_agency_name !!}</i></td>
                    </tr>
                </table>


                <h5 class="alert alert-info">Pathology Examinations</h5>
                <table class="table">
                    <tr>
                        <td><b>Blood Group</b></td><td><i>{!! $patientInfo->blood_group !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Ear Right</b></td><td><i>{!! $patientInfo->ear_right !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Ear Left</b></td><td><i>{!! $patientInfo->ear_left !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Blood Pressure</b></td><td><i>{!! $patientInfo->blood_pressure !!} mm/Hg</i></td> 
                    </tr>
                    <tr>
                        <td><b>Heart</b></td><td><i>{!! $patientInfo->heart !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Lungs</b></td><td><i>{!! $patientInfo->lungs !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Ches-X-Ray</b></td><td><i>{!! $patientInfo->ches_x_ray !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Hernia</b></td><td><i>{!! $patientInfo->hernia !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Varicose Veins</b></td><td><i>{!! $patientInfo->varicose_veins !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Extremities</b></td><td><i>{!! $patientInfo->extremities !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Deformities</b></td><td><i>{!! $patientInfo->deformities !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Skin</b></td><td><i>{!! $patientInfo->skin !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>CNS</b></td><td><i>{!! $patientInfo->cns !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Psychiatry</b></td><td><i>{!! $patientInfo->psychiatry !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Clinical</b></td><td><i>{!! $patientInfo->clinical !!}</i></td> 
                    </tr>
                </table>

            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">                               
                    <div class="show-image">
                        <img src="{{ URL('patients-photos') }}/{!! $patientInfo->photo_name !!}" alt="Patient Photo" />
                        <div class="print-edit-button">
                        
                                                    
                                                                                
                                                                                                        
                                                                                                                                        
 @if($userPower == '2')
        <!--For Administrator User -->
        
          @if($patientInfo->administrator_approve == '0')            
             <span class="new">New</span>             
        @elseif($patientInfo->administrator_approve == '1')
           <a target="_blank" title="Print" href="{{url('patient/'.$patientInfo->id)}}"><i class="fa fa-edit"></i></a> | 
           
            <a target="_blank" title="Print" href="{{url($patientInfo->id)}}/front/print"><i class="fa fa-print"></i> Front</a>  | 
 <a target="_blank" title="Print" href="{{url($patientInfo->id)}}/back/print"><i class="fa fa-print"></i> Back</a> 
       | <a target="_blank" title="Money Receipt" href="{{url($patientInfo->id)}}/moneyReceipt/print"><i class="fa fa-money"></i></a>
        @elseif($patientInfo->administrator_approve == '2')    
            
            <a  class="approve_patient" title="Request for reject" href="{{url($patientInfo->id)}}/administrator/request/approve"><i class="fa fa-check-square-o"></i> Approve</a>
            
            <a  class="reject_patient" title="Request for reject" href="{{url($patientInfo->id)}}/administrator/request/reject"><i class="fa fa-times"></i> Reject</a>
             
        @elseif($patientInfo->administrator_approve == '3')
          <span class="rejected">Rejected</span> 
          
       @elseif($patientInfo->administrator_approve == '6')
             <a  class="approve_patient" title="Request for reject" href="{{url($patientInfo->id)}}/administrator/request/approveForEdit"><i class="fa fa-check-square-o"></i> Approve for Edit</a>
            
            <a class="reject_patient" title="Request for reject" href="{{url($patientInfo->id)}}/administrator/request/reject"><i class="fa fa-times"></i> Reject</a>                 
                                                 
       @endif  
        
        
    @elseif($userPower == '1')       
        <!--For Normal User -->
     
       @if($patientInfo->administrator_approve == '0')
          <a title="Edit" href="{{url('patient/'.$patientInfo->id)}}/edit"><i class="fa fa-pencil-square-o"></i></a>
| <a class="delete_patient" title="Delete" href="{{url('patient/'.$patientInfo->id)}}/delete"><i class="fa fa-times-circle"></i></a>
 | <a target="_blank" title="Money Receipt" href="{{url($patientInfo->id)}}/moneyReceipt/print"><i class="fa fa-money"></i></a>
 | <a  title="Request for approve" href="{{url($patientInfo->id)}}/admin/request/forward"><i class="fa fa-share"></i></a>
             
        
        @elseif($patientInfo->administrator_approve == '1')
            <a target="_blank" title="Print" href="{{url($patientInfo->id)}}/front/print"><i class="fa fa-print"></i> Front</a>  | 
 <a target="_blank" title="Print" href="{{url($patientInfo->id)}}/back/print"><i class="fa fa-print"></i> Back</a>  
       | <a target="_blank" title="Money Receipt" href="{{url($patientInfo->id)}}/moneyReceipt/print"><i class="fa fa-money"></i></a>
        
        @elseif($patientInfo->administrator_approve == '2')
             <span class="verifying">Verifying</span> 
             
        @elseif($patientInfo->administrator_approve == '3')
          <span class="rejected">Rejected</span>
          <i class="fa fa-recycle"></i> <a href="{{url($patientInfo->id)}}/admin/request/editRejectApplication"><span class="requestForEdit">Request for Edit</span></a>
             
            
        
        @elseif($patientInfo->administrator_approve == '6')
             <span class="waiting">Waiting</span>  
       
                    
       @endif  
                
   @endif <!--End "User Power"-->                                                                                                                                                                    
                                                                                                                                                                                                
                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                                                                                                                                                                    
              
                       <!--
                       
                        
                          @if($patientInfo->administrator_approve == '1')    
 <a target="_blank" title="Print" href="{{url($patientInfo->id)}}/front/print"><i class="fa fa-print"></i> Front</a> 
 <a target="_blank" title="Print" href="{{url($patientInfo->id)}}/back/print"><i class="fa fa-print"></i> Back</a> 
  @else
 <a title="Edit" href="{{url('patient/'.$patientInfo->id)}}/edit"><i class="fa fa-pencil-square-o"></i> Edit</a>
| <a class="delete_patient" href="{{url('patient/'.$patientInfo->id)}}/delete"><i class="fa fa-times-circle"></i> Delete</a>
@endif     

 @if($userPower == '2' && $patientInfo->administrator_approve == '0' )
       | <a class="approve_patient" href="{{url('patient/'.$patientInfo->id)}}/approve"><i class="fa fa-check-square-o"></i> Approve</a>                              
                             

@endif
           -->             
                        

                        </div>
                    </div>
                </div> 

                
                <table class="table">
                   <tr>
                       <td colspan="2"><h5 class="alert alert-info">Urine</h5></td>
                   </tr>
                    <tr>
                        <td><b>Sugar</b></td><td><i>{!! $patientInfo->urine_sugar !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Alburmine</b></td><td><i>{!! $patientInfo->urine_alburmine !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Bilharziasis</b></td><td><i>{!! $patientInfo->urine_bilharziasis !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Pregnancy Test</b></td><td><i>{!! $patientInfo->urine_pregnancy_test !!}</i></td> 
                    </tr>
                    <tr>
                    </tr>
                </table>
                <h5 class="alert alert-info">Serology</h5>
                <table class="table">
                    <tr>
                        <td><b>F.B.S</b></td><td><i>{!! $patientInfo->serology_fbs !!} gm/dl</i></td> 
                    </tr>
                    <tr>
                        <td><b>L.F.T-S Bil</b></td><td><i>{!! $patientInfo->serology_lfts_bil !!} gm/dl</i></td> 
                    </tr>
                    <tr>
                        <td><b>SGPT</b></td><td><i>{!! $patientInfo->serology_sgpt !!} U/L</i></td> 
                    </tr>
                    <tr>
                        <td><b>SGOT</b></td><td><i>{!! $patientInfo->serology_sgot !!} U/L</i></td> 
                    </tr>
                    <tr>
                        <td><b>Creatinine</b></td><td><i>{!! $patientInfo->serology_creatinine !!}</i> mg/dl</td> 
                    </tr>
                    <tr>
                    </tr>
                </table>


                <h5 class="alert alert-info">Stoll</h5>
                <table class="table">
                    <tr>
                        <td><b>Helminthes</b></td><td><i>{!! $patientInfo->stool_helminthes !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Guardia</b></td><td><i>{!! $patientInfo->stool_guardia !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Bilharziasis</b></td><td><i>{!! $patientInfo->stool_bilharziasis !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Salmonella</b></td><td><i>{!! $patientInfo->stool_salmonella !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Shegella</b></td><td><i>{!! $patientInfo->stool_shegella !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>V Cholerae</b></td><td><i>{!! $patientInfo->stool_v_cholerae !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Haemoglobin</b></td><td><i>{!! $patientInfo->blood_haemoglobin !!} gm/dl</i></td> 
                    </tr>
                    <tr>
                        <td><b>Malaria</b></td><td><i>{!! $patientInfo->blood_malaria !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Filaria</b></td><td><i>{!! $patientInfo->blood_micro_filaria !!}</i></td> 
                    </tr>
                    <tr>
                    </tr>
                </table>

                  <h5 class="alert alert-info">Elisa</h5>
                <table class="table">
                    <tr>
                        <td><b>HIV 1+2</b></td><td><i>{!! $patientInfo->elisa_hiv !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>HBsAg</b></td><td><i>{!! $patientInfo->elisa_hbsag !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>Anti HCV</b></td><td><i>{!! $patientInfo->elisa_anti_hcv !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>VDRL</b></td><td><i>{!! $patientInfo->elisa_vdrl !!}</i></td> 
                    </tr>
                    <tr>
                        <td><b>TPHA (if VDRL reactive)</b></td><td><i>{!! $patientInfo->elisa_tpha !!}</i></td> 
                    </tr>
                    <tr>
                    </tr>
                </table>                        
            </div>
        </div><!-- end show patient -->
           </div>
        </div>
    </div><!-- end .row -->
@stop