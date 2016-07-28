<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Money Receipt</title>
</head>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,800' rel='stylesheet' type='text/css'>
<style>
	body {
		font-family: 'Open Sans', sans-serif;
	}
	h1, h2, p, img, span {
		margin: 0;
		padding: 0;
		line-height: 1;
	}
	p {
		font-size: 11px;
	}
	.slmr-container {
		width: 672px;
		height: 432px;
		padding: 24px 48px;
		margin: 0 auto;
		border: 1px solid #000000;;
	}
	header div {
		float: left;
	}
	.slmr-upper-contact h2 {
		font-weight: 400;
		font-size: 20px;
	}
	.slmr-upper-contact p {
		font-size: 13px;
		line-height: 14px;
	}
	.slmr-heading {
		margin-top: 56px;
		margin-left: 56px;
	}
	.slmr-image {
		margin-top: 28px;
		margin-left: 80px;
	}
	.slmr-image img{
		width: 58px;
		height: auto;
	}
	.slmr-data-container {
		min-width: 520px;
	}
	.slmr-heading h1{
		text-align: center;
		font-size: 26px;
		font-weight: 800;
	}
	section {
		clear: both;
		padding-top: 10px;
	}
	.slmr-data-row {
		clear: both;
	}
	.slmr-single-data {
		height: 26px;
		border: 1px solid #727374;
		margin-bottom: 3px;
	}
	.slmr-single-data-big {
		height: 100%;
		border: 1px solid #727374;
	}
	.slmr-single-data-big p {
		float: left;
	}
	.slmr-single-half {
		width: 49%;
		float: left;
	}
	.slmr-single-full {
		width: 98.2%;
	}
	.slmr-single-data p {
		float: left;
	}
	.slmr-single-data-big .slmr-data-heading {
		height: 36px;
		line-height: 14px;
	}
	.slmr-data-heading {
		width: 112px;
		height: 26px;
		background: #0872ba;
		color: #ffffff;
		display: block;
		padding-left: 12px;
	}
	.slmr-data-heading{
		height: 26px;
		line-height: 26px;
	}
	.slmr-data-content {
		line-height: 26px;
		text-transform: uppercase;
		padding-left: 10px;
	}
	.slmr-nb {
		font-weight: 700;
		font-style: normal;
	}
	.slmr-notice {
		font-style: italic;
	}
	.slmr-contact-notice {
		font-family: 'Kalpurush';
		font-size: 14px;
		margin-top: 3px;
		line-height: 19px;
	}
	.slmr-notice-phone {
		font-family: 'Open Sans', sans-serif;
		font-size: 12px;
	}
	footer {
		clear: both;
		padding-top: 12px;
		position: relative;
	}
	.serial-number {
		width: 156px;
		height: 28px;
		border-radius: 10px;
		border: 1px solid #000000;
		position: absolute;
		top: 42px;
		left: 130px;
	}
	.serial-number p {
		font-size: 20px;
		text-align: center;
		line-height: 28px;
	}
	.slmr-address {
		font-family: "Kalpurush";
	}
</style>
<body>

    <!--Office Copy-->
	<div class="slmr-container">
		<header>
			<div class="slmr-upper-contact">
				<h2>Star Lab</h2>
				<p>Diagonostic & Medical Checkup Center<br>
				   44, Noyapaltan (3rd Floor), V.I.P. Road,<br>
				   Dhaka-1100.<br>
				   Phone: +88 02 9343273<br>
				   Cell: +88 01731-804116<br>
				   Email: starlab5206@gmail.com</p>
				   <p>bangla contact details <br>
				   <span class="slmr-address">(পল্টন মডেল থানার বিপরীত দিকে)</span></p>
			</div><!-- end .slmr-upper-contact -->
			<div class="slmr-heading">
				<h1>Money Reciept</h1>
                <p>(Office Copy)</p>
			</div><!-- end .slmr-heading -->
			<div class="slmr-image">
				<img  src="{{ URL('patients-photos') }}/{!! $patientInfo->photo_name !!}"  />
			</div><!-- end .slmr-image -->
		</header>


		<section>
			<div class="slmr-data-container">
				<div class="slmr-data-row">
					<div class="slmr-single-data slmr-single-half">
						<p class="slmr-data-heading">Date</p>
						<p class="slmr-data-content">{!! date("d-m-Y"); !!}</p>
					</div><!-- end .slmr-single-data -->

					<div class="slmr-single-data slmr-single-half">
						<p class="slmr-data-heading">Starlab Code No.</p>
						<p class="slmr-data-content">{!! $patientInfo->card_serial !!}</p>
					</div><!-- end .slmr-single-data -->
				</div><!-- end .slmr-data-row -->

				<div class="slmr-data-row">
					<div class="slmr-single-data slmr-single-half">
						<p class="slmr-data-heading">Name</p>
						<p class="slmr-data-content">{!! $patientInfo->first_name !!} {!! $patientInfo->last_name !!}</p>
					</div><!-- end .slmr-single-data -->

					<div class="slmr-single-data slmr-single-half">
						<p class="slmr-data-heading">Daily Serial</p>
						<p class="slmr-data-content">XX</p>
					</div><!-- end .slmr-single-data -->
				</div><!-- end .slmr-data-row -->
				
				<div class="slmr-data-row">
					<div class="slmr-single-data slmr-single-half">
						<p class="slmr-data-heading">Passport No.</p>
						<p class="slmr-data-content">{!! $patientInfo->passport_no !!}</p>
					</div><!-- end .slmr-single-data -->

					<div class="slmr-single-data slmr-single-half">
						<p class="slmr-data-heading">Received Amount</p>
						<p class="slmr-data-content">BDT: 5,000/=</p>
					</div><!-- end .slmr-single-data -->
				</div><!-- end .slmr-data-row -->

				<div class="slmr-data-row">
					<div class="slmr-single-data slmr-single-full">
						<p class="slmr-data-heading">Profession</p>
						<p class="slmr-data-content">{!! $patientInfo->profession !!}</p>
					</div><!-- end .slmr-single-data -->
				</div><!-- end .slmr-data-row -->

				<div class="slmr-data-row">
					<div class="slmr-single-data slmr-single-full">
						<p class="slmr-data-heading">Recuiting Agency</p>
						<p class="slmr-data-content">{!! $patientInfo->recruiting_agency_name !!}</p>
					</div><!-- end .slmr-single-data -->
				</div><!-- end .slmr-data-row -->

				<div class="slmr-single-data-big slmr-single-half">
					<p class="slmr-data-heading">Reporting Date and Time</p>
					<p class="slmr-data-content">(from 3:00 PM to 5:00 PM)</p>
				</div><!-- end .slmr-single-data -->

				<div class="slmr-single-data-big slmr-single-half">
					<p class="slmr-data-heading">Authoriy of Starlab (Signature)</p>
					<p class="slmr-data-content"></p>
				</div><!-- end .slmr-single-data -->

			</div><!-- end .slmr-data-container -->
		</section>

		<footer>
			<p class="slmr-notice"><span class="slmr-nb">NB:</span> Friday and Government Holyday Closed</p>
			<p class="slmr-contact-notice">মেডিকেল রিপোর্ট জানার জন্য এই নাম্বারে ফোন করুন <span class="slmr-notice-phone">Cell: 01731804116, Phone: 02 9343273</span><br>
			এবং এই আইডিটি বলুনঃ
			</p>
			<div class="serial-number">
				<p>{!! $patientInfo->card_serial !!}</p>
			</div>
		</footer>
	</div><!-- end .slmr-container -->
	<!--Office Copy-->
	
	
	
	<br/>
	
	
	
	<!--Customer Copy-->
	<div class="slmr-container">
		<header>
			<div class="slmr-upper-contact">
				<h2>Star Lab</h2>
				<p>Diagonostic & Medical Checkup Center<br>
				   44, Noyapaltan (3rd Floor), V.I.P. Road,<br>
				   Dhaka-1100.<br>
				   Phone: +88 02 9343273<br>
				   Cell: +88 01731-804116<br>
				   Email: starlab5206@gmail.com</p>
				   <p>bangla contact details <br>
				   <span class="slmr-address">(পল্টন মডেল থানার বিপরীত দিকে)</span></p>
			</div><!-- end .slmr-upper-contact -->
			<div class="slmr-heading">
				<h1>Money Reciept</h1>
				<p>(Patient Copy)</p>
			</div><!-- end .slmr-heading -->
			<div class="slmr-image">
				<img  src="{{ URL('patients-photos') }}/{!! $patientInfo->photo_name !!}"  />
			</div><!-- end .slmr-image -->
		</header>


		<section>
			<div class="slmr-data-container">
				<div class="slmr-data-row">
					<div class="slmr-single-data slmr-single-half">
						<p class="slmr-data-heading">Date</p>
						<p class="slmr-data-content">{!! date("d-m-Y"); !!}</p>
					</div><!-- end .slmr-single-data -->

					<div class="slmr-single-data slmr-single-half">
						<p class="slmr-data-heading">Starlab Code No.</p>
						<p class="slmr-data-content">{!! $patientInfo->card_serial !!}</p>
					</div><!-- end .slmr-single-data -->
				</div><!-- end .slmr-data-row -->

				<div class="slmr-data-row">
					<div class="slmr-single-data slmr-single-half">
						<p class="slmr-data-heading">Name</p>
						<p class="slmr-data-content">{!! $patientInfo->first_name !!} {!! $patientInfo->last_name !!}</p>
					</div><!-- end .slmr-single-data -->

					<div class="slmr-single-data slmr-single-half">
						<p class="slmr-data-heading">Daily Serial</p>
						<p class="slmr-data-content">XX</p>
					</div><!-- end .slmr-single-data -->
				</div><!-- end .slmr-data-row -->
				
				<div class="slmr-data-row">
					<div class="slmr-single-data slmr-single-half">
						<p class="slmr-data-heading">Passport No.</p>
						<p class="slmr-data-content">{!! $patientInfo->passport_no !!}</p>
					</div><!-- end .slmr-single-data -->

					<div class="slmr-single-data slmr-single-half">
						<p class="slmr-data-heading">Received Amount</p>
						<p class="slmr-data-content">BDT: 5,000/=</p>
					</div><!-- end .slmr-single-data -->
				</div><!-- end .slmr-data-row -->

				<div class="slmr-data-row">
					<div class="slmr-single-data slmr-single-full">
						<p class="slmr-data-heading">Profession</p>
						<p class="slmr-data-content">{!! $patientInfo->profession !!}</p>
					</div><!-- end .slmr-single-data -->
				</div><!-- end .slmr-data-row -->

				<div class="slmr-data-row">
					<div class="slmr-single-data slmr-single-full">
						<p class="slmr-data-heading">Recuiting Agency</p>
						<p class="slmr-data-content">{!! $patientInfo->recruiting_agency_name !!}</p>
					</div><!-- end .slmr-single-data -->
				</div><!-- end .slmr-data-row -->

				<div class="slmr-single-data-big slmr-single-half">
					<p class="slmr-data-heading">Reporting Date and Time</p>
					<p class="slmr-data-content">(from 3:00 PM to 5:00 PM)</p>
				</div><!-- end .slmr-single-data -->

				<div class="slmr-single-data-big slmr-single-half">
					<p class="slmr-data-heading">Authoriy of Starlab (Signature)</p>
					<p class="slmr-data-content"></p>
				</div><!-- end .slmr-single-data -->

			</div><!-- end .slmr-data-container -->
		</section>

		<footer>
			<p class="slmr-notice"><span class="slmr-nb">NB:</span> Friday and Government Holyday Closed</p>
			<p class="slmr-contact-notice">মেডিকেল রিপোর্ট জানার জন্য এই নাম্বারে ফোন করুন <span class="slmr-notice-phone">Cell: 01731804116, Phone: 02 9343273 </span><br>
			এবং এই আইডিটি বলুনঃ
			</p>
			<div class="serial-number">
				<p>{!! $patientInfo->card_serial !!}</p>
			</div>
		</footer>
	</div><!-- end .slmr-container -->
	<!--Customar copy-->

	
	
	
	
	
	
</body>
</html>



    


































