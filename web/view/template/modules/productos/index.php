<!-- SHOP GRID-->
<section class="module module-dark"> 
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <div class="module-header text-center">
          <h1>Productos</h1>
          <p class="divider-line">Tenemos una amplia variedad de productos para ofrecerles.</p>
        </div>
      </div>
    </div>
    <div class="row multi-columns-row">
      <?php     foreach ($data['productos'] as $value) {
                    $url_imagen = URL_GAL.'productos/images/IM_'.$value['Imagen'];
      ?>
      <div class="col-sm-4 col-md-4 col-lg-4">
        <!-- SHOP ITEM-->
        <div class="shop-item">
          <div class="shop-item-image"><a href="shop-product.html"><img src="<?php echo $url_imagen?>" alt=""/></a>
            <div class="shop-item-hidden"><a href="<?php echo URL_WEB.$value['URL']; ?>" class="btn btn-block btn-dark">Ver Ficha Técnica</a></div>
          </div>
          <div class="text-center">
            <h5><a href="shop-product.html"><?php echo $value['Nombre']; ?></a></h5>
          </div>
        </div>
        <!-- END SHOP ITEM-->
      </div>
      <?php
                }
      ?>
    </div>
  </div>
</section>
<!-- END SHOP GRID-->

