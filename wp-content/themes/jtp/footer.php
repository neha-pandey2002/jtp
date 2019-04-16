<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer1" role="contentinfo">
			<div class="foot-info-area">
			<div class="container">
			<div class="row">
			<div class="col-md-3 menu-foot">
       <?php get_sidebar( 'main' ); ?>
     </div>
     <div class="col-md-3 fa-foot">
     	<h1 class="foot-fa">Contact with us! </h1>
       <a href="#"><i class="fa fa-instagram"></i></a>
       <a href="#"><i class="fa fa-facebook"></i></a>

     </div>
     <div class="col-md-6 address-foot">
       <h1 class="footer-address">Cronulla Gaurmet Grocer<br>
       	44 Cronulla St,<br>
       	Cronulla NSW 2230<br>
       (02) 9523 2749</h1>
     </div>
   </div>
 </div>
</div>
      <div class="row-copy">
		
				
				<a href="<?php echo esc_url( __( 'https://www.rotapix.com/', 'twentythirteen' ) ); ?>" class="imprint">
					<?php printf( __( 'Copyright @ 2019 Cronulla Gaurmet Grocer by %s', 'Rotapix' ), 'Rotapix' ); ?>
				</a>
			
		</div>

		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
