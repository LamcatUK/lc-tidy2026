<?php
/**
 * Block template for LC Service Cards.
 *
 * @package lc-tidy2026
 */

defined( 'ABSPATH' ) || exit;

?>
<a name="services" class="anchor"></a>
<section class="service-cards py-5 has-dark-800-background-color">
	<div class="container">
		<h2 class="has-white-color">Our Services</h2>
		<div class="service-cards__grid">
			<?php
			while ( have_rows( 'services' ) ) {
				the_row();
				?>
			<div class="service-card__wrapper" data-aos="fade">
				<?php
				if ( get_sub_field( 'link' ) ) {
					?>
				<a href="<?= esc_url( get_sub_field( 'link' )['url'] ); ?>" class="service-card">
					<?php
				} else {
					?>
				<div class="service-card">
					<?php
				}
				?>
					<div class="service-card__icon-wrapper">
						<img src="<?= esc_url( get_sub_field( 'icon' )['url'] ); ?>" alt="<?= esc_attr( get_sub_field( 'icon' )['alt'] ); ?>" class="service-card__icon">
					</div>
					<h3 class="service-card__title has-600-font-size has-white-color"><?= esc_html( get_sub_field( 'title' ) ); ?></h3>
					<p class="service-card__text has-400-font-size has-light-800-color mb-0"><?= esc_html( get_sub_field( 'text' ) ); ?></p>
				<?php
				if ( get_sub_field( 'link' ) ) {
					?>
				</a>
			</div>
					<?php
				} else {
					?>
				</div>
			</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</section>