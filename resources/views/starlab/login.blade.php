<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign in | StarLab</title>
	<link rel="icon" href="{!! asset('img/favicon.png') !!}">
	<link href="{!! asset('css/bootstrap.css') !!}" media="all" rel="stylesheet" type="text/css" />	
	<link rel="stylesheet" href="{!! asset('css/bootstrap-theme.css') !!}"> 
	<link rel="stylesheet" href="{!! asset('css/font-awesome.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/style.css') !!}">
</head>
<body>
<div class="login-page-body">
		<div class="login-page">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-offset-3">
						<div class="login-form">
							<img src="img/logo.svg" alt="logo" class="login-logo">							
                                 <div style="padding-top:0px" class="panel-body" >

                                    @if(Session::get ('message'))
                                           <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            {!! Session::get ('message') !!}
                                          </div>   
                                    @endif()
                                </div>
                                
							{!! Form::open(array('url' => 'login','class'=>'form-horizontal','role'=>'form')) !!} 
								<div class="form-group input-group">
									<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
	  								{!! Form::text('username', '', array('placeholder' => 'Username', 'class'=>'form-control')) !!}
								</div><!-- end .form-group -->

							      						   						   						   						   						   						   						   
							    <div class="form-group input-group">
							    	<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>  								    {!!  Form::password('password', array('placeholder' => 'Password', 'class'=>'form-control')) !!}
							    </div><!-- end .form-group -->						   						   						   						   						   						   						   						   						   						   

							    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
							 {!! Form::close() !!} 
						</div><!-- end .login-form -->
					</div><!-- end .col-md-5 -->
				</div><!-- end .row -->
			</div><!-- end .container -->
		</div><!-- end .login-page -->
	</div><!-- end .login-page-body -->
	<script src="{!! asset('js/jquery.min.js') !!}"></script>
	<script src="{!! asset('js/moment.js') !!}"></script>
	<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
	<script src="{!! asset('js/bootstrap-datetimepicker.js') !!}"></script>
	<script src="{!! asset('js/jquery.bootstrap-touchspin.js') !!}"></script>
	<script src="{!! asset('js/fileinput.min.js') !!}"></script>
	<script src="{!! asset('js/custom.js') !!}"></script>
</body>
</html>