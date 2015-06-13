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
<link rel="stylesheet" href="css/fullcalendar.css" />
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

<!-- content -->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Retour à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a></div>
  </div>
  <div  class="quick-actions_homepage">
    <ul class="quick-actions">
      <li class="bg_lb"> <a href="prospection.php"> <i class="icon-dashboard"></i> Mes prospections </a> </li>
      <li class="bg_lg"> <a href="#"> <i class="icon-calendar"></i> Mon agenda</a> </li>
      <li class="bg_ly"> <a href="Ajout_entreprises.php"> <i class="icon-upload-alt"></i> Ajouter une entreprise </a> </li>
      <li class="bg_lo"> <a href="#"> <i class="icon-tasks"></i> Archiver une entreprise </a> </li>
	  <li class="bg_ls"> <a href="riKiwi.php"> <i class="icon-folder-open"></i> riKiwi </a> </li>
    </ul>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
            <h5>Derniers commentaires</h5>
          </div>
          <div class="widget-content nopadding collapse in" id="collapseG2">
            <ul class="recent-posts">
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av1.jpg"> </div>
                <div class="article-post"> <span class="user-info"> Par : Hind HOUMAM / Date: 08/01/2015 / Time: 18:27  </span>
                  <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
                </div>
              </li>
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av2.jpg"> </div>
                <div class="article-post"> <span class="user-info"> Par : Hind HOUMAM / Date: 08/01/2015 / Time: 18:27 </span>
                  <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
                </div>
              </li>
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av4.jpg"> </div>
                <div class="article-post"> <span class="user-info"> Par : Hind HOUMAM / Date: 08/01/2015 / Time: 18:27 </span>
                  <p><a href="#">This is a much longer one that will go on for a few lines.Itaffle to pad out the comment.</a> </p>
                </div>
              <li>
                <button class="btn btn-warning btn-mini">Voir tout</button>
              </li>
            </ul>
          </div>
        </div>
		</div>
		
		<div class="widget-box">
		<div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Static table with checkboxes in box with padding</h5>
            <span class="label label-info">Featured</span> </div>
          <div class="widget-content ">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                  <th>Entreprises</th>
                  <th>Commercial</th>
                  <th>Etat d'avancement</th>
                  <th>Commentaires</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>AMAP</td>
                  <td>Séverine</td>
                  <td>AP envoyé</td>
                  <td>
				  <div class="widget-content"> <a href="#myModal" data-toggle="modal" class="btn btn-success">Envoyer un commentaire</a> <a href="#myAlert" data-toggle="modal" class="btn btn-warning">Envoyer un commentaire</a> <a href="#myModal2" data-toggle="modal" class="btn btn-info">image Popup</a>
						<div id="myModal2" class="modal hide">
						  <div class="modal-header">
							<button data-dismiss="modal" class="close" type="button">×</button>
							<h3>Alert modal</h3>
						  </div>
						  <div class="modal-footer"><a data-dismiss="modal" class="btn btn-inverse" href="#">Cancel</a> </div>
						</div>
				  </td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>Row 1</td>
                  <td>Row 2</td>
                  <td>Row 3</td>
                  <td>Row 4</td>
                </tr>
              </tbody>
            </table>
          </div>
		  </div>
        
      </div>
    
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box widget-calendar">
          <div class="widget-title"> <span class="icon"><i class="icon-calendar"></i></span>
            <h5>Agenda</h5>
            <div class="buttons"> <a id="add-event" data-toggle="modal" href="#modal-add-event" class="btn btn-inverse btn-mini"><i class="icon-plus icon-white"></i> Ajouter un évenement</a>
              <div class="modal hide" id="modal-add-event">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h3>Ajouter un évenement</h3>
                </div>
                <div class="modal-body">
                  <p>Nom de l'évenement:</p>
                  <p>
                    <input id="event-name" type="text" />
                  </p>
                </div>
                <div class="modal-footer"> <a href="#" class="btn" data-dismiss="modal">Annuler</a> <a href="#" id="add-event-submit" class="btn btn-primary">Ajouter un évenement</a> </div>
              </div>
            </div>
          </div>
          <div class="widget-content">
            <div class="panel-left">
              <div id="fullcalendar"></div>
            </div>
            <div id="external-events" class="panel-right">
              <div class="panel-title">
                <h5>Glisser des évenements au calendrier</h5>
              </div>
              <div class="panel-content">
                <div class="external-event ui-draggable label label-inverse">RDV client</div>
                <div class="external-event ui-draggable label label-inverse">RDV chercheur</div>
                <div class="external-event ui-draggable label label-inverse">AMAP</div>
                <div class="external-event ui-draggable label label-inverse">Contre chiffrage</div>
                <div class="external-event ui-draggable label label-inverse">Réunion</div>
              </div>
            </div>
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
<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.calendar.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
