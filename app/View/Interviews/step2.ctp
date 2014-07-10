<div class="plannedTrainings form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Planned Training'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">

		<div class="col-md-12"> <!-- Here actual Model is different but I renamed create to have this form in same model -->
			<?php echo $this->Form->create('Training', array('role' => 'form','action'=>'step3')); ?>
		
			<table class="table table-striped" width="100%">
			<tr>
				<th rowspan=2>a. Training Name & Target Audience</th>
				<th rowspan=2>b. Is this training organized departmentwise ? If yes please mention the department</th>
				<th colspan=4>c. Pedagogy (Kindly mention the % of course duration spent on methods)</th>	
				
				<th rowspan=2>d. Is there any use of technology for scaling up training> If yes, kindly mention the sam</th>
				<th rowspan=2>e. Duration of Course</th>
				<th rowspan=2>f. No. of Trainer</th>
				<th rowspan=2>g. Outsourced (Y/N)? If yes,which organization?</th>
				<th rowspan=2>h. Batch Size</th>
				<th rowspan=2>i. Avg. No. of Emp. trained every year</th>

				</tr>
				<tr>
						
					<th >Class Room(in %)</th>
				<th>Practical(in %)</th>
				<th>On-job Training(in %)</th>
				<th>Others(in %)</th>
				
				</tr>

				<tr>
					<th><div class="form-group">
					<?php echo $this->Form->input('t_name_target_audience', array('class' => 'form-control', 'placeholder' => 'Training Name & Target Audience', 'label' => false));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('training_department_wise', array('class' => 'form-control', 'placeholder' => 'Training Department Wise', 'label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('class_room', array('class' => 'form-control', 'placeholder' => 'Class Room','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('practical', array('class' => 'form-control', 'placeholder' => 'Practical','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('onjob_training', array('class' => 'form-control', 'placeholder' => 'Onjob Training','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('others', array('class' => 'form-control', 'placeholder' => 'Others','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('used_technology', array('class' => 'form-control', 'placeholder' => 'Used Technology','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('duration', array('class' => 'form-control', 'placeholder' => 'Duration','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('no_trainer', array('class' => 'form-control', 'placeholder' => 'No Trainer','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('outsourced', array('class' => 'form-control', 'placeholder' => 'Outsourced','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('batch_size', array('class' => 'form-control', 'placeholder' => 'Batch Size','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('avg_no_emp_train_year', array('class' => 'form-control', 'placeholder' => 'Avg No Emp Train Year','label' => false));?>
				</div></th>

				</tr>
			</table>	
			<?php	echo $this->Html->link('Previous step',
	array('controller'=>'interview_datas','action' => 'step1'),
	array('class' => 'button')); ?>
	
<div class="form-group">
					<?php echo $this->Form->submit(__('Towards step 3'), array('class' => 'btn btn-default')); ?>
				</div> 
			

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
