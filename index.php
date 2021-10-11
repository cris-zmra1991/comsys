<?php
require '../base.php';
// comprobar session
if (isset($_SESSION['usuario'])) {
  // validar los datos por privilegio
  $data = $database->count("sys_users",["username" => $_SESSION['usuario']]);

  if ($data == '1') {
    header('Location: '.RUTA.'comsys/panel/user.php');
    }
    else {
    header('Location: '.RUTA.'comsys/panel/login.php');
    }
}else {
header('Location: '.RUTA.'comsys/panel/login.php');
}
 ?>
