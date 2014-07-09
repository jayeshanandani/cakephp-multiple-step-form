<div class="interviewDatas index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Interview Datas'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Interview Data'), array('action' => 'add'), array('escape' => false)); ?></li>
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
						<th><?php echo $this->Paginator->sort('i_name'); ?></th>
						<th><?php echo $this->Paginator->sort('survey_date'); ?></th>
						<th><?php echo $this->Paginator->sort('validated_by'); ?></th>
						<th><?php echo $this->Paginator->sort('verified_by'); ?></th>
						<th><?php echo $this->Paginator->sort('verification_comments'); ?></th>
						<th><?php echo $this->Paginator->sort('s_name'); ?></th>
						<th><?php echo $this->Paginator->sort('validation_date'); ?></th>
						<th><?php echo $this->Paginator->sort('validation_comments'); ?></th>
						<th><?php echo $this->Paginator->sort('verification_date'); ?></th>
						<th><?php echo $this->Paginator->sort('que_id'); ?></th>
						<th><?php echo $this->Paginator->sort('org_name'); ?></th>
						<th><?php echo $this->Paginator->sort('respn_name'); ?></th>
						<th><?php echo $this->Paginator->sort('designation'); ?></th>
						<th><?php echo $this->Paginator->sort('contact'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('address'); ?></th>
						<th><?php echo $this->Paginator->sort('city'); ?></th>
						<th><?php echo $this->Paginator->sort('state'); ?></th>
						<th><?php echo $this->Paginator->sort('sector'); ?></th>
						<th><?php echo $this->Paginator->sort('total_employees'); ?></th>
						<th><?php echo $this->Paginator->sort('management'); ?></th>
						<th><?php echo $this->Paginator->sort('non_management'); ?></th>
						<th><?php echo $this->Paginator->sort('avg_contract_emp_year'); ?></th>
						<th><?php echo $this->Paginator->sort('no_planned_training'); ?></th>
						<th><?php echo $this->Paginator->sort('no_unplanned_training'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($interviewDatas as $interviewData): ?>
					<tr>
						<td><?php echo h($interviewData['InterviewData']['id']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['created']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['creator_id']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['modified']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['modifier_id']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['i_name']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['survey_date']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['validated_by']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['verified_by']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['verification_comments']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['s_name']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['validation_date']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['validation_comments']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['verification_date']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['que_id']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['org_name']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['respn_name']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['designation']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['contact']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['email']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['address']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['city']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['state']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['sector']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['total_employees']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['management']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['non_management']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['avg_contract_emp_year']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['no_planned_training']); ?>&nbsp;</td>
						<td><?php echo h($interviewData['InterviewData']['no_unplanned_training']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $interviewData['InterviewData']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $interviewData['InterviewData']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $interviewData['InterviewData']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $interviewData['InterviewData']['id'])); ?>
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