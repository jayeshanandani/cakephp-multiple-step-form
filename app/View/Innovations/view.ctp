<div class="innovations view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Innovation'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Innovation'), array('action' => 'edit', $innovation['Innovation']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Innovation'), array('action' => 'delete', $innovation['Innovation']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $innovation['Innovation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Innovations'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Innovation'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($innovation['Innovation']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($innovation['Innovation']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Creator Id'); ?></th>
		<td>
			<?php echo h($innovation['Innovation']['creator_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($innovation['Innovation']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modifier Id'); ?></th>
		<td>
			<?php echo h($innovation['Innovation']['modifier_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Interview Datas Id'); ?></th>
		<td>
			<?php echo h($innovation['Innovation']['interview_datas_id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Is Training For Pwd'); ?></th>
		<td>
			<?php echo h($innovation['Innovation']['is_training_for_pwd']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pwd Answer'); ?></th>
		<td>
			<?php echo h($innovation['Innovation']['pwd_answer']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Is Innovative Idea Implemented'); ?></th>
		<td>
			<?php echo h($innovation['Innovation']['is_innovative_idea_implemented']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Innovation Name'); ?></th>
		<td>
			<?php echo h($innovation['Innovation']['innovation_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Inspiration'); ?></th>
		<td>
			<?php echo h($innovation['Innovation']['inspiration']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('How Implemented'); ?></th>
		<td>
			<?php echo h($innovation['Innovation']['how_implemented']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Evalution Mechanism'); ?></th>
		<td>
			<?php echo h($innovation['Innovation']['evalution_mechanism']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Changes'); ?></th>
		<td>
			<?php echo h($innovation['Innovation']['changes']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Approval Publishing'); ?></th>
		<td>
			<?php echo h($innovation['Innovation']['approval_publishing']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Approval Publishing Institute'); ?></th>
		<td>
			<?php echo h($innovation['Innovation']['approval_publishing_institute']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

