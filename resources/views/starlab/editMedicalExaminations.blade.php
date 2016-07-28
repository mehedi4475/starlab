@extends('starlab/app')
@section('body')

    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a class="list-group-item" href="{{url('patient/'.$editMedicalExaminations->id)}}/edit"><i class="fa fa-info-circle fa-fw"></i>&nbsp; Basic Information</a>
                <a class="list-group-item active" href="{{url($editMedicalExaminations->id)}}/edit-medical-examinations"><i class="fa fa-heartbeat fa-fw"></i>&nbsp; Physical</a>
                <a class="list-group-item" href="{{url($editMedicalExaminations->id)}}/edit-laboratory-investigations"><i class="fa fa-stethoscope fa-fw"></i>&nbsp; Pathology</a>
                <a class="list-group-item" href="{{url($editMedicalExaminations->id)}}/edit-radiology"><i class="fa fa-forumbee"></i>&nbsp; Radiology</a>
               
               
            </div>
        </div>
        <div class="col-md-9">

        <div class="patient-info">
            <div class="well well-lg">
               <table class="table table-bordered">
                   <tr>
                       <td class="alert alert-info">Card Number:</td>
                       <td>{!! $editMedicalExaminations->card_serial !!}</td>
                       <td class="alert alert-info">Passport No:</td>
                       <td>{!! $editMedicalExaminations->passport_no !!}</td>
                       <td class="alert alert-info"> Full Name:</td>
                       <td>{!! $editMedicalExaminations->first_name !!} {!! $editMedicalExaminations->last_name !!}</td>
                   </tr>                            
               </table>  
            </div>
        </div>


            <div class="patient-info">
                <div class="well well-lg">
                    {!! Form::open(array('method'=>'post', 'enctype'=>'multipart/form-data', 'action' => array('Starlab@updateMedicalExaminations', $editMedicalExaminations->id))) !!}

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('eye_right', 'Eye Right:'); !!}					 
                                {!! Form::text('eye_right', $editMedicalExaminations->eye_right, array('class' => 'form-control', 'placeholder'=>'Enter Eye Right')); !!}  										
                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                 {!! Form::label('eye_left', 'Eye Left:'); !!}					 
                                 {!! Form::text('eye_left', $editMedicalExaminations->eye_left, array('class' => 'form-control', 'placeholder'=>'Enter Eye Left')); !!} 
                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">									
                                {!! Form::label('ear_right', 'Ear Right: ') !!}
                                <?php 
                                    echo Form::select('ear_right',
                                    array(
                                        ''                 =>'--Select Ear Right--',
                                        'Normal'             =>'Normal',
                                        'Irregular'           =>'Irregular',


                                ),$editMedicalExaminations->ear_right, array('class'=>'form-control')); 
                                ?>

                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('ear_left', 'Ear Left: ') !!}
                                <?php 
                                    echo Form::select('ear_left',
                                    array(
                                        ''                 =>'--Select Ear Left--',
                                        'Normal'             =>'Normal',
                                        'Irregular'           =>'Irregular',


                                ),$editMedicalExaminations->ear_left, array('class'=>'form-control')); 
                                ?>
                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                 {!! Form::label('blood_pressure', 'Blood Bressure:'); !!}				 
                                 {!! Form::text('blood_pressure', $editMedicalExaminations->blood_pressure, array('class' => 'form-control', 'placeholder'=>'Enter Blood Pressure')); !!}										
                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('heart', 'Heart:'); !!}				 
                                {!! Form::text('heart', $editMedicalExaminations->heart, array('class' => 'form-control', 'placeholder'=>'Heart')); !!}										
                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('lungs', 'Lungs:'); !!}				 
                                {!! Form::text('lungs', $editMedicalExaminations->lungs, array('class' => 'form-control', 'placeholder'=>'Lungs')); !!}

                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->

                      

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('hernia', 'Hernia:'); !!}				 
                                {!! Form::text('hernia', $editMedicalExaminations->hernia, array('class' => 'form-control', 'placeholder'=>'Hernia')); !!}										
                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('varicose_veins', 'Varicose Veins:'); !!}				 
                                {!! Form::text('varicose_veins', $editMedicalExaminations->varicose_veins, array('class' => 'form-control', 'placeholder'=>'Varicose Veins')); !!}										
                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('extremities', 'Extremities'); !!}				 
                                {!! Form::text('extremities', $editMedicalExaminations->extremities, array('class' => 'form-control', 'placeholder'=>'Extremities')); !!}										
                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('deformities', 'Deformities'); !!}				 
                                {!! Form::text('deformities', $editMedicalExaminations->deformities, array('class' => 'form-control', 'placeholder'=>'Deformities')); !!}										
                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('skin', 'Skin'); !!}				 
                                {!! Form::text('skin', $editMedicalExaminations->skin, array('class' => 'form-control', 'placeholder'=>'Skin')); !!}										
                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('cns', 'CNS'); !!}				 
                                {!! Form::text('cns', $editMedicalExaminations->cns, array('class' => 'form-control', 'placeholder'=>'CNS')); !!}
                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('psychiatry', 'Psychiatry'); !!}				 
                                {!! Form::text('psychiatry', $editMedicalExaminations->psychiatry, array('class' => 'form-control', 'placeholder'=>'Psychiatry')); !!}										
                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('clinical', 'Clinical'); !!}				 
                                {!! Form::text('clinical', $editMedicalExaminations->clinical, array('class' => 'form-control', 'placeholder'=>'Clinical')); !!}										
                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->
                        
                        
                        
                        	
								
								<div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('physical_fitUnfit', 'FIT for Physical? ') !!}
                                <?php 
                                    echo Form::select('physical_fitUnfit',
                                    array(
                                        ''                 =>'--Select--',
                                        'Yes'             =>'Yes',
                                        'No'           =>'No',


                                ), $editMedicalExaminations->physical_fitUnfit, array('class'=>'form-control')); 
                                ?>										
                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->
                        
                        <div class="col-md-12">
									<div class="form-group">
									    {!! Form::label('physical_Unfit_comment', 'Reason for UNFIT'); !!}				 
                                        {!! Form::text('physical_Unfit_comment', $editMedicalExaminations->physical_Unfit_comment, array('class' => 'form-control', 'placeholder'=>'Reason for UNFIT')); !!}										
									</div><!-- end .form-group -->
				        </div><!-- end .col-md-6 -->
								
                        

                        <div class="col-md-12">							
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                        </div><!-- end .col-md-12 -->

                    </form>
                </div><!-- end .well -->
            </div><!-- end .patient-info -->
        </div><!-- end .col-md-8 -->
    </div><!-- end .row -->
@stop