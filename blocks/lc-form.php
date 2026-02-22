<?php
/**
 * Block template for LC Form.
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
<section class="form-block <?= esc_attr( trim( $bg . ' ' . $fg . ' ' . $extra ) ); ?>" id="<?= esc_attr( $section_id ); ?>">
	<div class="container">
		<div class="has-600-font-size mb-4">
		Call us on <?=  do_shortcode( '[contact_phone]' ) ?>, email <?= do_shortcode( '[contact_email]' ) ?>, or message on <?= do_shortcode( '[whatsapp_link]' ) ?>.<br>
	
		Prefer not to call? Fill in the form below and we’ll get back to you fast.
		</div>
		<div class="form-card">
			<?= do_shortcode( '[contact-form-7 id="' . get_field( 'contact_form_id' ) . '"]'); ?>
		</div>
	</div>
</section>