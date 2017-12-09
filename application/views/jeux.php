	<h1>Jouer</h1>
	<script src="<?php echo base_url();?>js/velocity.min.js"></script>
	<script src="<?php echo base_url();?>js/animations.js"></script>
	<div class="contents">
		<div class="join"> <input type="submit" id="join" value="Rejoindre une Partie" style="display: none;"> </div>
		<div class="game">
			<img class="handCard" id="hidden" value="visible" src="<?php echo base_url();?>img/0back.png">
			<div class="p1area">
				<div class="pcInHand">
					<div class="c11" id="dc11">
						<img class="handCard" id="c11" value="visible" src="<?php echo base_url();?>img/2priest.png" onclick="playCard(this.id)">
					</div>
					<div class="c12" id="dc12">
						<img class="handCard" id="c12" value="visible" src="<?php echo base_url();?>img/1guard.png" onclick="playCard(this.id)">
					</div>
					<div class="c13" id="dc13">
						<img class="handCard" id="c13" value="visible" src="<?php echo base_url();?>img/1guard.png" onclick="playCard(this.id)">
					</div>
				</div>
				<div class="playername">
					Yourself
				</div>
			</div>
			<div class="p2area">
				<div class="pcInHand">
					<div class="c21" id="dc21">
						<img class="handCard" id="c21" value="hidden" src="<?php echo base_url();?>img/0back.png">
					</div>
					<div class="c22" id="dc22">
						<img class="handCard" id="c22" value="hidden" src="<?php echo base_url();?>img/0back.png">
					</div>
					<div class="c23" id="dc23">
						<img class="handCard" id="c23" value="hidden" src="<?php echo base_url();?>img/0back.png">
					</div>
				</div>
				<div class="playername">
					Player 2
				</div>
			
			</div>
			<div class="p3area">
				<div class="pcInHand">
					<div class="c31" id="dc31">
						<img class="handCard" id="c23" value="hidden" src="<?php echo base_url();?>img/0back.png">
					</div><div class="c32" id="dc32">
						<img class="handCard" id="c32" value="hidden" src="<?php echo base_url();?>img/0back.png">
					</div><div class="c33" id="dc33">
						<img class="handCard" id="c33" value="hidden" src="<?php echo base_url();?>img/0back.png">
					</div>
				</div>
				
				<div class="playername">
					Player 3
				</div>
			</div>
			<div class="p4area">
				<div class="pcInHand" value="3">
					<img class="handCard" id="c41" value="visible" src="<?php echo base_url();?>img/0back.png">
					<img class="handCard" id="c41" value="visible" src="<?php echo base_url();?>img/0back.png">
					<img class="handCard" id="c43" value="visible" src="<?php echo base_url();?>img/0back.png">
				</div>

				<div class="playername">
					Player 4
				</div>
			
			</div>
			<div class="discardpile">
					<img class="dispCard" id="lpc" value="visible" src="<?php echo base_url();?>img/9slot.png">
			</div>
			<div class="nparea">
				<div class="removed">
					<img class="handCard" id="rm1" value="visible" src="<?php echo base_url();?>img/3baron.png">
					<img class="handCard" id="rm2" value="visible" src="<?php echo base_url();?>img/3baron.png">
					<img class="handCard" id="rm3" value="visible" src="<?php echo base_url();?>img/3baron.png">

				</div>
				<div class="stackpile">
					Carte restantes : 3
				</div>
			</div>
		</div>
	</form>
	</div>