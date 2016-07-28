<!doctype html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>KG SIS</title>


    <link rel="apple-touch-icon" href="[INSERT apple-tuch-icon.png]">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <! -- WE ASSUME YOU ARE USING A main.css FOR CSS CUSTOMIZATION -->
    <!-- link rel="stylesheet" href="./css/main.css"> -->
    <! -- DOWNLOAD LAST VERSION IN http://modernizr.com/ -->
    <!-- script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> -->
</head>

<body>

   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <div class="container">
         

        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                 
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                </div>     

                <div style="padding-top:30px" class="panel-body" >

                    @if(Session::get ('message'))
                           <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {!! Session::get ('message') !!}
                          </div>   
                    @endif()


                {!! Form::open(array('url' => 'login','class'=>'form-horizontal','role'=>'form')) !!}                            


                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>                                    
                   
                    {!! Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com', 'class'=>'form-control')) !!}
                    
                    </div>

                <div style="margin-bottom: 25px" class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
                     {!! Form::password('password', array('class'=>'form-control')) !!}
                </div>


                <div style="margin-top:10px" class="form-group">
                    <!-- Button -->

                    <div class="col-sm-12 controls">
                     {!! Form::submit('Submit!') !!}                             

                    </div>
                </div>

                {!! Form::close() !!}   

                </div>                     
            </div>
        </div>


    
    
    
    
    
    
    
    