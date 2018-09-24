<article class="post-wrapper">
    <?php
    if (has_post_thumbnail()) {
      $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      echo '<a class="post__image" style="background-image: url('. $url.')" href="' . get_the_permalink() . '"></a>';
      #echo get_the_post_thumbnail($id, '', array('class' => 'img-responsive'));
    }
    ?>
  <div class="post">
    <h2 class="post__title"><a href="<?php the_permalink(); ?>" style="color: #000; text-decoration: none;">
      <?php the_title(); ?>
    </a></h2>
    <p style="color:#888;"><span class="fa fa-calendar"></span> <?php echo get_the_date('d.m.Y'); ?> <span style="color:#888;" class="fa fa-clock-o"> </span> <?php echo get_the_time(); ?> <span class="fa fa-comment-o" style="color:#888;"> </span> <?php number_of_comments(); ?> </p>
    <div class="post__content">
      <?php the_content(' '); ?>
    </div>
    <a href="<?php the_permalink(); ?>">Читать далее</a>
  </div>
</article>