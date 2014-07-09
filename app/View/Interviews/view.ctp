<div class="interviewDatas view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Interview Data'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Interview Data'), array('action' => 'edit', $interviewData['InterviewData']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Interview Data'), array('action' => 'delete', $interviewData['InterviewData']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $interviewData['InterviewData']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Interview Datas'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Interview Data'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($interviewData['InterviewData']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Creator Id'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['creator_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modifier Id'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['modifier_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('I Name'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['i_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Survey Date'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['survey_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Validated By'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['validated_by']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Verified By'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['verified_by']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Verification Comments'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['verification_comments']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('S Name'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['s_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Validation Date'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['validation_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Validation Comments'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['validation_comments']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Verification Date'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['verification_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Que Id'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['que_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Org Name'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['org_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Respn Name'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['respn_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Designation'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['designation']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Contact'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['contact']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Address'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['address']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('City'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['city']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('State'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['state']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sector'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['sector']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Total Employees'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['total_employees']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Management'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['management']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Non Management'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['non_management']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Avg Contract Emp Year'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['avg_contract_emp_year']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('No Planned Training'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['no_planned_training']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('No Unplanned Training'); ?></th>
		<td>
			<?php echo h($interviewData['InterviewData']['no_unplanned_training']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

