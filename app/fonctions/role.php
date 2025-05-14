<?php  

    function historiq_connexion($mat_member, $action, $bdd){
       $insert_notif = $bdd -> query("INSERT INTO historique_connexion (mat_member, action ) VALUES ('$mat_member', '$action')");
    }

    // function libelle_type_member($permalink_type_member, $bdd)
    // {
    //     $recup_libelle_type_member = $bdd -> query("SELECT libelle FROM types_member WHERE permalink = '$permalink_type_member'");

    //     return $recup_libelle_type_member -> fetch() ['libelle'];

    // }

    // function genere_mat_member($size, $bdd) //, $bdd
	// {
		
	// 	//initialisation des caractères utilisés
	// 	$characters = array(0, 1, 2, 3, 5, 6, 7, 8, 9);
	// 	$id = '';
	// 	//Génération du mot de passe
	// 	for ($i=0; $i < $size; $i++) { 
	// 		$id .= array_rand($characters); 
	// 	}

	// 	$mat_member = $id;

	// 	//Vérification de l'existence du password dans la base de données
	// 	$verif = $bdd -> query("SELECT mat_member FROM members WHERE mat_member = '$mat_member'");
	// 	//Si on ne trouve aucune ligne correspondant au matricule généré on retourne le mot de passe généré
	// 	if($verif -> rowCount() == 0)
	// 		return $mat_member;

	// 	//Sinon on relance la fonction : RECURSIVITE !!!
	// 	else 
	// 		return genere_mat_member($size, $bdd);
		
	// }


    // function genere_temps_restant($eta)
    // {
    //     $ad = $eta.' 00:00:00';
    //     $d1 =  strtotime($ad);
    //     $d2 = ceil(($d1-time())/60/60/24);
    //     echo $d2." days until $eta";

    // }

    // function nom_client($mat_client, $bdd)
    // {
    //     $recup_info_client = $bdd -> query("SELECT nom_client FROM client WHERE mat_client = $mat_client ");
    //     if($recup_info_client -> rowCount() != 0)
    //         return $recup_info_client -> fetch() ['nom_client'];
    //     else
    //         return "/"; 
    // }

    // function nom_membre($mat_member, $bdd)
    // {
    //     $recup_info_member = $bdd -> query("SELECT last_name, first_name FROM members WHERE mat_member = $mat_member ");
    //     if($recup_info_member -> rowCount() != 0):

    //         $data = $recup_info_member -> fetch();
    //         $last_name = $data ['last_name'];
    //         $first_name = $data ['first_name'];

    //         return $last_name.' '.$first_name;

    //     else:
    //         return "/"; 
    //     endif;
    // }

    function insert_notif($mat_member, $objet, $corps_notif, $lien_redirection, $destination_notif, $mat_parent, $bdd)
    {
        $insert_notif = $bdd -> prepare("INSERT INTO notifications (corps_notif, objet, mat_member,lien_redirection,destination_notif, mat_parent) 
        VALUES(:corps_notif, :objet, :mat_member,:lien_redirection,:destination_notif, :mat_parent)");
		$insert_notif -> execute(array(
			'corps_notif' => $corps_notif, 
			'objet' => $objet,
			'mat_member' => $mat_member,
            'lien_redirection' => $lien_redirection,
            'destination_notif' => $destination_notif,
            'mat_parent' => $mat_parent
		));
    }

    function recup_nom_member($mat_member, $bdd)
    {
        $recup_infos = $bdd -> prepare(" SELECT nom FROM member WHERE mat_member = ?");

        $recup_infos -> execute(array($mat_member));
        if ($recup_infos -> rowcount() != 0 ):

            $data = $recup_infos -> fetch();

            return $data['nom']; 

        else :

            return '/';
            
        endif;

    }

    // function recup_libelle_type_member_from_mat_member($mat_member, $bdd)
    // {
    //     $permalink = $bdd -> query("SELECT type_member FROM members WHERE mat_member = '$mat_member'") -> fetch() ['type_member'];

    //     $libelle = $bdd -> query("SELECT libelle FROM types_member WHERE permalink = '$permalink'") -> fetch() ['libelle'];

    //     return $libelle;
    // }

    



?>