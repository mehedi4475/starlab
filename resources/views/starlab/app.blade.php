<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard | StarLab</title>
	<link rel="icon" href="img/favicon.png">
	<link rel="stylesheet" href="{{URL::to('/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{URL::to('/css/bootstrap-theme.css')}}">
	<link rel="stylesheet" href="{{URL::to('/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('/css/bootstrap-datetimepicker.css')}}">
	<link rel="stylesheet" href="{{URL::to('/css/sweetalert.css')}}">	
	<link rel="stylesheet" href="{{URL::to('/css/style.css')}}">
	
	
	<script src="{{ URL('js/sweetalert.min.js') }}"></script>
</head>
<body>
	<div class="dashboard">
		<div class="container">
			<div class="row">
			  <img src="{{URL::to('/img/logo.svg')}}" alt="logo" class="logo">
			</div><!-- end .row -->

			<div class="row">
				<nav class="navbar navbar-default">
					<ul class="nav navbar-nav">
						<li><a href="{{URL::to('/dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
						<li><a href="{{URL::to('/create')}}"><i class="fa fa-user-plus"></i> Add Patient</a></li>					
						<li><a href="{{URL::to('/search-patient')}}"><i class="fa fa-search-plus"></i> Find Patient</a></li>
						<li><a href="{{URL::to('/patients/all')}}"><i class="fa fa-users"></i> All Patients</a></li>
                       
						@if( Session::get('userPower') == md5(2))
                        <li><a class="admin" href="{{URL::to('/user')}}/{!! Session::get('userId')!!}"><i class="fa fa-user"></i><span> Super Admin</span></a></li>
                         @elseif( Session::get('userPower') == md5(1))
                           <li><a class="admin" href="{{URL::to('/user')}}/{!! Session::get('userId')!!}"><i class="fa fa-user"></i><span> Admin</span></a></li>
                        @endif 
						
						<li><a href="{{URL::to('/fitUnfit')}}"><i class="fa fa-print"></i> Fit/Unfit</a></li>
						<li><a href="{{URL::to('/logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
					</ul><!-- end .nav -->
				</nav><!-- end .navbar -->
			</div><!-- end .row -->
        
        <div class="row">
            <div class="show-patient">
               
               @if (notify()->ready())
                <script>
                    swal({
                        title: "{!! notify()->message() !!}",
                        text: "{!! notify()->option('text') !!}",
                        type: "{{ notify()->type() }}",
                        @if (notify()->option('timer'))
                            timer: {{ notify()->option('timer') }},
                            showConfirmButton: false
                        @endif
                    });
                </script>
            @endif
               
            @if($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                </button>
                    @foreach($errors->all() as $error)
                    {{$error}}<br/>
                    @endforeach
                </div>
            @endif  
               
               
               
               
              <!--
                   @if(Session::get('message'))
                        <div class="alert {{Session::get('alert')}}">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                        </button>
                            {!! Session::get('message') !!}
                        </div>
                    @endif 
                    
                     @if($errors->any())
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                        </button>
                            @foreach($errors->all() as $error)
                            {{$error}}<br/>
                            @endforeach
                        </div>
                    @endif
                   -->
            </div>
        </div>

       <p></p>
            
       @yield('body')

        <div class="row"> 
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="section">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="copyright">
					<p>&copy; Star Lab Diagnostic & Medical Checkup Center</p>
					<p>Developed & mantained by <a target="_blank" href="http://opticalit.com">Optical IT</a></p>
				</div>
                </div>
              </div> 
            </div>
        </div>
    </div>
</div>

    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Start coding here -->


    <!-- Coding End -->

	<script src="{{ URL('js/jquery.min.js') }}"></script>
	<script src="{{ URL('js/moment.js') }}"></script>
	<script src="{{ URL('js/bootstrap.min.js') }}"></script>
	<script src="{{ URL('js/bootstrap-datetimepicker.js') }}"></script>
	<script src="{{ URL('js/jquery.bootstrap-touchspin.js') }}"></script>
	<script src="{{ URL('js/fileinput.min.js') }}"></script>
	<script src="{{ URL('js/pdfobject.js') }}"></script>
	
	<script src="{{ URL('js/custom.js') }}"></script>
</body>
</html>