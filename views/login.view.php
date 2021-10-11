<?php include_once '../templates/header.php';?>
<body><p>&nbsp;</p><p>&nbsp;</p>
  <div class="ui middle aligned center aligned grid"><div class="ui card"><div class="ui raised segment">
  <form class="ui tiny form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <h3 class="ui green image header">Acceso al sistema</h3>
      <div class="field"><div class="ui left icon input">
        <input placeholder="Escriba su nombre de usuario" type="text" name="user">
        <i class="user icon"></i>
      </div></div>
      <div class="field"><div class="ui left icon input">
        <input placeholder="Escriba su contraseña" type="password" name="password">
        <i class="lock icon"></i>
      </div></div>
      <div class="field"><div class="ui left icon input">
      <select class="ui dropdown" name="company" title="Seleccione su empresa">
      <?php foreach ($comp as $valores):
      echo '<option value="'.$valores["id_conf"].'">'. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; " .$valores["company_name"].'</option>';
      endforeach; ?>
      </select>
      <i class="industry icon"></i>
      </div></div>
      <p>Cambiar de módulo <a href="http://localhost:8030/sigespro/">aquí</a></p>
      <button class="fluid ui mini green button" type="submit">Acceder</button>
      <?php echo $errores; ?>
    </form>
  </div></div></div>
</body></html>
