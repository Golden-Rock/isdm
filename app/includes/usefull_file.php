<?php  
    session_start();

    if(!isset($_SESSION['mat_member'])):
        header("location:login");
        exit();
    endif;

?>