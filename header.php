<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo wp_title(''); ?></title>
  	<script src="/wp-content/themes/kolpino-cdko/js/jquery.min.js"></script>
    <script src="/wp-content/themes/kolpino-cdko/js/nprogress.js"></script>
	  <link rel="stylesheet" href="/wp-content/themes/kolpino-cdko/css/nprogress.css">
    <link rel="stylesheet" href="/wp-content/themes/kolpino-cdko/css/font-awesome.min.css">
    <link rel="stylesheet" href="/wp-content/themes/kolpino-cdko/css/bootstrap.min.css">
    <link rel="stylesheet" href="/wp-content/themes/kolpino-cdko/css/styles.css">
    <link rel="shortcut icon" href="/wp-content/themes/kolpino-cdko/img/favicon.ico" type="image/x-icon">

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter43314499 = new Ya.Metrika({
                        id:43314499,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/43314499" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
  </head>
  <body>
  	<script type="text/javascript">
      NProgress.start();
      $(document).ready(function() {
        $('header').addClass('background');
        $(window).load(function() {
          NProgress.done();
          $('.fade').removeClass('out');
        });
      });
    </script>

    <header class="header-page">
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
