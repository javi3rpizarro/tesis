<style type="text/css">
	#audio{
display: none
}
</style>

<audio id="audio" controls>
<source type="audio/wav" src="<?php echo base_url()?>assets/fondo.mp3">
</audio>

<script type="text/javascript">
 $(document).ready(function(){
var audio = document.getElementById("audio");
audio.volume =0.4;
audio.play();




 });	
</script>