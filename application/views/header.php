<html>

<head>
	<meta charset="utf-8">
	<title>LoveLetters</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
</head>

<body>
	<div id="top_bar">
	<?php
	$this->load->helper('form');
	if(!empty($_SESSION['connect']))
		echo'
	<div class="sName">Love<span>Letters</span></div>
		<div class="connect">
			<img class="userimage" src="http://fr.seaicons.com/wp-content/uploads/2016/03/User-green-icon.png">
			<div class="username"> Nom d\'utilisateur</div>
			<div class="victories"> Nombre de victoires: 2</div>
			'.
			form_open("/deconnexion").'
				<div class="logout">
					<input type="button" id="deconnexion" value="Deconnexion">
				</div>
			</form>
		</div>';
	else echo '
		<div class="sName">Love<span>Letters</span></div>'.
		  form_open("/connexion").'
		<div class="login">
			<input type="text" placeholder="Pseudo" name="pseudo"><br>
			<input type="password" placeholder="Mot de passe" name="mdp"><br>
			<input type="button" id="connexion" value="Connexion">
		</div>
	</form>
	'?>
	</div>