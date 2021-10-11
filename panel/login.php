<?php
require '../base.php';
$errores = "";
$comp = $database->select("config",["id_conf","company_name"]);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    //$password = hash('sha512', $password);
    $company = $_POST['company'];
    //Verificar que el usuario sea unico
    $count = $database->count("sys_users",["username" => $usuario]);
    if ($count == 1) {
      //buscar usuario en BD
      $data = $database->select("sys_users","*",["username" => $usuario]);
      foreach ($data as $sesion)
      {
      //Asignar los resultados a variables de sesion
      $_SESSION['id_user'] = $sesion["user_id"];
      $_SESSION['usuario'] = $sesion["username"];
      $_SESSION['fname'] = $sesion["first_name"];
      $_SESSION['lname'] = $sesion["last_name"];
      $_SESSION['mail'] = $sesion["email"];
      $itempass = $sesion["password"];
      $_SESSION['position'] = $sesion["position"];
      }
      $_SESSION['company'] = $company;
      //Comprobar que la contraseña sea correcta
      if ($password == $itempass) {
      $database->update("sys_users",["status" => "1"],["username" => $usuario]);
      header('Location: '.RUTA.'index.php');
      }
      else {
        $errores = '<p>Error, revise los datos</p>';
      }
    }
    else {
      echo '<p>Nombre de usuario duplicado o inexistente<br>Consulte al administrador</p>';
    }
    }

require_once '../views/login.view.php';
 ?>
