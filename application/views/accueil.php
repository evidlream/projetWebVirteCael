<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include("header.php");
?>
<div class="body"></div>
<?php
	include("sidemenu.php");
?>
<div id="container">
	<?php 
		//$this->load->helper('form');
		if(!empty($_SESSION['connect']))
			include 'jeux.php';
		else include 'inscription.php';?>
	
</div>

<?php 
include("footer.php");
?>