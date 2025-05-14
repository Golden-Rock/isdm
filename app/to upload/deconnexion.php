<?php 
	session_start();
	include('includes/connexion_bdd.php');
	include('fonctions/role.php');
	//$lang = $_SESSION['lang']; //Je conserve la langue active avant la deconnection
	
	$mat_member = $_SESSION['mat_member'];
	$action= "Deconnexion";
	// $mat_entreprise = $_SESSION['mat_entreprise'];
	
	historiq_connexion($mat_member, $action, $bdd);

	session_destroy();// Ici toutes les varuable de session sont supprimées
	//$_SESSION['lang'] = $lang;//Je rétablit la langue active avant de rediriger l'utilisateur vers la page d'accueil
	//Si je ne fais pas tout cela lorsqu'il sera redirigé, la langue sera celle par défaut
	

	header("Location: login.php");//?lang=$lang");
	exit();
?>