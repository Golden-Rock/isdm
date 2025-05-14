
<?php

function recup_first_name($mat_member, $bdd)
{
    $recup_infos = $bdd -> prepare(" SELECT first_name FROM member WHERE mat_member = ?");

    $recup_infos -> execute(array($mat_member));
    if ($recup_infos -> rowcount() != 0 ):

        $data = $recup_infos -> fetch();

        return $data['first_name']; 

    else :

        return '/';
        
    endif;

}

function recup_last_name($mat_member, $bdd)
{
    $recup_infos = $bdd -> prepare(" SELECT last_name FROM member WHERE mat_member = ?");

    $recup_infos -> execute(array($mat_member));
    if ($recup_infos -> rowcount() != 0 ):

        $data = $recup_infos -> fetch();

        return $data['last_name']; 

    else :

        return '/';
        
    endif;

}

function recup_phone_number($mat_member, $bdd)
{
    $recup_infos = $bdd -> prepare(" SELECT phone FROM member WHERE mat_member = ?");

    $recup_infos -> execute(array($mat_member));
    if ($recup_infos -> rowcount() != 0 ):

        $data = $recup_infos -> fetch();

        return $data['phone']; 

    else :

        return '/';
        
    endif;

}

function recup_id_pays($mat_member, $bdd)
{
    $recup_infos = $bdd -> prepare(" SELECT id_pays FROM member WHERE mat_member = ?");

    $recup_infos -> execute(array($mat_member));
    if ($recup_infos -> rowcount() != 0 ):

        $data = $recup_infos -> fetch();

        return $data['id_pays']; 

    else :

        return '/';
        
    endif;

}

// fonction de recuperation du nom du pays en francais 
function recup_nom_pays($id_pays, $bdd)
{
    $recup_infos = $bdd -> prepare(" SELECT nom_fr FROM pays WHERE id_pays = ?");

    $recup_infos -> execute(array($id_pays));
    if ($recup_infos -> rowcount() != 0 ):

        $data = $recup_infos -> fetch();

        return $data['nom_fr']; 

    else :

        return '/';
        
    endif;

}

function recup_user_profil($mat_member, $bdd)
{
    $recup_infos = $bdd -> prepare(" SELECT user_profil FROM member WHERE mat_member = ?");

    $recup_infos -> execute(array($mat_member));
    if ($recup_infos -> rowcount() != 0 ):

        $data = $recup_infos -> fetch();

        return $data['user_profil']; 

    else :

        return '/';
        
    endif;

}

function recup_ville($mat_member, $bdd)
{
    $recup_infos = $bdd -> prepare(" SELECT ville FROM member WHERE mat_member = ?");

    $recup_infos -> execute(array($mat_member));
    if ($recup_infos -> rowcount() != 0 ):

        $data = $recup_infos -> fetch();

        return $data['ville']; 

    else :

        return '/';
        
    endif;

}

function recup_sexe($mat_member, $bdd)
{
    $recup_infos = $bdd -> prepare(" SELECT sexe FROM member WHERE mat_member = ?");

    $recup_infos -> execute(array($mat_member));
    if ($recup_infos -> rowcount() != 0 ):

        $data = $recup_infos -> fetch();

        return $data['sexe']; 

    else :

        return '/';
        
    endif;

}

function recup_libelle_specialite($mat_specialite, $bdd)
{
    $recup_infos = $bdd -> prepare(" SELECT libelle_specialite FROM specialite WHERE mat_specialite = ?");

    $recup_infos -> execute(array($mat_specialite));
    if ($recup_infos -> rowcount() != 0 ):

        $data = $recup_infos -> fetch();

        return $data['libelle_specialite']; 

    else :

        return '/';
        
    endif;

}


//  function de recuperation des informations d'une recette 
    
function recup_libelle($mat_recette, $bdd)
{
    $recup_infos = $bdd -> prepare(" SELECT libelle FROM recette WHERE mat_recette = ?");

    $recup_infos -> execute(array($mat_recette));
    if ($recup_infos -> rowcount() != 0 ):

        $data = $recup_infos -> fetch();

        return $data['libelle']; 

    else :

        return '/';
        
    endif;

}

?>