<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fit card front</title>
	<link rel="stylesheet"  type="text/css" href="{{URL::to('/css/fitCard/front.css')}}">
</head>
<body>
	<div class="container printArea">
		<h3 class="slfc-section-name">LABORATORY INVESTIGATIONS</h3>
		<section class="slfc-li">
			<div class="slfc-result-heading">
				<p>Type of Lab investigation</p>
				<p>Results</p>
			</div><!-- end .slfc-result-container -->
			<div class="slfc-result-container">
				<div class="slfc-investigation-name">
					<p>Urine</p>
				</div><!-- end .slfc-investigation-name -->
				<div class="slfc-investigation-result">
					<div>
						<p>Sugar</p>
						<p>{!! $patientInfo->urine_sugar !!}</p>
					</div>
					<div>
						<p>Albumine</p>
						<p>{!! $patientInfo->urine_alburmine !!}</p>
					</div>
					<div>
						<p>Bilharziasis</p>
						<p>{!! $patientInfo->urine_bilharziasis !!}</p>
					</div>
					<!--Only for female-->
                       @if($patientInfo->gender == "Female" && !empty($patientInfo->urine_pregnancy_test))                       
                        <div>
                            <p>Pregnancy Test</p>
                            <p>{!! $patientInfo->urine_pregnancy_test !!}</p>
                        </div>
					   @endif
				</div><!-- end .slfc-investigation-result -->
			</div><!-- end .slfc-result-container -->

			<div class="slfc-result-container">
				<div class="slfc-investigation-name">
					<p>Stool</p>
				</div><!-- end .slfc-investigation-name -->
				<div class="slfc-investigation-result">
					<div>
						<p>Helminthes</p>
						<p>{!! $patientInfo->stool_helminthes !!}</p>
					</div>
					<div>
						<p>Guardia</p>
						<p>{!! $patientInfo->stool_guardia !!}</p>
					</div>
					<div>
						<p>Bilharziasis</p>
						<p>{!! $patientInfo->stool_bilharziasis !!}</p>
					</div>
					<div>
						<p>Salmonella</p>
						<p>{!! $patientInfo->stool_salmonella !!}</p>
					</div>
					<div>
						<p>V. Cholerae</p>
						<p>{!! $patientInfo->stool_v_cholerae !!}</p>
					</div>
				</div><!-- end .slfc-investigation-result -->
			</div><!-- end .slfc-result-container -->

			<div class="slfc-result-container">
				<div class="slfc-investigation-name">
					<p>Blood</p>
				</div><!-- end .slfc-investigation-name -->
				<div class="slfc-investigation-result">
					<div>
						<p>Haemoglobin</p>
						<p>{!! $patientInfo->blood_haemoglobin !!}</p>
					</div>
					<div>
						<p>Malaria</p>
						<p>{!! $patientInfo->blood_malaria !!}</p>
					</div>
					<div>
						<p>Micro Filaria</p>
						<p>{!! $patientInfo->blood_micro_filaria !!}</p>
					</div>
				</div><!-- end .slfc-investigation-result -->
			</div><!-- end .slfc-result-container -->

			<div class="slfc-result-container">
				<div class="slfc-investigation-name">
					<p>Serology</p>
				</div><!-- end .slfc-investigation-name -->
				<div class="slfc-investigation-result">
					<div>
						<p>F.B.S</p>
						<p>{!! $patientInfo->serology_fbs !!}mg/dl</p>
					</div>
					<div>
						<p>L.F.T-S Bil / SGPT</p>
						<p>{!! $patientInfo->serology_lfts_bil !!}gm/dl {!! $patientInfo->serology_sgpt !!}U/L</p>
					</div>
					<div>
						<p>SGOT</p>
						<p>{!! $patientInfo->serology_sgot !!}U/L</p>
					</div>
					<div>
						<p>Creatinine</p>
						<p>{!! $patientInfo->serology_creatinine !!}mg/dl</p>
					</div>
				</div><!-- end .slfc-investigation-result -->
			</div><!-- end .slfc-result-container -->

			<div class="slfc-result-container">
				<div class="slfc-investigation-name">
					<p>Elisa</p>
				</div><!-- end .slfc-investigation-name -->
				<div class="slfc-investigation-result">
					<div>
						<p>HIV 1+2</p>
						<p>{!! $patientInfo->elisa_hiv !!}</p>
					</div>
					<div>
						<p>HBsAg</p>
						<p>{!! $patientInfo->elisa_hbsag !!}</p>
					</div>
					<div>
						<p>Anti HCV</p>
						<p>{!! $patientInfo->elisa_anti_hcv !!}</p>
					</div>
					<div>
						<p>VDRL</p>
						<p>{!! $patientInfo->elisa_vdrl !!}</p>
					</div>
					<div>
						<p>TPHA (if VDRL reactive)</p>
						<p>{!! $patientInfo->elisa_tpha !!}</p>
					</div>
				</div><!-- end .slfc-investigation-result -->
			</div><!-- end .slfc-result-container -->

			<div class="slfc-result-container">
				<div class="slfc-investigation-name last">
					<p>blank</p>
				</div><!-- end .slfc-investigation-name -->
				<div class="slfc-investigation-result">
					<div>
						<p>Blood Group</p>
						<p>{!! $patientInfo->blood_group !!}</p>
					</div>
				</div><!-- end .slfc-investigation-result -->
			</div><!-- end .slfc-result-container -->
			<div class="slfc-investigation-stamp-sign">
				<p>Notes about medical and laboratory investigations</p>
				<p class="investigation-notice">NO ABNORMALITY DETECTED</p>
				<p>Dear Sir, Mensioned abobe is the medical report for <b>Mr/Mrs/Miss</b></p>
				<p class="investigation-user">{!! $patientInfo->first_name !!} {!! $patientInfo->last_name !!}</p>
				<p>He/She is <span class="fitUnfit">
				
				@if($patientInfo->physical_fitUnfit == 'Yes' && $patientInfo->pathology_fitUnfit && $patientInfo->radiology_fitUnfit == 'Yes'  )				
				FIT
				@else
                    UNFIT
				@endif
				
				
				
				
				</span> for the above mentioned job.</p>
				<p class="investigation-physician">Chief Physician</p>
				<div class="stamp-sign">
					<div class="investigation-stamp">
						<p>Stamp</p>
					</div>
					<div class="investigation-sign">
						<p>Signature</p>
						<p>Name</p>
					</div>
				</div>
			</div><!-- end .slfc-investigation-stamp-sign -->
		</section><!-- end .slfc-li -->

		<section class="slfc-front">
			<h2>Health Examination Certificate</h2>
			<h1>FIT CARD</h1>
			<img src="{{URL::to('/img/logo.svg')}}" alt="starlab logo">
			<p>44, Nayapaltan, VIP Road,Dhaka-1000<br>
				Cell: +88 01731804116, +880 29343273<br>
				E-mail: starlab5206@gmail.com<br>
                Web: <a href="http://starlabbd.com">www.starlabbd.com</a>
			</p>
		</section><!-- end .slfc-front -->
	</div><!--container-->
</body>
</html>