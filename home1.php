<?php include('session.php'); ?>
<?php include('header.php'); ?>
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
                <a class="nav-link color-principal px-4" href="./login/index.php">Mi Cuenta</a>
                <a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
              </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</body>
</html>