<?php  


	$serveur = 'localhost';
	$login = 'root';
  	$passwd = '';
    $nom_bd = 'isdm';

	try
	{
		$bdd = new PDO("mysql:host=$serveur;dbname=$nom_bd", $login, $passwd);
		$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo 'Connexion à la base de données réussie';
	}
	catch(PDOException $e)
	{
		echo 'Echec de la connexifon: ' .$e->getMessage();
	}

?>