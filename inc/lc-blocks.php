<?php
/**
 * Register ACF blocks for the lc-mindspace theme.
 *
 * This file defines and registers custom ACF blocks.
 *
 * @package lc-tidy2026
 */

/**
 * Register ACF blocks.
 *
 * @return void
 */
function acf_blocks() {
	if ( function_exists( 'acf_register_block_type' ) ) {

		// INSERT NEW BLOCKS HERE.

		acf_register_block_type(
			array(
				'name'            => 'lc_how_stack',
				'title'           => __( 'LC How Stack' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-how-stack.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_benefits',
				'title'           => __( 'LC Benefits' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-benefits.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_faq',
				'title'           => __( 'LC FAQ' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-faq.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_form',
				'title'           => __( 'LC Form' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-form.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_cta',
				'title'           => __( 'LC CTA' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-cta.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_review_slider',
				'title'           => __( 'LC Review Slider' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-review-slider.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_areas',
				'title'           => __( 'LC Areas' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-areas.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_how_it_works',
				'title'           => __( 'LC How it works' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-how-it-works.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_service_cards',
				'title'           => __( 'LC Service Cards' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-service-cards.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_text_checklist',
				'title'           => __( 'LC Text Checklist' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-text-checklist.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
					'color'     => array(
						'gradients'  => false,
						'text'       => true,
						'background' => true,
					),
				),
			)
		);

		acf_register_block_type(
			array(
				'name'            => 'lc_hero',
				'title'           => __( 'LC Hero' ),
				'category'        => 'layout',
				'icon'            => 'cover-image',
				'render_template' => 'blocks/lc-hero.php',
				'mode'            => 'edit',
				'supports'        => array(
					'mode'      => false,
					'anchor'    => true,
					'className' => true,
					'align'     => true,
				),
			)
		);

	}
}
add_action( 'acf/init', 'acf_blocks' );

// Gutenburg core modifications.
add_filter( 'register_block_type_args', 'core_image_block_type_args', 10, 3 );

/**
 * Modify core block type arguments to add custom render callbacks.
 *
 * @param array  $args Block type arguments.
 * @param string $name Block type name.
 * @return array Modified block type arguments.
 */
function core_image_block_type_args( $args, $name ) {
	if ( 'core/paragraph' === $name ) {
		$args['render_callback'] = 'modify_core_add_container';
	}
	if ( 'core/heading' === $name ) {
		$args['render_callback'] = 'modify_core_add_container';
	}
	if ( 'core/list' === $name ) {
		$args['render_callback'] = 'modify_core_add_container';
	}

	return $args;
}

/**
 * Modify core block content by wrapping it in a container.
 *
 * @param array  $attributes Block attributes.
 * @param string $content Block content.
 * @return string Modified block content.
 */
function modify_core_add_container( $attributes, $content ) {
	ob_start();

	// Check if this is a list block with fa-list class.
	if ( isset( $attributes['className'] ) && strpos( $attributes['className'], 'fa-list' ) !== false ) {
		// Extract icon class if specified (e.g., fa-list fa-check becomes fa-check).
		$icon_class = 'fa-check'; // default icon.
		if ( preg_match( '/fa-list\s+(fa-[\w-]+)/', $attributes['className'], $matches ) ) {
			$icon_class = $matches[1];
		}

		// Convert to FontAwesome list.
		$content = convert_to_fa_list( $content, $icon_class );
	}

	?>
<div class="container-xl">
	<?= wp_kses_post( $content ); ?>
</div>
	<?php
	$content = ob_get_clean();
	return $content;
}

