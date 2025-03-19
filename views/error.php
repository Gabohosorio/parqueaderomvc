<?php
  $er_reg = $_SESSION['msgerror'];
?>
<div class="Contvcc Frm1">
  <div class="Contvcc FrmEr Smbr2">
    <div class="Contvtc" style="margin-top: 30px;">
      <img class="ImgLog2" src="<?=base_url?>/assets/images/parqueadero.png">
      <h6><?=$er_reg?></h6>
    </div>
    <div class="Conthcc" style="margin-top: 20px;">
      <img class="ImgMdl" src="<?=base_url?>/assets/images/warning.png">
    </div>
    <div class="Conthcc" style="margin-top: 20px; margin-bottom: 30px">
      <input type="button" class="Btc" value="Regresar"
        onclick="location.href='<?=base_url?>/inicio/index'">
    </div>
  </div>
</div>