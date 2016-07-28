@extends('starlab/app')

@section('body')

<div class="row">
    <div class="add-patient">
        <div class="well well-lg">
            {!! Form::open(array('url' => 'create', 'enctype'=>'multipart/form-data')) !!}

                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('patient_photo', 'Select Photo:'); !!}
                        {!! Form::file('patient_photo', array('class' => 'file')); !!}                         				   
                    </div><!-- end .form-group -->
                </div><!-- end .col-md-12 -->


                <div class="col-md-6">
                    <div class="form-group">
                         {!! Form::label('card_serial', 'Card Serial:'); !!}
                         {!! Form::text('card_serial', '', array('class' => 'form-control', 'placeholder'=>'Enter Card Serial')); !!}
                    </div><!-- end .form-group -->
                </div><!-- end .col-md-6 -->


                <div class="col-md-6">
                    <div class="form-group">
                         {!! Form::label('passport_no', 'Passport No: ') !!}
                         {!! Form::text('passport_no', '', array('class' => 'form-control', 'id'=>'passport_no', 'placeholder'=>'Enter Passport No')); !!}								

                    </div><!-- end .form-group -->
                </div><!-- end .col-md-6 -->

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('first_name', 'First Name: ') !!}
                         {!! Form::text('first_name', '', array('class' => 'form-control', 'id'=>'first_name', 'placeholder'=>'Enter First Name')); !!}										
                    </div><!-- end .form-group -->
                </div><!-- end .col-md-6 -->

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('last_name', 'Last Name: ') !!}
                         {!! Form::text('last_name', '', array('class' => 'form-control', 'id'=>'last_name', 'placeholder'=>'Enter Last Name')); !!}										
                    </div><!-- end .form-group -->
                </div><!-- end .col-md-6 -->


                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('country_name', 'Country Name: ') !!}				

                        <?php 
                            echo Form::select('country_name',
                            array(

                                'bangladesh'            =>'Bangladesh',
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

                            ),'' , array('class'=>'form-control')); 
                        ?>																																
                    </div><!-- end .form-group -->
                </div><!-- end .col-md-6 -->


                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-user-plus"></i> Add Patient</button>
                    </div><!-- end .form-group -->
                </div><!-- end .col-md-12 -->
            {!! Form::close()!!}
        </div><!-- end .well -->
    </div><!-- end .add-patient -->		
</div><!-- end .row -->

@stop