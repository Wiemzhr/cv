<?php
include "cnxcv.php";

$id=$_GET['id'];

$requete = "SELECT * FROM contact WHERE id ='$id'";


$resultat = $mysqli->query($requete) or die ($mysqli->error());

$ligne = $resultat->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Wiem ZAHAR</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="./assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
           
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Wiem Zahar
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="admin.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Mon profil</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="notif.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="notif.php"> Notifications </a>
                    
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                          
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="admin.php">
                                    <span class="no-icon">Profil</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Menu</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="admin.php">Profil</a>
                                    <a class="dropdown-item" href="notif.php">Notifications</a>
                            </li>
                          
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Mes notifications </h4>
                                </div>
                           <div class="card-body table-full-width table-responsive">
                           	<form  action="valid_modif.php?id=<?php echo $ligne['id'];?>" method="post"> 
                                    <table class="table table-hover table-striped">
                                    	<thead>
                                            <th>Modifier nom prénom</th>
                                            <th>Modifier l'email</th>
                                        </thead>
                                        <tbody>
                                        	<tr>
                                        		<td>

                                        	 <input type="text" name="nom" required="required" value="<?php echo $ligne['nom'];?>"/>
                                        	
                                        	
                                        	</td>
                                        	<td>
                                        		<input type="email" name="email" required="required" value="<?php echo $ligne['email'];?>"/>
                                        	</td>
                                        	<td><input type="reset" value="Annuler" name="Annuler" /></td><td><input type="submit" value="Modifier" name="Valider" /></td>
                                        	</tr>

                                        </tbody>
                                  </table>
                                  </form>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>



            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="https://www.linkedin.com/in/zahar-wiem-94248117b/">WZ</a>, made with love
                        </p>
                    </nav>
                </div>
            </footer>

</body>
<script src="./assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/plugins/bootstrap-switch.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="./assets/js/plugins/chartist.min.js"></script>
<script src="./assets/js/plugins/bootstrap-notify.js"></script>
<script src="./assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<script src="./assets/js/demo.js"></script>

</html>		