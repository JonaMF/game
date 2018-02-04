<?php require 'view/index/overall/header.php'; ?>
<?php

  include 'core/models/bin/class/recursos.php';

  $recurso = new Recursos('test');
  // $recurso2 = new Recursos('registro_usuarios');

?>

<div class="container">

  <div id="recursos">
    <div id="madera">

    </div>
    <div id="vino">

    </div>
    <div id="marmol">

    </div>
    <div id="azufre">

    </div>
  </div>

  <div class="SubirNivel">

    <!-- NIVELES DE BOTONES -->
    <input type="button" id="ampliar" value="Ampliar">
    <span id="nvl"></span>
    <input type="button" id="demoler" value="Demoler">

  </div>
</div>

<?php require 'view/index/overall/footer.php'; ?>
