<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Academic Consulting</title>

  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/swiper.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/construction.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/dark.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/font-icons.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/magnific-popup.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/fonts.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/responsive.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/onepage.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/et-line.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bs-select.css" type="text/css">
  <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/colors.css" type="text/css" />
  <link rel="icon" href="<?php echo ROOT_PATH; ?>favicon.png" type="image/x-icon"/>
  <link rel="shortcut icon" href="<?php echo ROOT_PATH; ?>favicon.png" type="image/x-icon"/>

    <script src="<?php echo ROOT_PATH; ?>assets/js/jquery.js"></script>
    <script src="<?php echo ROOT_PATH; ?>assets/js/plugins.js"></script>
    <script src="<?php echo ROOT_PATH; ?>assets/js/functions.js"></script>
    <script src="<?php echo ROOT_PATH; ?>assets/js/customJS.js"></script>
    <script src="<?php echo ROOT_PATH; ?>assets/js/components/bs-select.js"></script>
    <script src="<?php echo ROOT_PATH; ?>assets/js/components/selectsplitter.js"></script>

  </head>
  <body class="stretched">
    <div id="wrapper" class="clearfix" style="opacity: 1;">
  <div id="top-bar">

    <div class="container clearfix">

      <div class="col_half nobottommargin clearfix">

          <div id="top-social">
            <ul>
              <li><a href="http://www.facebook.com/AcademicConsultingMx" target="_blank" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
              <li><a href="http://www.twitter.com/AcademicMX" target="_blank" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
              <li><a href="<?php echo ROOT_URL; ?>contacto" class="si-dribbble"><span class="ts-icon"><i class="icon-line2-envelope"></i></span><span class="ts-text">Email</span></a></li>
              <li><a href="<?php echo ROOT_URL; ?>contacto" class="si-github"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">Contacto</span></a></li>

            </ul>
          </div>

        </div>

        <div class="col_half fright col_last clearfix nobottommargin">

          <div class="top-links">
            <ul>
              <li><a href="<?php echo ROOT_URL; ?>servicios">Servicios</a></li>
              <li><a href="<?php echo ROOT_URL; ?>faqs">FAQs</a></li>
              <li><a href="<?php echo ROOT_URL; ?>contacto">Contacto</a></li>
            </ul>
          </div>

        </div>

      </div>

    </div>
        <header id="header" class="sticky-style-2">

          <div class="container clearfix">

        <div id="logo">
          <a href="<?php echo ROOT_URL; ?>" class="standard-logo"><img src="<?php echo ROOT_PATH; ?>assets/img/Acologo.png" alt="Academic Consulting"></a>
          <a href="<?php echo ROOT_URL; ?>" class="retina-logo"><img src="<?php echo ROOT_PATH; ?>assets/img/Acologo@2x.png" alt="Academic Consulting"></a>
        </div><!-- #logo end -->

        <ul class="header-extras">
          <li>
            <i class="i-plain icon-call nomargin"></i>
            <div class="he-text">
              Llámanos
              <span>(00) 0000 0000</span>
            </div>
          </li>
          <li>
            <i class="i-plain icon-line2-envelope nomargin"></i>
            <div class="he-text">
              Escríbenos a
              <span>consulta.escolar1@gmail.com</span>
            </div>
          </li>
          <li style="height:60px;">
            <a href="<?php echo ROOT_URL; ?>planes" class="button button-large button-3d button-rounded button-red" style="margin:0 !important; cursor:pointer;">Comenzar</a>
          </li>
        </ul>

      </div>

      <div id="header-wrap">

        <nav id="primary-menu" class="with-arrows style-2">
          <div class="container clearfix" style="z-index:999;">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
            <ul id="main-menu">
              <li><a href="<?php echo ROOT_PATH; ?>"><div>INICIO</div></a></li>
              <li><a href="<?php echo ROOT_PATH; ?>conocenos"><div>CONÓCENOS</div></a></li>
              <li><a href="<?php echo ROOT_PATH; ?>servicios"><div>SERVICIOS</div></a></li>
              <li><a href="<?php echo ROOT_PATH; ?>planes"><div>PLANES</div></a></li>
              <li><a href="<?php echo ROOT_PATH; ?>contacto"><div>CONTACTO</div></a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <?php Messages::display(); ?>
    <?php require($view); ?>

  </div>

  <div id="copyrights">
    <div class="container clearfix">
      <div class="col_half">
        Copyright &copy; 2016 Todos los derechos Reservados<br>
        <div class="copyright-links"><a href="<?php echo ROOT_PATH; ?>">Inicio</a> / <a href="<?php echo ROOT_PATH; ?>conocenos">Conócenos</a> / <a href="<?php echo ROOT_PATH; ?>servicios">Servicios</a> / <a href="<?php echo ROOT_PATH; ?>planes">Planes</a> / <a href="<?php echo ROOT_PATH; ?>contacto">Contacto</a> </div>
      </div>
      <div class="col_half col_last tright">
        <div class="fright clearfix">
          <a href="http://www.facebook.com/AcademicConsultingMx" target="_blank" class="social-icon si-small si-borderless si-facebook">
            <i class="icon-facebook"></i>
            <i class="icon-facebook"></i>
          </a>

          <a href="http://www.twitter.com/AcademicMX" target="_blank" class="social-icon si-small si-borderless si-twitter">
            <i class="icon-twitter"></i>
            <i class="icon-twitter"></i>
          </a>
        </div>
        <div class="clear"></div>
        <i class="icon-envelope2"></i> consulta.escolar1@gmail.com<span class="middot">&middot;</span> <i class="icon-call"></i> (00) 0000 0000 
      </div>
    </div>
  </div>
   
</body>
</html>