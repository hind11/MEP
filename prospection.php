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
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
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

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Tableau de bord 2</a>
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
    <div id="breadcrumb"> <a href="index.php" title="Retour à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a> <a href="#" class="current">Mes prospections</a> </div>
    <h1>Mes prospections</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Etat des prospections</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Entreprise</th>
                  <th>Contacts</th>
                  <th>Numéro de téléphone</th>
                  <th>Etat</th>
				  <th>Date du dernier contact</th>
				  <th>Mettre à jour</th>
                </tr>
              </thead>
              <tbody>
				<?php
				//Laision BDD
				 ?>
                <tr class="gradeX">
                  <td>Hind</td>
                  <td>Esabora</td>
                  <td>Cocooning</td>
                  <td>4</td>
				  <td>RDV</td>
				  <td>
					  <div class="btn-group">
								<button data-toggle="dropdown" class="btn btn-info dropdown-toggle">Mettre à jour <span class="caret"></span></button>													
								<ul class="dropdown-menu">
								  <li><a href="maj_pros.php">Tout mettre à jour</a></li>
								  <li><a href="#">RDV</a></li>
								  <li class="divider"></li>
								  <li><a href="#">Archiver</a></li>
								</ul>
						</div>
				  </td>
                </tr>
              </tbody>
            </table>
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
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>
