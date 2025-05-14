<?php  

    session_start();

    include('../includes/connexion_bdd.php');
    include('../functions/function_member.php');
    include('../fonctions/sender_mail.php');
    include('../fonctions/role.php');
    // include('../fonctions/get_imc.php'); 
    
    if(isset($_POST['email'])):

       

        $mat_member = genere_mat_member(10, $bdd);
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $type_member = 'Chercheur(se)';
        
                    // ?> 
                    //  <script>alert("ok") </script>
                    //  <?php
        
        $time_register =  date("H:i");
        $date_register = date("Y-m-d");

        // insertion d'un nouvel membre

        $recup = $bdd -> query("SELECT * FROM member WHERE first_name='$first_name' AND email='$email'");
             
           
        if($recup-> rowCount() == 0):
                $insert_member = $bdd -> prepare("INSERT INTO member (mat_member, 
                first_name,
                last_name,
                email,
                phone,
                password,
                type_member,
                time_register,
                date_register) 

                VALUES(:mat_member,
                :first_name, 
                :last_name,
                :email,
                :phone,
                :password,
                :type_member,
                :time_register,
                :date_register
                )");
                   
                $insert_member -> execute(array(
                    'mat_member' => $mat_member,
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $email,
                    'phone' => $phone,
                    'password' => $password,
                    'type_member' => $type_member,
                    'time_register' => $time_register,
                    'date_register' => $date_register
                    ));

           

                $mat_member = $mat_member;
                $mat_parent ="";
                $destination_notif='admin';
                $lien_redirection='all_member';

                $objet = "Nouvelle Inscription";
                $corps_notif = "<b>$first_name</b> vient de s'inscrire!" ;

                insert_notif($mat_member, $objet, $corps_notif,$destination_notif, $lien_redirection,$mat_parent,$bdd);

                    //  insertion et envoie des mails 
                    $sujet = utf8_decode(' Bienvenue sur ISDM!');
        
                            
                    $message_img = "<br><a href='https://1pub.net/_projets/isdm/' target='_blank'><img src='https://1pub.net/_projets/isdm//assets/images/logo/logo.png'></a>";
                
                    $nom_member = $first_name.''.$last_name;
                    
                    $email_destination = $email;
                    // $message1 = "Hello <span style='color:green'>$first_name $last_name</span>, <br> You have successfully registered to the <span style='color:green'>AABD Submission Portal</span> !<br><br> Please Remember your identifiers : <br> Email : <span style='color:green'>$email</span> <br> Password : <span style='color:green'>$password</span>";
        
                    $message1 = "Cher(e) <span style='color:green;font-weight:bold'>$nom_member </span>,<br><br>
                    
                Votre inscription est confirmée ! 🎉 Accédez dès maintenant à votre espace personnel en cliquant sur le bouton ci-dessous :<br>";
        
                $message2 = "<a style='color:yellow;' href='1pub.net/_projets/isdm/app/login'> 
                 👉 Se connecter </a>"; 

                    $message3 = '<br>Date '.date('l jS \of F Y h:i:s A').' (GMT) <br><br>À bientôt sur ISDM!'; 

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

                    
                header("location:../login");
            
        else: 
                header("location: ../register.php?error2");
        endif; 
    else:
        header("location:../register.php?error1");

    endif;

?>