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
    <div class="azbyka-holidays"></div>

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
          var holidays = 'https://azbyka.ru/days/api/holidays/2017-10-30.json';

          $('.image').html('<a href = "' + href + '"><img src="' + src + '" title="' + title + '"/></a>');
          $('.image img').addClass('img-responsive center-block');
          $('.image img').height(160);
          $('.holidays').html(holidays);
        });
      })
    </script>
  </div>