<?php
  if (function_exists('add_theme_support')) {
	add_theme_support('menus');
  }

  add_theme_support('post-thumbnails');

  function add_image_responsive_class($content) {
   global $post;
   $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
   $replacement = '<img$1class="$2 img-responsive center-block img-thumbnail"$3>';
   $content = preg_replace($pattern, $replacement, $content);
   return $content;
  }

  add_filter('the_content', 'add_image_responsive_class');

  function number_of_comments() {
    $number = get_comments_number();
    if ($number % 10 == 1) {
      echo $number . " комментарий";
    } elseif ($number % 10 == 2 || $number % 10 == 3 || $number % 10 == 4) {
      echo $number . " комментария";
    } else {
      echo $number . " комментариев";
    }
  }

  function check_comments_open($open, $post_id) {
  	$post = get_post( $post_id );
  	if ( 'page' == $post->post_type )
  		$open = false;
  	return $open;
  }

  add_filter('comments_open', 'check_comments_open', 10, 2);

  function sort_comment_fields($fields) {
      $new_fields = array();
      $myorder = array('author','email','comment');

      foreach($myorder as $key) {
          $new_fields[$key] = $fields[$key];
          unset($fields[$key]);
      }

      if ($fields)
          foreach($fields as $key => $val)
              $new_fields[$key] = $val;
      return $new_fields;
  }

  add_filter('comment_form_fields', 'sort_comment_fields');

  function cdko_scripts() {
    wp_enqueue_style( 'cdko-style', get_stylesheet_uri() );
  
    wp_enqueue_script( 'days-js', get_template_directory_uri() . '/js/days.js');
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');

  }
  add_action( 'wp_enqueue_scripts', 'cdko_scripts' );
?>
