<!-- ABOUT-->
<section id="about" class="module">
  <div class="container">
    <?php   foreach ($data['tabla_sec'] as $about) {
    ?>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <div class="module-header text-center">
          <h1><?php echo $about['Titulo']; ?></h1>
          <p class="divider-line"><?php echo $about['Sumario']; ?></p>
        </div>
      </div>
    </div>
    <div class="row row-md-height">
      <?php   foreach ($data['parrafos'] as $par) {
                $url = URL_GAL . 'seccion/images/IM_' . $par['Imagen'];
      ?>
      <div class="col-md-6 col-sm-12 col-md-height col-middle m-b-sm-70">
        <h4><?php echo $par['Titulo']; ?></h4>
        <p><?php echo $par['Detalle']; ?></p>
      </div>
      <div class="col-md-6 col-sm-12 col-md-height col-md-middle">
        <img src="<?php echo $url;?>" alt="">
      </div>
      <?php   } ?>
    </div>
    <?php                  
            }
    ?>
  </div>
</section>
<!-- END ABOUT-->



