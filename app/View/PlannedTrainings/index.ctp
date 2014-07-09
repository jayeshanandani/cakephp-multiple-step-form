<div class="plannedTrainings index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Planned Trainings'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Planned Training'), array('action' => 'add'), array('escape' => false)); ?></li>
													</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('creator_id'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
						<th><?php echo $this->Paginator->sort('modifier_id'); ?></th>
						<th><?php echo $this->Paginator->sort('interview_datas_id'); ?></th>
						<th><?php echo $this->Paginator->sort('t_name_target_audience'); ?></th>
						<th><?php echo $this->Paginator->sort('training_department_wise'); ?></th>
						<th><?php echo $this->Paginator->sort('class_room'); ?></th>
						<th><?php echo $this->Paginator->sort('practical'); ?></th>
						<th><?php echo $this->Paginator->sort('onjob_training'); ?></th>
						<th><?php echo $this->Paginator->sort('others'); ?></th>
						<th><?php echo $this->Paginator->sort('used_technology'); ?></th>
						<th><?php echo $this->Paginator->sort('duration'); ?></th>
						<th><?php echo $this->Paginator->sort('no_trainer'); ?></th>
						<th><?php echo $this->Paginator->sort('outsourced'); ?></th>
						<th><?php echo $this->Paginator->sort('batch_size'); ?></th>
						<th><?php echo $this->Paginator->sort('avg_no_emp_train_year'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($plannedTrainings as $plannedTraining): ?>
					<tr>
						<td><?php echo h($plannedTraining['PlannedTraining']['id']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['created']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['creator_id']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['modified']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['modifier_id']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['interview_datas_id']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['t_name_target_audience']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['training_department_wise']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['class_room']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['practical']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['onjob_training']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['others']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['used_technology']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['duration']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['no_trainer']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['outsourced']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['batch_size']); ?>&nbsp;</td>
						<td><?php echo h($plannedTraining['PlannedTraining']['avg_no_emp_train_year']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $plannedTraining['PlannedTraining']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $plannedTraining['PlannedTraining']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $plannedTraining['PlannedTraining']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $plannedTraining['PlannedTraining']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->