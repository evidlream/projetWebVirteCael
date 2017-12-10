<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include("header.php");
?>
<div class="body"></div>
<div id="container">
	<?php 
		if(!empty($_SESSION['connect']))
			include 'join.php';
		else include 'inscription.php';?>
	
</div>

<?php 
include("footer.php");
?>