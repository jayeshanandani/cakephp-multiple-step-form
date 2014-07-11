<div class="interviewDatas form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Profile'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
	
		<div class="col-md-12" style="float:none">
			<?php echo $this->Form->create('Survey', array('type'=>'file','role' => 'form','url' => array('controller' => 'surveys', 'action' => 'add','1'))); ?>
		<table class="table  table-striped" width="100%">
			
			<tr>
				<th colspan="4">&nbsp;</th>
			</tr>
			<tr>
				<th>Q.1.a Name of Organization</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Profile.org_name', array('class' => 'form-control', 'placeholder' => 'Organization Name','label' => false)); ?>
					<?php echo $this->Form->error('Profile.org_name'); ?>
				</div></th>
				<th>Q.1.b Name of Respondent</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Profile.respn_name', array('class' => 'form-control', 'placeholder' => 'Respondent Name', 'label' => false));?>
					<?php echo $this->Form->error('Profile.respn_name'); ?>
				</div></th>
			</tr>
			<tr>
				<th>Q.1.c Designation</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Profile.designation', array('class' => 'form-control', 'placeholder' => false,'label'=>false));?>
					<?php echo $this->Form->error('Profile.designation'); ?>
				</div></th>
				<th>Q.1.d Contact No.</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Profile.contact', array('class' => 'form-control', 'placeholder' => 'Contact','label' => false,'pattern'=>'(7|8|9)\d{9}'));?>
					<?php echo $this->Form->error('Profile.contact'); ?>
				</div></th>
			</tr>
			<tr>
				<th>Q.1.e Email Id</th>
				<th colspan="3"><div class="form-group">
					<?php echo $this->Form->input('Profile.email', array('class' => 'form-control', 'placeholder' => 'Email','label' => false));?>
					<?php echo $this->Form->error('Profile.email'); ?>
				</div></th>
				
			</tr>
			<tr>
				<th>Q.1.f Address</th>
				<th colspan="3"><div class="form-group">
					<?php echo $this->Form->input('Profile.address', array('class' => 'form-control', 'placeholder' => 'Address', 'label' => false));?>
					<?php echo $this->Form->error('Profile.address'); ?>
				</div></th>
				
			</tr>
			<tr>
				<th>Q.1.g City</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Profile.city', array('class' => 'form-control', 'placeholder' => 'City', 'label' => false));?>
					<?php echo $this->Form->error('Profile.city'); ?>
				</div></th>
				<th>Q.1.h State</th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Profile.state', array('class' => 'form-control', 'placeholder' => 'State', 'label' => false));?>
					<?php echo $this->Form->error('Profile.state'); ?>
				</div></th>
			</tr>
			<tr>
				<th>Q.1.i Sector</th>
				<th colspan="3">
				<div class="form-group">
					<?php echo $this->Form->input('Profile.sector', array('class' => 'form-control', 'placeholder' => ' Sector', 'label' => false));?>
					<?php echo $this->Form->error('Profile.sector'); ?>
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
					<?php echo $this->Form->input('Profile.total_employees', array('type'=>'number','class' => 'form-control', 'placeholder' => 'Total Employees','label' => false,'min' => 0));?>
					<?php echo $this->Form->error('Profile.total_employees'); ?>
				</div></th>
				<th>	<div class="form-group">
					<?php echo $this->Form->input('Profile.management', array('type'=>'number','class' => 'form-control', 'placeholder' => 'Management','label' => false,'min' => 0));?>
					<?php echo $this->Form->error('Profile.management'); ?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Profile.non_management', array('type'=>'number','class' => 'form-control', 'placeholder' => 'Non Management','label' => false,'min' => 0));?>
					<?php echo $this->Form->error('Profile.non_management'); ?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Profile.avg_contract_emp_year', array('type'=>'number','class' => 'form-control', 'placeholder' => 'Avg Contract Emp Year','label' => 'Avg. No of Contract Employees per Year','label' => false,'min' => 0));?>
					<?php echo $this->Form->error('Profile.avg_contract_emp_year'); ?>
				</div></th>
			</tr>
			<tr>
				<th colspan="5">&nbsp;</th>
			</tr>
			<tr>
				<th colspan="4"><i>Kindly ask for the brochure/training programme related documentation, if possible</i></th><th><?php echo $this->Form->input('Profile.filename', array('type' => 'file'));?></th>
					<?php echo $this->Form->error('Profile.filename'); ?>
			</tr>
			<tr>
				<th colspan="5">&nbsp;</th>
			</tr>
		</table>
		
		<table class="table table-striped">
			<tr>
				<th colspan="2" style="text-align:center;color:#fff;background-color:gray;border-radius:6px;">Training Methods</th>
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
					<?php echo $this->Form->input('Profile.no_planned_training', array('type'=>'number','class' => 'form-control', 'placeholder' => 'Number of Planned Training','label' => false,'min' => 0));?>
					<?php echo $this->Form->error('Profile.no_planned_training'); ?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Profile.no_unplanned_training', array('type'=>'number','class' => 'form-control', 'placeholder' => 'Number of Unplanned Training','label' => false,'min' => 0));?>
					<?php echo $this->Form->error('Profile.no_unplanned_training'); ?>
				</div></th>
			</tr>
		</table>					
		<div class="row">
		<div class="col-md-10">
			
	</div>
	<div class="col-md-1">			
	<div class="form-group">
					<?php echo $this->Form->submit(__('Next Step'), array('class' => 'btn btn-default')); ?>
				</div> 
			</div>
			</div>
	

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
