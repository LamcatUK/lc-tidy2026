<?php
/**
 * The template for displaying the footer
 *
 * @package lc-tidy2026
 */

defined( 'ABSPATH' ) || exit;

?>
</div> <!-- end page -->
<div id="footer-top"></div>
<footer class="footer">
	<div class="container pt-5 pb-4">
		<div class="row g-4 mb-4">
			<div class="col-lg-3 text-center text-lg-start">
				<img src="<?= esc_url( get_stylesheet_directory_uri() . '/img/tidy-solutions-logo--wh.svg' ); ?>"
					width=270 height=74 class="footer__logo" alt="Tidy Solutions Logo">
			</div>
			<div class="col-sm-6 col-lg-6 text-center text-lg-start">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer_menu1',
						'menu_class'     => 'cols-lg-2',
					)
				);
				?>
			</div>
			<div class="col-lg-3 text-center text-lg-start">
				<div class="mb-2"><i class="fa-solid fa-phone"></i>
					<?= do_shortcode( '[contact_phone]' ); ?>
				</div>
				<div class="mb-2"><i class="fa-solid fa-paper-plane"></i>
					<?= do_shortcode( '[contact_email]' ); ?>
				</div>
				<?php
				$socials = get_field( 'socials', 'option' );
				if ( $socials && ( ! empty( $socials['facebook_url'] ) || ! empty( $socials['instagram_url'] ) || ! empty( $socials['twitter_url'] ) || ! empty( $socials['pinterest_url'] ) || ! empty( $socials['youtube_url'] ) || ! empty( $socials['linkedin_url'] ) ) ) {
					?>
				Connect: <?= do_shortcode( '[social_icons]' ); ?>
					<?php
				}
				?>
			</div>
		</div>
	</div>
	<div class="colophon">
		<div class="container py-2">
			<div class="d-flex flex-wrap justify-content-between">
				<div class="col-md-6 text-center text-md-start">
					&copy; <?= esc_html( gmdate( 'Y' ) ); ?> Tidy Solutions.
				</div>
				<div class="col-md-6 d-flex align-items-center justify-content-end flex-wrap gap-1">
					<span><a href="/privacy-policy/">Privacy</a> &amp; <a href="/cookie-policy/">Cookies</a></span> |
					<span>Site by <a href="https://www.lamcat.co.uk/" rel="nofollow noopener"
							target="_blank">Lamcat</a></span>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php
wp_footer();
?>
</body>

</html>