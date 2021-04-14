<?php 
  $title = 'SEI - Inicio';
  $isIndex = true;
  require_once('templates/header.php');
?>
  <!-- Banner -->
  <section class="banner">
    <div class="bann">
      <div class="splide" id="splide">
        <div class="splide__track">
          <ul class="splide__list">
            <?php
            $path = 'img/slide/';
            foreach (glob($path . '*.png') as $filename) {
              $p = pathinfo($filename);
            ?>
              <li class="splide__slide">
                <img src="<?php echo $path . $p['filename'] . '.png' ?>" alt="<?php echo $p['filename'] ?>">
              </li>
              <?php
            }
              ?>
          </ul>
        </div>
        <div class="splide__progress">
          <div class="splide__progress__bar">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner -->
  <!-- Info -->
  <section class="infor">
    <div class="container clearfix">
      <div class="text">
        <h1>servicio de calidad</h1>
        <p>En <span>SEI</span> nos preocupamos por t&iacute;, ofreciendote los mejores productos que necesitas de forma accesible con nuestros provedores de caliad y vendedores capacitados.</p>
      </div>
      <div class="productos">
        <h3>Productos que ofrecemos:</h3>
        <ul class="linked-productos" role="list">
          <li>Apagadores y contactos</li>
          <li>Equipo de control</li>
          <li>Iluminaci&oacute;n</li>
          <li>Tuber&iacute;a conduit</li>
          <li>Tuberia PVC pesado el&eacute;ctrico</li>
          <li>Soporteria</li>
          <li>Conductores el&eacute;ctricos</li>
        </ul>
      </div>
    </div>
  </section>
  <!-- End Info -->
  <!-- Distribuidores -->
  <section class="distribuidores">
    <div class="container">
      <div class="title">
        <h1>distribuidor autorizado de</h1>
      </div>
      <div class="img-dist center">
        <img src="img/veto.png" alt="veto">
        <img src="img/tecnolite-logo.png" alt="tecnolite">
        <img src="img/3m.png" alt="3M">
        <img src="img/anclo.png" alt="anclo">
        <img src="img/igesa.png" alt="igesa">
        <img src="img/tecnoled.png" alt="igesa">
      </div>
    </div>
  </section>
  <!-- End Distribuidores -->
 
  <?php 
    require_once('templates/contacto.php');
    require_once('templates/footer.php'); 
  ?>