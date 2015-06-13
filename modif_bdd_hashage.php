<!DOCTYPE html>
<html lang="fr">
    
<head>
        <title>NEO MEP</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

	<?php
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=mep', 'root', '');
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
		$reponse = $bdd->query('SELECT mdp FROM commerciaux');
		$donnees = $reponse->fetch();
		$req = $bdd->prepare('UPDATE commerciaux SET mdp =:mdp_modif');
		while($donnees = $reponse->fetch())
		{
			$mdp_modif=password_hash($donnees['mdp'],PASSWORD_DEFAULT);
			echo $mdp_modif;
	?>
		<br/>
	<?php
		}	
		$reponse->closeCursor();
		$req->execute(array('mdp' => $mdp_modif));
	?>
