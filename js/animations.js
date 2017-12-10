var i;

function playCard(cardID) {
	var dip = document.getElementById("dlpc");
	var card = document.getElementById("d"+cardID);
	
	var card1 = document.getElementById("dc11");
	
	var rectd = dip.getBoundingClientRect();
	var rectc = card1.getBoundingClientRect();
	
	var verdiff =  rectd.top - rectc.top;
		
	var hordiff = rectd.left - rectc.left;
	
	if ( verdiff => 0 ) {
		var vch =  verdiff +30 ;
	} else {
		var vch = rectc.top - verdiff;
	}
	
	if (hordiff => 0) {
		var hch = hordiff + 20;
	} else {
		var hch = rectc.left + hordiff;
	}
	
	Velocity(card, {
			top: vch+'px',
			left: hch+'px'
		}, 1000);
}

function drawCard(){
	
	
}