<?php get_header(); ?>
        <main class="main">
          <section class="singe">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="content__img">
                <?php the_post_thumbnail(); ?>
                <div class="img-background"></div>
              </div>

              <div class="content__txt">

            <?php $custom_fields = get_post_custom(get_the_ID()); ?>
              <?php if($custom_fields['place'][0]) : ?>

                <div class="txt__bloks">
                  <p class="txt pd-top">
                    <i class="fa fa-home fa-2x left" aria-hidden="true"></i>
                    <?php echo $custom_fields['place'][0]; ?>
                  </p>
                </div>

              <?php endif; ?>

              <?php if($custom_fields['date'][0]) : ?>

                <div class="txt__bloks">
                  <p class="txt pd-top">
                    <i class="fa fa-file-text fa-2x left pd-top" aria-hidden="true"></i>
                    <?php echo $custom_fields['date'][0]; ?>
                  </p>
                </div>

              <?php endif; ?>

              <?php if($custom_fields['tiket'][0]) : ?>

                <div class="txt__bloks">
                  <p class="txt pd-top">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
                    <?php echo $custom_fields['tiket'][0]; ?>
                  </p>
                </div>

              <?php endif; ?>
              </div>

            <?php the_content(); ?>

            <?php endwhile; ?>

            <?php else: ?>

            <?php endif; ?>

          </section>
        </main>
      </div>
    </div>
  </div>
<?php get_footer(); ?>