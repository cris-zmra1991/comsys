<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Control de la Produccion</title>
  <link rel="stylesheet" href="../res/css/semantic.min.css">
  <link rel="stylesheet" href="../res/css/icon.min.css">
</head>
<body style="background-color: #c9c9c9;">
    <div class="contenedor">
    <div class="ui tiny inverted menu">
      <div class="item">
      <img src="../res/img/logo.png" width="40" height="18" alt="Logo CCP">
    </div>
    <a class="item" href="../views/first.php" target="container">
      <i class="home icon"></i>&nbsp;&nbsp;Inicio
    </a>
    <a class="item" href="registrocont.php" target="container">
      <i class="boxes icon"></i>&nbsp;&nbsp;Registro de contratos
    </a>

    <a class="item" href="#">
      <i class="plus square icon"></i>&nbsp;&nbsp;Insertar datos
    </a>
    <a class="item" href="#">
      <i class="edit icon"></i>&nbsp;&nbsp;Modificar datos
    </a>
    <a class="item" href="#">
      <i class="boxes icon"></i>&nbsp;&nbsp;Gestión de usuarios
    </a>
    <div class="right menu">
      <span class="item">
        <?php echo $_SESSION["fname"].'&nbsp;'.$_SESSION["lname"];
        ?>
      </span>
    <div data-tooltip="Perfil del usuario" data-position="bottom right">
      <a class="item" href="../conf/close.php">
        <i class="cog icon"></i>
      </a>
    </div>
    <div data-tooltip="Cerrar sesión" data-position="bottom right">
      <a class="item" href="../config/close.php">
        <i class="sign-out icon"></i>
      </a>
    </div>
  </div>
</div>
</div>
