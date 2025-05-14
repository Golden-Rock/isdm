<?php 
 session_start();
    include('../includes/connexion_bdd.php');
    include ('../functions/ajout_user_profil.php');
    include('../functions/function_mat.php');
    include ('../fonctions/role.php');


        if(isset($_POST["mat_member"])):

            $mat_member =$_POST["mat_member"] ;
            $last_name=$_POST["last_name"];
            $first_name=$_POST["first_name"];
            
            $phone=$_POST["phone"];
            // $sexe = $_POST["sexe"];

            // $id_pays = $_POST["id_pays"];
            $adresse = $_POST["adresse"];
            // $password = $_POST["password"];
         
           
            //    recuperation des 10 images vedettes
            if(isset($_FILES['user_profil']) AND $_FILES['user_profil']['error']==0):
                $user_profil  = ajout_image('user_profil',  $last_name, $mat_member,  $liste_extensions=NULL, $bdd);
            else:
                $recuperation_info = $bdd -> query("SELECT * FROM member WHERE mat_member = '$mat_member'   "); 
                $user_profil  = $recuperation_info -> fetch()['user_profil'];
            endif; 
            // end
               

            $insertion_dossier = $bdd -> prepare("UPDATE member
            SET 
                last_name = :last_name,
                first_name = :first_name,
                phone = :phone,
                -- id_pays = :id_pays, 
                -- sexe = :sexe,
                adresse = :adresse,
                -- password = :password, 
                user_profil = :user_profil
                WHERE mat_member = :mat_member"
                );
                        
                      
                $insertion_dossier -> execute (array(
                    'mat_member' => $mat_member,    
                    // 'type_dossier' => $type_dossier, 
                    'last_name' => $last_name,
                    'first_name' => $first_name,
                    
                    'phone' => $phone,
                    // 'sexe' => $sexe,
                    
                    // 'id_pays' => $id_pays,
                    'adresse' => $adresse,
                    // 'password' => $password,
                    'user_profil' => $user_profil ));


                    
                    $_SESSION['last_name']=$last_name;
                    $_SESSION['first_name']=$first_name;
                    $_SESSION['phone']=$phone;
                    // $_SESSION['sexe']=$sexe;
                    // $_SESSION['id_pays']=$id_pays;
                    $_SESSION['user_profil']=$user_profil;
                    $_SESSION['adresse']=$adresse;
                    // $_SESSION['password']=$password;

                    $mat_parent = $mat_member;
                    $destination_notif="patient";
                    $lien_redirection="profil-user";
                    $objet = "Modification profil";
                    $corps_notif = "<b>$first_name</b> vient de modifier son profil!" ;
    
                    insert_notif($mat_member, $objet, $corps_notif,$destination_notif, $lien_redirection,$mat_parent,$bdd);

                header("location: ../profil-user");
        else:
            header("location: ../profil-user.php?echec");
        endif;



?>