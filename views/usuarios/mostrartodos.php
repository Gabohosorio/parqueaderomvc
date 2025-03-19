<h3>Lista de Usuarios</h3>
<?php while($reg = $datos->fetch_object()): ?>
  <h4><?=$reg->id_usuario?> - <?=$reg->nombre_usuario?></h4>
<?php endwhile; ?>

