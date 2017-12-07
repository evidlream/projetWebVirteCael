<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include("header.php");
?>
<div class="body"></div>
<script src="<?php echo base_url();?>js/register.js"></script>
<div id="container">
	<h1>Jouer</h1>
	<div class="contents">
	<?php $this->load->helper('form');
		  echo validation_errors();
		  echo form_open('/inscription');?>
		<div class="join"> <input type="submit" id="join" value="Rejoindre une Partie" style="display: none;"> </div>
		<div class="game">
			<div class="p1area">
				<div class="pcInHand">
					<img class="handCard" id="xxx" value="visible" src="<?php echo base_url();?>img/1guard.png">
					<img class="handCard" id="xxx" value="visible" src="<?php echo base_url();?>img/1guard.png">
				</div>
				<div class="playedCard">
					<img class="dispCard" id="xxx" value="visible" src="<?php echo base_url();?>img/8princess.png">
				</div>
				<div class="playername">
					Yourself
				</div>
			</div>
			<div class="p2area">
				<div class="pcInHand">
					<img class="handCard" id="xxx" value="visible" src="<?php echo base_url();?>img/1guard.png">
					<img class="handCard" id="xxx" value="visible" src="<?php echo base_url();?>img/4handmaid.png">
				</div>
				<div class="playedCard">
					<img class="dispCard" id="xxx" value="visible" src="<?php echo base_url();?>img/7countess.png">
				</div>
				<div class="playername">
					Player 2
				</div>
			
			</div>
			<div class="p3area">
				<div class="pcInHand">
					<img class="handCard" id="xxx" value="visible" src="<?php echo base_url();?>img/1guard.png">
					<img class="handCard" id="xxx" value="visible" src="<?php echo base_url();?>img/1guard.png">
					<img class="handCard" id="xxx" value="visible" src="<?php echo base_url();?>img/2priest.png">

				</div>
				<div class="playedCard">
					<img class="dispCard" id="xxx" value="visible" src="<?php echo base_url();?>img/6king.png">
				</div>
				<div class="playername">
					Player 3
				</div>
			</div>
			<div class="p4area">
				<div class="pcInHand" value="3">
					<img class="handCard" id="xxx" value="visible" src="<?php echo base_url();?>img/3baron.png">
					<img class="handCard" id="xxx" value="visible" src="<?php echo base_url();?>img/4handmaid.png">
					<img class="handCard" id="xxx" value="visible" src="<?php echo base_url();?>img/3baron.png">
				</div>
				<div class="playedCard">
					<img class="dispCard" id="xxx" value="visible" src="<?php echo base_url();?>img/5prince.png">
				</div>
				<div class="playername">
					Player 4
				</div>
			
			</div>
			<div class="nparea">
				<div class="bannedCard">
					<img class="handCard" id="xxx" value="visible" src="<?php echo base_url();?>img/3baron.png">
					<img class="handCard" id="xxx" value="visible" src="<?php echo base_url();?>img/3baron.png">
					<img class="handCard" id="xxx" value="visible" src="<?php echo base_url();?>img/3baron.png">
					<img class="handCard" id="xxx" value="visible" src="<?php echo base_url();?>img/2priest.png">
				</div>
				<div class="thrownCards"></div>
			
			</div>
		</div>
	</form>
	</div>
	
</div>

<?php 
include("footer.php");
?>