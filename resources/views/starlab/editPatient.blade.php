@extends('starlab/app')

@section('body')

<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <a class="list-group-item active" href="{{url($editPatients->id)}}/edit"><i class="fa fa-info-circle fa-fw"></i>&nbsp; Basic Information</a>
            <a class="list-group-item" href="{{url($editPatients->id)}}/edit-medical-examinations"><i class="fa fa-heartbeat fa-fw"></i>&nbsp; Physical</a>
            <a class="list-group-item" href="{{url($editPatients->id)}}/edit-laboratory-investigations"><i class="fa fa-stethoscope fa-fw"></i>&nbsp; Pathology</a>
            <a class="list-group-item" href="{{url($editPatients->id)}}/edit-radiology"><i class="fa fa-forumbee"></i>&nbsp; Radiology</a>
                        
        </div>
    </div>
    <div class="col-md-9">
       
        <div class="patient-info">
            <div class="well well-lg">
               <table class="table table-bordered">
                   <tr>
                       <td class="alert alert-info">Card Number:</td>
                       <td>{!! $editPatients->card_serial !!}</td>
                       <td class="alert alert-info">Passport No:</td>
                       <td>{!! $editPatients->passport_no !!}</td>
                       <td class="alert alert-info"> Full Name:</td>
                       <td>{!! $editPatients->first_name !!} {!! $editPatients->last_name !!}</td>
                   </tr>                            
               </table>  
            </div>
        </div>


        <div class="patient-info">
            <div class="well well-lg">
                {!! Form::open(array('method'=>'post', 'enctype'=>'multipart/form-data', 'action' => array('Starlab@update', $editPatients->id))) !!}

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                      <div class="form-group">
                                    <img src="{{ URL('patients-photos') }}/{!! $editPatients->photo_name !!}" alt="Patient Photo" />

                                </div><!-- end .form-group -->              

                                </div>

                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                     {!! Form::label('patient_photo', 'Change Photo:'); !!}
                                     {!! Form::file('patient_photo', array('class' => 'file')); !!}    

                                </div>


                            </div>
                        </div>






                    <div class="col-md-6">
                        <div class="form-group">

                           {!! Form::label('country', 'Country Name: ') !!}				

                            <?php 
                                echo Form::select('country',
                                array(
                                'Afganistan'            =>'Afganistan',
                                'Albania'               =>'Albania',
                                'Algeria'               =>'Algeria',
                                'American Samoa'        =>'American Samoa',
                                'Andorra'               =>'Andorra',
                                'Angola'                =>'Angola',
                                'Anguilla'              =>'Anguilla',
                                'Antigua'               =>'Antigua',
                                'Argentina'             =>'Argentina',
                                'Armenia'               =>'Armenia',
                                'Aruba'                 =>'Aruba',
                                'Australia'             =>'Australia',
                                'Austria'               =>'Austria',
                                'Azerbaijan'            =>'Azerbaijan',
                                'Bahamas'               =>'Bahamas',
                                'Bahrain'               =>'Bahrain',
                                'Bangladesh'            =>'Bangladesh',
                                'Barbados'              =>'Barbados',
                                'Belarus'               =>'Belarus',
                                'Belgium'               =>'Belgium',
                                'Belize'                =>'Belize',
                                'Benin'                 =>'Benin',
                                'Bermuda'               =>'Bermuda',
                                'Bhutan'                =>'Bhutan',
                                'Bolivia'               =>'Bolivia',
                                'Bonaire'               =>'Bonaire',
                                'Bosnia & Herzegovina'  =>'Bosnia & Herzegovina',
                                'Botswana'               =>'Botswana',
                                'Brazil'                =>'Brazil',
                                'British Indian Ocean Ter'         =>'British Indian Ocean Ter',
                                'Brunei'                 =>'Brunei',
                                'Bulgaria'                =>'Bulgaria',
                                'Burkina Faso'            =>'Burkina Faso',
                                'Burundi'                =>'Burundi',
                                'Cambodia'               =>'Cambodia',
                                'Cameroon'               =>'Cameroon',
                                'Canada'                  =>'Canada',
                                'Canary Islands'          =>'Canary Islands',
                                'Cape Verde'                 =>'Cape Verde',
                                'Cayman Islands'         =>'Cayman Islands',
                                'Central African Republic'         =>'Central African Republic',
                                'Chad'                  =>'Chad',
                                'Channel Islands'         =>'Channel Islands',
                                'Chile'         =>'Chile',
                                'China'         =>'China',
                                'Christmas Island'         =>'Christmas Island',
                                'Cocos Island'         =>'Cocos Island',
                                'Colombia'         =>'Colombia',
                                'Comoros'         =>'Comoros',
                                'Congo'         =>'Congo',
                                'Cook Islands'         =>'Cook Islands',
                                'Costa Rica'         =>'Costa Rica',
                                'Croatia'         =>'Croatia',
                                'Cuba'         =>'Cuba',
                                'Curaco'         =>'Curaco',
                                'Cyprus'         =>'Cyprus',
                                'Czech Republic'         =>'Czech Republic',
                                'Denmark'         =>'Denmark',
                                'Djibouti'         =>'Djibouti',
                                'Dominica'         =>'Dominica',
                                'Dominican Republic'         =>'Dominican Republic',
                                'East Timor'         =>'East Timor',
                                'Ecuador'         =>'Ecuador',
                                'Egypt'         =>'Egypt',
                                'El Salvador'         =>'El Salvador',
                                'Equatorial Guinea'         =>'Equatorial Guinea',
                                'Eritrea'         =>'Eritrea',
                                'Estonia'         =>'Estonia',
                                'Ethiopia'         =>'Ethiopia',
                                'Falkland Islands'         =>'Falkland Islands',
                                'Faroe Islands'         =>'Faroe Islands',
                                'Fiji'         =>'Fiji',
                                'Finland'         =>'Finland',
                                'France'         =>'France',
                                'French Guiana'         =>'French Guiana',
                                'French Polynesia'         =>'French Polynesia',
                                'French Southern Ter'         =>'French Southern Ter',
                                'Gabon'         =>'Gabon',
                                'Gambia'         =>'Gambia',
                                'Georgia'         =>'Georgia',
                                'Germany'         =>'Germany',
                                'Ghana'         =>'Ghana',
                                'Gibraltar'         =>'Gibraltar',
                                'Great Britain'         =>'Great Britain',
                                'Greece'         =>'Greece',
                                'Greenland'         =>'Greenland',
                                'Grenada'         =>'Grenada',
                                'Guadeloupe'         =>'Guadeloupe',
                                'Guam'         =>'Guam',
                                'Guatemala'         =>'Guatemala',
                                'Guinea'         =>'Guinea',
                                'Guyana'         =>'Guyana',
                                'Haiti'         =>'Haiti',
                                'Hawaii'         =>'Hawaii',
                                'Honduras'         =>'Honduras',
                                'Hong Kong'         =>'Hong Kong',
                                'Hungary'         =>'Hungary',
                                'Iceland'         =>'Iceland',
                                'India'         =>'India',
                                'Indonesia'         =>'Indonesia',
                                'Iran'         =>'Iran',
                                'Iraq'         =>'Iraq',
                                'Ireland'         =>'Ireland',
                                'Isle of Man'         =>'Isle of Man',
                                'Israel'         =>'Israel',
                                'Italy'         =>'Italy',
                                'Jamaica'         =>'Jamaica',
                                'Japan'         =>'Japan',
                                'Jordan'         =>'Jordan',
                                'Kazakhstan'         =>'Kazakhstan',
                                'Kenya'         =>'Kenya',
                                'Kiribati'         =>'Kiribati',
                                'Korea North'         =>'Korea North',
                                'Korea Sout'         =>'Korea Sout',
                                'Kuwait'         =>'Kuwait',
                                'Kyrgyzstan'         =>'Kyrgyzstan',
                                'Laos'         =>'Laos',
                                'Latvia'         =>'Latvia',
                                'Lebanon'         =>'Lebanon',
                                'Lesotho'         =>'Lesotho',
                                'Liberia'         =>'Liberia',
                                'Libya'         =>'Libya',
                                'Liechtenstein'         =>'Liechtenstein',
                                'Lithuania'         =>'Lithuania',
                                'Luxembourg'         =>'Luxembourg',
                                'Macau'         =>'Macau',
                                'Macedonia'         =>'Macedonia',
                                'Madagascar'         =>'Madagascar',
                                'Malaysia'         =>'Malaysia',
                                'Malawi'         =>'Malawi',
                                'Maldives'         =>'Maldives',
                                'Mali'         =>'Mali',
                                'Malta'         =>'Malta',
                                'Marshall Islands'         =>'Marshall Islands',
                                'Martinique'         =>'Martinique',
                                'Mauritania'         =>'Mauritania',
                                'Mauritius'         =>'Mauritius',
                                'Mayotte'         =>'Mayotte',
                                'Mexico'         =>'Mexico',
                                'Midway Islands'         =>'Midway Islands',
                                'Moldova'         =>'Moldova',
                                'Monaco'         =>'Monaco',
                                'Mongolia'         =>'Mongolia',
                                'Montserrat'         =>'Montserrat',
                                'Morocco'         =>'Morocco',
                                'Mozambique'         =>'Mozambique',
                                'Myanmar'         =>'Myanmar',
                                'Nambia'         =>'Nambia',
                                'Nauru'         =>'Nauru',
                                'Nepal'         =>'Nepal',
                                'Netherland Antilles'         =>'Netherland Antilles',
                                'Netherlands'         =>'Netherlands',
                                'Nevis'         =>'Nevis',
                                'New Caledonia'         =>'New Caledonia',
                                'New Zealand'         =>'New Zealand',
                                'Nicaragua'         =>'Nicaragua',
                                'Niger'         =>'Niger',
                                'Nigeria'         =>'Nigeria',
                                'Niue'         =>'Niue',
                                'Norfolk Island'         =>'Norfolk Island',
                                'Norway'         =>'Norway',
                                'Oman'         =>'Oman',
                                'Pakistan'         =>'Pakistan',
                                'Palau Island'         =>'Palau Island',
                                'Palestine'         =>'Palestine',
                                'Panama'         =>'Panama',
                                'Papua New Guinea'         =>'Papua New Guinea',
                                'Paraguay'         =>'Paraguay',
                                'Peru'         =>'Peru',
                                'Phillipines'         =>'Phillipines',
                                'Pitcairn Island'         =>'Pitcairn Island',
                                'Poland'         =>'Poland',
                                'Portugal'         =>'Portugal',
                                'Puerto Rico'         =>'Puerto Rico',
                                'Qatar'         =>'Qatar',
                                'Republic of Montenegro'         =>'Republic of Montenegro',
                                'Republic of Serbia'         =>'Republic of Serbia',
                                'Reunion'         =>'Reunion',
                                'Romania'         =>'Romania',
                                'Russia'         =>'Russia',
                                'Rwanda'         =>'Rwanda',
                                'St Barthelemy'         =>'St Barthelemy',
                                'St Eustatius'         =>'St Eustatius',
                                'St Helena'         =>'St Helena',
                                'St Kitts-Nevis'         =>'St Kitts-Nevis',
                                'St Lucia'         =>'St Lucia',
                                'St Maarten'         =>'St Maarten',
                                'St Pierre & Miquelon'         =>'St Pierre & Miquelon',
                                'St Vincent & Grenadines'         =>'St Vincent & Grenadines',
                                'Saipan'         =>'Saipan',
                                'Samoa'         =>'Samoa',
                                'Samoa American'         =>'Samoa American',
                                'San Marino'         =>'San Marino',
                                'Sao Tome & Principe'         =>'Sao Tome & Principe',
                                'Saudi Arabia'         =>'Saudi Arabia',
                                'Senegal'         =>'Senegal',
                                'Serbia'         =>'Serbia',
                                'Seychelles'         =>'Seychelles',
                                'Sierra Leone'         =>'Sierra Leone',
                                'Singapore'         =>'Singapore',
                                'Slovakia'         =>'Slovakia',
                                'Slovenia'         =>'Slovenia',
                                'Solomon Islands'         =>'Solomon Islands',
                                'Somalia'         =>'Somalia',
                                'South Africa'         =>'South Africa',
                                'Spain'         =>'Spain',
                                'Sri Lanka'         =>'Sri Lanka',
                                'Sudan'         =>'Sudan',
                                'Suriname'         =>'Suriname',
                                'Swaziland'         =>'Swaziland',
                                'Sweden'         =>'Sweden',
                                'Switzerland'         =>'Switzerland',
                                'Syria'         =>'Syria',
                                'Tahiti'         =>'Tahiti',
                                'Tahiti'         =>'Tahiti',
                                'Taiwan'         =>'Taiwan',
                                'Tajikistan'         =>'Tajikistan',
                                'Tanzania'         =>'Tanzania',
                                'Thailand'         =>'Thailand',
                                'Togo'         =>'Togo',
                                'Tokelau'         =>'Tokelau',
                                'Tonga'         =>'Tonga',
                                'Trinidad & Tobago'         =>'Trinidad & Tobago',
                                'Tunisia'         =>'Tunisia',
                                'Turkey'         =>'Turkey',
                                'Turkmenistan'         =>'Turkmenistan',
                                'Turks & Caicos Is'         =>'Turks & Caicos Is',
                                'Tuvalu'         =>'Tuvalu',
                                'Uganda'         =>'Uganda',
                                'Ukraine'         =>'Ukraine',
                                'United Arab Erimates'         =>'United Arab Erimates',
                                'United Kingdom'         =>'United Kingdom',
                                'United States of America'         =>'United States of America',
                                'Uraguay'         =>'Uraguay',
                                'Uzbekistan'         =>'Uzbekistan',
                                'Vanuatu'         =>'Vanuatu',
                                'Vatican City State'         =>'Vatican City State',
                                'Venezuela'         =>'Venezuela',
                                'Vietnam'         =>'Vietnam',
                                'Virgin Islands (Brit)'         =>'Virgin Islands (Brit)',
                                'Virgin Islands (USA)'         =>'Virgin Islands (USA)',
                                'Wake Island'         =>'Wake Island',
                                'Wallis & Futana Is'         =>'Wallis & Futana Is',
                                'Yemen'         =>'Yemen',
                                'Zaire'         =>'Zaire',
                                'Zambia'         =>'Zambia',
                                'Zimbabwe'         =>'Zimbabwe',

                                ),$editPatients->country, array('class'=>'form-control')); 
                            ?>	
                        </div><!-- end .col-md-6 -->
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('card_serial', 'Card Serial:'); !!}					 
                            {!! Form::text('card_serial', $editPatients->card_serial, array('class' => 'form-control', 'placeholder'=>'Enter Card Serial','disabled'=>'disabled')); !!}                                        

                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('boesl_code', 'BOESL Code:'); !!}					 
                            {!! Form::text('boesl_code', $editPatients->boesl_code, array('class' => 'form-control', 'placeholder'=>'Enter BOESL Code')); !!}									
                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('visa_no', 'Visa No:'); !!}					 
                            {!! Form::text('visa_no', $editPatients->visa_no, array('class' => 'form-control', 'placeholder'=>'Enter Visa No')); !!}											
                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('visa_date', 'Visa Date:'); !!}
                           <div class="input-group date datetimepicker">					 
                            {!! Form::text('visa_date', $editPatients->visa_date, array('class' => 'form-control date datetimepicker', 'placeholder'=>'Enter Visa Date')); !!}								
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>	
                            </div>
                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('passport_no', 'Passport No:'); !!}					 
                            {!! Form::text('passport_no', $editPatients->passport_no, array('class' => 'form-control', 'placeholder'=>'Enter Passport No')); !!}  									
                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->


                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('passport_issue_date', 'Passport issue Date:'); !!}
                           <div class="input-group date datetimepicker">					 
                            {!! Form::text('passport_issue_date', $editPatients->passport_issue_date, array('class' => 'form-control date datetimepicker', 'placeholder'=>'Enter Passport Issue Date')); !!}							
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>	
                            </div>
                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->


                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('passport_issue_place', 'Passport Issue Place:'); !!}	 
                            {!! Form::text('passport_issue_place', $editPatients->passport_issue_place, array('class' => 'form-control', 'placeholder'=>'Enter Passport Issue Place')); !!} 										
                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->

                    <div class="col-md-6">
                        <div class="form-group">
                        {!! Form::label('first_name', 'First Name:'); !!}					 
                            {!! Form::text('first_name', $editPatients->first_name, array('class' => 'form-control', 'placeholder'=>'Enter First Name')); !!} 										
                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('last_name', 'Last Name:'); !!}					 
                            {!! Form::text('last_name', $editPatients->last_name, array('class' => 'form-control', 'placeholder'=>'Enter Last Name')); !!}
                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('height', 'Height(CM): '); !!}	 
                            {!! Form::text('height', $editPatients->height, array('class' => 'form-control', 'placeholder'=>'Enter Height(CM)')); !!}										
                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('weight', 'Weight(KG): '); !!}	 
                            {!! Form::text('weight', $editPatients->weight, array('class' => 'form-control', 'placeholder'=>'Enter Weight(KG)')); !!} 
                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->

                    <div class="col-md-6">
                        <div class="form-group">
                           {!! Form::label('gender', 'Gender: ') !!}				

                            <?php 
                                echo Form::select('gender',
                                array(
                                    ''                   =>'--Select Gender--',
                                    'Male'        =>'Male',
                                    'Female'        =>'Female',
                                    'Other'           =>'Other'                                            

                                ),$editPatients->gender, array('class'=>'form-control')); 
                            ?>	

                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('marital', 'Marital Status: ') !!}

                            <?php 
                                echo Form::select('marital',
                                array(

                                    ''                   =>'--Select Marital Status--',
                                    'Married'               =>'Married',                                                                             'Unmarried'              =>'Unmarried'                                            

                                ),$editPatients->marital, array('class'=>'form-control')); 
                            ?>	

                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('nationality', 'Nationality: '); !!}	 
                            {!! Form::text('nationality', $editPatients->nationality, array('class' => 'form-control', 'placeholder'=>'Enter Nationality')); !!}

                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->

                    <div class="col-md-6">
                        <div class="form-group">
                             {!! Form::label('applied_position', 'Applied Position: '); !!}	 
                            {!! Form::text('applied_position', $editPatients->applied_position, array('class' => 'form-control', 'placeholder'=>'Enter Applied Position')); !!}										
                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->

                    <div class="col-md-6">
                        <div class="form-group">
                        {!! Form::label('recruiting_agency_name', 'Recruiting Agency Name: '); !!}	 
                            {!! Form::text('recruiting_agency_name', $editPatients->recruiting_agency_name, array('class' => 'form-control', 'placeholder'=>'Enter Recruiting Agency Name')); !!}                                   
                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->

                    <div class="col-md-6">
                        <div class="form-group">
                        {!! Form::label('date_of_birth', 'Date of Birth: '); !!}	 
                            {!! Form::text('date_of_birth', $editPatients->date_of_birth, array('class' => 'form-control date datetimepicker', 'placeholder'=>'Enter Date of Birth')); !!}                                   
                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->

                    <div class="col-md-6">
                        <div class="form-group">
                        {!! Form::label('profession', 'Profession: '); !!}	 
                            {!! Form::text('profession', $editPatients->profession, array('class' => 'form-control', 'placeholder'=>'Enter Profession')); !!}                                   
                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->

                    <div class="col-md-12">							
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                    </div><!-- end .col-md-12 -->

                {!! Form::close() !!} 
            </div><!-- end .well -->
        </div><!-- end .patient-info -->
    </div><!-- end .col-md-8 -->

</div><!-- end .row -->
@stop