<?php
if(isset($this->request->data['InnovationData'])) {
	$c = count($this->request->data['InnovationData']);
	if($c==0){ $c = 1; }
} else {
	$c = 1;
}
?>
<script type="text/javascript">

 $(document).ready(function() {

        var newRowNum = <?php echo $c-1 ?>;
        
        $("#add").click(function() {
        	newRowNum += 1;
        	b = newRowNum;
        	var a = b-1;
        	console.log(newRowNum);
        	var addRow = $('#mytable tbody>tr:last');
        	var newRow = addRow.clone();
        	$('input',newRow).val('');
        	$('td:first-child', newRow).html(newRowNum);
        	$('#InnovationData'+a+'InnovationName', newRow).each(function(i){
            	var newName = 'data[InnovationData][' + newRowNum + '][innovation_name]';
	            var newID = 'InnovationData' + newRowNum + 'InnovationName';
	            $(this).attr('name',newName).attr('id',newID);
        	});
        	$('#InnovationData'+a+'TrainingInspiration', newRow).each(function(i){
            	var newName = 'data[InnovationData][' + newRowNum + '][inspiration]';
            	var newID = 'InnovationData' + newRowNum + 'TrainingInspiration';
	            $(this).attr('name',newName).attr('id',newID);
        	});
        	$('#InnovationData'+a+'HowImplemented', newRow).each(function(i){
            	var newName = 'data[InnovationData][' + newRowNum + '][how_implemented]';
	            var newID = 'InnovationData' + newRowNum + 'HowImplemented';
	            $(this).attr('name',newName).attr('id',newID);
        	});
        	$('#InnovationData'+a+'EvaluationMechanism', newRow).each(function(i){
            	var newName = 'data[InnovationData][' + newRowNum + '][evalution_mechanism]';
	            var newID = 'InnovationData' + newRowNum + 'EvaluationMechanism';
	            $(this).attr('name',newName).attr('id',newID);
        	});
        	$('#InnovationData'+a+'Changes', newRow).each(function(i){
            	var newName = 'data[InnovationData][' + newRowNum + '][changes]';
	            var newID = 'InnovationData' + newRowNum + 'Changes';
	            $(this).attr('name',newName).attr('id',newID);
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
			<?php echo $this->Form->create('Survey', array('role' => 'form')); ?>

			<table class="table table-striped" width="100%">
				<tr>
					<th colspan="4">Q.4 a. Do you have any special trainings run for PWD employees at your organization?</th>
					<th><div class="form-group">
					<?php echo $this->Form->input('Innovation.is_training_for_pwd', array('class' => 'form-control', 'placeholder' => 'Is Training For Pwd', 'label' => false));?>
				</div></th>
				</tr>

				<tr>
					<th colspan="4">Q.4 b. If answer to the above question is yes what are these training programs and kindly give details about the same.</th>
					<th><div class="form-group">
					<?php echo $this->Form->input('Innovation.pwd_answer', array('class' => 'form-control', 'placeholder' => 'Pwd Answer', 'label' => false));?>
				</div></th>
				</tr>
				<tr>
					<th colspan="5" style="text-align:center">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="5" style="text-align:center;color:#fff;background-color:gray;border-radius:6px;">Innovation</th>
				</tr>
				<tr>
					<th colspan="5" style="text-align:center">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="4">Q.5 a. Have you implemented any innovative ideas in training method? If yes, please mention the details below.</th>
					<th><div class="form-group">
					<?php echo $this->Form->input('Innovation.is_innovative_idea_implemented', array('class' => 'form-control', 'placeholder' => 'Is Innovative Idea Implemented', 'label' => false));?>
				</div></th>
				</tr>
				<tr>
					<th colspan="5" style="text-align:center">&nbsp;</th>
				</tr></table>
				<table id="mytable" class="table table-striped">
				<thead>
				<tr>
					<th>b. Innovation Name</th>
					<th>c. What was the inspiration behind the innovation?</th>
					<th>d. How was it implemented?</th>
					<th>e. Evaution mechanism used to evaluate its effectiveness</th>
					<th>f. What is the significant change observed after implementation of the innovation?</th>
				</tr>
				</thead>
				<tbody>
				<?php
				for($i = 0; $i <= $c-1; $i++):
				?>
				<tr>
					<th><div class="form-group">
					<?php echo $this->Form->input('InnovationData.'.$i.'.innovation_name', array('class' => 'form-control', 'placeholder' => 'Innovation Name', 'label' => false,'required'=>true));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('InnovationData.'.$i.'.inspiration', array('class' => 'form-control', 'placeholder' => 'Inspiration', 'label' => false,'required'=>true));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('InnovationData.'.$i.'.how_implemented', array('class' => 'form-control', 'placeholder' => 'How Implemented', 'label' => false,'required'=>true));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('InnovationData.'.$i.'.evalution_mechanism', array('class' => 'form-control', 'placeholder' => 'Evalution Mechanism', 'label' => false,'required'=>true));?>
				</div></th>
					<th><div class="form-group">
					<?php echo $this->Form->input('InnovationData.'.$i.'.changes', array('class' => 'form-control', 'placeholder' => 'Changes', 'label' => false,'required'=>true));?>
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
				<table class="table table-striped">
				<tr>
					<th colspan="4">Would you like to accord your approval for publishing about the case study on innovations you implemented by NSDC?</th>
					<th><div class="form-group">
					<?php echo $this->Form->input('Innovation.approval_publishing', array('class' => 'form-control', 'placeholder' => 'Approval Publishing', 'label' => false));?>
				</div></th>
				</tr>
				<tr>
					<th colspan="4">Q.6 One of the main objective of this project is to identify innovative models implemented by vocational training institutes.This model can serve as a benchmark for others to follow and implement so that more students can get similar benefits in order areas as well. would you like to accord your approval for publishing about your institute as a case study by NSDC? Yes/No</th>
					<th><div class="form-group">
					<?php echo $this->Form->input('Innovation.approval_publishing_institute', array('class' => 'form-control', 'placeholder' => 'Approval Publishing Institute','label' => false));?>
				</div></th>
				</tr>
			</table>
		</div>
				<div class="row">
		<div class="col-md-10">
		<?php
			if(($this->request->data['Profile']['no_planned_training']==0)&&($this->request->data['Profile']['no_unplanned_training']==0)){ $stage = 1; }
			elseif($this->request->data['Profile']['no_unplanned_training']!=0){ $stage = 3; }
			elseif($this->request->data['Profile']['no_planned_training']!=0){ $stage = 2; }
			else { $stage = 3; }
			echo $this->Html->link('Previous step',array('controller'=>'surveys','action' => 'add',$stage),
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
