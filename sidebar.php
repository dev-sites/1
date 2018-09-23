<aside class="col-sm-4">
  <?php get_template_part('template-parts/days'); ?>
  <div class="sidebar-module">
    <h2>Рубрики</h2>
    <?php $args = array(
      'title_li' => '',
      'style'    => 'none'
    );
    wp_list_categories( $args ); ?>
    <?php # wp_nav_menu(array('menu' => 'Сайдбар Рубрики', 'menu_class' => 'list-unstyled')); ?>
  </div>
  <div class="sidebar-module">
    <h2>ВКонтакте</h2>
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?142"></script>
    <div id="vk_groups"></div>
    <script type="text/javascript">
    VK.Widgets.Group("vk_groups", {mode: 3, width: "auto"}, 142583894);
    </script>
  </div>
  <div class="sidebar-module">
    <h2>Социальное служение</h2>
    <a class="twitter-timeline" data-lang="ru" data-chrome="noheader nofooter" data-tweet-limit="3" href="https://twitter.com/sHMQTEJZaNBtaPg"></a>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
  <div class="sidebar-module">
    <a href="http://yasobe.ru/na/cdko_kolp#form_submit" target="_blank" class="btn btn-default" role="button">ПОЖЕРТВОВАТЬ</a>
  </div>
</aside>
