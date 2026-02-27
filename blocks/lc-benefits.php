<?php
/**
 * Block template for LC Benefits.
 *
 * @package lc-tidy2026
 */

defined( 'ABSPATH' ) || exit;

?>
<section class="benefits py-5 has-dark-800-background-color">
	<div class="container">
		<h2 class="has-white-color mb-4"><?= esc_html( get_field( 'title' ) ); ?></h2>
		<div class="benefits__grid">
			<?php
			while ( have_rows( 'benefits' ) ) {
				the_row();
				?>
			<div class="benefit" data-aos="fade" data-aos-delay="<?= get_row_index() * 200; ?>">
				<div class="benefit__icon-wrapper">
					<img src="<?= esc_url( get_sub_field( 'icon' )['url'] ); ?>" alt="<?= esc_attr( get_sub_field( 'icon' )['alt'] ); ?>" class="benefit__icon">
				</div>
				<h3 class="benefit__title has-600-font-size has-white-color"><?= esc_html( get_sub_field( 'title' ) ); ?></h3>
				<p class="benefit__text has-400-font-size has-light-800-color mb-0"><?= esc_html( get_sub_field( 'text' ) ); ?></p>
			</div>
					<?php
			}
			?>
		</div>
	</div>
</section>