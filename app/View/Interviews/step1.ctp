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
			<?php echo $this->Form->create('Interview', array('type' => 'file','role' => 'form','url' => array('controller' => 'interviews', 'action' => 'add','1'))); ?>
		<table class="table  table-striped" width="100%">
			
			<tr>
				<th colspan="4">&nbsp;</th>
			</tr>
			<tr>
				<th>Q.1.a Name of Organization</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('org_name', array('class' => 'form-control', 'placeholder' => 'Organization Name','label' => false)); ?>
					<?php echo $this->Form->error('org_name'); ?>
				</div></th>
				<th>Q.1.b Name of Respondent</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('respn_name', array('class' => 'form-control', 'placeholder' => 'Respondent Name', 'label' => false));?>
					<?php echo $this->Form->error('respn_name'); ?>
				</div></th>
			</tr>
			<tr>
				<th>Q.1.c Designation</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('designation', array('class' => 'form-control', 'placeholder' => false));?>
					<?php echo $this->Form->error('designation'); ?>
				</div></th>
				<th>Q.1.d Contact No.</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('contact', array('class' => 'form-control', 'placeholder' => 'Contact','lable' => false));?>
					<?php echo $this->Form->error('contact'); ?>
				</div></th>
			</tr>
			<tr>
				<th>Q.1.e Email Id</th>
				<th colspan="3"><div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email','label' => false));?>
					<?php echo $this->Form->error('email'); ?>
				</div></th>
				
			</tr>
			<tr>
				<th>Q.1.f Address</th>
				<th colspan="3"><div class="form-group">
					<?php echo $this->Form->input('address', array('class' => 'form-control', 'placeholder' => 'Address', 'label' => false));?>
					<?php echo $this->Form->error('address'); ?>
				</div></th>
				
			</tr>
			<tr>
				<th>Q.1.g City</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('city', array('class' => 'form-control', 'placeholder' => 'City', 'label' => false));?>
					<?php echo $this->Form->error('city'); ?>
				</div></th>
				<th>Q.1.h State</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('state', array('class' => 'form-control', 'placeholder' => 'State', 'label' => false));?>
					<?php echo $this->Form->error('state'); ?>
				</div></th>
			</tr>
			<tr>
				<th>Q.1.i Sector</th>
				<th colspan="3">
				<div class="form-group">
					<?php echo $this->Form->input('sector', array('class' => 'form-control', 'placeholder' => ' Sector', 'label' => false));?>
					<?php echo $this->Form->error('sector'); ?>
				</div></th>
				
			</tr>
		</table>
				
		<table class="table table-striped">
			<tr>
				<th colspan="5">&nbsp;</th>
			</tr>
			<tr>
				<th rowspan="2">Q.2 Kindly tell us about your Organization Structure &amp; Manpower Deployment</th>
				<th>Total No Of Employees</th>
				<th>Management</th>
				<th>Non Management</th>
				<th>Avg. No of Contract Employees per Year</th>
			</tr>
			<tr>

				<th><div class="form-group">
					<?php echo $this->Form->input('total_employees', array('class' => 'form-control', 'placeholder' => 'Total Employees','label' => false));?>
					<?php echo $this->Form->error('total_employees'); ?>
				</div></th>
				<th>	<div class="form-group">
					<?php echo $this->Form->input('management', array('class' => 'form-control', 'placeholder' => 'Management','label' => false));?>
					<?php echo $this->Form->error('management'); ?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('non_management', array('class' => 'form-control', 'placeholder' => 'Non Management','label' => false));?>
					<?php echo $this->Form->error('non_management'); ?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('avg_contract_emp_year', array('class' => 'form-control', 'placeholder' => 'Avg Contract Emp Year','label' => 'Avg. No of Contract Employees per Year','label' => false));?>
					<?php echo $this->Form->error('avg_contract_emp_year'); ?>
				</div></th>
			</tr>
			<tr>
				<th colspan="5">&nbsp;</th>
			</tr>
			<tr>
				<th colspan="4"><i>Kindly ask for the brochure/training programme related documentation, if possible</i></th><th><?php echo $this->Form->input('filename', array('type' => 'file'));?></th>
					<?php echo $this->Form->error('filename'); ?>
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
				<th>Number of Unplanned trainings (Impromptu trainings)</th>
			</tr>
			<tr>
				<th><div class="form-group">
					<?php echo $this->Form->input('no_planned_training', array('class' => 'form-control', 'placeholder' => 'Number of Planned Training','label' => false));?>
					<?php echo $this->Form->error('no_planned_training'); ?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('no_unplanned_training', array('class' => 'form-control', 'placeholder' => 'Number of Unplanned Training','label' => false));?>
					<?php echo $this->Form->error('no_unplanned_training'); ?>
				</div></th>
			</tr>
		</table>					
		
				<div class="form-group">
					<?php echo $this->Form->submit(__('Towards Step 2'), array('class' => 'btn btn-default')); ?>
				</div>
			<?php echo $this->Form->end() ?>
	

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
