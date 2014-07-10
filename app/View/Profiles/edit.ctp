<div class="interviewDatas form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Interview Data'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('InterviewData.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('InterviewData.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Interview Datas'), array('action' => 'index'), array('escape' => false)); ?></li>
														</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('InterviewData', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('creator_id', array('class' => 'form-control', 'placeholder' => 'Creator Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('modifier_id', array('class' => 'form-control', 'placeholder' => 'Modifier Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('i_name', array('class' => 'form-control', 'placeholder' => 'I Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('survey_date', array('class' => 'form-control', 'placeholder' => 'Survey Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('validated_by', array('class' => 'form-control', 'placeholder' => 'Validated By'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('verified_by', array('class' => 'form-control', 'placeholder' => 'Verified By'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('verification_comments', array('class' => 'form-control', 'placeholder' => 'Verification Comments'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('s_name', array('class' => 'form-control', 'placeholder' => 'S Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('validation_date', array('class' => 'form-control', 'placeholder' => 'Validation Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('validation_comments', array('class' => 'form-control', 'placeholder' => 'Validation Comments'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('verification_date', array('class' => 'form-control', 'placeholder' => 'Verification Date'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('que_id', array('class' => 'form-control', 'placeholder' => 'Que Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('org_name', array('class' => 'form-control', 'placeholder' => 'Org Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('respn_name', array('class' => 'form-control', 'placeholder' => 'Respn Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('designation', array('class' => 'form-control', 'placeholder' => 'Designation'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('contact', array('class' => 'form-control', 'placeholder' => 'Contact'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('address', array('class' => 'form-control', 'placeholder' => 'Address'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('city', array('class' => 'form-control', 'placeholder' => 'City'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('state', array('class' => 'form-control', 'placeholder' => 'State'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sector', array('class' => 'form-control', 'placeholder' => 'Sector'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('total_employees', array('class' => 'form-control', 'placeholder' => 'Total Employees'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('management', array('class' => 'form-control', 'placeholder' => 'Management'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('non_management', array('class' => 'form-control', 'placeholder' => 'Non Management'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('avg_contract_emp_year', array('class' => 'form-control', 'placeholder' => 'Avg Contract Emp Year'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('no_planned_training', array('class' => 'form-control', 'placeholder' => 'No Planned Training'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('no_unplanned_training', array('class' => 'form-control', 'placeholder' => 'No Unplanned Training'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
