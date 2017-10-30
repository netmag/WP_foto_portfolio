<?php get_header(); ?>
        <main class="main">

        <section class="logo_bg d-carousel">
            <?php if (!dynamic_sidebar('slider_mark')): ?>
            <?php  endif; ?>
          </section>

          <div class="slider">
            <div class="viewport">
              <ul class="slidewrapper">
                <li class="slide">
                  <img src="img/pierre/photo--full-1.jpg" alt="1" class="slide-img">
                </li>
                <li class="slide">
                  <img src="img/pierre/photo--full-2.jpg" alt="2" class="slide-img">
                </li>
                <li class="slide">
                  <img src="img/pierre/photo--full-3.jpg" alt="3" class="slide-img">
                </li>
                <li class="slide">
                  <img src="img/pierre/photo--full-4.jpg" alt="4" class="slide-img">
                </li>
              </ul>
              <div class="close-btn">
                <i class="fa fa-window-close fa-5x" aria-hidden="true"></i>
              </div>
              <div class="slider-btns">
                <div class="prev-btn"></div>
                <div class="next-btn"></div>
            </div>
            </div>
          </div>

          <section class="main__content">
            <article class="content__gallery">
              <ul>

              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li class="gallery__preview">
                  <?php the_post_thumbnail(); ?>
                  <div class="img-background"></div>
                </li>

              <?php endwhile; ?>

              <?php else: ?>

              <?php endif; ?>

              </ul>

            </article>

            <article class="content">
              <?php $args = array(
                                'post_type' => 'post',
                                'orderby' => 'rand',
                                'category_name' => 'photo-shoot, exhibitions',
                                'posts_per_page' => 1
                                );
              $rand_post = new WP_Query($args);
              if ($rand_post -> have_posts()) : while ($rand_post ->have_posts()) : $rand_post -> the_post();
            ?>
              <div class="content__img abt2">
                <?php the_post_thumbnail(); ?>
              </div>
              <a href=" <?php the_permalink(); ?> ">
                <h2 class="content__capture">
                  <?php the_title(); ?>
                </h2>
              </a>
              <hr>
              <?php the_excerpt(); ?>
              <a href=" <?php the_permalink(); ?> ">
                <button class="content__btn">
                  read more
                </button>
              </a>
            <?php endwhile; ?>

            <?php else: ?>

            <?php endif; ?>

            </article>
          </section>
        </main>
      </div>
    </div>
  </div>
<?php get_footer(); ?>