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
            <h4>ДОПОЛНИТЕЛЬНО</h4>
            <?php wp_nav_menu(array('menu' => 'Футер Дополнительно', 'menu_class' => 'list-unstyled')); ?>
          </div>
          <div class="col-sm-2 copyrt">
            <p>&copy; Центр духовной культуры и образования Колпинского района <?php echo date('Y'); ?> Все права защищены</p>
          </div>
          <div class="col-sm-2 col-sm-offset-1 deskt">
            <img src="/wp-content/themes/kolpino-cdko/img/kolpino.png" class="img-responsive" alt=""/>
          </div>
      </div>
    </footer>
  </body>
  <script src="/wp-content/themes/kolpino-cdko/js/days.js"></script>
  <script src="/wp-content/themes/kolpino-cdko/js/bootstrap.min.js"></script>
</html>
