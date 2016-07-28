@extends('starlab/app')

@section('body')

<div class="row">
    <div class="all-patients">
        <div class="well well-lg">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Card Serial</th>
                        <th>Name</th>
                        <th>Passport No</th>
                        <th>Country</th>
                        <th class="actionButton">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allpatients as $patient)                                
                    <tr>
                        <td><a href="{{url('patient/'.$patient->id)}}"><img width="20px" height="25px" src="{{ URL('patients-photos') }}/{!! $patient->photo_name !!}" alt="Patient Photo" /></a></td>
                        <td><a href="{{url('patient/'.$patient->id)}}">{{$patient->card_serial}}</a></td>
                        <td>{{$patient->first_name}} {{$patient->last_name}}</td>
                        <td>{{$patient->passport_no}}</td>
                        <td>{{$patient->country}}</td>
                        <td colspan="2">
  
 
   @if($userPower == '2')
        <!--For Administrator User -->
        
             
        @if($patient->administrator_approve == '0')            
             <span class="new">New</span>             
        @elseif($patient->administrator_approve == '1')
            
            <a title="Edit" href="{{url('patient/'.$patient->id)}}/edit"><i class="fa fa-pencil-square-o"></i></a> | 
            <a target="_blank" title="Print" href="{{url('patient/'.$patient->id)}}"><i class="fa fa-print"></i></a>
            
        @elseif($patient->administrator_approve == '2')
            <a href="{{url('patient/'.$patient->id)}}"><span class="verifying">Approve</span></a>
             
        @elseif($patient->administrator_approve == '3')
          <span class="rejected">Rejected</span> 
          
        @elseif($patient->administrator_approve == '6')
             <a href="{{url('patient/'.$patient->id)}}"><span class="waiting">Approve</span></a>                
                                                 
       @endif  
        
        
        
        
        
        
        
        
    @elseif($userPower == '1')       
        <!--For Normal User -->
     
       @if($patient->administrator_approve == '0')
          <a title="Edit" href="{{url('patient/'.$patient->id)}}/edit"><i class="fa fa-pencil-square-o"></i></a>
| <a class="delete_patient" title="Delete" href="{{url('patient/'.$patient->id)}}/delete"><i class="fa fa-times-circle"></i></a>
 | <a target="_blank" title="Money Receipt" href="{{url($patient->id)}}/moneyReceipt/print"><i class="fa fa-money"></i></a>
 | <a  title="Request for approve" href="{{url($patient->id)}}/admin/request/forward"><i class="fa fa-share"></i></a>
             
        
        @elseif($patient->administrator_approve == '1')
            <a target="_blank" title="Print" href="{{url('patient/'.$patient->id)}}"><i class="fa fa-print"></i></a>   
        
        @elseif($patient->administrator_approve == '2')
             <span class="verifying">Verifying</span> 
             
        @elseif($patient->administrator_approve == '3')
          <span class="rejected">Rejected</span>
             
        @elseif($patient->administrator_approve == '6')
             <span class="waiting">Waiting</span> 
              
       @endif  
                
   @endif <!--End "User Power"-->
                     
                                                                   
                   
                   </td>
            </tr>                              

                    @endforeach

                </tbody>
            </table>					

             {!! str_replace('/?', '?', $allpatients->render()) !!}

        </div><!-- end .well -->
    </div><!-- end .all-patients -->
</div>    
@stop