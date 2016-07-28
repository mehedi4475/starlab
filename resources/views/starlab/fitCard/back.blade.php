<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fit card back</title>
	<link rel="stylesheet" type="text/css" href="{{URL::to('/css/fitCard/back.css')}}">
</head>
<body>
	<div class="container">
		<div class="section">
			<h3 class="slfc-section-name">COUNTRY NAME: {!! $patientInfo->country !!}</h3>
			<section class="slfc-mr">
				<div class="slfc-result-container">
					<div class="slfc-mr-details">
						<div class="slfc-mr-photo">
							<img width="100px" height="100px" src="{{ URL('patients-photos') }}/{!! $patientInfo->photo_name !!}" alt="Patient Photo" />
						</div>
						<div class="slfc-mr-details-text">
							<div class="slfc-mr-single-text has-border">
								<p>Card SL : </p>
								<p> {!! $patientInfo->card_serial !!}</p>
							</div>
							<div class="slfc-mr-single-text has-border">
								<p>Card Issue Date : </p>
								<p> {!! date("d/m/Y") !!}</p>
							</div>
							<div class="slfc-mr-single-text has-border">
								<p>Card Expiry Date : </p>                                
								<p> {!! $effectiveDate = date('d/m/Y', strtotime("+3 months")); !!}</p>
							</div>
							<div class="slfc-mr-single-text has-no-border">
								<p>BOESL Code : </p>
                                <p><b>
                                @if($patientInfo->boesl_code) 
                                {!! $patientInfo->boesl_code !!}
                                @else
                                 N/A
                                @endif
                                </b></p>
							</div>
							<div class="slfc-mr-single-text  has-no-border">
								<p>Visa No : </p>
                                <p><b>
                                @if($patientInfo->visa_no) 
                                {!! $patientInfo->visa_no !!}
                                @else
                                N/A
                                @endif   
                                </b></p>
							</div>
							<div class="slfc-mr-single-text  has-no-border">
								<p>Visa Date : </p>
                               <p>
                                @if($patientInfo->visa_date != '0000-00-00') 
                                {!! $patientInfo->visa_date !!}
                                @else
                                N/A
                                @endif
                                </p>
							</div>
							<div class="slfc-mr-single-text  has-no-border">
								<p>Passport No : </p>
                                <p><b>{!! $patientInfo->passport_no !!}</b></p>
							</div>
							<div class="slfc-mr-single-text  has-no-border">
								<p>Date of issue : </p>
                                <p><b>{!! $patientInfo->passport_issue_date !!}</b></p>
							</div>
							<div class="slfc-mr-single-text  has-no-border">
								<p>Place of issue : </p>
                                <p><b>{!! $patientInfo->passport_issue_place !!}</b></p>
							</div>
						</div>
					</div>
					<div class="slfc-mr-personal-profile">
						<h3>MEDICAL REPORT</h3>
						<div class="slfc-mr-info-details">
							<div class="slfc-mr-info">
								<p>Last Name : </p>
								<p>{!! $patientInfo->last_name !!}</p>
							</div>
						</div>
						<div class="slfc-mr-info-details">
							<div class="slfc-mr-info">
								<p>First Name : </p>
								<p>{!! $patientInfo->first_name !!}</p>
							</div>
						</div>
						<div class="slfc-mr-info-details">
							<div class="slfc-mr-info">
								<p>Ht</p>
								<p>{!! $patientInfo->height !!}CM</p>
							</div>
							<div class="slfc-mr-info">
								<p>Wt</p>
								<p>{!! $patientInfo->weight !!} Kg</p>
							</div>
							<div class="slfc-mr-info">
								<p>Sex</p>
								<p>{!! $patientInfo->gender !!}</p>
							</div>
							<div class="slfc-mr-info">
								<p>Age</p>
								<p>
                                    @if($patientInfo->date_of_birth != '0000-00-00')
                                    {!! $currentYear = date("Y-m-d") - $patientInfo->date_of_birth; !!} years
                                    @else
                                    XX years
                                    @endif
                                   </p>
							</div>
						</div>
						<div class="slfc-mr-info-details">
							<div class="slfc-mr-info">
								<p>Marital Status</p>
								<p>{!! $patientInfo->marital !!}</p>
							</div>
							<div class="slfc-mr-info">
								<p>Nationality</p>
								<p>{!! $patientInfo->nationality!!}</p>
							</div>
						</div>
						<div class="slfc-mr-info-details">
							<div class="slfc-mr-info">
								<p>Position Apllied for</p>
								<p>{!! $patientInfo->applied_position !!}</p>
							</div>
						</div>
						<div class="slfc-mr-info-details">
							<div class="slfc-mr-info">
								<p>Recruiting Agency</p>
								<p>{!! $patientInfo->recruiting_agency_name !!}</p>
							</div>
						</div>
						<p class="history">History of any significant past illness including: </p>
						<div class="slfc-mr-info-details full">
							<div class="slfc-mr-info">
								<p>1)Psychiatric & Neurological Disorders (Epilipsy, Depression)</p>
								<p>NIL</p>
							</div>
						</div>
						<div class="slfc-mr-info-details half">
							<div class="slfc-mr-info">
								<p>2) Allergy</p>
								<p>ABSENT</p>
							</div>
							<div class="slfc-mr-info">
								<p>3) Others</p>
								<p>NIL</p>
							</div>
						</div>
					</div>
				</div><!-- end .slfc-result-container -->
			</section><!-- end .slfc-mr -->
		</div>
		<div class="section">
			<h3 class="slfc-section-name">MEDICAL EXAMINATIONS</h3>
			<section class="slfc-me">
				<div class="slfc-result-heading">
					<p>Type of Lab investigation</p>
					<p>Results</p>
				</div><!-- end .slfc-result-heading -->
				<div class="slfc-result-container">
					<div class="slfc-eye-ear">
						<div class="slfc-eye-ear-single">
							<div class="slfc-eye-ear-heading">
								<p>Eye</p>
							</div>
							<div class="slfc-eye-position">
								<p>Rt.</p>
								<p>Lt.</p>
							</div>
						</div>
						<div class="slfc-eye-ear-result">
							<p>{!! $patientInfo->eye_right !!}</p>
						    <p>{!! $patientInfo->eye_left !!}</p>
						</div>
					</div>
				</div><!-- end .slfc-result-container -->
				<div class="slfc-result-container">
					<div class="slfc-eye-ear">
						<div class="slfc-eye-ear-single">
							<div class="slfc-eye-ear-heading">
								<p>Ear</p>
							</div>
							<div class="slfc-ear-position">
								<p>Rt.</p>
								<p>Lt.</p>
							</div>
						</div>
						<div class="slfc-eye-ear-result">
							<p>{!! $patientInfo->ear_right !!}</p>
						    <p>{!! $patientInfo->ear_left !!}</p>
						</div>
					</div>
				</div><!-- end .slfc-result-container -->

				<div class="slfc-result-container">
					<div class="slfc-examination-type">
						<div class="slfc-examination-heading">
							<h3>SYSTEMIN EXAMINTAIONS</h3>
							<p>CARDIO VASCULAR</p>
						</div>
						<div class="slfc-examination">
							<p>B.P</p>
							<p>{!! $patientInfo->blood_pressure !!} mm/Hg</p>
						</div>
						<div class="slfc-examination">
							<p>Heart</p>
							<p>{!! $patientInfo->heart !!}</p>
						</div>
					</div>
				</div><!-- end .slfc-result-container -->

				<div class="slfc-result-container">
					<div class="slfc-examination-type">
						<div class="slfc-examination-heading">
							<p>RESPIRATORY SYSTEM</p>
						</div>
						<div class="slfc-examination">
							<p>Lungs</p>
							<p>{!! $patientInfo->lungs !!}</p>
						</div>
						<div class="slfc-examination">
							<p>Chest X-ray</p>
							<p>{!! $patientInfo->ches_x_ray !!}</p>
						</div>
					</div>
				</div><!-- end .slfc-result-container -->

				<div class="slfc-result-container">
					<div class="slfc-examination-type">
						<div class="slfc-examination-heading">
							<p>GASTRO INTESTINAL</p>
						</div>
						<div class="slfc-examination">
							<p>Abdomen</p>
							<p>{!! $patientInfo->abdomen !!}</p>
						</div>
					</div>
				</div><!-- end .slfc-result-container -->

				<div class="slfc-result-container">
					<div class="slfc-examination-type">
						<div class="slfc-examination-heading">
							<p>OTHERS</p>
						</div>
						<div class="slfc-examination">
							<p>Hemia</p>
							<p>{!! $patientInfo->hernia !!}</p>
						</div>
						<div class="slfc-examination">
							<p>Varicos Veins</p>
							<p>{!! $patientInfo->varicose_veins !!}</p>
						</div>
						<div class="slfc-examination">
							<p>Extremities</p>
							<p>{!! $patientInfo->extremities !!}</p>
						</div>
						<div class="slfc-examination">
							<p>Deformities</p>
							<p>{!! $patientInfo->deformities !!}</p>
						</div>
						<div class="slfc-examination">
							<p>Skin</p>
							<p>{!! $patientInfo->skin !!}</p>
						</div>
						<div class="slfc-examination">
							<p>CNS</p>
							<p>{!! $patientInfo->cns !!}</p>
						</div>
						<div class="slfc-examination">
							<p>PSYCHIATRY</p>
							<p>{!! $patientInfo->psychiatry !!}</p>
						</div>
					</div>
				</div><!-- end .slfc-result-container -->

				<div class="slfc-result-container">
					<div class="slfc-examination-type">
						<div class="slfc-examination-heading">
							<p>VENEREAL DISEASES</p>
						</div>
						<div class="slfc-examination">
							<p>Clinical</p>
							<p>{!! $patientInfo->clinical !!}</p>
						</div>
					</div>
				</div><!-- end .slfc-result-container -->
			</section><!-- end .slfc-me -->
		</div>
	</div><!-- end .container -->
</body>
</html>