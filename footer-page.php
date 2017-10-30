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
<?php wp_footer(); ?>
</body>
</html>