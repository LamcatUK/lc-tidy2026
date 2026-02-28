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
					<ul class="text-checklist__list mb-0 has-500-font-size cols-lg-2">
						<?php
						$checklist = get_field( 'checklist' );
						if ( $checklist ) {
							// Strip HTML tags first, then split on newlines.
							$checklist = strip_tags( $checklist, '<br>' );
							$items     = preg_split( '/<br\s*\/?>/i', $checklist, -1, PREG_SPLIT_NO_EMPTY );
							foreach ( $items as $item ) {
								$item = trim( $item );
								if ( empty( $item ) ) {
									continue;
								}
								?>
						<li>
							<span class="text-checklist__icon">
								<i class="fa-solid fa-circle"></i>
								<i class="fa-solid fa-check"></i>
							</span>
							<span><?= esc_html( $item ); ?></span>
						</li>
								<?php
							}
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>