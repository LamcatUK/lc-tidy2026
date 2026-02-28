<?php
/**
 * Block template for LC Who Grid.
 *
 * @package lc-tidy2026
 */

defined( 'ABSPATH' ) || exit;

?>
<section class="who-grid">
	<div class="container py-5">
		<h2><?= esc_html( get_field( 'title' ) ); ?></h2>
		<p class="has-600-font-size mb-4"><?= esc_html( get_field( 'intro' ) ); ?></p>
		<div class="who-grid__grid mb-4">
			<?php
			while ( have_rows( 'items' ) ) {
				the_row();
				$l = get_sub_field( 'item' );
				?>
			<div class="who-grid__item">
				<div class="who-grid__icon-wrapper">
					<img src="<?= esc_url( get_sub_field( 'icon' )['url'] ); ?>" alt="<?= esc_attr( get_sub_field( 'icon' )['alt'] ); ?>" class="who-grid__icon">
				</div>
				<h3 class="who-grid__item-title has-600-font-size mb-0"><?= esc_html( get_sub_field( 'title' ) ); ?></h3>
				<div class="who-grid__item-description"><?= esc_html( get_sub_field( 'description' ) ); ?></div>
			</div>
				<?php
			}
			?>
		</div>
		<p class="has-600-font-size"><?= esc_html( get_field( 'outro' ) ); ?></p>
	</div>
</section>