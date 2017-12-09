<html>

<head>
	<meta charset="utf-8">
	<title>LoveLetters</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
</head>

<body>
	<div id="top_bar">
	<div class="sName">Love<span>Letters</span></div>
	<?php $this->load->helper('form');
		  echo validation_errors();
		  echo form_open('/connexion');?>
		<div class="login">
			<input type="text" placeholder="Pseudo" name="pseudo"><br>
			<input type="password" placeholder="Mot de passe" name="mdp"><br>
			<input type="button" id="connexion" value="Connexion">
		</div>
	</form>
	
	</div>