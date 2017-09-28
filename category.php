<?php get_header(); ?>

<div class="wrap">
    <div class="container">
      <div class="content row">
        <div class="posts col-sm-8">
          <section>
            <h1>/ <a href="/">Главная</a> / <span class="active"><?php echo (wp_title('')); ?></span> /</h1>
            <?php
              $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

              $args = array(
              'post_type' => 'post',
              'cat' => '11',
              'paged' => $paged,
              );

              $the_query = new WP_Query($args);
              while($the_query->have_posts()){ $the_query->the_post();
            ?>
            <h2><a href="<?php the_permalink(); ?>" style="color: #000; text-decoration: none;"><?php the_title(); ?></a></h2>
            <p style="color:#888;"><span class="fa fa-calendar"></span> <?php echo get_the_date('d.m.Y'); ?> <span style="color:#888;" class="fa fa-clock-o"> </span> <?php echo get_the_time(); ?> <span class="fa fa-comment-o" style="color:#888;"> </span> <?php number_of_comments(); ?> </p>
            <?php
              if (has_post_thumbnail()) {
                echo get_the_post_thumbnail($id, array(800, 532), array('class' => 'img-responsive'));
              }
            ?>
            <article>
            	<?php the_content('Читать далее... ->'); ?>
            </article>

            <?php
              }
              wp_reset_postdata();

              $big = 999999999;

              echo '<nav aria-label="...">';

              echo paginate_links( array(
              	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              	'format' => '?paged=%#%',
              	'current' => max( 1, get_query_var('paged') ),
              	'total' => $the_query->max_num_pages,
                'prev_text' => '<span aria-hidden="true">&larr;</span> К старым записям',
                'next_text' => 'К новым записям <span aria-hidden="true">&rarr;</span>',
                'type' => 'list'
              ) );

              echo '</nav>';
            ?>
            <script>
              $(function() {
                  $('ul.page-numbers').removeClass('page-numbers').addClass('pager');
              })
            </script>
          </section>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
