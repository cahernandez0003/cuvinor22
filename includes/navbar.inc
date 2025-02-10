<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: darkslategrey">
  <img src="../public/imgs/fotos/logo.png" style="width: 50px;">
  <a class="navbar-brand" href="../" style="font-weight: bold;"> &nbsp; &nbsp; TAHUM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../"> 
  <img src="../public/imgs/fotos/logo.png" style="width: 50px; transform: rotateY(180deg)">
         <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="../<?php echo $_SESSION['ufoto']; ?>" class="border rounded-circle" width="50px">
          <?php echo $_SESSION['ucorreo']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php if ($_SESSION['urol'] == 'Admin'): ?>
            <a class="dropdown-item" href="<?php echo $url_site.'usuarios/'; ?>"> <i class="fa fa-users"></i> Talento Humano </a>
            <a class="dropdown-item" href="<?php echo $url_site.'#/'; ?>"> <i class="fa fa-book"></i> Horarios</a>
            <a class="dropdown-item" href="<?php echo $url_site.'#/'; ?>"> <i class="fa fa-clipboard"></i> Vacaciones</a>
          <?php endif ?>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo $url_site.'pages/close.php'; ?>"> <i class="fa fa-times"></i> Cerrar Sesión</a>
        </div>
      </li>
    </ul>
  </div>
</nav>