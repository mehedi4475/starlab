@extends('starlab/app')

@section('body')

    <div class="row">
        <div class="find-patient">
            <div class="well well-lg">
               {!! Form::open(array('method'=>'post', 'enctype'=>'multipart/form-data', 'action' => array('Starlab@searchPatient'))) !!}
              

                    <div class="form-group">
                        <div class="col-md-5">                        	 
                                        {!! Form::text('card_serial','', array('class' => 'form-control', 'placeholder'=>'Enter Card Serial')); !!}	
                           
                        </div>
                    </div><!-- end .form-group -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search-plus"></i> Find Patient</button>
                    </div><!-- end .form-group -->
                {!! Form::close() !!} 
            </div><!-- end .well -->
        </div><!-- end .find-patient -->
<!--
        <div class="copyright">
            <p>&copy; Star Lab Diagnostic & Medical Checkup Center</p>
            <p>Developed & mantained by <a href="http://opticalit.com">Optical IT</a></p>
        </div><!-- end .copyright -->

    </div><!-- end .row -->
@stop