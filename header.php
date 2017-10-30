<!DOCTYPE html>
<html lang="ru">
<head>
  <title><?php bloginfo('name'); wp_title(); ?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style2.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/font-awesome/css/font-awesome.min.css">

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body>
  <div class="container">
    <div class="container__gradient">
      <div class="wrapper">
        <header class="header">
          <div class="logo">
            <a href="https://photopholio.000webhostapp.com/">
              <img src="<?php bloginfo('template_url'); ?>/img/Logo.png" alt="">
            </a>
          </div>
          <nav class="header_menu">
          <?php
            wp_nav_menu(array(
                'theme_location' => 'menu',
                'container' => ''
              ))
          ?>
          </nav>
        </header>