$(function(){
	//'form'=>balise
	$('form').submit(function(){// on définit l'action avec le jquery du bouton ici
		event.preventDefault();
		$.ajax({
			url:'ajax.php',
			method:'POST',
			data:{
				nombre_porte:$('#nombre_porte').val(),
				marque:$('#marque').val(),
				modele:$('#modele').val(),
				nombre_place:$('#nombre_place').val(),
				couleur:$('#couleur').val(),
				annee :$('#annee').val(),
			// apres avoir rentré les valeurs , on teste via le formulaire

			}
		})
		.done(function(){
			$('#message').html('<div class="alert alert-success"><strong>Success!</strong> Vehicule enregistré.</div>');
		})
		.fail(function(){
			$('#message').html('<div class="alert alert-danger"><strong>Danger!</strong> Vehicule non ajouté.</div>');
		})

	});


})