
<div class="Contvcc Frm1">
  <h5>Gestionar Marcas</h5>
  <hr style="width: 50%;">
  <div class="Conthcl" style="width: 90%; margin-bottom: 7px;">
    <a class="Bt3" href="<?=base_url?>marca/crear">+ Crear</a>
  </div>
  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th style="width: 60px;">Editar</th>
      <th style="width: 60px;">Borrar</th>
    </tr>
    <?php while($reg = $datos->fetch_object()): ?>
      <tr>
        <td><?=$reg->id_marca?></td>
        <td><?=$reg->nombre_marca?></td>
        <td><a href="#"><img class="Img25x25"
            src="<?=base_url?>assets/images/edit-48.png" alt="Edit"></a></td>
        <td><a href="#"><img class="Img25x25"
            src="<?=base_url?>assets/images/borrar.png" alt="Borrar"></a></td>
      </tr>
    <?php endwhile; ?>
  </table>
</div>
