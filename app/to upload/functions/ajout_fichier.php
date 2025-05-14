<?php  
	
	
	function ajout_fichier($nom_input,  $mat_livre, $type_file, $liste_extensions=NULL, $bdd)
	{
		
		
		// $nom_input est le nom du champ de type file où l'utilisateur sélectionne le fichier

		if($liste_extensions != NULL)
			$extensions_autorisees = $liste_extensions;//La liste des extensions (envoyées en paramètres pour les cas particulières où les extensions sont restreintes)
			
		else
			$extensions_autorisees = array('pdf', 'PDF');

		$nom_fichier = '';

        $chemin_fichier = '';
		
		if(isset($_FILES["$nom_input"]))//si le fichier a été reçu
		{
			?>
		<script type="text/javascript">
			alert("OKay");
		</script>
		<?php

			if($_FILES["$nom_input"]['error'] == 0)// s'il n'ya pas eu d'erreur
			{
                
				if($_FILES["$nom_input"]['size'] <= 20000000)// si la taille est inférieure à 20000000 octets = 20Mo
				{
                    
					//On récupère les infos sur le nom du fichier envoyé par l'utilisateur
					$infos_fichiers_fichier = pathinfo($_FILES["$nom_input"]['name']);
					//On recupère l'extension du fichier
					$extension_fichier = $infos_fichiers_fichier ['extension'];

					//On vérifie si l'extension du fichier fait partie de la liste des extensions autorisées
					if(in_array($extension_fichier, $extensions_autorisees))
					{
                        
						// À partir d'ici tout est bon on accepte donc le fichier
						//On aurait pu garder le même nom mais pour plus de clarté dans la base de données et dans les dossiers on va créer un nom personnalisé aver le matricule de l'utilisateur
						//$nom_photo_couverture = ''.$_SESSION['matricule'].'_cover.'.$extension_couverture;


						//On attribut des noms en fonction des type d'image qu'on peut avoir : fichier de requete, fichier d'exercice , photo de profil etc.

					/*
						if($type_file == 'book')
						{
							$info_books = $bdd -> prepare("SELECT id_paper FROM papers WHERE type_file = ? AND mat_stag = ?");
	                        $info_books -> execute(array('book', $mat_stag));
	                        $nbre = $info_books -> rowCount() + 1;	


	                        $nom_fichier = $nom_repertoire.'/book_n°_'.$nbre.'_de_'.formatted_name($bdd, $mat_stag).'_'.date("d-m-Y").'.'.$extension_fichier;
						}
						elseif($type_file == 'sheet')
						{
							$info_sheets = $bdd -> prepare("SELECT id_paper FROM papers WHERE type_file = ?AND mat_stag = ?");
	                        $info_sheets -> execute(array('sheet', $mat_stag));
	                        $nbre = $info_sheets -> rowCount() + 1;	


	                        $nom_fichier = $nom_repertoire.'/sheet_n°_'.$nbre.'_de_'.formatted_name($bdd, $mat_stag).'_'.date("d-m-Y").'.'.$extension_fichier;
						}	
						*/
						

                      
						
						$infos_article = $bdd -> query("SELECT mat_livre FROM livre ");
                        
						$nbre = $infos_article -> rowCount() + 1;	
						// $nom_fichier = $mat_livre.'_'.$_FILES["$nom_input"]['name'].'_'.$type_file.'.'.$extension_fichier;
                        $nom_fichier =$type_file.'.'.$_FILES["$nom_input"]['name'];

						/*
                        $info_sheets = $bdd -> prepare("SELECT id_paper FROM papers WHERE type_file = ? AND mat_stag = ?");
						$info_sheets -> execute(array($type_file, $mat_stag));
						$nbre = $info_sheets -> rowCount() + 1;	
						$nom_fichier = $nom_repertoire.'/'.$type_file.'_n°_'.$nbre.'_de_'.formatted_name($bdd, $mat_stag).'_'.date("d-m-Y").'.'.$extension_fichier;
						*/


                        $chemin_fichier .=  '../assets/img/pdf_uploaded_file/'.$nom_fichier;

						//On déplace donc le fichier de son emplacement temporaire vers le dossier "photos_couverture" créé au préalable à cet effet 
						/*
						$nom_temp = $_FILES[$nom_input]['tmp_name'];
						resize_image($nom_temp, $type_value = "H",430, $compression=70, $nom_fichier);
						*/
						move_uploaded_file($_FILES["$nom_input"]['tmp_name'], $chemin_fichier);

                        return $nom_fichier;
						

						// NOTE TRES IMPORTANTE !!!!!!!!!!
						/*
						Lorsque vous mettrez le script sur Internet à l'aide d'un logiciel FTP, vérifiez que le dossier « uploads » sur le serveur existe et qu'il a les droits d'écriture.

	 					Pour ce faire, sous FileZilla par exemple, faites un clic droit sur le dossier et choisissez « Attributs du fichier ».

						Cela vous permettra d'éditer les droits du dossier (on parle de CHMOD). Mettez les droits à 733, ainsi PHP pourra placer les fichiers uploadés dans ce dossier.
						*/ 
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