var i;

function changeCard(argup) {
	var img = document.getElementById("sideCard");
	var res = img.src.split("/");
	var str = res[res.length-1];
	var noms = new Array("1guard.png", "2priest.png", "3baron.png", "4handmaid.png", "5prince.png", "6king.png", "7countess.png", "8princess.png");
	var cont= true;
	var j=0;
	while ((j<noms.length)&&cont){
		if (noms[j] == str){
			cont = false;
			i = j;
		} else {
			j++;
		}
	}
	if(argup){
		i = i+1;
		if (i==noms.length){
			i=0;
		}
	} else {
		i = i-1;
		if (i<0){
			i=noms.length-1;
		}
	}
	res[res.length-1] = noms[i];
	str = res[0]+"//";
	for (i=1; i<res.length;i++){
		str = str +"/"+ res[i];
	}
	img.src = str;
}