@extends('starlab/app')

@section('body') 

<div class="row">      
    <div class="patient-info">
        <div class="well well-lg">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <table class="table table-bordered">
                    <h5>Patient Info</h5>     
                    <tfoot>
                        <tr>
                            <th>Total admission</th>
                            <th><a href="patients/all">{!! $patientInfo['totalAdmission'] !!}</a></th>

                        </tr>        
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Today admission</td>
                            <td><a href="patients/today">{!! $patientInfo['todayAdmission'] !!}</a></td>              
                        </tr>
                        <tr>
                            <td>Yesterday admission</td>
                            <td><a href="patients/yesterday">{!! $patientInfo['yesterdayAdmission'] !!}</a></td>         
                       </tr>
                        <tr>
                            <td>This week admission</td>
                            <td><a href="patients/week">{!! $patientInfo['thisWeekAdmission'] !!}</a></td>              
                        </tr>
                        <tr>
                            <td>This month admission</td>              
                            <td><a href="patients/month">{!! $patientInfo['thisMonthAdmission'] !!}</a></td>             
                        </tr>
                        <tr>
                            <td>This year admission</td>             
                            <td><a href="patients/year">{!! $patientInfo['thisYearAdmission'] !!}</a></td>
                        </tr>                    
                    </tbody>
                </table>

            </div>
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <img src="{{URL::to('/img/bg.jpg')}}" width="670px" height="400px" />
            <div>


        </div>
    </div>
</div>



@stop