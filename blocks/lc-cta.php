<?php
/**
 * Block template for LC CTA.
 *
 * @package lc-tidy2026
 */

defined( 'ABSPATH' ) || exit;

?>
<section class="cta has-dark-700-background-color py-5">
	<div class="container py-5">
		<div class="row g-5 align-items-center">
			<div class="col-md-8">
				<div class="cta__content">
					<h2 class="h1 has-white-color"><?= esc_html( get_field( 'cta_title' ) ); ?></h2>
					<div class="has-700-font-size has-light-500-color">
						<?= wp_kses_post( get_field( 'content' ) ); ?>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex flex-column align-items-center gap-3">
				<a class="button button--lg w-100 text-center" href="tel:<?= parse_phone( get_field( 'contact_phone', 'option' ) ); ?>"><i class="fa-solid fa-phone me-2"></i> Call Now</a>
				<?= do_shortcode( '[whatsapp_link class="d-sm-none button button--lg has-whatsapp-background-color" icon=true text="WhatsApp Us"]'); ?>
				<a class="button button--lg w-100 text-center" href="mailto:<?= antispambot( get_field( 'contact_email', 'option' ) ); ?>"><i class="fa-solid fa-envelope me-2"></i> Email Us</a>
				<a class="button button--lg button--outline button--outline-white w-100 text-center" href="/contact/">Get a Free Quote</a>
			</div>
		</div>
	</div>
</section>