<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<title>NEO MEP</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>



<?php
	try
	{

				$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

			}

			catch(Exception $e)

			{

					die('Erreur : '.$e->getMessage());

			}

			echo $_POST['raison_sociale'];
			echo $_POST['adresse'];

			$bdd->exec('INSERT INTO entreprises(raison_sociale) VALUES (\'Battlefield 1942\')');


			?>

			</html>
