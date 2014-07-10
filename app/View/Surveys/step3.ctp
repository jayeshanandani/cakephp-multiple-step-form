<?php
	$c = count($this->request->data['UnplannedTraining']);
	if($c==0){ $c = 1; }
?>
<script type="text/javascript">

 $(document).ready(function() {

        var newRowNum = <?php echo $c-1 ?>;
        
        $("#add").click(function() {
        	newRowNum += 1;
        	b = newRowNum;
        	var a = b-1;
        	var addRow = $('#mytable tbody>tr:last');
        	var newRow = addRow.clone();
        	$('input',newRow).val('');
        	$('td:first-child', newRow).html(newRowNum);
        	$('#UnplannedTraining'+a+'Planned', newRow).each(function(i){
            	var newName = 'data[Training][' + newRowNum + '][planned]';
            	var newID = 'Training' + newRowNum + 'TNameTargetAudience';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
	            $(this).attr('value','0');
        	});
        	$('#UnplannedTraining'+a+'TNameTargetAudience', newRow).each(function(i){
            	var newName = 'data[UnplannedTraining][' + newRowNum + '][t_name_target_audience]';
            	var newID = 'Training' + newRowNum + 'TNameTargetAudience';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#UnplannedTraining'+a+'UnplannedTrainingDepartmentWise', newRow).each(function(i){
            	var newName = 'data[UnplannedTraining][' + newRowNum + '][UnplannedTraining_department_wise]';
            	var newID = 'UnplannedTraining' + newRowNum + 'UnplannedTrainingDepartmentWise';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#UnplannedTraining'+a+'ClassRoom', newRow).each(function(i){
            	var newName = 'data[UnplannedTraining][' + newRowNum + '][class_room]';
            	var newID = 'UnplannedTraining' + newRowNum + 'ClassRoom';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#UnplannedTraining'+a+'Practical', newRow).each(function(i){
            	var newName = 'data[UnplannedTraining][' + newRowNum + '][practical]';
            	var newID = 'UnplannedTraining' + newRowNum + 'Practical';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#UnplannedTraining'+a+'OnjobUnplannedTraining', newRow).each(function(i){
            	var newName = 'data[UnplannedTraining][' + newRowNum + '][onjob_UnplannedTraining]';
            	var newID = 'UnplannedTraining' + newRowNum + 'OnjobUnplannedTraining';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#UnplannedTraining'+a+'Others', newRow).each(function(i){
            	var newName = 'data[UnplannedTraining][' + newRowNum + '][others]';
            	var newID = 'UnplannedTraining' + newRowNum + 'Others';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#UnplannedTraining'+a+'UsedTechnology', newRow).each(function(i){
            	var newName = 'data[UnplannedTraining][' + newRowNum + '][used_technology]';
            	var newID = 'UnplannedTraining' + newRowNum + 'UsedTechnology';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#UnplannedTraining'+a+'Duration', newRow).each(function(i){
            	var newName = 'data[UnplannedTraining][' + newRowNum + '][duration]';
            	var newID = 'UnplannedTraining' + newRowNum + 'Duration';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#UnplannedTraining'+a+'NoTrainer', newRow).each(function(i){
            	var newName = 'data[UnplannedTraining][' + newRowNum + '][no_trainer]';
            	var newID = 'UnplannedTraining' + newRowNum + 'NoTrainer';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#UnplannedTraining'+a+'BatchSize', newRow).each(function(i){
            	var newName = 'data[UnplannedTraining][' + newRowNum + '][batch_size]';
            	var newID = 'UnplannedTraining' + newRowNum + 'BatchSize';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#UnplannedTraining'+a+'AvgNoEmpTrainYear', newRow).each(function(i){
            	var newName = 'data[UnplannedTraining][' + newRowNum + '][avg_no_emp_train_year]';
            	var newID = 'UnplannedTraining' + newRowNum + 'AvgNoEmpTrainYear';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
        	});
        	$('#UnplannedTraining'+a+'OtherRemarks', newRow).each(function(i){
            	var newName = 'data[UnplannedTraining][' + newRowNum + '][other_remarks]';
            	var newID = 'UnplannedTraining' + newRowNum + 'OtherRemarks';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
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
				<h1><?php echo __('Add Unplanned Training'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">

		<div class="col-md-12"> <!-- Here actual Model is different but I renamed create to have this form in same model -->
			<?php echo $this->Form->create('Survey', array('role' => 'form','url' => array('controller' => 'surveys', 'action' => 'add','3'))); ?>
		 <a  id="add">Add new Row</a></td>
			<table class="table table-striped" width="100%" id="mytable">
			<tr>
				<th rowspan=2>a. Training Name &amp; Target Audience</th>
				<th rowspan=2>b. Is this Training organized departmentwise ? If yes please mention the department</th>
				<th colspan=4>c. Pedagogy (Kindly mention the % of course duration spent on methods)</th>	
				
				<th rowspan=2>d. Is there any use of technology for scaling up UnplannedTraining> If yes, kindly mention the sam</th>
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
				<?php
				for($i = 0; $i <= $c-1; $i++):
				?>
				<tr>
					<th><div class="form-group">
					<?php echo $this->Form->input('UnplannedTraining.'.$i.'.planned',array('type'=>'hidden','value'=>0)); ?>
					<?php echo $this->Form->input('UnplannedTraining.'.$i.'.t_name_target_audience', array('class' => 'form-control', 'placeholder' => 'UnplannedTraining Name & Target Audience', 'label' => false));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('UnplannedTraining.'.$i.'.UnplannedTraining_department_wise', array('class' => 'form-control', 'placeholder' => 'UnplannedTraining Department Wise', 'label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('UnplannedTraining.'.$i.'.class_room', array('class' => 'form-control', 'placeholder' => 'Class Room','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('UnplannedTraining.'.$i.'.practical', array('class' => 'form-control', 'placeholder' => 'Practical','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('UnplannedTraining.'.$i.'.onjob_UnplannedTraining', array('class' => 'form-control', 'placeholder' => 'Onjob UnplannedTraining','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('UnplannedTraining.'.$i.'.others', array('class' => 'form-control', 'placeholder' => 'Others','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('UnplannedTraining.'.$i.'.used_technology', array('class' => 'form-control', 'placeholder' => 'Used Technology','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('UnplannedTraining.'.$i.'.duration', array('class' => 'form-control', 'placeholder' => 'Duration','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('UnplannedTraining.'.$i.'.no_trainer', array('class' => 'form-control', 'placeholder' => 'No Trainer','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('UnplannedTraining.'.$i.'.batch_size', array('class' => 'form-control', 'placeholder' => 'Batch Size','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('UnplannedTraining.'.$i.'.avg_no_emp_train_year', array('class' => 'form-control', 'placeholder' => 'Avg No Emp Train Year','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('UnplannedTraining.'.$i.'.other_remarks', array('class' => 'form-control', 'placeholder' => 'Other','label' => false));?>
				</div></th>
				</tr>
				<?php
				endfor;
				?>
			</table>	

			<div class="row">
		<div class="col-md-10">
		<?php
			if($this->request->data['Profile']['no_planned_training']==0){ $stage = 1; }
			else { $stage = 2; }
			echo $this->Html->link('Previous step',array('controller'=>'surveys','action' => 'add',$stage),
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

