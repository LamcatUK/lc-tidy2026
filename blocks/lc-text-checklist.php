<?php
/**
 * Block template for LC Text Checklist.
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
<section class="text-checklist <?= esc_attr( trim( $bg . ' ' . $fg . ' ' . $extra ) ); ?>" id="<?= esc_attr( $section_id ); ?>">
	<div class="container">
		<div class="row gx-5">
			<div class="col-lg-4 col-xl-6">
				<h2><?php the_field( 'title' ); ?></h2>
				<p class="has-600-font-size"><?php the_field( 'intro' ); ?></p>
			</div>
			<div class="col-lg-8 col-xl-6 mx-auto my-auto">
				<div class="text-checklist__list-wrapper">
					<ul class="text-checklist__list fa-ul mb-0 has-500-font-size">
						<?php
						echo lc_list(
							get_field( 'checklist' ),
							array(
								'icon' => '<span class="fa-stack fa-xxs check-icon">
  <i class="fa-solid fa-circle fa-stack-2x"></i>
  <i class="fa-solid fa-check fa-stack-1x"></i>
</span>',
							)
						);
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>