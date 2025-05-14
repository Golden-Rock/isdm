<?php

  

  function sender_mail($name_sender, $email_sender, $sujet, $message, $destination, $cc='', $bcc='')
  {
      //envoie du mail 
      // $sujet = "Reinitialisation du mot de passe";
    
      
      $header = "From:\"$name_sender\"<$email_sender>\n";

      $header .= "Content-Type:Text/html; charset=\"iso-8859-1\"";
      
      $header .= "Reply-To:$email_sender\n";
      
      $header .= "Cc: $cc\n";
      
      $header .= "Bcc: $bcc\n";
    
      
      
      

      //envoi en question

      
      if (mail($destination, $sujet, $message, $header)) {
        echo "email envoyé";
      } else {
        echo "email non envoyé";
      }
      
  }
  

?>