<?php  

    session_start();

    include('../includes/connexion_bdd.php');
    include('../functions/function_member.php');
    include('../functions/function_mat.php');
    include('../fonctions/sender_mail.php');
    include('../fonctions/role.php');
    include ('../functions/ajout_user_profil.php');
    include('../functions/function_create_password.php');
    // include('../fonctions/get_imc.php'); 
    
    if(isset($_POST['email'])):

       

        $mat_member = genere_mat_member(10, $bdd);
        $password = create_password();
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $title_member = $_POST['title_member'];
        $adresse = $_POST['adresse'];
        $poste_occupe = $_POST['poste_occupe'];
        
        $is_isdm_team = '1';

        //informations specifique sur le medecin 

        $phone = $_POST['phone'];
        // $mat_specialite = $_POST['mat_specialite'];
        $time_register =  date("H:i");
        $date_register = date("Y-m-d");

        // insertion d'un nouvel membre
         //verifions si la photo de couverture  a ete envoyé
         //    recuperation des 10 images vedettes
            if(isset($_FILES['user_profil']) AND $_FILES['user_profil']['error']==0):
                $user_profil  = ajout_image('user_profil',  $last_name, $mat_member,  $liste_extensions=NULL, $bdd);
            else:
                $recuperation_info = $bdd -> query("SELECT * FROM member WHERE mat_member = '$mat_member'   "); 
                $user_profil  = $recuperation_info -> fetch()['user_profil'];
            endif; 
            // end

        // verifions qu'il ne se trouve pas encore dans la base de donnée 
        $recup = $bdd -> query("SELECT * FROM member WHERE first_name='$first_name' AND email='$email'");
             
           
        if($recup-> rowCount() == 0):
                $insert_member = $bdd -> prepare("INSERT INTO member (mat_member, 
                first_name,
                last_name,
                email,
                phone,
                poste_occupe,
                adresse,
                title_member,
                password,
                is_isdm_team,
                user_profil,
                time_register,
                date_register) 

                VALUES(:mat_member,
                :first_name, 
                :last_name,
                :email,
                :phone,
                :poste_occupe,
                :adresse,
                :title_member,
                :password,
                :is_isdm_team,
                :user_profil,
                :time_register,
                :date_register
                )");
                   
                $insert_member -> execute(array(
                    'mat_member' => $mat_member,
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $email,
                    'phone' => $phone,
                    'poste_occupe' => $poste_occupe,
                    'adresse' => $adresse,
                    'title_member' => $title_member,
                    'password' => $password,
                    'is_isdm_team' => $is_isdm_team,
                    'user_profil' => $user_profil,
                    'time_register' => $time_register,
                    'date_register' => $date_register
                    ));

           

                $mat_member = $mat_member;
                $lien_redirection='all_isdm_team';
                $objet = "Nouvelle Inscription";
                $corps_notif = "Dr. <b>$first_name</b> vient de s'inscrire!" ;

                insert_notif($mat_member, $objet, $corps_notif,$destination_notif, $lien_redirection,$mat_parent,$bdd);

                $sujet = utf8_decode(' Bienvenue sur ISDM!');
                $message_img = "<br><a href='https://1pub.net/_projets/isdm/' target='_blank'><img src='https://1pub.net/_projets/isdm//assets/images/logo/logo.png'></a>";
            
                    $nom_member = $first_name.''.$last_name;
                    
                    $email_destination = $email;
                    // $message1 = "Hello <span style='color:green'>$first_name $last_name</span>, <br> You have successfully registered to the <span style='color:green'>AABD Submission Portal</span> !<br><br> Please Remember your identifiers : <br> Email : <span style='color:green'>$email</span> <br> Password : <span style='color:green'>$password</span>";
        
                    $message1 = "Cher(e) <span style='color:green;font-weight:bold'>$nom_member </span>,<br><br>
                    
                Votre inscription est confirmée ! 🎉 Accédez dès maintenant à votre espace personnel en cliquant sur le bouton ci-dessous :<br>";
                    
                $message2 = "<br>Votre Email : <span style='color:#e20935;font-weight:bold'>$email</span> <br>Votre Mot de passe : <span style='color:#e20935;font-weight:bold'>$password</span> ";
            

                $message3 = "<a style='color:yellow;' href='1pub.net/_projets/isdm/app/login'> 
                 👉 Se connecter </a>
                <br><br>Connectez vous à la plateforme!"; 

                    $message3 = '<br>Date '.date('l jS \of F Y h:i:s A').' (GMT) <br><br>À bientôt sur Yemak Wellness!'; 

                    $message4 = '<br> L’équipe ISDM 🌿'; 
                    
                    
                    $destination = $email_destination;
                     
                     ob_start();
         
                     
                         echo $message1;
                         
                         echo $message2; 
                         
                         echo $message_img;
         
                         $message =  ob_get_contents();
                         
                         $message = utf8_decode($message);
                     
                     ob_end_clean();
         
                     $email_sender = 'isdm@fs-univ-douala.cm';
         
                     $name_sender = 'ISDM';
         
                     $cc = 'isdm@fs-univ-douala.cm';
                     
                     $bcc = 'email.notifications@1pub.net,1pubagency@gmail.com,cabroleleungang@gmail.com';
         
                 sender_mail($name_sender, $email_sender, $sujet, $message, $destination, $cc, $bcc);

                    
                header("location:../../isdm-team");
            
        else: 
                header("location: ../add_isdm_member_website.php?error2");
        endif; 
    else:
        header("location:../add_isdm_member_website.php?error1");

    endif;

?>