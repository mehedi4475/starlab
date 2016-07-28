@extends('starlab/app')

@section('body')

			<div class="row">
				<div class="col-md-3">
					<div class="list-group">
						<a class="list-group-item" href="{{url('patient/'.$laboratoryInvestigations->id)}}/edit"><i class="fa fa-info-circle fa-fw"></i>&nbsp; Basic Information</a>
						<a class="list-group-item" href="{{url($laboratoryInvestigations->id)}}/edit-medical-examinations"><i class="fa fa-heartbeat fa-fw"></i>&nbsp; Physical</a>
						<a class="list-group-item active" href="{{url($laboratoryInvestigations->id)}}/edit-laboratory-investigations"><i class="fa fa-stethoscope fa-fw"></i>&nbsp; Pathology</a>
                        <a class="list-group-item" href="{{url($laboratoryInvestigations->id)}}/edit-radiology"><i class="fa fa-forumbee"></i>&nbsp; Radiology</a>
						
						
					</div>
				</div>
				<div class="col-md-9">
				
				<div class="patient-info">
                    <div class="well well-lg">
                       <table class="table table-bordered">
                           <tr>
                               <td class="alert alert-info">Card Number:</td>
                               <td>{!! $laboratoryInvestigations->card_serial !!}</td>
                               <td class="alert alert-info">Passport No:</td>
                               <td>{!! $laboratoryInvestigations->passport_no !!}</td>
                               <td class="alert alert-info"> Full Name:</td>
                               <td>{!! $laboratoryInvestigations->first_name !!} {!! $laboratoryInvestigations->last_name !!}</td>
                           </tr>                            
                       </table>  
                    </div>
                </div>
                    
                    
					<div class="patient-info">
						<div class="well well-lg">
							{!! Form::open(array('method'=>'post', 'enctype'=>'multipart/form-data', 'action' => array('Starlab@updateLaboratoryInvestigations', $laboratoryInvestigations->id))) !!}

								<div class="col-md-12">
									<h2>Urine</h2>
								</div><!-- end .col-md-12 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('urine_sugar', 'Sugar'); !!}				 
                                        {!! Form::text('urine_sugar', $laboratoryInvestigations->urine_sugar, array('class' => 'form-control', 'placeholder'=>'Sugar')); !!}										
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('urine_alburmine', 'Alburmine'); !!}				 
                                        {!! Form::text('urine_alburmine', $laboratoryInvestigations->urine_alburmine, array('class' => 'form-control', 'placeholder'=>'Alburmine')); !!}										
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('urine_bilharziasis', 'Bilharziasis: '); !!}				 
                                        {!! Form::text('urine_bilharziasis', $laboratoryInvestigations->urine_bilharziasis, array('class' => 'form-control', 'placeholder'=>'Bilharziasis')); !!}						
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									     {!! Form::label('urine_pregnancy_test', 'Pregnancy Test: ') !!}
                                        <?php 
                                            echo Form::select('urine_pregnancy_test',
                                            array(
                                                ''                 =>'--Select Pregnancy Test--',
                                                'Negetive'             =>'Negetive',
                                                'Positive'           =>'Positive',
                                                                                         

                                        ), $laboratoryInvestigations->urine_pregnancy_test, array('class'=>'form-control')); 
                                        ?>									
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->
								
								<div class="col-md-12">
									<h2>Stool</h2>
								</div><!-- end .col-md-12 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('stool_helminthes', 'Helminthes: '); !!}				 
                                        {!! Form::text('stool_helminthes', $laboratoryInvestigations->stool_helminthes, array('class' => 'form-control', 'placeholder'=>'Helminthes')); !!}										
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('stool_guardia', 'Guardia: '); !!}				 
                                        {!! Form::text('stool_guardia', $laboratoryInvestigations->stool_guardia, array('class' => 'form-control', 'placeholder'=>'Guardia')); !!}											
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('stool_bilharziasis', 'Bilharziasis: '); !!}			 
                                        {!! Form::text('stool_bilharziasis', $laboratoryInvestigations->stool_bilharziasis, array('class' => 'form-control', 'placeholder'=>'Bilharziasis')); !!}						
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('stool_salmonella', 'Salmonella: '); !!}			 
                                        {!! Form::text('stool_salmonella', $laboratoryInvestigations->stool_salmonella, array('class' => 'form-control', 'placeholder'=>'Salmonella')); !!}							
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('stool_shegella', 'Shegella: '); !!}			 
                                        {!! Form::text('stool_shegella', $laboratoryInvestigations->stool_shegella, array('class' => 'form-control', 'placeholder'=>'Shegella')); !!}
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('stool_v_cholerae', 'V.Cholerae: '); !!}			 
                                        {!! Form::text('stool_v_cholerae', $laboratoryInvestigations->stool_v_cholerae, array('class' => 'form-control', 'placeholder'=>'V.Cholerae')); !!}								
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-12">
									<h2>Blood</h2>
								</div><!-- end .col-md-12 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('blood_haemoglobin', 'Haemoglobin(gm/dl): '); !!}			 
                                        {!! Form::text('blood_haemoglobin', $laboratoryInvestigations->blood_haemoglobin, array('class' => 'form-control', 'placeholder'=>'Haemoglobin')); !!}
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('blood_malaria', 'Malaria: '); !!}			 
                                        {!! Form::text('blood_malaria', $laboratoryInvestigations->blood_malaria, array('class' => 'form-control', 'placeholder'=>'Malaria')); !!}										
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('blood_micro_filaria', 'Micro Filaria: '); !!}			 
                                        {!! Form::text('blood_micro_filaria', $laboratoryInvestigations->blood_micro_filaria, array('class' => 'form-control', 'placeholder'=>'Micro Filaria')); !!}					
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-12">
									<h2>Serology</h2>
								</div><!-- end .col-md-12 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('serology_fbs', 'F.B.S: (gm/dl) '); !!}			 
                                        {!! Form::text('serology_fbs', $laboratoryInvestigations->serology_fbs, array('class' => 'form-control', 'placeholder'=>'F.B.S')); !!} 											
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('serology_lfts_bil', 'L.F.T-S Bil: (gm/dl)'); !!}			 
                                        {!! Form::text('serology_lfts_bil', $laboratoryInvestigations->serology_lfts_bil, array('class' => 'form-control', 'placeholder'=>'L.F.T-S Bil')); !!}						
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('serology_sgpt', 'SGPT: (U/L) '); !!}			 
                                        {!! Form::text('serology_sgpt', $laboratoryInvestigations->serology_sgpt, array('class' => 'form-control', 'placeholder'=>'SGPT')); !!}										
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('serology_sgot', 'SGOT: (U/L)'); !!}			 
                                        {!! Form::text('serology_sgot', $laboratoryInvestigations->serology_sgot, array('class' => 'form-control', 'placeholder'=>'SGOT')); !!}										
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('serology_creatinine', 'Creatinine: (mg/dl) '); !!}			 
                                        {!! Form::text('serology_creatinine', $laboratoryInvestigations->serology_creatinine, array('class' => 'form-control', 'placeholder'=>'Creatinine')); !!}						
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-12">
									<h2>Elisa</h2>
								</div><!-- end .col-md-12 -->

								<div class="col-md-6">
									<div class="form-group">
									   {!! Form::label('elisa_hiv', 'HIV 1+2: ') !!}
                                        <?php 
                                            echo Form::select('elisa_hiv',
                                            array(
                                                ''                 =>'--Select HIV 1+2--',
                                                'Negetive'             =>'Negetive',
                                                'Positive'           =>'Positive',
                                                                                         

                                        ), $laboratoryInvestigations->elisa_hiv, array('class'=>'form-control')); 
                                        ?>										
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('elisa_hbsag', 'HBsAg: ') !!}
                                        <?php 
                                            echo Form::select('elisa_hbsag',
                                            array(
                                                ''                 =>'--Select HBsAg--',
                                                'Negetive'             =>'Negetive',
                                                'Positive'           =>'Positive',
                                                                                         

                                        ), $laboratoryInvestigations->elisa_hbsag, array('class'=>'form-control')); 
                                        ?>										
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									    {!! Form::label('elisa_anti_hcv', 'Anti HCV: ') !!}
                                        <?php 
                                            echo Form::select('elisa_anti_hcv',
                                            array(
                                                ''                 =>'--Select Anti HCV--',
                                                'Negetive'             =>'Negetive',
                                                'Positive'           =>'Positive',
                                                                                         

                                        ), $laboratoryInvestigations->elisa_anti_hcv, array('class'=>'form-control')); 
                                        ?>										
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									     {!! Form::label('elisa_vdrl', 'VDRL: ') !!}
                                        <?php 
                                            echo Form::select('elisa_vdrl',
                                            array(
                                                ''                 =>'--Select VDRL--',
                                                'Non-reative'             =>'Non-reative',
                                                'Reactive'           =>'Reactive',
                                                                                         

                                        ), $laboratoryInvestigations->elisa_vdrl, array('class'=>'form-control')); 
                                        ?>										
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-6">
									<div class="form-group">
									     {!! Form::label('elisa_tpha', 'TPHA (if VDRL reactive): ') !!}
                                        <?php 
                                            echo Form::select('elisa_tpha',
                                            array(
                                                ''                 =>'--Select TPHA (if VDRL reactive)--',
                                                'Negetive'             =>'Negetive',
                                                'Positive'           =>'Positive',
                                                                                         

                                        ), $laboratoryInvestigations->elisa_tpha, array('class'=>'form-control')); 
                                        ?>									
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->

								<div class="col-md-12">
									<h2>Blood Group</h2>
								</div><!-- end .col-md-12 -->
								
								
								
								

								<div class="col-md-6">
									<div class="form-group">
									      {!! Form::label('blood_group', 'Blood Group: ') !!}
                                        <?php 
                                            echo Form::select('blood_group',
                                            array(
                                                ''                 =>'--Select Blood Group--',
                                                'O (Positive)'           =>'O (Positive)',
                                                'O (Negetive)'           =>'O (Negetive)',
                                                'A (Positive)'           =>'A (Positive)',
                                                'A (Negetive)'           =>'A (Negetive)',
                                                'B (Positive)'           =>'B (Positive)',
                                                'B (Negetive)'           =>'B (Negetive)',
                                                'AB (Positive)'           =>'AB (Positive)',
                                                'AB (Negetive)'           =>'AB (Negetive)',
                                                                                         

                                        ), $laboratoryInvestigations->blood_group, array('class'=>'form-control')); 
                                        ?>	                                        
										
									</div><!-- end .form-group -->
								</div><!-- end .col-md-6 -->
								
								
								
								
				<div class="col-md-12">
                        <h2>Gastro Intestinal</h2>
                    </div><!-- end .col-md-12 -->
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('Abdomen: '); !!}			 
                            {!! Form::text('abdomen', $laboratoryInvestigations->abdomen, array('class' => 'form-control', 'placeholder'=>'Abdomen')); !!}										
                        </div><!-- end .form-group -->
                    </div><!-- end .col-md-6 -->
												
								
              		
								
								
								
								
								
								
								
								
								
								
								<div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('pathology_fitUnfit', 'FIT for Pathology? ') !!}
                                <?php 
                                    echo Form::select('pathology_fitUnfit',
                                    array(
                                        ''                 =>'--Select--',
                                        'Yes'             =>'Yes',
                                        'No'           =>'No',


                                ), $laboratoryInvestigations->pathology_fitUnfit, array('class'=>'form-control')); 
                                ?>										
                            </div><!-- end .form-group -->
                        </div><!-- end .col-md-6 -->
                        
                        <div class="col-md-12">
									<div class="form-group">
									    {!! Form::label('pathology_Unfit_comment', 'Reason for UNFIT'); !!}				 
                                        {!! Form::text('pathology_Unfit_comment', $laboratoryInvestigations->pathology_Unfit_comment, array('class' => 'form-control', 'placeholder'=>'Reason for UNFIT')); !!}										
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