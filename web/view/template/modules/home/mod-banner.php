<!-- HERO-->
<div class="module-hero flexslider fullheight color-white">
  <ul class="slides">
    <!-- SLIDE 1-->
    <?php
        foreach ($data['sliders'] as $item) :
          $url = URL_GAL . 'banner_top/images/IM_' . $item['Imagen'];              
    ?>
    <li style="background-image:url(<?php echo $url; ?>)" class="bg-black-alfa-30">
      <div class="hero-caption">
        <div class="hero-text">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">
                <h1 class="m-0"><?php echo $item['Titulo']; ?></h1>
                <h3><?php echo $item['Descripcion']; ?></h3>
                <p class="lead m-b-40"></p>
                <!-- <a href="#reservation" class="btn btn-dark smoothscroll">Saber más</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
    <?php 
        endforeach; 
    ?>
    <!-- END SLIDE 1-->
  </ul>
</div>
<!-- END HERO-->