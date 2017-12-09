var i;

function playCard(cardID) {
	var dip = document.getElementById("lpc");
	var card = document.getElementById("d"+cardID);
	
	var verdiff =  dip.height - card.height;
	var hordiff = dip.weight - card.weight;
	
	if ( (verdiff => 0 )&& (hordiff => 0)){
		Velocity(card, {
			bottom: (verdiff+30)+'px',
			right: (hordiff+30)+'px'
		}, 1000);
	} else if (verdiff=>0 && hordiff<0) {
		Velocity(card, {
			bottom: (verdiff+30)+'px',
			left: (hordiff+30)+'px'
		}, 1000);
	} else if ((verdiff < 0) && (hordiff => 0)) {
		Velocity(card, {
			top: (verdiff+30)+'px',
			right: (hordiff+30)+'px'
		}, 1000);
	} else {	
		Velocity(card, {
			top: (verdiff+30)+'px',
			left: (hordiff+30)+'px'
		}, 1000);
	}
}

function drawCard(){
	
	
	
	
}