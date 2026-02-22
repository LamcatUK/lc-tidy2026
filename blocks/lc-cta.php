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
					<h2 class="h1 has-white-color">Ready to clear the clutter?</h2>
					<div class="has-700-font-size has-light-500-color">
						Fast, reliable junk removal across the Isle of Man.<br>
						Call or message us today for a free, no-obligation quote.
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex flex-column align-items-center gap-3">
				<a class="button button--lg w-100 text-center" href="tel:<?= parse_phone( get_field( 'contact_phone' ) ); ?>"><i class="fa-solid fa-phone me-2"></i> Call Now</a>
				<a class="d-sm-none button button--lg w-100 has-whatsapp-background-color text-center" href="tel:<?= parse_phone( get_field( 'contact_phone' ) ); ?>"><i class="fa-brands fa-whatsapp me-2"></i> WhatsApp Us</a>
				<a class="button button--lg button--outline button--outline-white w-100 text-center" href="/contact/">Get a Free Quote</a>
			</div>
		</div>
	</div>
</section>