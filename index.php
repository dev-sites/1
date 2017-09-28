<?php get_header(); ?>

<div class="wrap">
    <div class="container">
      <div class="content row">
        <div class="posts col-sm-8">
          <section>
            <h1>/ <span class="active"><?php echo wp_title(''); ?></span> /</h1>
            <?php
              $id=9;
              $recent = new WP_Query("cat=$id");
              while($recent->have_posts()) : $recent->the_post();
            ?>
            <h2><?php the_title(); ?></h2>
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
            <?php
              echo the_posts_navigation(array(
                'prev_text'          => __( '<p style="float: left;"><- К старым записям</p>' ),
                'next_text'          => __( '<p style="float: right;">К новым записям -></p>' ),
                'screen_reader_text' => __( 'Навигация по записям' ),
              ));
            ?>
          </section>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
