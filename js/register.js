var myInput = document.getElementById("mdp");
var myC = document.getElementById("cmdp");
var letter = document.getElementById("error");
var cerror = document.getElementById("cerror");

function isValid() {
    var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) { 
    myInput.classList.remove("invalid");
	letter.innerHTML = "";
  } else {
	myInput.classList.remove("invalid");
    myInput.classList.add("invalid");
	letter.innerHTML = "Il faut au moins une lettre minuscule."
	return false;
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) { 
    myInput.classList.remove("invalid");
	letter.innerHTML = "";
  } else {
	myInput.classList.remove("invalid");
    myInput.classList.add("invalid");
	letter.innerHTML = "Il faut au moins une lettre majuscule."
	return false;
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) { 
    myInput.classList.remove("invalid");
	letter.innerHTML = "";
  } else {
    myInput.classList.remove("invalid");
    myInput.classList.add("invalid");
	letter.innerHTML = "Il faut au moins un chiffre.";
	return false;
  }

  // Validate length
  if(myInput.value.length >= 8) {
    myInput.classList.remove("invalid");
	letter.innerHTML = "";
  } else {
    myInput.classList.remove("invalid");
    myInput.classList.add("invalid");
	letter.innerHTML = "Il faut au moins 8 carateres.";
	return false;
  }
  return true;
}

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("error").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("error").style.display = "none";
}

// When the user clicks on the password field, show the message box
myC.onfocus = function() {
  document.getElementById("cerror").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myC.onblur = function() {
  document.getElementById("cerror").style.display = "none";
}

myC.onkeyup = function() {
	if (myC.value.match(myInput.value)){
		myC.classList.remove("invalid");
		cerror.innerHTML = "";
	} else {
		myC.classList.remove("invalid");
		myC.classList.add("invalid");
		cerror.innerHTML = "Les deux mots de passe ne correspondent pas";
	}
}

// When the user starts to type something inside the password field
myInput.onkeyup = isValid();
}