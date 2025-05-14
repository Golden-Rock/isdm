<?php
         
         include('../includes/connexion_bdd.php');

     
	 function genere_mat_appointment($size, $bdd) //, $bdd
     {
         
        //initialisation des caractères utilisés
		$characters = array(0, 1, 2, 3, 5, 6, 7, 8, 9);
		$id = 'AP';
		//Génération du mot de passe
		for ($i=0; $i < $size; $i++) { 
			$id .= array_rand($characters); 
		}

		$mat_appointment = $id;

		//Vérification de l'existence du password dans la base de données
		$verif = $bdd -> query("SELECT mat_appointment FROM appointment WHERE mat_appointment = '$mat_appointment'");
		//Si on ne trouve aucune ligne correspondant au matricule généré on retourne le mot de passe généré
		if($verif -> rowCount() == 0)
			return $mat_appointment;

		//Sinon on relance la fonction : RECURSIVITE !!!
		else 
			return genere_mat_appointment($size, $bdd);
		
     }
	 

	 function genere_mat_speciality($size, $bdd) //, $bdd
     {
		$characters = array(0, 1, 2, 3, 5, 6, 7, 8, 9);
		$id = 'SP';
		
		for ($i=0; $i < $size; $i++) { 
			$id .= array_rand($characters); 
		}

		$mat_specialite = $id;
		$verif = $bdd -> query("SELECT mat_specialite FROM specialite WHERE mat_specialite = '$mat_specialite'");

		if($verif -> rowCount() == 0)
			return $mat_specialite;
		else 
			return genere_mat_speciality($size, $bdd);
		
     }

	 function genere_mat_img($size, $bdd) //, $bdd
     {
		$characters = array(0, 1, 2, 3, 5, 6, 7, 8, 9);
		$id = 'IMG';
		
		for ($i=0; $i < $size; $i++) { 
			$id .= array_rand($characters); 
		}

		$mat_member = $id;
		$verif = $bdd -> query("SELECT mat_member FROM member WHERE mat_member = '$mat_member'");

		if($verif -> rowCount() == 0)
			return $mat_member;
		else 
			return genere_mat_img($size, $bdd);
		
     }


	 

	 function genere_mat_video($size, $bdd) //, $bdd
     {
         
        //initialisation des caractères utilisés
		$characters = array(0, 1, 2, 3, 5, 6, 7, 8, 9);
		$id = 'VI';
		//Génération du mot de passe
		for ($i=0; $i < $size; $i++) { 
			$id .= array_rand($characters); 
		}

		$mat_video = $id;

		//Vérification de l'existence du password dans la base de données
		$verif = $bdd -> query("SELECT mat_video FROM video WHERE mat_video = '$mat_video'");
		//Si on ne trouve aucune ligne correspondant au matricule généré on retourne le mot de passe généré
		if($verif -> rowCount() == 0)
			return $mat_video;

		//Sinon on relance la fonction : RECURSIVITE !!!
		else 
			return genere_mat_video($size, $bdd);
		
     }


	 function genere_mat_categorie($size, $bdd) //, $bdd
     {
         
        //initialisation des caractères utilisés
		$characters = array(0, 1, 2, 3, 5, 6, 7, 8, 9);
		$id = 'CG';
		//Génération du mot de passe
		for ($i=0; $i < $size; $i++) { 
			$id .= array_rand($characters); 
		}

		$mat_categorie = $id;

		//Vérification de l'existence du password dans la base de données
		$verif = $bdd -> query("SELECT mat_categorie FROM categorie WHERE mat_categorie = '$mat_categorie'");
		//Si on ne trouve aucune ligne correspondant au matricule généré on retourne le mot de passe généré
		if($verif -> rowCount() == 0)
			return $mat_categorie;

		//Sinon on relance la fonction : RECURSIVITE !!!
		else 
			return genere_mat_categorie($size, $bdd);
		
     }
	
    ?>