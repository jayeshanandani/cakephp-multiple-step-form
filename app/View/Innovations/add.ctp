<div class="innovations form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Innovation'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">

		<div class="col-md-12" style="float:none;">
			<?php echo $this->Form->create('Innovation', array('role' => 'form')); ?>
					<div class="form-group">
					<?php echo $this->Form->input('interview_datas_id', array('class' => 'form-control', 'placeholder' => 'Interview Datas Id'));?>
				</div>
			<table class="table table-striped" width="100%">
				<tr>
					<th colspan="4">Q.4 a. Do you have any special trainings run for PWD employees at your organization?</th>
					<th><div class="form-group">
					<?php echo $this->Form->input('is_training_for_pwd', array('class' => 'form-control', 'placeholder' => 'Is Training For Pwd', 'label' => false));?>
				</div></th>
				</tr>

				<tr>
					<th colspan="4">Q.4 b. If answer to the above question is yes what are these training programs and kindly give details about the same.</th>
					<th><div class="form-group">
					<?php echo $this->Form->input('pwd_answer', array('class' => 'form-control', 'placeholder' => 'Pwd Answer', 'label' => false));?>
				</div></th>
				</tr>
				<tr>
					<th colspan="5" style="text-align:center">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="5" style="text-align:center">Innovation</th>
				</tr>
				<tr>
					<th colspan="5" style="text-align:center">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="4">Q.5 a. Have you implemented any innovative ideas in training method? If yes, please mention the details below.</th>
					<th><div class="form-group">
					<?php echo $this->Form->input('is_innovative_idea_implemented', array('class' => 'form-control', 'placeholder' => 'Is Innovative Idea Implemented', 'label' => false));?>
				</div></th>
				</tr>
				<tr>
					<th colspan="5" style="text-align:center">&nbsp;</th>
				</tr>
				<tr>
					<th>b. Innovation Name</th>
					<th>c. What was the inspiration behind the innovation?</th>
					<th>d. How was it implemented?</th>
					<th>e. Evaution mechanism used to evaluate its effectiveness</th>
					<th>f. What is the significant change observed after implementation of the innovation?</th>
				</tr>
				<tr>
					<th><div class="form-group">
					<?php echo $this->Form->input('innovation_name', array('class' => 'form-control', 'placeholder' => 'Innovation Name', 'label' => false));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('inspiration', array('class' => 'form-control', 'placeholder' => 'Inspiration', 'label' => false));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('how_implemented', array('class' => 'form-control', 'placeholder' => 'How Implemented', 'label' => false));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('evalution_mechanism', array('class' => 'form-control', 'placeholder' => 'Evalution Mechanism', 'label' => false));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('changes', array('class' => 'form-control', 'placeholder' => 'Changes', 'label' => false));?>
				</div></th>
				</tr>
				<tr>
					<th colspan="4">Would you like to accord your approval for publishing about the case study on innovations you implemented by NSDC?</th>
					<th><div class="form-group">
					<?php echo $this->Form->input('approval_publishing', array('class' => 'form-control', 'placeholder' => 'Approval Publishing', 'label' => false));?>
				</div></th>
				</tr>
				<tr>
					<th colspan="4">Q.6 One of the main objective of this project is to identify innovative models implemented by vocational training institutes.This model can serve as a benchmark for others to follow and implement so that more students can get similar benefits in order areas as well. would you like to accord your approval for publishing about your institute as a case study by NSDC? Yes/No</th>
					<th><div class="form-group">
					<?php echo $this->Form->input('approval_publishing_institute', array('class' => 'form-control', 'placeholder' => 'Approval Publishing Institute','label' => false));?>
				</div></th>
				</tr>
			</table>

				
				
				
				
				
				
				
				
				
				
				
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
