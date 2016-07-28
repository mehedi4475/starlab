@extends('starlab/app')

@section('body')

    <div class="row">
        <div class="find-patient">
            <div class="well well-lg">
               
                
                
                                                                                                                                                        
 @if($userPower == '2')
        <!--For Administrator User -->
        
          @if($patientInfo->administrator_approve == '0')            
             <span class="new">New</span>             
        @elseif($patientInfo->administrator_approve == '1')
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
                
                
                
                
                
            </div><!-- end .well -->
        </div><!-- end .find-patient -->
<!--
        <div class="copyright">
            <p>&copy; Star Lab Diagnostic & Medical Checkup Center</p>
            <p>Developed & mantained by <a href="http://opticalit.com">Optical IT</a></p>
        </div><!-- end .copyright -->

    </div><!-- end .row -->
@stop