<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include("header.php");
?>
<div class="body"></div>
<script src="<?php echo base_url();?>js/register.js"></script>
<div id="container">
	<h1>Inscription</h1>
	<div class="contents" style='text-align:center;'>
		<?php session_start(); echo($_SESSION['message']);?>
	</div>
	
</div>

<?php 
include("footer.php");
?>