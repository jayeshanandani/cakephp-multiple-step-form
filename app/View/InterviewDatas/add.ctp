 <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/jquery.steps.css">
        <script src="../lib/modernizr-2.6.2.min.js"></script>
        <script src="../lib/jquery-1.9.1.min.js"></script>
        <script src="../lib/jquery.cookie-1.3.1.js"></script>
        <script src="../build/jquery.steps.js"></script>
<form id="msform">
	<!-- progressbar -->
	<ul id="progressbar">
		<li class="active">Account Setup</li>
		<li>Social Profiles</li>
		<li>Personal Details</li>
	</ul>
	<fieldset>
<div class="interviewDatas form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Interview Data'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
	
		<div class="col-md-12" style="float:none">
			<?php echo $this->Form->create('InterviewData', array('role' => 'form')); ?>
		<table class="table  table-striped" width="100%">
			
			<tr>
				<th colspan="4">&nbsp;</th>
			</tr>
			<tr>
				<th>Q.1.a Name of Organization</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('org_name', array('class' => 'form-control', 'placeholder' => 'Org Name','label' => false));?>
				</div></th>
				<th>Q.1.b Name of Respondent</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('respn_name', array('class' => 'form-control', 'placeholder' => 'Respn Name', 'label' => false));?>
				</div></th>
			</tr>
			<tr>
				<th>Q.1.c Designation</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('designation', array('class' => 'form-control', 'placeholder' => false));?>
				</div></th>
				<th>Q.1.d Contact No.</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('contact', array('class' => 'form-control', 'placeholder' => 'Contact','lable' => false));?>
				</div></th>
			</tr>
			<tr>
				<th>Q.1.e Email Id</th>
				<th colspan="3"><div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email','label' => false));?>
				</div></th>
				
			</tr>
			<tr>
				<th>Q.1.f Address</th>
				<th colspan="3"><div class="form-group">
					<?php echo $this->Form->input('address', array('class' => 'form-control', 'placeholder' => 'Address', 'label' => false));?></div></th>
				
			</tr>
			<tr>
				<th>Q.1.g City</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('city', array('class' => 'form-control', 'placeholder' => 'City', 'label' => false));?>
				</div></th>
				<th>Q.1.h State</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('state', array('class' => 'form-control', 'placeholder' => 'State', 'label' => false));?>
				</div></th>
			</tr>
			<tr>
				<th>Q.1.i Sector</th>
				<th colspan="3">
				<div class="form-group">
					<?php echo $this->Form->input('sector', array('class' => 'form-control', 'placeholder' => ' Sector', 'label' => false));?>
				</div></th>
				
			</tr>
		</table>
				
		<table class="table table-striped">
			<tr>
				<th colspan="5">&nbsp;</th>
			</tr>
			<tr>
				<th rowspan="2">Q.2 Kindly tell us about your Organization Structure & Manpower Deployment</th>
				<th>Total No Of Employees</th>
				<th>Management</th>
				<th>Non Management</th>
				<th>Avg. No of Contract Employees per Year</th>
			</tr>
			<tr>

				<th><div class="form-group">
					<?php echo $this->Form->input('total_employees', array('class' => 'form-control', 'placeholder' => 'Total Employees','label' => false));?>
				</div></th>
				<th>	<div class="form-group">
					<?php echo $this->Form->input('management', array('class' => 'form-control', 'placeholder' => 'Management','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('non_management', array('class' => 'form-control', 'placeholder' => 'Non Management','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('avg_contract_emp_year', array('class' => 'form-control', 'placeholder' => 'Avg Contract Emp Year','label' => 'Avg. No of Contract Employees per Year','label' => false));?>
				</div></th>
			</tr>
			<tr>
				<th colspan="5">&nbsp;</th>
			</tr>
			<tr>
				<th colspan="4"><i>Kindly ask for the brochure/training programme related documentation, if possible</i></th><th><?php echo $this->Form->input('filename', array('type' => 'file'));?></th>
			</tr>
			<tr>
				<th colspan="5">&nbsp;</th>
			</tr>
		</table>
		
		<table class="table table-striped">
			<tr>
				<th colspan="2" style="text-align:center">Training Methods</th>
			</tr>
			<tr>
				<th colspan="5">&nbsp;</th>
			</tr>
			<tr>
				<th colspan="2" style="text-align:center">Q.3.a. On average,how many structured and unstructured training programs are conducted in a year?</th>
			</tr>
			<tr>
				<th>Number of planned trainings (Training with pre-decided course structure and fixed duration)</th>
				<th>No of Unplanned trainings (Impromptu trainings)</th>
			</tr>
			<tr>
				<th><div class="form-group">
					<?php echo $this->Form->input('no_planned_training', array('class' => 'form-control', 'placeholder' => 'No Planned Training','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('no_unplanned_training', array('class' => 'form-control', 'placeholder' => 'No Unplanned Training','label' => false));?>
				</div></th>
			</tr>
		</table>	
			
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default','name'=>'next')); ?>
				</div>
			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
	
	
</div>
</fieldset>
<fieldset>
<div class="plannedTrainings form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Planned Training'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">

		<div class="col-md-12">
			<?php echo $this->Form->create('InterviewData', array('role' => 'form','action'=>'step3')); ?>
		
			<table class="table table-striped" width="100%">
			<tr>
				<th rowspan=2>a. Training Name & Target Audience</th>
				<th rowspan=2>b. Is this training organized departmentwise ? If yes please mention the department</th>
				<th colspan=4>c. Pedagogy (Kindly mention the % of course duration spent on methods)</th>	
				
				<th rowspan=2>d. Is there any use of technology for scaling up training> If yes, kindly mention the sam</th>
				<th rowspan=2>e. Duration of Course</th>
				<th rowspan=2>f. No. of Trainer</th>
				<th rowspan=2>g. Outsourced (Y/N)? If yes,which organization?</th>
				<th rowspan=2>h. Batch Size</th>
				<th rowspan=2>i. Avg. No. of Emp. trained every year</th>

				</tr>
				<tr>
						
					<th >Class Room(in %)</th>
				<th>Practical(in %)</th>
				<th>On-job Training(in %)</th>
				<th>Others(in %)</th>
				
				</tr>

				<tr>
					<th><div class="form-group">
					<?php echo $this->Form->input('t_name_target_audience', array('class' => 'form-control', 'placeholder' => 'Training Name & Target Audience', 'label' => false));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('training_department_wise', array('class' => 'form-control', 'placeholder' => 'Training Department Wise', 'label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('class_room', array('class' => 'form-control', 'placeholder' => 'Class Room','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('practical', array('class' => 'form-control', 'placeholder' => 'Practical','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('onjob_training', array('class' => 'form-control', 'placeholder' => 'Onjob Training','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('others', array('class' => 'form-control', 'placeholder' => 'Others','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('used_technology', array('class' => 'form-control', 'placeholder' => 'Used Technology','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('duration', array('class' => 'form-control', 'placeholder' => 'Duration','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('no_trainer', array('class' => 'form-control', 'placeholder' => 'No Trainer','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('outsourced', array('class' => 'form-control', 'placeholder' => 'Outsourced','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('batch_size', array('class' => 'form-control', 'placeholder' => 'Batch Size','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('avg_no_emp_train_year', array('class' => 'form-control', 'placeholder' => 'Avg No Emp Train Year','label' => false));?>
				</div></th>

				</tr>
			</table>	
		<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default','name'=>'next')); ?>
				</div> 
			<?php	echo $this->Html->link('Previous step',
	array('action' => 'add', $params['currentStep'] -1),
	array('class' => 'button')); ?>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
	
</div>
</fieldset>
<fieldset>
<div class="plannedTrainings form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Planned Training'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">

		<div class="col-md-12">
			<?php echo $this->Form->create('InterviewData', array('role' => 'form','action'=>'step3')); ?>
		
			<table class="table table-striped" width="100%">
			<tr>
				<th rowspan=2>a. Training Name & Target Audience</th>
				<th rowspan=2>b. Is this training organized departmentwise ? If yes please mention the department</th>
				<th colspan=4>c. Pedagogy (Kindly mention the % of course duration spent on methods)</th>	
				
				<th rowspan=2>d. Is there any use of technology for scaling up training> If yes, kindly mention the sam</th>
				<th rowspan=2>e. Duration of Course</th>
				<th rowspan=2>f. No. of Trainer</th>
				<th rowspan=2>g. Outsourced (Y/N)? If yes,which organization?</th>
				<th rowspan=2>h. Batch Size</th>
				<th rowspan=2>i. Avg. No. of Emp. trained every year</th>

				</tr>
				<tr>
						
					<th >Class Room(in %)</th>
				<th>Practical(in %)</th>
				<th>On-job Training(in %)</th>
				<th>Others(in %)</th>
				
				</tr>

				<tr>
					<th><div class="form-group">
					<?php echo $this->Form->input('t_name_target_audience', array('class' => 'form-control', 'placeholder' => 'Training Name & Target Audience', 'label' => false));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('training_department_wise', array('class' => 'form-control', 'placeholder' => 'Training Department Wise', 'label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('class_room', array('class' => 'form-control', 'placeholder' => 'Class Room','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('practical', array('class' => 'form-control', 'placeholder' => 'Practical','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('onjob_training', array('class' => 'form-control', 'placeholder' => 'Onjob Training','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('others', array('class' => 'form-control', 'placeholder' => 'Others','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('used_technology', array('class' => 'form-control', 'placeholder' => 'Used Technology','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('duration', array('class' => 'form-control', 'placeholder' => 'Duration','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('no_trainer', array('class' => 'form-control', 'placeholder' => 'No Trainer','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('outsourced', array('class' => 'form-control', 'placeholder' => 'Outsourced','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('batch_size', array('class' => 'form-control', 'placeholder' => 'Batch Size','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('avg_no_emp_train_year', array('class' => 'form-control', 'placeholder' => 'Avg No Emp Train Year','label' => false));?>
				</div></th>

				</tr>
			</table>	
		<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default','name'=>'next')); ?>
				</div> 
			<?php	echo $this->Html->link('Previous step',
	array('action' => 'add', $params['currentStep'] -1),
	array('class' => 'button')); ?>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
	
</div>
</fieldset>
</form>