<?php include_once '../templates/header_simple.php';?>
  <body>
    <strong>Registro de contratos</strong> (Modo de consulta)<br><br>
    <table class="ui striped table">
      <thead>
        <tr>
          <th scope="col">Identificador Fábrica</th>
          <th scope="col">Proveedor</th>
          <th scope="col">Objeto del contrato</th>
          <th scope="col">Vigencia</th>
          <th scope="col">Valor (MN)</th>
          <th scope="col">Número de contrato</th>
          <th scope="col">Detalle</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $data = $database->query("SELECT cont.id_fca, prov.desc_proveedor, cont.objeto_cont, cont.vigencia, cont.tipo_vigencia, cont.valor, cont.no_contrato FROM contratos cont INNER JOIN com_proveedores prov ON cont.id_proveedor = prov.id_proveedor");

        foreach($data as $solicitudes){ ?>
          <tr>
            <td><?php echo $solicitudes["id_fca"] ?></td>
            <td><?php echo $solicitudes["desc_proveedor"] ?></td>
            <td><?php echo $solicitudes["objeto"] ?></td>
            <td><?php echo $solicitudes["vigencia"]."&nbsp;".$solicitudes["tipo_vigencia"] ?></td>
            <td><?php echo $solicitudes["valor"] ?></td>
            <td><?php echo $solicitudes["no_contrato"] ?></td>
            <td><a class="ui orange button" href="<?php echo "modify.php?name=" . $solicitudes["id_fca"]?>"><i class="edit icon"></i></a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>
