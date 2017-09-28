<?php get_header(); ?>

<div class="wrap">
    <div class="container">
      <div class="content row">
        <div class="posts col-sm-8">
          <section>
            <h1>/ <span class="active"><?php wp_title(''); ?></span> /</h1>
            <article>
                <script type="text/javascript" src="https://kolpino-dkocentr.ru/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7.8"></script>
                <script type="text/javascript" src="https://kolpino-dkocentr.ru/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-ru.js?ver=2.7.8"></script>
                <script type="text/javascript" src="https://kolpino-dkocentr.ru/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.7.8"></script>
                <script type="text/javascript">
                  var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"https://kolpino-dkocentr.ru/wp-admin/admin-ajax.php","loadingTrans":"Загрузка..."};
                </script><script type="text/javascript" src="https://kolpino-dkocentr.ru/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.7.8"></script>

                <div class="widget_wysija_cont html_wysija"><div id="msg-form-wysija-html58c470af67ce7-1" class="wysija-msg ajax"></div>
                  <form id="form-wysija-html58c470af67ce7-1" method="post" action="#wysija" class="widget_wysija html_wysija">
                    <p class="wysija-paragraph">
                      <label>Имя <span class="wysija-required">*</span></label>
                      <input type="text" name="wysija[user][firstname]" class="wysija-input form-control" title="Имя"  value="" required />
                    </p>
                    <p class="wysija-paragraph">
                      <label>Адрес электронной почты <span class="wysija-required">*</span></label>
                      <input type="text" name="wysija[user][email]" class="wysija-input form-control" title="Адрес электронной почты"  value="" />
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
            </article>
          </section>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
