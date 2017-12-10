<?php
include('header.php');?>

<div class="contents" style="text-align:center;">
	Recherche de joueur en cours :
	</br>
	<div id="waitlist" class="username" style="margin-top:10px;">
		1/<?php echo $nombreJoueur;?>
	</div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
<script>

$(document).ready(function(){
    function ajax(){
        $('#waitlist').load("<?php echo base_url(); ?>index.php/Attente/attenteJoueurPersistante/<?php echo $nombreJoueur?>");
    }
    setInterval(ajax, 5000);
});

</script>


<?php include('footer.php');?>