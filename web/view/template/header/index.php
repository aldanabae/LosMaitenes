<?php
//configuracion de Metatags
$config = $data['config'];
$nombre_sitio = $config['Nombre'];

if (isset($data['meta']) && count($data['meta']) > 0) {
  $info = $data['meta'];
  $titulo = $info['Titulo'] . ' - ' . $nombre_sitio;
  $descripcion = $info['Descripcion'] . ' - ' . $nombre_sitio;
} else {
  $titulo = $config['Titulo'];
  $descripcion = $config['Descripcion'] . ' - ' . $nombre_sitio;
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $descripcion; ?>, Mendoza Argentina">
    <meta name="author" content="<?php echo $nombre_sitio; ?>">
    <title><?php echo $titulo; ?></title>
    <!-- BEGIN CSS FILES -->
    <link rel="shortcut icon" href="<?php echo URL_IMG; ?>favicon.png">
    <link rel="apple-touch-icon" href="<?php echo URL_IMG; ?>apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo URL_IMG; ?>apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo URL_IMG; ?>apple-touch-icon-114x114.png">
    <!-- Web Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Suranna" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS-->
    <link href="<?php echo URL_JS; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icon Fonts-->
    <link href="<?php echo URL_CSS; ?>font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo URL_CSS; ?>eleganticons.css" rel="stylesheet">
    <!-- Plugins-->
    <link href="<?php echo URL_CSS; ?>bootstrap-datepicker3.min.css" rel="stylesheet">
    <link href="<?php echo URL_CSS; ?>jquery.timepicker.css" rel="stylesheet">
    <link href="<?php echo URL_CSS; ?>magnific-popup.css" rel="stylesheet">
    <link href="<?php echo URL_CSS; ?>owl.carousel.css" rel="stylesheet">
    <link href="<?php echo URL_CSS; ?>vertical.min.css" rel="stylesheet">
    <link href="<?php echo URL_CSS; ?>animate.min.css" rel="stylesheet">
    <link href="<?php echo URL_CSS; ?>flexslider.css" rel="stylesheet">
    <!-- Template core CSS-->
    <link href="<?php echo URL_CSS; ?>template.css" rel="stylesheet">
    <!-- END CSS FILES -->
  </head>
  <body>
    <div class="brd-top"></div>
    <div class="brd-left"></div>
    <div class="brd-right"></div>
    <div class="brd-bottom"></div>
    <!-- PRELOADER-->
    <div class="page-loader">
      <div class="loader">Cargando...</div>
    </div>
    <!-- END PRELOADER-->
    <!-- NAVIGATION-->
    <header id="navigation" class="header">
      <div class="container">
        <!-- LOGO-->
        <div class="inner-header">
          <a href="<?php echo URL_WEB; ?>" class="inner-brand">
            <img src="<?php echo URL_IMG; ?>maitenes-logoH.png" alt="">
          </a>
        </div>
        <!-- MENU-->
        <div class="inner-navigation collapse">
          <div class="inner-navigation-inline">
            <div class="inner-nav">
              <ul>
                <li><a href="<?php echo URL_WEB; ?>">Home</a></li>
                <li class="has-submenu"><a href="#">Quienes Somos</a>
                    <ul class="submenu">
                        <li class="has-submenu">
                          <a href="<?php echo URL_WEB.'seccion/'; ?>nosotros">Nosotros</a>
                        </li>
                        <li class="has-submenu">
                          <a href="<?php echo URL_WEB.'seccion/'; ?>vinedos">Nuestra Finca</a>
                        </li>
                    </ul>
                </li>
                <li><a href="<?php echo URL_WEB.'productos'; ?>">Productos</a></li>
                <li><a href="<?php echo URL_WEB.'distribuidores'; ?>">Distribuidores</a></li>
                <li><a href="<?php echo URL_WEB.'galeria'; ?>">Galeria</a></li>
                <li><a href="<?php echo URL_WEB.'contacto'; ?>">Contacto</a></li>
              </ul>
            </div>
            <!-- EXTRA ICONS MENU-->
            <div class="extra-nav text-right">
              <ul>
                <li><a href="#">SPA</a></li>
                <li><a href="#">ENG</a></li>
                <li><a href="#">POR</a></li>
              </ul>
            </div>
            <!-- END EXTRA ICONS MENU-->
          </div>
        </div>
        <!-- SHOW MOBILE MENU-->
        <div class="nav-toogle"><a href="#" data-toggle="collapse" data-target=".inner-navigation" class="fa fa-bars"></a></div>
      </div>
    </header>
    <!-- END NAVIGATION-->

    <!-- WRAPPER-->
    <div class="wrapper">


    







