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
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">NEO MEP</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Bienvenue
	<?php
	echo ucfirst($_SESSION['nom']);
	?>
	</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> Mon profil</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> Mes prospections</a></li>
        <li class="divider"></li>
        <li><a href="deconnexion.php"><i class="icon-key"></i> Déconnexion</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Aide</span></a></li>
    <li class=""><a title="" href="deconnexion.php"><i class="icon icon-share-alt"></i> <span class="text">Déconnexion</span></a></li>
  </ul>
</div>

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Recherche..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li ><a href="index.php"><i class="icon icon-home"></i> <span>Tableau de bord</span></a> </li>
    <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Mes prochains RDVs</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Entreprises</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="invoice.php">AMAP</a></li>
        <li><a href="form-validation.html">AD environnement</a></li>
        <li><a href="form-wizard.html">Haut jura</a></li>
      </ul>
    </li>
    <li class="submenu active"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>
     
    
    <li class="content"> <span>Indicateur de satisfaction</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 </div>
    </li>
    
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index2.php" title="Retour à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#" class="current">Ajouter une entreprise</a> </div>
    <h1>Ajouter une entreprise</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Ajouter une nouvelle entreprise à prospecter</h5>
          </div>
          <div class="widget-content nopadding">
            <form id="form-wizard" class="form-horizontal" method="post" action="ajout_entreprises_post.php">
              <div id="form-wizard-1" class="step">
                <div class="control-group">
                  <label class="control-label">Raison sociale</label>
                  <div class="controls">
                    <input id="raison_sociale" type="text" name="raison_sociale" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Adresse</label>
                  <div class="controls">
                    <input id="adresse" type="text" name="adresse" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Code postal</label>
                  <div class="controls">
                    <input id="code_postal" type="text" name="code_postal" />
                  </div>
                </div>
				<div class="control-group">
                  <label class="control-label">Ville</label>
                  <div class="controls">
                    <input id="ville" type="text" name="ville" />
                  </div>
                </div>
              </div>
              <div id="form-wizard-2" class="step">
                <div class="control-group">
                  <label class="control-label">Numéro de téléphone</label>
                  <div class="controls">
                    <input id="num_tel" type="text" name="num_tel" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Site Web</label>
                  <div class="controls">
                    <input id="website" type="text" name="website" />
                  </div>
                </div>
				<div class="control-group">
                  <label class="control-label">Commentaires</label>
                  <div class="controls">
                    <input id="com" type="text" name="com" />
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <input id="back" class="btn btn-primary" type="reset" value="Précédent" />
                <input id="next" class="btn btn-primary" type="submit" value="Suivant" />
                <div id="status"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2015 &copy; NEO MEP. Par Mines Etudes et Projets. </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.wizard.js"></script>
</body>
</html>
