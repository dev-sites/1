<?php get_header(); ?>

<div class="wrap">
    <div class="container">
      <div class="content row">
        <div class="posts col-sm-8">
          <section>
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <h1>/ <a href="/">Главная</a> / <span class="active"><?php the_title(); ?></span> /</h1>
            <?php
              if (has_post_thumbnail()) {
                echo get_the_post_thumbnail($id, array(800, 532), array('class' => 'img-responsive'));
              }
            ?>
            <article>
            	<?php the_content(); ?>
            </article>
            <?php endwhile; endif; ?>
          </section>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
