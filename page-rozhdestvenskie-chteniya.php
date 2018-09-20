<?php get_header(); ?>
<div class="wrap">
    <div class="container">
      <div class="content row">
        <div class="posts col-sm-8">
          <section>
          	<?php query_posts('category_name=rozhdes'); ?>
            
            <h1>/ <a href="/">Главная</a> / <span class="active">Рожденственские рождения</span> /</h1>
            
            <h2><a href="https://kolpino-dkocentr.ru/programma-rozhdestvenskih-chtenij" style="color: #000; text-decoration: none;">Программа Рождественских чтений</a></h2>

            <article>
              <p>Здравствуйте, уважаемые коллеги!</p>
              <p>Поздравляю Вас с окончанием первой четверти учебного года!</p>
              Конечно, каникулы - это не отпуск, но это время остановиться,  вздохнуть, осмыслить, чтобы приступить к новой четверти с новыми силами, обновленным умом и мудрым сердцем. </p>
              <p>Для этого в Колпинском районе проводятся Рождественский чтения, которые вмещают в себя множество различных мероприятий, центральным из которых является педагогическая конференция 2 ноября в 12.00 в ДТДиМ, которая организуется, в первую очередь, для педагогов ОРКСЭ и всех тех, кто занимается в ОУ духовно-нравственным воспитанием подрастающего поколения.</p>
              <p>Главными докладчиками чтений станут Любовь Яковлевна Ушакова - научный сотрудник Третьяковской галереи и Лилия Евсеева - певица, композитор и исполнитель. На секции для ДОУ и начальной школы ожидается выступление Натальи Владимировны Ереминой, ст.преподавателя АППО, специалиста в области этнопедагогики.</p>
              <p>В свободное от работы время вместе со своими детьми и внуками посмотрите чудесные мультфильмы, которые дают пищу для ума и души. Замечательную подборку выложил сайт журнала <a href="http://foma.ru/30-hristianskih-multfilmov.html">"ФОМА"</a>.</p>

              <p>До встречи на мероприятиях Рождественских чтений и педагогической конференции!</p>
              <p><a href="https://kolpino-dkocentr.ru/programma-rozhdestvenskih-chtenij">Посмотреть программу</a></p>
            </article>




            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            
            <h2><a href="<?php the_permalink(); ?>" style="color: #000; text-decoration: none;"><?php the_title(); ?></a></h2>
            <p style="color:#888;"><span class="fa fa-calendar"></span> <?php echo get_the_date('d.m.Y'); ?> <span style="color:#888;" class="fa fa-clock-o"> </span> <?php echo get_the_time(); ?> <span class="fa fa-comment-o" style="color:#888;"> </span> <?php number_of_comments(); ?> </p>
            <?php
              if (has_post_thumbnail()) {
                echo get_the_post_thumbnail($id, array(800, 532), array('class' => 'img-responsive'));
              }
            ?>
            <article>
            	<?php the_content('Читать далее...'); ?>
            </article>
            <?php endwhile; endif; ?>

            

            <!--?php
              }
              wp_reset_postdata();

              $big = 999999999;

              echo '<nav aria-label="...">';

              echo paginate_links( array(
              	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              	'format' => '?paged=%#%',
              	'current' => max( 1, get_query_var('paged') ),
              	'total' => $the_query->max_num_pages,
                'prev_text' => '<span aria-hidden="true">&larr;</span> К старым записям',
                'next_text' => 'К новым записям <span aria-hidden="true">&rarr;</span>',
                'type' => 'list'
              ) );

              echo '</nav>';
            ?>
            <script>
              $(function() {
                  $('ul.page-numbers').removeClass('page-numbers').addClass('pager');
              })
            </script-->
          </section>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
