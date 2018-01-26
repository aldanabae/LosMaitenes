<!-- GALLERY-->
<section id="gallery" class="module p-b-0">
    <?php 
        $info = $data['galeria']['info'];
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="module-header text-center">
                    <h1><?php echo $info['Titulo']?></h1>
                    <p class="divider-line"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row-gallery">     
        <div class="gallery">
            <?php
                $efectos = array("dinner", "lunch tall", "breakfast", "lunch large", "brunch", "");
                $i = 0;

                foreach ($data['galeria']['fotos'] as $item) :
                    if($i<6){
            ?>
            <div class="gallery-item <?php echo $efectos[$i];?>">
                <div data-background="<?php echo URL_GAL; ?>galerias/images/IM_<?php echo $item['Imagen'];?>" class="gallery-wrapper"><a href="<?php echo URL_GAL; ?>galerias/images/IM_<?php echo $item['Imagen'];?>" title="<?php echo $item['Titulo'];?>" class="gallery-link"></a>
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h6 class="gallery-title"></h6><?php echo $item['Titulo'];?><span class="gallery-subtitle"></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                    }
                $i++;
                endforeach;
            ?>
        </div>
    </div>
</section>
<!-- END GALLERY-->