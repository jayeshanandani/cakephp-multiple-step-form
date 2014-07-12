<?php
	if(isset($this->request->data['Training'])) {
		
	$c = count($this->request->data['Training']);
	if($c==0){ $c = 5; }
} else {
	$c = 5;
}
?>
<script type="text/javascript">

 $(document).ready(function() {

			var newRowNum = <?php echo $c-1; ?>;

        $("#add").click(function() {
            newRowNum += 1;
        	b = newRowNum;
        	var a = b-1;
        	var addRow = $('#mytable tbody>tr:last');
        	var newRow = addRow.clone();
        	$('input',newRow).val('');
        	$('td:first-child', newRow).html(newRowNum);
        	$('#Training'+a+'Planned', newRow).each(function(i){
            	var newName = 'data[Training][' + newRowNum + '][planned]';
            	var newID = 'Training' + newRowNum + 'TNameTargetAudience';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
	            $(this).attr('value','1');
        	});
        	$('#Training'+a+'TNameTargetAudience', newRow).each(function(i){
            	var newName = 'data[Training][' + newRowNum + '][t_name_target_audience]';
            	var newID = 'Training' + newRowNum + 'TNameTargetAudience';
	            $(this).attr('name',newName);
	            $(this).attr('id',newID);
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

 	$("#sub").click(function() {
 		if( $('#mytable tbody>tr:last').closest('tr').is('tr:only-child') ) {
 			
    		alert('cannot delete last row');
		}
		else {
   			 $('#mytable tbody >tr:last').closest('tr').remove();
   			 newRowNum -= 1;
		}
       // $('#mytable tbody>tr:last').last().remove('#mytable tbody>tr:last');
        
          return false;

        });
   
          
    });    
</script>

<div class="Trainings form" id="content">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
			</div>
		</div>
	</div>



	<div class="row">

		<div class="col-md-12"> <!-- Here actual Model is different but I renamed create to have this form in same model -->
		<table class="table table-striped" >
				<tr>
					<th style="text-align:center;color:#fff;background-color:gray;border-radius:6px;">Planned Training</th>
				</tr>
			</table>
			<?php echo $this->Form->create('Survey', array('role' => 'form','url' => array('controller' => 'surveys', 'action' => 'add','2'))); ?>
			
			<table class="table table-striped" width="100%" id="mytable">
			<thead>
			<tr>
				<th rowspan=2>a. Training Name &amp; Target Audience</th>
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
				</thead>
				<tbody>
		
				<?php
				for($i = 0; $i <= $c-1; $i++):
				?>
				<tr>
					<th><div class="form-group">
					<?php
						echo $this->Form->input('Training.'.$i.'.planned',array('type'=>'hidden','value'=>1));
						echo $this->Form->input('Training.'.$i.'.t_name_target_audience', array('class' => 'form-control', 'placeholder' => 'Training Name & Target Audience', 'label' => false));
					?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('Training.'.$i.'.training_department_wise', array('class' => 'form-control', 'placeholder' => 'Training Department Wise', 'label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.'.$i.'.class_room', array('class' => 'form-control', 'placeholder' => 'Class Room','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5,'required'=>false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.'.$i.'.practical', array('class' => 'form-control', 'placeholder' => 'Practical','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5,'required'=>false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.'.$i.'.onjob_training', array('class' => 'form-control', 'placeholder' => 'Onjob Training','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.'.$i.'.others', array('class' => 'form-control', 'placeholder' => 'Others','label' => false, 'min' => 0, 'max' => 100 , 'step' => 5));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.'.$i.'.used_technology', array('class' => 'form-control', 'placeholder' => 'Used Technology','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.'.$i.'.duration', array('class' => 'form-control', 'placeholder' => 'Duration','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.'.$i.'.no_trainer', array('class' => 'form-control', 'placeholder' => 'No Trainer','label' => false,'type'=>'number'));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.'.$i.'.outsourced', array('class' => 'form-control', 'placeholder' => 'Outsourced','label' => false));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.'.$i.'.batch_size', array('class' => 'form-control', 'placeholder' => 'Batch Size','label' => false,'pattern'=>'[0-9]*'));?>
				</div></th>
				<th><div class="form-group">
					<?php echo $this->Form->input('Training.'.$i.'.avg_no_emp_train_year', array('class' => 'form-control', 'placeholder' => 'Avg No Emp Train Year','label' => false,'type'=>'number','min'=>0));?>
				</div></th>
				</tr>
				<?php
				endfor;
				?>
				</tbody>
			</table>	
<table class="table table-striped">
				<tr>
					<th><a id="add">Add new Row</a> | <a id="sub">Delete Row</a></th>
				</tr>
			</table>
			<div class="row">
		<div class="col-md-10">
			<?php	echo $this->Html->link('Previous step',array('controller'=>'surveys','action' => 'add','1'),
											array('class' => 'btn btn-default','id'=>'previous')); ?> 
	</div>
	<div class="col-md-1">			
	<div class="form-group">
					<?php echo $this->Form->submit(__('Next Step'), array('class' => 'btn btn-default')); ?>
				</div> 
			</div>
			</div>
			

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
