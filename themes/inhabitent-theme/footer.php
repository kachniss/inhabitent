<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="widget-area">
						<h3>Contact Info</h3>
						<p>
							<i class="fas fa-envelope fa-lg" aria-hidden="true"></i>
							<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
						</p>
						<p>
							<i class="fas fa-phone"  aria-hidden="true"></i>
							<a href="tel:7784567891">778-456-7891</a>
						</p>
						<p>
							<i class="fab fa-facebook-square fa-lg"></i>
							<i class="fab fa-twitter-square fa-lg"></i>
							<i class="fab fa-google-plus-square fa-lg"></i>
						</p>
					</div>

					<?php
						/** add footer sidebar
						 * source https://www.tipsandtricks-hq.com/how-to-add-widgets-to-wordpress-themes-footer-1033 05/15/2018
						 */
						if(is_active_sidebar('footer-sidebar')){
							dynamic_sidebar('footer-sidebar');
						}
					?>

					<div class="footer-logo">
						<a href="/inhabitent" rel="home">
							<img src= <?php echo esc_url( get_template_directory_uri() ) . "/assets/images/logos/inhabitent-logo-text.svg"; ?> alt="Inhabitent Logo Text"/>
						</a>
					</div>
					<div class="copyright">Copyright &copy; 2018 Inhabitent</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
