<?php

  /* меню */
  register_nav_menu('menu', 'Primary menu');

  /* виджеты */
    /* слайдер */
  register_sidebar(array(
    'name' => 'Слайдер марок',
    'id' => 'slider_mark',
    'before_widget' => '',
    'after_widget' => ''
  ));

    /* футер */
  register_sidebar(array(
    'name' => 'Футер',
    'id' => 'footer_social',
    'before_widget' => '<div class="footer__social">',
    'after_widget' => '</div>'
  ));

  /* миниатюры */
  add_theme_support('post-thumbnails');


?>