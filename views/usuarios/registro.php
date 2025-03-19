<!--Panel derecho-->
<div class="Contvcc Frm1">
  <!--Formulario de registro-->
  <form action="<?=base_url?>Usuario/save"
    class="Contvcc Frm2 Brd15" method="post">
    <h4>Registrese</h4>
    <input type="text" name="cedula" placeholder="Cédula" required>
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="celular" placeholder="Celular">
    <input type="text" name="direccion" placeholder="Dirección">
    <input type="password" name="clave" placeholder="Clave" required>
    <input type="password" name="clave2" placeholder="Reingrese Clave" required>
    <div class="Conthcj" style="width: 75%; height: 60px;">
      <input type="submit" class="Bt4b" value="Registrarse">
      <input type="button" class="Bt4r" value="Cancelar" 
        onclick="location.href='<?=base_url?>Inicio/index'" />
    </div>
  </form>
  <!--End Formulario de registro-->
</div>
<!--End Panel derecho-->
</body>
</html>