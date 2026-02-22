<?php
/**
 * Block template for LC Areas.
 *
 * @package lc-tidy2026
 */

defined( 'ABSPATH' ) || exit;

// Support Gutenberg color picker.
$bg         = ! empty( $block['backgroundColor'] ) ? 'has-' . $block['backgroundColor'] . '-background-color' : '';
$fg         = ! empty( $block['textColor'] ) ? 'has-' . $block['textColor'] . '-color' : '';
$headings   = ! empty( $fg ) ? $fg : 'has-blue-400-color';
$section_id = $block['anchor'] ?? null;
$extra      = $block['className'] ?? '';

?>
<a name="<?= esc_attr( $section_id ); ?>" class="anchor"></a>
<section class="areas <?= esc_attr( trim( $bg . ' ' . $fg ) ); ?>">
	<div class="container <?= esc_attr( trim( $extra ) ); ?>">
		<img src="<?= esc_url( get_stylesheet_directory_uri() . '/img/temp-map-4.png' ); ?>" class="areas__map" alt="">
		<div class="row">
			<div class="col-md-7">
				<h2><?php the_field( 'title' ); ?></h2>
				<div class="has-600-font-size mb-4"><?php the_field( 'intro' ); ?></div>
				<?php lc_render_areas_we_cover_from_taxonomy(); ?>
			</div>
		</div>
	</div>
</section>