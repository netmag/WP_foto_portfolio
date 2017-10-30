<?php get_header('page'); ?>
        <main class="main">
          <section class="main__content">

            <article class="content content__about">
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
              <h2 class="content__capture content__capture__about"><?php the_title(); ?></h2>
              <hr>
              <?php the_content(); ?>
            <?php endwhile; ?>

            <?php  else: ?>

            <?php  endif; ?>

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
              <div class="content__img">
                <?php the_post_thumbnail(); ?>
                <div class="img-background"></div>
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
<?php get_footer('page'); ?>