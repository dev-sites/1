<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Главная</title>
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

    <header class="main-page">
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

<div class="wrap">
    <div class="container">
      <div class="content row">
        <div class="posts col-sm-8">
          <section>
            <h1>/ <span class="active">Главная</span> /</h1>
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>" style="color: #000; text-decoration: none;"><?php the_title(); ?></a></h2>
            <p style="color:#888;"><span class="fa fa-calendar"></span> <?php echo get_the_date('d.m.Y'); ?> <span style="color:#888;" class="fa fa-clock-o"> </span> <?php echo get_the_time(); ?> <span class="fa fa-comment-o" style="color:#888;"> </span> <?php number_of_comments(); ?> </p>
            <?php
              if (has_post_thumbnail()) {
                echo get_the_post_thumbnail($id, array(800, 532), array('class' => 'img-responsive'));
              }
            ?>
            <article>
            	<?php the_content('Читать далее...'); ?>
            </article>
            <?php endwhile; endif; ?>
          </section>

          <a class="btn btn-default" href="//kolpino-dkocentr.ru/news" role="button">ВСЕ НОВОСТИ</a>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <!-- End Content Wrapper-->

<?php get_footer(); ?>
