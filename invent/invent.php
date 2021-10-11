<?php
require '../base.php';
$usuario = $_SESSION['usuario'];
$usuarioid = $_SESSION['id_user'];
if (!empty($usuario)) {
  $data = $database->count("user_has_permissions",["AND" => ["id_user" => $usuarioid, "id_perm" => 8]]);
  if (!empty($data)) {
    require 'invent.view.php';
  }
  else {
  require '../extra/e125.php';
  }
}
?>
