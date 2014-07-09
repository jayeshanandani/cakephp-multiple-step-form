<div class="plannedTrainings form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Planned Training'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('PlannedTraining.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('PlannedTraining.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Planned Trainings'), array('action' => 'index'), array('escape' => false)); ?></li>
														</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('PlannedTraining', array('role' => 'form')); ?>

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
					<?php echo $this->Form->input('interview_datas_id', array('class' => 'form-control', 'placeholder' => 'Interview Datas Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('t_name_target_audience', array('class' => 'form-control', 'placeholder' => 'T Name Target Audience'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('training_department_wise', array('class' => 'form-control', 'placeholder' => 'Training Department Wise'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('class_room', array('class' => 'form-control', 'placeholder' => 'Class Room'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('practical', array('class' => 'form-control', 'placeholder' => 'Practical'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('onjob_training', array('class' => 'form-control', 'placeholder' => 'Onjob Training'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('others', array('class' => 'form-control', 'placeholder' => 'Others'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('used_technology', array('class' => 'form-control', 'placeholder' => 'Used Technology'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('duration', array('class' => 'form-control', 'placeholder' => 'Duration'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('no_trainer', array('class' => 'form-control', 'placeholder' => 'No Trainer'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('outsourced', array('class' => 'form-control', 'placeholder' => 'Outsourced'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('batch_size', array('class' => 'form-control', 'placeholder' => 'Batch Size'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('avg_no_emp_train_year', array('class' => 'form-control', 'placeholder' => 'Avg No Emp Train Year'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
