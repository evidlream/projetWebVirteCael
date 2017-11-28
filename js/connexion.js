$(document).ready(function(){
	$("#connexion".click(function{
		$.post(
			'connexion.php',
			{
				pseudo : $("#pseudo").val(),
				mdp : $("mdp").val()
			},
			
			function(data){
			},
			'text'
			);
	});
});

 // https://openclassrooms.com/courses/un-site-web-dynamique-avec-jquery/cas-concret-un-formulaire-de-connexion-avec-ajax