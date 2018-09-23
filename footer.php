    <footer>
      <div class="wrapper-blocks container">
        <div class="col-sm-2 deskt">
          <h4>РАЗДЕЛЫ</h4>
          <?php wp_nav_menu(array('menu' => 'Футер Разделы', 'menu_class' => 'list-unstyled')); ?>
          </div>
          <div class="col-sm-2 deskt">
            <h4>ИНФО</h4>
            <?php wp_nav_menu(array('menu' => 'Футер Инфо', 'menu_class' => 'list-unstyled')); ?>
          </div>
          <div class="col-sm-3 deskt">
            <h4>РУБРИКИ</h4>
            <?php wp_nav_menu(array('menu' => 'Футер Рубрики', 'menu_class' => 'list-unstyled')); ?>
            <!-- Yandex.Metrika informer -->
            <a href="https://metrika.yandex.ru/stat/?id=43314499&amp;from=informer"
            target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/43314499/1_0_FFFFFFFF_EFEFEFFF_0_pageviews"
            style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" class="ym-advanced-informer" data-cid="43314499" data-lang="ru" /></a>
            <!-- /Yandex.Metrika informer -->
          </div>
          <div class="col-sm-2 copyrt">
            <p>&copy; Центр духовной культуры и образования Колпинского района 2017-<?php echo date('Y'); ?> Все права защищены</p>
          </div>
          <div class="col-sm-2 col-sm-offset-1 deskt">
            <img src="<?php bloginfo('template_url'); ?>/img/kolpino.png" class="img-responsive" alt=""/>
          </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
