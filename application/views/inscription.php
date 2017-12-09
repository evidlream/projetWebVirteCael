<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="body"></div>
<script src="<?php echo base_url();?>js/register.js"></script>
<div id="container" style='text-align:center'>
	<h1>Inscription</h1>
	<div class="contents">
	<?php $this->load->helper('form');
		  echo validation_errors();
		  echo form_open('/inscription');?>
		<div class="register">
			Nom d'utilisateur: <br><input type="text" placeholder="Pseudo" name="pseudo" required><br>
			Mot de passe: <br><div id="error"></div><input type="password" id="mdp" placeholder="Mot de passe" name="mdp" required><br>
			Confirmer mot de passe:	<br><div id="cerror"></div><input type="password" id="cmdp" placeholder="Mot de passe" name="cmdp" required><br>
			<input type="submit" id="register" value="Inscription"><br>
		</div>
	</form>
	</div>
	
</div>