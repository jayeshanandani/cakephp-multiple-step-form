<script>
$(document).ready(function(){
  $("button").ready(function(){
    $("#div3").fadeIn(3000);
  });
});
</script>
<style type="text/css">
	h1 { 
		font-family:Existence-Light; 
		src: url(<?php echo $this->Html->url('/files/Existence-Light.otf'); ?>) format('truetype') }
</style>
<div id="div3" style="display:none;background-color:#ffffff;">
  <center><h1 style="padding-top:10%;font-weight:bold;font-size:5em;">Thanks for visiting the link </h1></center>
</div>