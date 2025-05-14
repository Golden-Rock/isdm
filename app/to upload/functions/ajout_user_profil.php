<?php  
	
	
	function ajout_image($nom_input,  $mat_member, $type_file, $liste_extensions=NULL, $bdd)
	{
		$mat_member= $_SESSION['mat_member']; 
		
		// $nom_input est le nom du champ de type file où l'utilisateur sélectionne le fichier

		if($liste_extensions != NULL)
			$extensions_autorisees = $liste_extensions;//La liste des extensions (envoyées en paramètres pour les cas particulières où les extensions sont restreintes)
			
		else
			$extensions_autorisees = array('jpg','png','jpeg', 'webp');

		$nom_fichier = '';

        $chemin_fichier = '';
		
		if(isset($_FILES["$nom_input"]))//si le fichier a été reçu
		{
			

			if($_FILES["$nom_input"]['error'] == 0)// s'il n'ya pas eu d'erreur
			{
                
				if($_FILES["$nom_input"]['size'] <= 8000000)// si la taille est inférieure à 8000000 octets = 8Mo
				{
                    
					//On récupère les infos sur le nom du fichier envoyé par l'utilisateur
					$infos_fichiers_fichier = pathinfo($_FILES["$nom_input"]['name']);
					//On recupère l'extension du fichier
					$extension_fichier = $infos_fichiers_fichier ['extension'];

					//On vérifie si l'extension du fichier fait partie de la liste des extensions autorisées
					if(in_array($extension_fichier, $extensions_autorisees))
					{
						$infos_article = $bdd -> query("SELECT mat_member FROM member ");
                        
						$nbre = $infos_article -> rowCount() + 1;	

                        $nom_fichier = 'IMG'.'-'.date('Y-m-d').genere_mat_img(8,$bdd).'.'.$extension_fichier;
						// $nom_fichier =$type_file.'.'.$_FILES["$nom_input"]['name'];
						

						$chemin_fichier .=  '../assets/images/users/'.$nom_fichier;

					// if($_FILES["$nom_input"] == 'profil_user'){

					
					// 	$chemin_fichier .=  '../assets/img/users-images/'.$nom_fichier;
					// }
					// 	else {
					// 		$chemin_fichier .=  '../assets/img/users-images/couverture/'.$nom_fichier;
					// 	}
						
						move_uploaded_file($_FILES["$nom_input"]['tmp_name'], $chemin_fichier);

                        return $nom_fichier;
						

					}
					else
					{
						// $msg2 = "L'extension du fichier (".$extension_fichier.") n'est pas autorisée ! Veuillez réessayer s'il vous plait !";
						return NULL;
					}
				}
				else
				{
					// $msg2 = "le fichier dépasse la taille maximale ! Veuillez choisir un autre fichier !";
					return NULL;
				}
			}
			else
			{
				// $msg2 = "Il y a eu une erreur lors de l'envoi du fichier ! S'il vous plait, veuillez réessayer ! Si l'erreur persiste veuillez changer de fichier ou <a href='#'>contacter l'administrateur</a>.";
				return NULL;
			}
		}
	}
?>