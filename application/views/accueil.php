<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include("header.php");
?>
<div class="body"></div>
<?php
	if(!empty($_SESSION['connect']))
		include("sidemenu.php");
?>
<div id="container">
	<?php 
		if(!empty($_SESSION['connect']))
			include 'jeux.php';
		else include 'inscription.php';?>
	
</div>

<?php 
include("footer.php");
?>