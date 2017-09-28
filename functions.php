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

  function wp_corenavi() {
    global $wp_query;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['current'] = $current;

    $total = 1;
    $a['mid_size'] = 0;
    $a['end_size'] = 0;
    $a['prev_text'] = '<li class="previous"><a href="' . paginate_links($a) . '"><span aria-hidden="true">&larr;</span> К старым записям</a></li>';
    $a['next_text'] = '<li class="next"><a href="'. paginate_links($a). '">К новым записям <span aria-hidden="true">&rarr;</span></a></li>';

    if ($max > 1) echo '<nav aria-label="..."><ul class="pager">';
    if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
    if ($max > 1) echo '</ul></nav>';
  }

  function pages_nav() {
    global $wp_query;

    $args = array(
    	'base'         => '%_%',
    	'format'       => '?page=%#%',
    	'total'        => $wp_query->max_num_pages,
    	'current'      => max(1, get_query_var('paged')),
    	'show_all'     => False,
    	'end_size'     => 1,
    	'mid_size'     => 2,
    	'prev_next'    => True,
    	'prev_text'    => __('« Previous'),
    	'next_text'    => __('Next »'),
    	'type'         => 'html',
    	'add_args'     => False,
    	'add_fragment' => '',
    	'before_page_number' => '',
    	'after_page_number'  => ''
    );

    echo paginate_links($args);

    // global $wp_query;
    // $max = $wp_query->max_num_pages;
    //
    // if (!get_query_var('paged')) $current = 1;
    //
    // $a['total'] = $max;
    // $a['current'] = $current;
    //
    // if ($max > 1) echo "<p>Страница " . $current . " из " . $max . "</p>";
    // if ($max > 1) echo '<nav aria-label="..."><ul class="pager">';
    // if ($max > 1) echo "</ul></nav>";
  }
?>
