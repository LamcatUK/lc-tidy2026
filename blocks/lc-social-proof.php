<?php
/**
 * Block template for LC Social Proof.
 *
 * @package lc-tidy2026
 */

defined( 'ABSPATH' ) || exit;

// Support Gutenberg color picker.
$bg         = ! empty( $block['backgroundColor'] ) ? 'has-' . $block['backgroundColor'] . '-background-color' : '';
$fg         = ! empty( $block['textColor'] ) ? 'has-' . $block['textColor'] . '-color' : '';
$section_id = $block['anchor'] ?? null;
$extra      = $block['className'] ?? '';

$content = get_field( 'content' ) ? get_field( 'content' ) : '<strong>5-star rated on Google</strong> · Trusted by homeowners, landlords and businesses across the Isle of Man';

?>
<section class="lc-social-proof <?= esc_attr( trim( $bg . ' ' . $fg . ' ' . $extra ) ); ?>" id="<?= esc_attr( $section_id ); ?>">
	<div class="container text-center lc-social-proof__inner">
		<div class="lc-social-proof__stars">
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
			<span class="fa fa-star"></span>
		</div>
		<div class="lc-social-proof__content">
			<?= wp_kses_post( $content ); ?>
		</div>
	</div>
</section>