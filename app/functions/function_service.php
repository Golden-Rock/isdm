<?php
         
         include('../includes/connexion_bdd.php');

     function genere_mat_service($size, $bdd) //, $bdd
     {
         
        //initialisation des caractères utilisés
		$characters = array(0, 1, 2, 3, 5, 6, 7, 8, 9);
		$id = 'SE';
		//Génération du mot de passe
		for ($i=0; $i < $size; $i++) { 
			$id .= array_rand($characters); 
		}

		$mat_service = $id;

		//Vérification de l'existence du password dans la base de données
		$verif = $bdd -> query("SELECT mat_service FROM service WHERE mat_service = '$mat_service'");
		//Si on ne trouve aucune ligne correspondant au matricule généré on retourne le mot de passe généré
		if($verif -> rowCount() == 0)
			return $mat_service;

		//Sinon on relance la fonction : RECURSIVITE !!!
		else 
			return genere_mat_service($size, $bdd);
		
     }

	
    ?>