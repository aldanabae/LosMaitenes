<!INICIO Viñedos-->

<!-- WRAPPER-->
  <div class="wrapper">
      <!-- HERO-->
      <section data-background="<?php echo URL_IMG; ?>IMG_0988.jpg" class="module-hero color-white parallax bg-black-alfa-30">
          <div class="hero-caption">
              <div class="hero-text">
                  <div class="container">
                      <div class="row">
                          <div class="col-sm-12 text-center">
                              <h1 class="m-0">Nuestro Viñedo</h1>
                              <p class="lead m-0">Nuestra finca se alza en la tierra del Malbec.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- END HERO-->
      <!-- ABOUT-->
      <section class="module">
          <?php   
                  foreach ($data['parrafos'] as $par) {
                      $url = URL_GAL . 'seccion/images/IM_' . $par['Imagen'];
          ?>
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 col-sm-offset-3">
                      <div class="module-header text-center">
                          <h1><?php echo $par['Titulo']; ?></h1>
                          <p class="divider-line"></p>
                      </div>
                  </div>
              </div>
              <div class="row row-md-height">
                  <div class="col-md-6 col-sm-12 col-md-height col-middle m-b-sm-70">
                      <!-- <h4>Our Story</h4> -->
                      <p><?php echo $par['Detalle']; ?></p> 
                      <p><img src="assets/images/signature.png" alt="" class="m-t-20"></p>
                  </div>
                  <div class="col-md-6 col-sm-12 col-md-height col-md-middle"><img src="<?php echo $url;?>" alt=""></div>
              </div>
          </div>
          <?php         
                  }
          ?>
      </section>
      <!-- END ABOUT-->
  </div>
<!-- END WRAPPER-->

<!FIN Viñedos-->