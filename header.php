<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta property="og:image" content="//kolpino-dkocentr.ru/wp-content/themes/kolpino-cdko/img/header.jpg" />
    <title><?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  	<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">

    <!-- Yandex.Metrika counter y-->
    <script src="<?php bloginfo('template_url'); ?>/js/yametrika.js"></script>
    <noscript><div><img src="https://mc.yandex.ru/watch/43314499" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="<?php if (is_home()) { echo "main-page"; } else { echo "header-page"; } ?>">
      <div class="container">
        <div class="navbar" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle masttoggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">ЦДКиО Колпино</a>
          </div>
          <div class="collapse navbar-collapse">
              <?php wp_nav_menu(array('menu' => 'Верхнее меню', 'menu_class' => 'nav navbar-nav mastnav')); ?>
          </div>
        </div>
      </div>
    </header>
