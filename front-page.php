<?php get_header(); ?>

<div class="wrap">
    <div class="container">
      <div class="content row">
        <div class="col-sm-12 posts col-md-7 col-md-offset-1">
            <h1 class="blog-breadcrumb"><span class="active">Главная</span> /</h1>
            <?php
            if (have_posts()):
              echo '<div id="ajax">';
              while (have_posts()): the_post();
                get_template_part('template-parts/post');
              endwhile;
              echo '</div>';
            endif; load_more_button(); ?>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <!-- End Content Wrapper-->

<?php get_footer(); ?>
