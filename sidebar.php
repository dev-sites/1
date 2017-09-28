<aside class="col-sm-4">
  <div class="sidebar-module">
    <script>
    function ucfirst(str) {
      var first = str.charAt(0).toUpperCase();
      return first + str.substr(1);
    }
    function getRandomArbitary(min, max) {
      return Math.floor (Math.random() * (max - min) + min);
    }
    </script>
    <h2>СЕГОДНЯ</h2>
    <div class="image"></div>
    <div class="azbyka-saints"></div>

    <script>
      $(function() {
        $.getJSON('https://azbyka.ru/days/api/saints.json', function(data) {

          var id = getRandomArbitary(0, data.length);
          while (data[id].imgs.length < 1) {
              var id = getRandomArbitary(0, data.length);
          }

          var img = getRandomArbitary(0, data[id].imgs.length);
          while (data[id].imgs.length < 1) {
            var img = getRandomArbitary(0, data[id].imgs.length);
          }

          console.log(id);
          console.log(img);
          console.log(data[id].imgs[img].image);

          var title;

          if (data[id].type_of_sanctity_complete == null) {
            title = '';
          } else {
            title = ucfirst(data[id].type_of_sanctity_complete) + ' ' + data[id].title;
          }

          var src = 'https://azbyka.ru/days/assets/img/saints/' + data[id].id + '/' + data[id].imgs[img].image;
          var href = 'https://azbyka.ru/days/sv-' + data[id].uri;

          $('.image').html('<a href = "' + href + '"><img src="' + src + '" title="' + title + '"/></a>');
          $('.image img').addClass('img-responsive center-block');
          $('.image img').height(160);
        });
      })
    </script>
  </div>
  <div class="sidebar-module">
    <h2>РУБРИКИ</h2>
    <?php wp_nav_menu(array('menu' => 'Сайдбар Рубрики', 'menu_class' => 'list-unstyled')); ?>
  </div>
  <div class="sidebar-module">
    <h2>ВКОНТАКТЕ</h2>
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?142"></script>
    <div id="vk_groups"></div>
    <script type="text/javascript">
    VK.Widgets.Group("vk_groups", {mode: 3, width: "auto"}, 142583894);
    </script>
  </div>
  <div class="sidebar-module">
    <h2>СОЦИАЛЬНОЕ СЛУЖЕНИЕ</h2>
    <a class="twitter-timeline" data-lang="ru" data-chrome="noheader nofooter" data-tweet-limit="3" href="https://twitter.com/sHMQTEJZaNBtaPg"></a>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
  <div class="sidebar-module">
    <a href="http://yasobe.ru/na/cdko_kolp#form_submit" target="_blank" class="btn btn-default" role="button">ПОЖЕРТВОВАТЬ</a>
  </div>
</aside>
