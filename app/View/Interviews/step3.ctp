<script type="text/javascript">

 $(document).ready(function() {

        var newRowNum = 1;        
        
        $("#add").click(function() {
        	newRowNum += 1;
        	var addRow = $('#mytable tbody>tr:last');

        	var newRow = addRow.clone();
        	$('input',newRow).val('');
        	$('td:first-child', newRow).html(newRowNum);
        	$('#PlannedTrainingTNameTargetAudience', newRow).each(function(i){
            	var newID = 'data[PlannedTraining][' + newRowNum + '][t_name_target_audience]';
	            $(this).attr('name',newID);
        	});
        	$('#PlannedTrainingTrainingDepartmentWise', newRow).each(function(i){
            	var newID = 'data[PlannedTraining][' + newRowNum + '][training_department_wise]';
	            $(this).attr('name',newID);
        	});
        	$('#PlannedTrainingClassRoom', newRow).each(function(i){
            	var newID = 'data[PlannedTraining][' + newRowNum + '][class_room]';
	            $(this).attr('name',newID);
        	});
        	$('#PlannedTrainingPractical', newRow).each(function(i){
            	var newID = 'data[PlannedTraining][' + newRowNum + '][practical]';
	            $(this).attr('name',newID);
        	});
        	$('#PlannedTrainingOnjobTraining', newRow).each(function(i){
            	var newID = 'data[PlannedTraining][' + newRowNum + '][onjob_training]';
	            $(this).attr('name',newID);
        	});
        	$('#PlannedTrainingOthers', newRow).each(function(i){
            	var newID = 'data[PlannedTraining][' + newRowNum + '][others]';
	            $(this).attr('name',newID);
        	});
        	$('#PlannedTrainingUsedTechnology', newRow).each(function(i){
            	var newID = 'data[PlannedTraining][' + newRowNum + '][used_technology]';
	            $(this).attr('name',newID);
        	});
        	$('#PlannedTrainingDuration', newRow).each(function(i){
            	var newID = 'data[PlannedTraining][' + newRowNum + '][duration]';
	            $(this).attr('name',newID);
        	});
        	$('#PlannedTrainingNoTrainer', newRow).each(function(i){
            	var newID = 'data[PlannedTraining][' + newRowNum + '][no_trainer]';
	            $(this).attr('name',newID);
        	});
        	$('#PlannedTrainingBatchSize', newRow).each(function(i){
            	var newID = 'data[PlannedTraining][' + newRowNum + '][batch_size]';
	            $(this).attr('name',newID);
        	});
        	$('#PlannedTrainingAvgNoEmpTrainYear', newRow).each(function(i){
            	var newID = 'data[PlannedTraining][' + newRowNum + '][avg_no_emp_train_year]';
	            $(this).attr('name',newID);
        	});
        	$('#PlannedTrainingOtherRemarks', newRow).each(function(i){
            	var newID = 'data[PlannedTraining][' + newRowNum + '][other_remarks]';
	            $(this).attr('name',newID);
        	});
        
        	newRow.insertAfter(addRow);
          	return false;
    	});
   
          
    });    
</script>

<div class="UnplannedTrainings form" id="content">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Planned Training'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">

		<div class="col-md-12"> <!-- Here actual Model is different but I renamed create to have this form in same model -->
			<?php echo $this->Form->create('PlannedTraining', array('role' => 'form','url' => array('controller' => 'interviews', 'action' => 'add','3'))); ?>
		 <a  id="add">Add new Row</a></td>
			<table class="table table-striped" width="100%" id="mytable">
			<tr>
				<th rowspan=2>a. Training Name & Target Audience</th>
				<th rowspan=2>b. Is this training organized departmentwise ? If yes please mention the department</th>
				<th colspan=4>c. Pedagogy (Kindly mention the % of course duration spent on methods)</th>	
				
				<th rowspan=2>d. Is there any use of technology for scaling up training> If yes, kindly mention the sam</th>
				<th rowspan=2>e. Typical Duration of Course</th>
				<th rowspan=2>f. No. of Trainer</th>
				<th rowspan=2>h. Batch Size</th>
				<th rowspan=2>g. Avg. No. of Emp. trained every year</th>
				<th rowspan=2>i. Other Remarks</th>
				</tr>
				<tr>
						
					<th >Class Room(in %)</th>
				<th>Practical(in %)</th>
				<th>On-job Training(in %)</th>
				<th>Others(in %)</th>
				</tr>

				<tr>
					<th><div class="form-group">
					<?php echo $this->Form->input('t_name_target_audience', array('class' => 'form-control', 'placeholder' => 'Training Name & Target Audience', 'label' => false,'name'=>'data[PlannedTraining][1][t_name_target_audience]'));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('training_department_wise', array('class' => 'form-control', 'placeholder' => 'Training Department Wise', 'label' => false,'name'=>'data[PlannedTraining][1][training_department_wise]'));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('class_room', array('class' => 'form-control', 'placeholder' => 'Class Room','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5,'name'=>'data[PlannedTraining][1][class_room]'));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('practical', array('class' => 'form-control', 'placeholder' => 'Practical','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5,'name'=>'data[PlannedTraining][1][practical]'));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('onjob_training', array('class' => 'form-control', 'placeholder' => 'Onjob Training','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5,'name'=>'data[PlannedTraining][1][onjob_training]'));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('others', array('class' => 'form-control', 'placeholder' => 'Others','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5,'name'=>'data[PlannedTraining][1][others]'));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('used_technology', array('class' => 'form-control', 'placeholder' => 'Used Technology','label' => false,'name'=>'data[PlannedTraining][1][used_technology]'));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('duration', array('class' => 'form-control', 'placeholder' => 'Duration','label' => false,'name'=>'data[PlannedTraining][1][duration]'));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('no_trainer', array('class' => 'form-control', 'placeholder' => 'No Trainer','label' => false,'name'=>'data[PlannedTraining][1][no_trainer]'));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('batch_size', array('class' => 'form-control', 'placeholder' => 'Batch Size','label' => false,'name'=>'data[PlannedTraining][1][batch_size]'));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('avg_no_emp_train_year', array('class' => 'form-control', 'placeholder' => 'Avg No Emp Train Year','label' => false,'name'=>'data[PlannedTraining][1][avg_no_emp_train_year]'));?></div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('other_remarks', array('class' => 'form-control', 'placeholder' => 'Other Remarks', 'label' => false,'name'=>'data[PlannedTraining][1][other_remarks]'));?>
				</div>
				</th>
				</tr>
			</table>	

			<div class="row">
		<div class="col-md-10">
			<?php	echo $this->Html->link('Previous step',array('controller'=>'interview_datas','action' => 'add','3'),
											array('class' => 'btn btn-default','id'=>'previous')); ?> 
	</div>
	<div class="col-md-1">			
	<div class="form-group">
					<?php echo $this->Form->submit(__('Towards Step 4'), array('class' => 'btn btn-default')); ?>
				</div> 
			</div>
			</div>
			

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>

