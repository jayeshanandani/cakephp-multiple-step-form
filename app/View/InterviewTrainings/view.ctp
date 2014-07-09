<div class="unplannedTrainings view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Unplanned Training'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Unplanned Training'), array('action' => 'edit', $unplannedTraining['UnplannedTraining']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Unplanned Training'), array('action' => 'delete', $unplannedTraining['UnplannedTraining']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $unplannedTraining['UnplannedTraining']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Unplanned Trainings'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Unplanned Training'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($unplannedTraining['UnplannedTraining']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Creator Id'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['creator_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modifer Id'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['modifer_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Interview Datas Id'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['interview_datas_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('T Name Target Audience'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['t_name_target_audience']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Training Dept Wise'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['training_dept_wise']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Class Room'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['class_room']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Practical'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['practical']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Onjob Training'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['onjob_training']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Others'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['others']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Used Technology'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['used_technology']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Typical Duration'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['typical_duration']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('No Trainers'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['no_trainers']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Batch Size'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['batch_size']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Avg No Emp Train Year'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['avg_no_emp_train_year']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Other Remarks'); ?></th>
		<td>
			<?php echo h($unplannedTraining['UnplannedTraining']['other_remarks']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

