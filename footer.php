  <footer class="footer">
    <div class="wrapper">
      <img class="footer__logo" src="<?php bloginfo('template_url'); ?>/img/Logo-sm.png" alt="logo">
      <p class="footer__copy">
        &copy; copyright 2017
        <a href="www.yoururl.com">www.yoururl.com</a>
      </p>
      <?php if (!dynamic_sidebar('footer_social')):
        endif;
      ?>
    </div>
  </footer>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.8.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>