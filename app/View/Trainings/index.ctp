<div class="unplannedTrainings index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Unplanned Trainings'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Unplanned Training'), array('action' => 'add'), array('escape' => false)); ?></li>
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
						<th><?php echo $this->Paginator->sort('modifer_id'); ?></th>
						<th><?php echo $this->Paginator->sort('interview_datas_id'); ?></th>
						<th><?php echo $this->Paginator->sort('t_name_target_audience'); ?></th>
						<th><?php echo $this->Paginator->sort('training_dept_wise'); ?></th>
						<th><?php echo $this->Paginator->sort('class_room'); ?></th>
						<th><?php echo $this->Paginator->sort('practical'); ?></th>
						<th><?php echo $this->Paginator->sort('onjob_training'); ?></th>
						<th><?php echo $this->Paginator->sort('others'); ?></th>
						<th><?php echo $this->Paginator->sort('used_technology'); ?></th>
						<th><?php echo $this->Paginator->sort('typical_duration'); ?></th>
						<th><?php echo $this->Paginator->sort('no_trainers'); ?></th>
						<th><?php echo $this->Paginator->sort('batch_size'); ?></th>
						<th><?php echo $this->Paginator->sort('avg_no_emp_train_year'); ?></th>
						<th><?php echo $this->Paginator->sort('other_remarks'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($unplannedTrainings as $unplannedTraining): ?>
					<tr>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['id']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['created']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['creator_id']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['modified']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['modifer_id']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['interview_datas_id']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['t_name_target_audience']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['training_dept_wise']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['class_room']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['practical']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['onjob_training']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['others']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['used_technology']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['typical_duration']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['no_trainers']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['batch_size']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['avg_no_emp_train_year']); ?>&nbsp;</td>
						<td><?php echo h($unplannedTraining['UnplannedTraining']['other_remarks']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $unplannedTraining['UnplannedTraining']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $unplannedTraining['UnplannedTraining']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $unplannedTraining['UnplannedTraining']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $unplannedTraining['UnplannedTraining']['id'])); ?>
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