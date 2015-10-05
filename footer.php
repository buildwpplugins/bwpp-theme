<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BWPP
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bwpp' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bwpp' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Build WP Plugins Made with %s by %s', 'bwpp' ), '<i class="fa fa-heart"></i>', '<a href="http://daronspence.com/" rel="designer">Daron Spence</a>' ); ?>
      <!-- <span class="sep"> | </span> &copy; <?php echo current_time('Y'); ?> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Noto+Sans:700:latin', 'Merriweather+Sans:300,700:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
</body>
</html>
