<script type="text/javascript">

 $(document).ready(function() {

        var newRowNum = 0;        
        
        $("#add").click(function() {
        	newRowNum += 1;
        	b = newRowNum;
        	var a = b-1;
        	var addRow = $('#mytable tbody>tr:last');
        	var newRow = addRow.clone();
        	$('input',newRow).val('');
        	$('td:first-child', newRow).html(newRowNum);
        	$('#Training'+a+'TNameTargetAudience', newRow).each(function(i){
            	var newName = 'data[Training][' + newRowNum + '][t_name_target_audience]';
            	var newID = 'Training' + newRowNum + 'TNameTargetAudience';
	            $(this).attr('name',newName).attr('id',newID);
	            
        	});
        	$('#Training'+a+'TrainingDepartmentWise', newRow).each(function(i){
            	var newName = 'data[Training][' + newRowNum + '][training_department_wise]';
            	var newID = 'Training' + newRowNum + 'TrainingDepartmentWise';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#Training'+a+'ClassRoom', newRow).each(function(i){
            	var newName = 'data[Training][' + newRowNum + '][class_room]';
            	var newID = 'Training' + newRowNum + 'ClassRoom';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#Training'+a+'Practical', newRow).each(function(i){
            	var newName = 'data[Training][' + newRowNum + '][practical]';
            	var newID = 'Training' + newRowNum + 'Practical';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#Training'+a+'OnjobTraining', newRow).each(function(i){
            	var newName = 'data[Training][' + newRowNum + '][onjob_training]';
            	var newID = 'Training' + newRowNum + 'OnjobTraining';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#Training'+a+'Others', newRow).each(function(i){
            	var newName = 'data[Training][' + newRowNum + '][others]';
            	var newID = 'Training' + newRowNum + 'Others';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#Training'+a+'UsedTechnology', newRow).each(function(i){
            	var newName = 'data[Training][' + newRowNum + '][used_technology]';
            	var newID = 'Training' + newRowNum + 'UsedTechnology';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#Training'+a+'Duration', newRow).each(function(i){
            	var newName = 'data[Training][' + newRowNum + '][duration]';
            	var newID = 'Training' + newRowNum + 'Duration';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#Training'+a+'NoTrainer', newRow).each(function(i){
            	var newName = 'data[Training][' + newRowNum + '][no_trainer]';
            	var newID = 'Training' + newRowNum + 'NoTrainer';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#Training'+a+'Outsourced', newRow).each(function(i){
            	var newName = 'data[Training][' + newRowNum + '][outsourced]';
            	var newID = 'Training' + newRowNum + 'Outsourced';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#Training'+a+'BatchSize', newRow).each(function(i){
            	var newName = 'data[Training][' + newRowNum + '][batch_size]';
            	var newID = 'Training' + newRowNum + 'BatchSize';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#Training'+a+'AvgNoEmpTrainYear', newRow).each(function(i){
            	var newName = 'data[Training][' + newRowNum + '][avg_no_emp_train_year]';
            	var newID = 'Training' + newRowNum + 'AvgNoEmpTrainYear';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        
        	newRow.insertAfter(addRow);
          	return false;
    	});
   
          
    });    
</script>

<div class="Trainings form" id="content">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Planned Training'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">

		<div class="col-md-12"> <!-- Here actual Model is different but I renamed create to have this form in same model -->
			<?php echo $this->Form->create('Survey', array('role' => 'form','url' => array('controller' => 'surveys', 'action' => 'add','2'))); ?>
			<?php echo $this->Form->input('Training.0.planned',array('type'=>'hidden','value'=>1)); ?>
		 <a  id="add">Add new Row</a></td>
			<table class="table table-striped" width="100%" id="mytable">
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
					<?php echo $this->Form->input('Training.0.t_name_target_audience', array('class' => 'form-control', 'placeholder' => 'Training Name & Target Audience', 'label' => false));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('Training.0.training_department_wise', array('class' => 'form-control', 'placeholder' => 'Training Department Wise', 'label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.0.class_room', array('class' => 'form-control', 'placeholder' => 'Class Room','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.0.practical', array('class' => 'form-control', 'placeholder' => 'Practical','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.0.onjob_training', array('class' => 'form-control', 'placeholder' => 'Onjob Training','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.0.others', array('class' => 'form-control', 'placeholder' => 'Others','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.0.used_technology', array('class' => 'form-control', 'placeholder' => 'Used Technology','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.0.duration', array('class' => 'form-control', 'placeholder' => 'Duration','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.0.no_trainer', array('class' => 'form-control', 'placeholder' => 'No Trainer','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.0.outsourced', array('class' => 'form-control', 'placeholder' => 'Outsourced','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.0.batch_size', array('class' => 'form-control', 'placeholder' => 'Batch Size','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.0.avg_no_emp_train_year', array('class' => 'form-control', 'placeholder' => 'Avg No Emp Train Year','label' => false));?>
				</div></th>
				</tr>
			</table>	

			<div class="row">
		<div class="col-md-10">
			<?php	echo $this->Html->link('Previous step',array('controller'=>'surveys','action' => 'add','1'),
											array('class' => 'btn btn-default','id'=>'previous')); ?> 
	</div>
	<div class="col-md-1">			
	<div class="form-group">
					<?php echo $this->Form->submit(__('Towards Step 3'), array('class' => 'btn btn-default')); ?>
				</div> 
			</div>
			</div>
			

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
