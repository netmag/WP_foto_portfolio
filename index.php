<?php get_header(); ?>
        <main class="main">
          <section class="logo_bg d-carousel">
          <?php if (!dynamic_sidebar('slider_mark')):
            endif;
          ?>
          </section>
          <section class="main__content">
          <?php
            $args = array(
              'post_type' => array('post', 'page'),
              'meta_key' => 'order',
              'orderby' => 'meta_value_num',
              'order' => 'ASC',
              'post_per_page' => 3
              );
            $page_index = new WP_Query($args);
            if ($page_index->have_posts()) : while ($page_index->have_posts()) : $page_index->the_post();
          ?>

            <article class="content">
              <div class="content__img">
                <?php the_post_thumbnail('full'); ?>
                <div class="img-background"></div>
              </div>
              <a href=" <?php the_permalink(); ?> ">
                <h2 class="content__capture">
                  <?php echo get_post_meta(get_the_ID(), 'title', true); ?>
                </h2>
              </a>
              <hr>
              <?php the_excerpt(); ?>

              <a href=" <?php the_permalink(); ?> ">
                <button class="content__btn">
                  read more
                </button>
              </a>
            </article>

          <?php endwhile; ?>

          <?php  else: ?>
            <div>
              <p>
                Добавьте к страницам и записям произвольные поля title и order. Title - значение ЗАГОЛОВОК, order - значение число (используется в сортировке).
              </p>
            </div>

          <?php  endif; ?>

          </section>
        </main>
      </div>
    </div>
  </div>
<?php get_footer(); ?>