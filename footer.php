<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage WPwebstarterkit
 * @since WPwebstarterkit 1.0
 */
?>
    </main>
  <footer id="colophon" class="site-footer" role="contentinfo">
    <?php get_sidebar( 'main' ); ?>
  </footer><!-- #colophon -->
    <!-- build:js scripts/main.min.js -->
    <script src="scripts/main.js"></script>
    <!-- endbuild -->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-XXXXX-X');
      ga('send', 'pageview');
    </script>
    <!-- Built with love using Web Starter Kit -->
    <?php wp_footer(); ?>
  </body>
</html>