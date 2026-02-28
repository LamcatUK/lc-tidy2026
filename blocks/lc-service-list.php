<?php
/**
 * Block template for LC Service List.
 *
 * @package lc-tidy2026
 */

defined( 'ABSPATH' ) || exit;

// Support Gutenberg color picker.
$bg = ! empty( $block['backgroundColor'] ) ? 'has-' . $block['backgroundColor'] . '-background-color' : '';
$fg = ! empty( $block['textColor'] ) ? 'has-' . $block['textColor'] . '-color' : '';

?>
<section class="service-list <?= esc_attr( trim( $bg . ' ' . $fg ) ); ?>">
	<div class="container">
		<h2><?= esc_html( get_field( 'title' ) ); ?></h2>
		<p class="has-600-font-size mb-4"><?= esc_html( get_field( 'intro' ) ); ?></p>
		<div class="service-list__grid mb-4">
			<?php
			while ( have_rows( 'services' ) ) {
				the_row();
				$l = get_sub_field( 'service' );
				?>
			<a class="service-list__item" href="<?= esc_url( $l['url'] ); ?>">
				<div class="service-list__icon-wrapper">
					<img src="<?= esc_url( get_sub_field( 'icon' )['url'] ); ?>" alt="<?= esc_attr( get_sub_field( 'icon' )['alt'] ); ?>" class="service-list__icon">
				</div>
				<h3 class="service-list__item-title has-600-font-size mb-0"><?= esc_html( $l['title'] ); ?></h3>
			</a>
				<?php
			}
			?>
		</div>
		<div class="has-600-font-size"><?= esc_html( get_field( 'outro' ) ); ?></div>
	</div>
</section>