<!-- Barra lateral -->
<aside class="Contvtc Block_aside">
  <div class="Contvtc" style="width: 260px;">
    <?php if(!isset($_SESSION['identity'])): ?>
      <p class="Txbloq">Ingresar</p>
      <form class="Contvtc Frm260" action="<?=base_url?>/usuario/login" method="post">
        <div class="Conthcl Frm260">
          <label for="cedula">Cédula</label>
          <input type="text" name="cedula">
        </div>
        <div class="Conthcl Frm260">
          <label for="password">Contraseña</label>
          <input type="password" name="password">
        </div>
        <input class="Bt4b" type="submit" value="Enviar"><br>
        <h7>No estás registrado?</h7>
        <a class="Hovsbr" href="<?=base_url?>Usuario/registro">
          <h5>Registrese</h5>
        </a>
      </form>
    <?php else: ?>
      <p class="Txbloq"><?=$_SESSION['identity']->nombre_usuario?></p><br>
      <ul>
        <li><a href="">Gestionar Colores</a></li>
        <li><a href="">Gestionar Lineas</a></li>
        <li><a href="<?=base_url?>Marca/index">Gestionar Marcas</a></li>
        <?php if(isset($_SESSION['admin'])): ?>
          <li><a href="">Gestionar Mensualidades</a></li>
          <li><a href="">Gestionar Usuarios</a></li>
        <?php endif; ?>
        <li><a href="">Gestionar Vehículos</a></li>
      </ul>
      <br><br>
      <a class="Bt4r" href="<?=base_url?>Usuario/logout">Cerrar sesión</a>
    <?php endif; ?>
  </div>
</aside>


<li><a href="/Marca/index">Gestionar Marcas</a></li>