<?php
         
         include('../includes/connexion_bdd.php');

     function genere_mat_rubriques($size, $bdd) //, $bdd
     {
         
        //initialisation des caractères utilisés
		$characters = array(0, 1, 2, 3, 5, 6, 7, 8, 9);
		$id = 'RU';
		//Génération du mot de passe
		for ($i=0; $i < $size; $i++) { 
			$id .= array_rand($characters); 
		}

		$mat_rubriques = $id;

		//Vérification de l'existence du password dans la base de données
		$verif = $bdd -> query("SELECT mat_rubriques FROM rubriques WHERE mat_rubriques = '$mat_rubriques'");
		//Si on ne trouve aucune ligne correspondant au matricule généré on retourne le mot de passe généré
		if($verif -> rowCount() == 0)
			return $mat_rubriques;

		//Sinon on relance la fonction : RECURSIVITE !!!
		else 
			return genere_mat_rubriques($size, $bdd);
		
     }

    //  function de recuperation des informations d'une rubriques 
    
    function recup_libelle($mat_rubriques, $bdd)
    {
        $recup_infos = $bdd -> prepare(" SELECT libelle FROM rubriques WHERE mat_rubriques = ?");

        $recup_infos -> execute(array($mat_rubriques));
        if ($recup_infos -> rowcount() != 0 ):

            $data = $recup_infos -> fetch();

            return $data['libelle']; 

        else :

            return '/';
            
        endif;

    }
    ?>