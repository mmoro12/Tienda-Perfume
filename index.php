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
<div class="todo">
  

  <nav class="navbar navbar-expand-lg color-principal  ">
      <div class="container">
        <a class="navbar-brand px-4" href="#"><img src="images/logos/logo2.png" alt="" srcset=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
              <a class="nav-link color-principal px-4" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link color-principal px-4" href="#">¿Quienes Somos?</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle color-principal px-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Perfumes Extractos</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Masculinos</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Femeninos</a>
              </div>
              <li class="nav-item">
                <a class="nav-link color-principal px-4" href="#">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link color-principal px-4" href="index.php">mi Perfil</a>
              </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
   
  <div class="container">
    <span><h2><strong> Datos de tu Perfil </strong></h2></span> <span>
      <div class="container text-right">
        <a href="logout.php" class="  btn color-fondo text-white"><span class="glyphicon color-red glyphicon-log-out"></span> Cerrar Sesion</a>
      </div>
  	<table class="py-4 table table-striped table-bordered table-hover table-hover table-responsive" id="style="margin: auto;  border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>Nombres</th>
  			<th>Apellidos</th>
  			<th>D.N.I</th>
  			<th>Fecha de Nacimiento</th>
        <th>Provincia</th>
  			<th>Codigo Postal</th>
  			<th>Localidad</th>
  			<th>Numero de Telefono</th>
  			<th> <a href="nuevo_prod1.php"> <button type="button" class="btn color-fondo text-white">Nuevo</button> </a> </th>
  		</thead>

      <?php
        include "conexion.php";
        $sentecia="SELECT * FROM usuario";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr>";
            echo "<td>"; echo $fila['nombres']; echo "</td>";
            echo "<td>"; echo $fila['apellidos']; echo "</td>";
            echo "<td>"; echo $fila['dni']; echo "</td>";
            echo "<td>"; echo $fila['fecha']; echo "</td>";
            echo "<td>"; echo $fila['provincia']; echo "</td>";
            echo "<td>"; echo $fila['cp']; echo "</td>";
            echo "<td>"; echo $fila['localidad']; echo "</td>";
            echo "<td>"; echo $fila['numero']; echo "</td>";
            echo "<td><a href='modif_prod1.php?nombres=".$fila['nombres']."'> <button type='button' class=' btn color-fondo text-white'>Modificar</button> </a></td>";
            echo " <td><a href='eliminar_prod.php?nombres=".$fila['nombres']."'> <button type='button' class=' btn color-fondo text-white'>Eliminar</button> </a></td>";
          echo "</tr>";
        }
      ?>

     
  		
  	</table>
  </div>
  <footer>
  <div class="container text-white color-fondo">
      <div class="row">
        <div class="col-6 col-md-8 col-lg-7">
          <div class="row text-center">
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
            <ul class="list-unstyled py-4">
                <H5 class="font-weight-bold">Servicios</H5>
                <div class="px-4">
                   <h6 class="color-segundo"> <a class="text-white"href="">Formas de Envio</a></h6>
                   <h6 class="color-segundo"> <a class="text-white"href="">Forma de Pago</a></h6>
                   <h6 class="color-segundo"> <a class="text-white"href="">Devoluciones</a></h6>
                   
                </div>
              </ul>
            </div>
          
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
              <ul class="list-unstyled py-4">
                <H5 class ="font-weight-bold">Nuestra Empresa</H5>
                <div class="px-4">
                   <h6 class="color-segundo"> <a class="text-white"href="">Contacto</a></h6>
                   <h6 class="color-segundo"> <a class="text-white"href="">¿Quienes Somos?</a></h6>
                   <h6 class="color-segundo"> <a class="text-white"href="">Trabaja con Nosotros</a></h6>
                   <h6 class="color-segundo"> <a class="text-white"href="">Mi Cuenta</a></h6>
                </div>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-12">
            <ul class="list-unstyled py-4">
                <H5 class="font-weight-bold">Nuestras Redes</H5>
                <div class="px-4">
                  <a href=""><img src="images/instagram.png" alt=""></a>
                  <a href=""><img src="images/facebook.png" alt=""></a>
                  <a href=""><img src="images/twtter.png" alt=""></a>
                  <a href=""><img src="images/youtube.png" alt=""></a>
                </div>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-5 col-6">
          <address class="px-4  text-center ">
          <img class="" src="images/logos/logoNegro.png" alt="" srcset=""><br>
            <strong>Catamarca Perfumes.</strong><br>
            Catamarca, SFVC, 4700<br>
            Chacabuco 260<br>
            <abbr title="Phone">T:</abbr> (3834)905931 <br>
            <a class=" text-white "href="mailto:#">catamarcaperfumes@gmail.com</a>
          </address>
        </div>
      </div>
    </div>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © Perfumes Catamarca. Todos los Derechos reservados.</p>
          </div>
        </div>
      </div>
    </footer>

</div>


</body>
</html>