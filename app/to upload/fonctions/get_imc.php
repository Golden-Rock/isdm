<?php 

    
function get_imc( $poids, $taille){

    return ($poids/($taille*$taille))*10000 ;
    
    
}
?>