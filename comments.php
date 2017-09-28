<hr />
<?php
if (comments_open()) {
  echo "
  <h2>Комментарии</h2>";

  if (get_comments_number() == 0) {
    echo "<h3>Комментариев пока нет. Оставьте первый комментарий.</h3><br />";
  } else {
    echo "<h3>";
    number_of_comments();
    echo ":</h3>";
  }

  echo "<ul class='comments'>";
    wp_list_comments();
  echo "</ul>";
  $args = array(
  	'fields' => array(
  		'author' => '<p class="comment-form-author"><label for="author">Имя: </label> <input class="form-control" id="author" name="author" type="text" value="" size="30" required /></p>',
  		'email' => '<p class="comment-form-email"><label for="email">Email: </label> <input class="form-control" id="email" name="email" type="text" value="" size="30" required /></p>',
  	),

    'comment_notes_before' => '<p class="comment-notes">Все поля обязательны для заполнения. Ваш email не будет опубликован.</p>',

    'comment_notes_after' => '',

    'comment_field' => '<p class="comment-form-comment"><label for="comment">Комментарий:</label> <textarea class="form-control" id="comment" name="comment" cols="85" rows="6" aria-required="true"></textarea></p>',

    'class_submit' => 'btn btn-primary btn-sm'
  );

  comment_form($args);
}
?>
<script>
  $(function() {
    $('.comments, .children').css('list-style', 'none');
    //$('.reply').addClass('pull-right');
    $('.children, .comment-body').css('margin-top', '20px');
  })
</script>
