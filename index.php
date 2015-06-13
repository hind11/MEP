<?php
	session_start();
?>
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
			$bdd = new PDO('mysql:host=localhost;dbname=mep','root','');
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
		}
		$reponse = $bdd->query('SELECT * FROM commerciaux');
	?>
	
    <body>
        <div id="loginbox">  
		<?php
			if(!isset($_COOKIE['identifiant']) OR !isset($_COOKIE['mdp']))
			{
				if(!isset($_POST['nom']) OR !isset($_POST['mdp']))
				{
		?>
					<form id="loginform" class="form-vertical"  method="post" action="index.php">
						<div class="control-group normal_text"><h3><img src="img/logo.png" alt="LogoMEP" /></h3></div>
						<div class="control-group">
							<div class="controls">
								<div class="main_input_box">
									<span class="add-on bg_lg"><i class="icon-user"></i></span><input type="text" name="nom" placeholder="Identifiant" />
								</div>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<div class="main_input_box">
									<span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="mdp" placeholder="Mot de passe" />
								</div>
							</div>
						</div>
						<div class="form-actions">
							<span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Mot de passe perdu?</a></span>
							<span class="pull-right"><input type="submit" class="btn btn-success" /></input></span>
						</div>
					</form>
		<?php
				}
				else
				{
					while($donnees = $reponse->fetch())
					{
						if($donnees['nom_comr']=$_POST['nom'] AND $donnees['mdp']=$_POST['mdp'])
						{
							$_SESSION['nom']=$donnees['nom_comr'];
							setcookie('identifiant',$donnees['nom_comr'],time()+365*24*3600,null,null,false,true);
							setcookie('mdp',$donnees['mdp'],time()+365*24*3600,null,null,false,true);
							header('Location: index2.php'); 
							exit;							
						}
					}
					$reponse->closeCursor();
		?>
					<form id="loginform" class="form-vertical"  method="post" action="index.php">
						<div class="control-group normal_text"><h3><img src="img/logo.png" alt="LogoMEP" /></h3></div>
						<div class="control-group">
							<div class="controls">
							<center><font color="red">"l'indentifiant ou le mot de passe est incorrect"</font></center>
								<div class="main_input_box">
									<span class="add-on bg_lg"><i class="icon-user"></i></span><input type="text" name="nom" placeholder="Identifiant" />
								</div>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<div class="main_input_box">
									<span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="mdp" placeholder="Mot de passe" />
								</div>
							</div>
						</div>
						<div class="form-actions">
							<span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Mot de passe perdu?</a></span>
							<span class="pull-right"><input type="submit" class="btn btn-success" /></input></span>
						</div>
					</form>
		<?php
				}
			}
			else
			{
				while($donnees = $reponse->fetch())
				{
					if($donnees['nom_comr']=$_COOKIE['identifiant'] AND $donnees['mdp']=$_COOKIE['mdp'])
					{
						$_SESSION['nom']=$donnees['nom_comr'];
						header('Location: index2.php');
						exit;
					}
				}
				$reponse->closeCursor();
			
		?>
			<form id="loginform" class="form-vertical"  method="post" action="index.php">
				<div class="control-group normal_text"><h3><img src="img/logo.png" alt="LogoMEP" /></h3></div>
                <div class="control-group">
                    <div class="controls">
					<center><font color="red">"l'indentifiant ou le mot de passe est incorrect"</font></center>
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"></i></span><input type="text" name="nom" placeholder="Identifiant" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="mdp" placeholder="Mot de passe" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Mot de passe perdu?</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-success" /></input></span>
                </div>
            </form>
			
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">"Entrez votre addresse mail, et j'essaierai de vous envoyer vos identifiants"</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Retourner</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Réenvoyer</a></span>
                </div>
            </form>
			
			<?php
			}
			?>
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>

</html>