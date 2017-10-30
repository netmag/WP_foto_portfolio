<?php
/*
Template Name: Шаблон страницы контактов
*/

?>
<?php get_header(); ?>
        <main class="main">
          <section class="main__content">
            <article class="content content__about">

            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

              <h2 class="content__capture content__capture__about">
                <?php the_title(); ?>
              </h2>
              <hr>
              <?php the_content(); ?>


            <?php endwhile; ?>

            <?php else: ?>

            <?php endif; ?>

            </article>

            <article class="content">

              <div class="content__img">
              <?php the_post_thumbnail(); ?>
              <div class="img-background"></div>
              </div>

              <h2 class="content__capture">
                Contact Details
              </h2>
              <hr>
              <div class="content__txt">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php $contact_custom_fields = get_post_custom(get_the_ID()); ?>

                  <?php if($contact_custom_fields['adress'][0]) : ?>
                  <div class="txt__bloks txt">
                    <?php echo $contact_custom_fields['adress'][0]; ?>
                  </div>
                  <?php endif; ?>


                  <?php if($contact_custom_fields['email'][0]) : ?>
                  <div class="txt__bloks txt">
                    <?php echo $contact_custom_fields['email'][0]; ?>
                  </div>
                  <?php endif; ?>


                  <?php if($contact_custom_fields['phone'][0]) : ?>
                  <div class="txt__bloks txt">
                    <?php echo $contact_custom_fields['phone'][0]; ?>
                  </div>
                  <?php endif; ?>


                  <?php if($contact_custom_fields['register'][0]) : ?>
                  <div class="txt__bloks txt">
                    <?php echo $contact_custom_fields['register'][0]; ?>
                  </div>
                  <?php endif; ?>


                  <?php if($contact_custom_fields['vat'][0]) : ?>
                  <div class="txt__bloks txt">
                    <?php echo $contact_custom_fields['vat'][0]; ?>
                  </div>
                  <?php endif; ?>

                <?php endwhile; ?>

                <?php else: ?>

                <?php endif; ?>


              </div>
            </article>
          </section>
        </main>
      </div>
    </div>
  </div>
<?php get_footer(); ?>