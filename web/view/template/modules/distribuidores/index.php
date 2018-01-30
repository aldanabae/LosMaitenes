<!INICIO Distribuidores-->

<!-- WRAPPER-->
<div class="wrapper">
    <!-- HERO-->
    <section data-background="<?php echo URL_IMG; ?>IMG_0911.jpg" class="module-hero color-white parallax bg-black-alfa-30">
        <div class="hero-caption">
            <div class="hero-text">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1 class="m-0">Distribuidores</h1>
                            <p class="lead m-0">Podes encontrar nuestros productos en los siguientes representantes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HERO-->
    <section class="module">
        <div class="container">
            <div class="row">
                <!-- CLIENTS-->
                <?php   foreach ($data['distribuidores'] as $dist) {
                            $url_imagen = URL_GAL.'distribuidores/images/IM_'.$dist['Imagen'];
                ?>
                <div class="team-item col-sm-3">
                    <a href="#" class="client"><img src="<?php echo $url_imagen?>" alt=""></a>
                    <div class="team-inner">
                        <h5><?php echo $dist['Ciudad']; ?></h5><span><?php echo $dist['Nombre']; ?></span>
                        <div>
                            <a href="<?php echo $dist['Website']; ?>">Sitio Web</a>
                        </div>                      
                    </div>
                </div>
                <?php
                        }
                ?>
                <!-- END CLIENTS-->
            </div>
        </div>
    </section>
</div>
<!-- END WRAPPER-->

<!FIN distribuidores-->