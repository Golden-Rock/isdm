<?php  

    session_start();

    include('../includes/connexion_bdd.php');
    include('../fonctions/role.php');

   
    if(isset($_POST['email']) AND !empty($_POST['email'])):

        $email = $_POST['email'];
        $password = $_POST['password'];
        // $id_receive=$_POST['id_receive'];

       
        $recuperation_info = $bdd -> prepare("SELECT * FROM member WHERE email = ?"); 

        $recuperation_info -> execute(array($email));

        if($recuperation_info -> rowCount() != 0): 

            $data = $recuperation_info -> fetch();

            $password_bdd = $data['password']; 
            if($password == $password_bdd): 
                
                $_SESSION['email'] = $data['email']; 
                
                $_SESSION['mat_member'] = $data['mat_member'];
                $_SESSION['password'] = $data['password'];

                $_SESSION['first_name'] = $data['first_name'];
                $_SESSION['last_name'] = $data['last_name'];
                // $_SESSION['is_admin'] = $data['is_admin'];


                // $_SESSION['sexe'] = $data['sexe'];
                
                $_SESSION['phone'] = $data['phone'];
                $_SESSION['adresse'] = $data['adresse'];
                // $_SESSION['id_pays'] = $data['id_pays'];


                $_SESSION['type_member']= $data['type_member']; 
                $_SESSION['user_profil']= $data['user_profil']; 

                $mat_member = $_SESSION['mat_member'];
                
	            $action= "Connexion";
                historiq_connexion($mat_member, $action, $bdd);

                header("location:../home"); 

            else:
                header("location:../login.php?id=error3"); 
            
            endif;
        else:
            header("location:../login.php?id=error2"); 

        endif;
    else:
        header("location:../login.php?id=error1"); 

    endif;


?>