<div class="plannedTrainings view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Planned Training'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Planned Training'), array('action' => 'edit', $plannedTraining['PlannedTraining']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Planned Training'), array('action' => 'delete', $plannedTraining['PlannedTraining']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $plannedTraining['PlannedTraining']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Planned Trainings'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Planned Training'), array('action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Creator Id'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['creator_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modifier Id'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['modifier_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Interview Datas Id'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['interview_datas_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('T Name Target Audience'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['t_name_target_audience']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Training Department Wise'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['training_department_wise']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Class Room'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['class_room']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Practical'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['practical']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Onjob Training'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['onjob_training']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Others'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['others']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Used Technology'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['used_technology']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Duration'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['duration']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('No Trainer'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['no_trainer']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Outsourced'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['outsourced']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Batch Size'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['batch_size']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Avg No Emp Train Year'); ?></th>
		<td>
			<?php echo h($plannedTraining['PlannedTraining']['avg_no_emp_train_year']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

