<?php
/**
 * Block template for LC Hero.
 *
 * @package lc-tidy2026
 */

defined( 'ABSPATH' ) || exit;

?>
<section class="hero">
	<div class="container">
		<div class="row">
			<div class="col-md-6 my-auto">
				<h1 class="has-900-font-size fw-semibold mb-4"><span class="headline-underline"><?php the_field( 'title' ); ?></span></h1>
				<p class="has-700-font-size	mb-5"><?php the_field( 'intro' ); ?></p>
			</div>
			<div class="col-md-6 my-auto mb-4">
				<?= wp_get_attachment_image( get_field( 'image' ), 'full', false, array( 'class' => 'hero__image' ) ); ?>
			</div>
			<?php
			$usps = get_field( 'usps' );
			if ( $usps ) {
				?>
			<div class="col-12 my-auto d-flex flex-wrap justify-content-around gap-4 has-600-font-size hero__bar">
				<?php
				$usp_lines = preg_split( '/<br\s*\/?>/', $usps, -1, PREG_SPLIT_NO_EMPTY );
				foreach ( $usp_lines as $usp ) {
					$usp = trim( $usp );
					if ( empty( $usp ) ) {
						continue;
					}
					$parts = explode( ':', $usp, 2 );
					if ( count( $parts ) === 2 ) {
						$icon = trim( $parts[0] );
						$term = trim( $parts[1] );
						?>
				<div>
					<i class="fa-solid <?= esc_attr( $icon ); ?>"></i>
						<?= esc_html( $term ); ?>
				</div>
						<?php
					}
				}
				?>
			</div>
					<?php
			}
			$contact_page = get_page_by_path( 'contact' );
			if ( ! $contact_page || get_the_ID() !== $contact_page->ID ) {
				?>
			<div class="col-12 py-4 d-flex flex-wrap justify-content-center gap-4">
				<a class="button button--lg" href="tel:<?= parse_phone( get_field( 'contact_phone', 'option' ) ); ?>"><i class="fa-solid fa-phone me-2"></i> Call Now</a>
				<?= do_shortcode( '[whatsapp_link class="d-sm-none button button--lg has-whatsapp-background-color" icon=true text="WhatsApp Us"]'); ?>
				<a class="button button--lg" href="mailto:<?= antispambot( get_field( 'contact_email', 'option' ) ); ?>"><i class="fa-solid fa-envelope me-2"></i> Email Us</a>
				<a class="button button--lg button--outline" href="/contact/">Get a Free Quote</a>
			</div>
				<?php
			}
			?>
		</div>
	</div>
</section>