<?php get_header(); ?>

<div class="wrap">
  <div class="container">
    <div class="content row">
      <div class="posts col-sm-8">
        <section>
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <h2>
            <?php single_post_title(); ?>
          </h2>
          <p style="color:#888;">
            <span class="fa fa-calendar"></span>
            <?php echo get_the_date('d.m.Y'); ?>
            <span style="color:#888;" class="fa fa-clock-o"> </span>
            <?php echo get_the_time(); ?>
            <span class="fa fa-comment-o" style="color:#888;"> </span>
            <?php number_of_comments(); ?> </p>
          <?php
              if (has_post_thumbnail()) {
                echo get_the_post_thumbnail($id, array(800, 532), array('class' => 'img-responsive'));
              }
            ?>
            <article>
              <?php the_content(); ?>
            </article>
            <hr id="hr-subscribe" />
            <div class="jumbotron" id="subscribe">
              <button type="button" class="close" aria-label="Close" data-toggle="tooltip" title="Скрыть форму на месяц">
                <span aria-hidden="true">&times;</span>
              </button>
              <script>
                var close = document.getElementsByClassName('close')[0];
                var subscribe = document.getElementById('subscribe');
                close.addEventListener('click', function() {
                  subscribe.style.display = 'none';
                });
              </script>
              <h2>Подписаться на новостную рассылку</h2>

              <script>
                $(function () {
                  var limit = 30 * 24 * 3600 * 1000;
                  var localStorageInitTime = localStorage.getItem('localStorageInitTime');
                  if (localStorageInitTime === null) {
                    localStorage.setItem('localStorageInitTime', +new Date());
                  } else if (+new Date() - localStorageInitTime > limit) {
                    localStorage.clear();
                    localStorage.setItem('localStorageInitTime', +new Date());
                  }

                  if (localStorage.getItem('subscribeHidden')) {
                    $('#subscribe, #hr-subscribe').hide();
                  } else {
                    $('.close').click(function () {
                      localStorage.setItem('subscribeHidden', true);
                      $('#subscribe, #hr-subscribe').hide();
                    })
                  }
                })
              </script>

              <script type="text/javascript" src="https://kolpino-dkocentr.ru/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7.8"></script>
              <script type="text/javascript" src="https://kolpino-dkocentr.ru/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-ru.js?ver=2.7.8"></script>
              <script type="text/javascript" src="https://kolpino-dkocentr.ru/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.7.8"></script>
              <script type="text/javascript">
                var wysijaAJAX = {
                  "action": "wysija_ajax",
                  "controller": "subscribers",
                  "ajaxurl": "https://kolpino-dkocentr.ru/wp-admin/admin-ajax.php",
                  "loadingTrans": "Загрузка..."
                };
              </script>
              <script type="text/javascript" src="https://kolpino-dkocentr.ru/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7.8"></script>

              <div class="widget_wysija_cont html_wysija">
                <div id="msg-form-wysija-html58c470af67ce7-1" class="wysija-msg ajax"></div>
                <form id="form-wysija-html58c470af67ce7-1" method="post" action="#wysija" class="widget_wysija html_wysija">
                  <p class="wysija-paragraph">
                    <label>Имя
                      <span class="wysija-required">*</span>
                    </label>
                    <input type="text" name="wysija[user][firstname]" class="wysija-input form-control" title="Имя" value="" required />
                  </p>
                  <p class="wysija-paragraph">
                    <label>Адрес электронной почты
                      <span class="wysija-required">*</span>
                    </label>
                    <input type="text" name="wysija[user][email]" class="wysija-input form-control" title="Адрес электронной почты" value=""
                    />
                  </p>
                  <div class="">
                    <input class="wysija-submit wysija-submit-field btn" type="submit" value="Подписаться!" />
                  </div>

                  <input type="hidden" name="form_id" value="1" />
                  <input type="hidden" name="action" value="save" />
                  <input type="hidden" name="controller" value="subscribers" />
                  <input type="hidden" value="1" name="wysija-page" />
                  <input type="hidden" name="wysija[user_list][list_ids]" value="1" />
                </form>
              </div>
            </div>
            <?php comments_template(); ?>
            <?php endwhile; endif; ?>
        </section>
      </div>

      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>