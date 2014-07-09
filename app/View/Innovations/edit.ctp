<div class="innovations form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Innovation'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Innovation.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Innovation.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Innovations'), array('action' => 'index'), array('escape' => false)); ?></li>
														</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Innovation', array('role' => 'form')); ?>

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
					<?php echo $this->Form->input('is_training_for_pwd', array('class' => 'form-control', 'placeholder' => 'Is Training For Pwd'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pwd_answer', array('class' => 'form-control', 'placeholder' => 'Pwd Answer'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('is_innovative_idea_implemented', array('class' => 'form-control', 'placeholder' => 'Is Innovative Idea Implemented'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('innovation_name', array('class' => 'form-control', 'placeholder' => 'Innovation Name'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('inspiration', array('class' => 'form-control', 'placeholder' => 'Inspiration'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('how_implemented', array('class' => 'form-control', 'placeholder' => 'How Implemented'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('evalution_mechanism', array('class' => 'form-control', 'placeholder' => 'Evalution Mechanism'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('changes', array('class' => 'form-control', 'placeholder' => 'Changes'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('approval_publishing', array('class' => 'form-control', 'placeholder' => 'Approval Publishing'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('approval_publishing_institute', array('class' => 'form-control', 'placeholder' => 'Approval Publishing Institute'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
