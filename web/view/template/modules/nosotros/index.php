
<!INICIO Nosotros-->

<!-- WRAPPER-->
<div class="wrapper">
    <!-- HERO-->
    <section data-background="<?php echo URL_IMG; ?>IMG_1112.jpg" class="module-hero color-white parallax bg-black-alfa-30">
        <div class="hero-caption">
            <div class="hero-text">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1 class="m-0">Nosotros</h1>
                            <p class="lead m-0">Dedicación, alma, pasión; el espíritu de una familia hecho vino.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HERO-->
    <!-- ABOUT-->
    <section class="module">
    	<?php   foreach ($data['tabla_sec'] as $about) {
              		if ($about['ID'] == 1){
              			foreach ($data['parrafos'] as $par) {
                            if($par['TablaID'] == 1){
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
        <?php     		    }
                        }  
        			}            
            	}
    	?>
    </section>
    <!-- END ABOUT-->

    <!-- TESTIMONIALS-->
    <section data-background="<?php echo URL_IMG; ?>IMG_0844.jpg" class="module color-white parallax bg-black-alfa-30">
    </section>
    <!-- END TESTIMONIALS-->

    <!-- TEAM-->
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="module-header text-center">
                        <h1>Nuestro Equipo</h1>
                        <p class="divider-line"></p>
                    </div>
                </div>
            </div>
            <div class="row multi-columns-row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <!-- TEAM-->
                    <div class="team-item"><!-- <img src="assets/images/team/team-1.jpg" alt=""/> -->
                        <div class="team-inner">
                            <h5>Antonio Carlos Sottano</h5><strong>Abogado</strong>
                            <p>En una etapa de su carrera profesional le toco desempeñarse, dirigiendo distintos cargos jerárquicos en el Gobierno de la Provincia, realizo cursos de administración por invitación del Gobierno del Reino de Bélgica en el año 1969/70. 
                            	Es el Presidente de la Sociedad cargo que ocupa desde su fundación.</p>
                        </div>
                    </div>
                    <!-- END TEAM-->
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <!-- TEAM-->
                    <div class="team-item"><!-- <img src="assets/images/team/team-3.jpg" alt=""/> -->
                        <div class="team-inner">
                            <h5>Carlos Evaristo Sottano</h5><strong>Vicepresidente</strong>
                            <p>es el hijo mayor de la familia formada por D. Antonio y de Da Marta Elena Palmero, integra el Directorio de la firma, su labor  abarca la gestión de la explotación de los Viñedos y se ocupa de la fiscalización de la administración. </p>
                        </div>
                    </div>
                    <!-- END TEAM-->
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <!-- TEAM-->
                    <div class="team-item"><!-- <img src="assets/images/team/team-2.jpg" alt=""/> -->
                        <div class="team-inner">
                            <h5>Maria Marta Sottano</h5><strong>Integrante del Directorio</strong>
                            <p>Esposa de Patricio Zapata, en la actualidad reside en el extranjero y desde allí proyecta la parte de comercio  exterior y la colocación de nuestros productos extrafrontera. 
                            	Integra el Directorio de la Sociedad</p>
                        </div>
                    </div>
                    <!-- END TEAM-->
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <!-- TEAM-->
                    <div class="team-item"><!-- <img src="assets/images/team/team-4.jpg" alt=""/> -->
                        <div class="team-inner">
                            <h5>Patricio Mauro Zapata</h5><strong>Marketing</strong>
                            <p>Con una maestría en Administración de Empresas, ejerce su profesión en el área de recursos humanos de una de las más importantes  firmas del mundo destinada a la comercialización tabacalera. Actualmente reside también  el exterior, junto a su esposa. 
                            	Son  responsables  de las gestiones de marketing y exportación de nuestros vinos.</p>
                        </div>
                    </div>
                    <!-- END TEAM-->
                </div>
            </div>
        </div>
    </section>
    <!-- END TEAM-->
</div>
<!-- END WRAPPER-->

<!FIN Nosotros-->