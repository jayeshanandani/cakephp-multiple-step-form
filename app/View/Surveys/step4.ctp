<script type="text/javascript">

 $(document).ready(function() {

        var newRowNum = 0;        
        
        $("#add").click(function() {
        	newRowNum += 1;
        	b = newRowNum;
        	var a = b-1;
        	console.log(newRowNum);
        	var addRow = $('#mytable tbody>tr:last');
        	var newRow = addRow.clone();
        	$('input',newRow).val('');
        	$('td:first-child', newRow).html(newRowNum);
        	$('#Innovation'+a+'InnovationName', newRow).each(function(i){
            	var newName = 'data[Innovation][' + newRowNum + '][innovation_name]';
	            var newID = 'Innovation' + newRowNum + 'InnovationName';
	            $(this).attr('name',newName).attr('id',newID);
        	});
        	$('#Innovation'+a+'TrainingInspiration', newRow).each(function(i){
            	var newName = 'data[Innovation][' + newRowNum + '][inspiration]';
            	var newID = 'Innovation' + newRowNum + 'TrainingInspiration';
	            $(this).attr('name',newName).attr('id',newID);
        	});
        	$('#Innovation'+a+'HowImplemented', newRow).each(function(i){
            	var newName = 'data[Innovation][' + newRowNum + '][how_implemented]';
	            var newID = 'Innovation' + newRowNum + 'HowImplemented';
	            $(this).attr('name',newName).attr('id',newID);
        	});
        	$('#Innovation'+a+'EvaluationMechanism', newRow).each(function(i){
            	var newName = 'data[Innovation][' + newRowNum + '][evalution_mechanism]';
	            var newID = 'Innovation' + newRowNum + 'EvaluationMechanism';
	            $(this).attr('name',newName).attr('id',newID);
        	});
        	$('#Innovation'+a+'Changes', newRow).each(function(i){
            	var newName = 'data[Innovation][' + newRowNum + '][changes]';
	            var newID = 'Innovation' + newRowNum + 'Changes';
	            $(this).attr('name',newName).attr('id',newID);
        	});
       
        	newRow.insertAfter(addRow);
          	return false;
    	});
   
          
    });    
</script>

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
			<a  id="add">Add new Row</a></td>
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
				</tr></table>
				<table id="mytable">
				<tr>
					<th>b. Innovation Name</th>
					<th>c. What was the inspiration behind the innovation?</th>
					<th>d. How was it implemented?</th>
					<th>e. Evaution mechanism used to evaluate its effectiveness</th>
					<th>f. What is the significant change observed after implementation of the innovation?</th>
				</tr>
				<tr>
					<th><div class="form-group">
					<?php echo $this->Form->input('Innovation.0.innovation_name', array('class' => 'form-control', 'placeholder' => 'Innovation Name', 'label' => false));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('Innovation.0.inspiration', array('class' => 'form-control', 'placeholder' => 'Inspiration', 'label' => false));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('Innovation.0.how_implemented', array('class' => 'form-control', 'placeholder' => 'How Implemented', 'label' => false));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('Innovation.0.evalution_mechanism', array('class' => 'form-control', 'placeholder' => 'Evalution Mechanism', 'label' => false));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('Innovation.0.changes', array('class' => 'form-control', 'placeholder' => 'Changes', 'label' => false));?>
				</div></th>
				</tr>
				</table>
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
		</div>
				<div class="row">
		<div class="col-md-10">
			<?php	echo $this->Html->link('Previous step',array('controller'=>'interview_datas','action' => 'add','3'),
											array('class' => 'btn btn-default','id'=>'previous')); ?> 
	</div>
	<div class="col-md-2">			
	<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div> 
			</div>
			</div>
			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
