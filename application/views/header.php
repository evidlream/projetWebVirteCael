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
	<a href="/"><div class="sName">Love<span>Letters</span></div></a>
		<div class="connect">
			<img class="userimage" src="http://fr.seaicons.com/wp-content/uploads/2016/03/User-green-icon.png">
			<div class="username"> Nom d\'utilisateur</div>
			<div class="victories"> Nombre de victoires: 2</div>
			'.
			form_open("/connexion/deconnexion").'
				<div class="logout">
					<input type="submit" id="deconnexion" value="Deconnexion">
				</div>
			</form>
		</div>';
	else echo '
		<a href="/"><div class="sName">Love<span>Letters</span></div></a>'.
		form_open("/connexion").'
		<div class="login">
			<input type="text" placeholder="Pseudo" name="connect_pseudo"><br>
			<input type="password" placeholder="Mot de passe" name="connect_mdp"><br>
			<input type="submit" id="connexion" value="Connexion">
		</div>
		</form>
	'?>
	</div>