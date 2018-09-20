<?php get_header(); ?>

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
