@extends('starlab/app')

@section('body')

			<div class="row">
				<div class="col-md-3">
					<div class="list-group">
						<a class="list-group-item" href="{{url('patient/'.$radilogy->id)}}/edit"><i class="fa fa-info-circle fa-fw"></i>&nbsp; Basic Information</a>
						<a class="list-group-item" href="{{url($radilogy->id)}}/edit-medical-examinations"><i class="fa fa-heartbeat fa-fw"></i>&nbsp; Physical</a>
						<a class="list-group-item" href="{{url($radilogy->id)}}/edit-laboratory-investigations"><i class="fa fa-stethoscope fa-fw"></i>&nbsp; Pathology</a>
                        <a class="list-group-item active" href="{{url($radilogy->id)}}/edit-radiology"><i class="fa fa-forumbee"></i>&nbsp; Radiology</a>
						
						
					</div>
				</div>
				<div class="col-md-9">
				
				<div class="patient-info">
                    <div class="well well-lg">
                       <table class="table table-bordered">
                           <tr>
                               <td class="alert alert-info">Card Number:</td>
                               <td>{!! $radilogy->card_serial !!}</td>
                               <td class="alert alert-info">Passport No:</td>
                               <td>{!! $radilogy->passport_no !!}</td>
                               <td class="alert alert-info"> Full Name:</td>
                               <td>{!! $radilogy->first_name !!} {!! $radilogy->last_name !!}</td>
                           </tr>                            
                       </table>  
                    </div>
                </div>
                    
                    
					<div class="patient-info">
						<div class="well well-lg">
							{!! Form::open(array('method'=>'post', 'enctype'=>'multipart/form-data', 'action' => array('Starlab@updateRadiology', $radilogy->id))) !!}

								
								<div class="col-md-12">
									<div class="form-group">
									    {!! Form::label('ches_x_ray', 'Ches X-ray'); !!}				 
                                        {!! Form::text('ches_x_ray', $radilogy->ches_x_ray, array('class' => 'form-control', 'placeholder'=>'Ches X-ray')); !!}										
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

				        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('radiology_fitUnfit', 'FIT for Radilogy? ') !!}
                                <?php 
                                    echo Form::select('radiology_fitUnfit',
                                    array(
                                        ''                 =>'--Select--',
                                        'Yes'             =>'Yes',
                                        'No'           =>'No',


                                ), $radilogy->radiology_fitUnfit, array('class'=>'form-control')); 
                                ?>										
                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->
                        
                        <div class="col-md-12">
									<div class="form-group">
									    {!! Form::label('radiology_Unfit_comment', 'Reason for UNFIT'); !!}				 
                                        {!! Form::text('radiology_Unfit_comment', $radilogy->radiology_Unfit_comment, array('class' => 'form-control', 'placeholder'=>'Reason for UNFIT')); !!}										
									</div><!-- end .form-group -->
				        </div><!-- end .col-md-6 -->

								

								<div class="col-md-12">							
									<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
								</div><!-- end .col-md-12 -->

							</form>
						</div><!-- end .well -->
					</div><!-- end .patient-info -->
				</div><!-- end .col-md-8 -->
<!--
				<div class="copyright">
					<p>&copy; Star Lab Diagnostic & Medical Checkup Center</p>
					<p>Developed & mantained by <a href="http://opticalit.com">Optical IT</a></p>
				</div><!-- end .copyright -->

			</div><!-- end .row -->

@stop