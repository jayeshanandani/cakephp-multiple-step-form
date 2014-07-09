<div class="innovations index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Innovations'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Innovation'), array('action' => 'add'), array('escape' => false)); ?></li>
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
						<th><?php echo $this->Paginator->sort('is_training_for_pwd'); ?></th>
						<th><?php echo $this->Paginator->sort('pwd_answer'); ?></th>
						<th><?php echo $this->Paginator->sort('is_innovative_idea_implemented'); ?></th>
						<th><?php echo $this->Paginator->sort('innovation_name'); ?></th>
						<th><?php echo $this->Paginator->sort('inspiration'); ?></th>
						<th><?php echo $this->Paginator->sort('how_implemented'); ?></th>
						<th><?php echo $this->Paginator->sort('evalution_mechanism'); ?></th>
						<th><?php echo $this->Paginator->sort('changes'); ?></th>
						<th><?php echo $this->Paginator->sort('approval_publishing'); ?></th>
						<th><?php echo $this->Paginator->sort('approval_publishing_institute'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($innovations as $innovation): ?>
					<tr>
						<td><?php echo h($innovation['Innovation']['id']); ?>&nbsp;</td>
						<td><?php echo h($innovation['Innovation']['created']); ?>&nbsp;</td>
						<td><?php echo h($innovation['Innovation']['creator_id']); ?>&nbsp;</td>
						<td><?php echo h($innovation['Innovation']['modified']); ?>&nbsp;</td>
						<td><?php echo h($innovation['Innovation']['modifier_id']); ?>&nbsp;</td>
						<td><?php echo h($innovation['Innovation']['interview_datas_id']); ?>&nbsp;</td>
						<td><?php echo h($innovation['Innovation']['is_training_for_pwd']); ?>&nbsp;</td>
						<td><?php echo h($innovation['Innovation']['pwd_answer']); ?>&nbsp;</td>
						<td><?php echo h($innovation['Innovation']['is_innovative_idea_implemented']); ?>&nbsp;</td>
						<td><?php echo h($innovation['Innovation']['innovation_name']); ?>&nbsp;</td>
						<td><?php echo h($innovation['Innovation']['inspiration']); ?>&nbsp;</td>
						<td><?php echo h($innovation['Innovation']['how_implemented']); ?>&nbsp;</td>
						<td><?php echo h($innovation['Innovation']['evalution_mechanism']); ?>&nbsp;</td>
						<td><?php echo h($innovation['Innovation']['changes']); ?>&nbsp;</td>
						<td><?php echo h($innovation['Innovation']['approval_publishing']); ?>&nbsp;</td>
						<td><?php echo h($innovation['Innovation']['approval_publishing_institute']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $innovation['Innovation']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $innovation['Innovation']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $innovation['Innovation']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $innovation['Innovation']['id'])); ?>
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