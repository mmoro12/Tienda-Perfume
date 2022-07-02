<?php
	session_start();
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}
?>
<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catamarca Perfumes</title>
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="./css1/css1.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg color-principal  ">
      <div class="container">
        <a class="navbar-brand px-4" href="#"><img src="images/logos/logo2.png" alt="" srcset=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
              <a class="nav-link color-principal px-4" href="perfume.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link color-principal px-4" href="quienessomos.php">¿Quienes Somos?</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle color-principal px-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Perfumes Extractos</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="perfumesmasculinos.php">Masculinos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="perfumesfemeninos.php">Femeninos</a>
              </div>
              <li class="nav-item">
                <a class="nav-link color-principal px-4" href="#">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link color-principal px-4" href="./inicioLogeo.php">Iniciar Sesion</a>
              </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>


<body>
<div class="container">
	<div style="height:50px;">
	</div>
    <div class="row" id="loginform">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-dark">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-lock"></span> Ingresar
                    	<span class="pull-right"><span class="glyphicon glyphicon-pencil"></span> <a style="text-decoration:none; cursor:pointer; color:black;" id="signup">Crear Cuenta</a></span>
                    </h3>
                </div>
            	<div class="panel-body  ">
                	<form role="form" id="logform" >
                    	<fieldset>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Nombre de usuario" name="username" id="username" type="text" autofocus>
                        	</div>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Password" name="password" id="password" type="password">
                        	</div>
                        	<button type="button" id="loginbutton" class="btn btn-lg btn-dark btn-block"><span class="glyphicon glyphicon-log-in"></span> <span id="logtext">Ingresar</span></button>
                    	</fieldset>
                	</form>
            	</div>
            </div>
        </div>
    </div>

    <div class="row" id="signupform" style="display:none;">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-dark">
                <div class="panel-heading ">
                    <h3 class="panel-title "><span class="glyphicon glyphicon-pencil"></span> Crear Cuenta
                    	<span class="pull-right"><span class="glyphicon glyphicon-log-in"></span> <a style="text-decoration:none; cursor:pointer; color:black;" id="login">Ingresar</a></span>
                    </h3>
                </div>
            	<div class="panel-body">
                	<form role="form" id="signform">
                    	<fieldset>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Nombre de usuario" name="susername" id="susername" type="text" autofocus>
                        	</div>
                        	<div class="form-group">
                            	<input class="form-control" placeholder="Contraseña" name="spassword" id="spassword" type="password">
                        	</div>
                        	<button type="button" id="signupbutton" class="btn btn-lg btn-dark btn-block"><span class="glyphicon glyphicon-check"></span> <span id="signtext">Crear Cuenta</span></button>
                    	</fieldset>
                	</form>
            	</div>
            </div>
        </div>
    </div>

    <div id="myalert" style="display:none;">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="alert alert-info">
    			<center><span id="alerttext"></span></center>
    		</div>
   	 	</div>
    </div>
</div>
<script src="custom.js"></script>
</body>
</html>