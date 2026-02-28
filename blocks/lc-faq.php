<?php
/**
 * Block template for LC FAQ.
 *
 * @package lc-tidy2026
 */

defined( 'ABSPATH' ) || exit;

// Support Gutenberg color picker.
$bg = ! empty( $block['backgroundColor'] ) ? 'has-' . $block['backgroundColor'] . '-background-color' : '';
$fg = ! empty( $block['textColor'] ) ? 'has-' . $block['textColor'] . '-color' : '';

?>
<section class="faq py-5 <?= esc_attr( trim( $bg . ' ' . $fg ) ); ?>">
	<div class="container">
		<h2><?= esc_html( get_field( 'title' ) ); ?></h2>
		<div class="faq__intro w-constrained-md mb-5"><?= esc_html( get_field( 'intro' ) ); ?></div>
		<?php
		$accordion = random_str(5);

		echo '<div class="faq__inner">';
		echo '<div itemscope="" itemtype="https://schema.org/FAQPage" id="accordion' . esc_attr( $accordion ) . '" class="accordion">';

		$counter   = 0;
		$show      = '';
		$collapsed = 'collapsed';

		$expanded = 'false';
		$collapse = '';
		$button   = 'collapsed';

		while ( have_rows( 'faq_items' ) ) {
			the_row();

			$ac = $accordion . '_' . $counter;
			?>
		<div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question" class="accordion-item">
			<div class="accordion-header">
				<button class="accordion-button px-4 <?= esc_attr( $button ); ?>"
					itemprop="name" type="button" data-bs-toggle="collapse"
					data-bs-target="#c<?= esc_attr( $ac ); ?>"
					aria-expanded="<?= esc_attr( $expanded ); ?>"
					aria-controls="c<?= esc_attr( $ac ); ?>">
					<?= wp_kses_post( get_sub_field('question') ); ?>
				</button>
			</div>
			<div id="c<?= esc_attr( $ac ); ?>"
				class="collapse <?= esc_attr( $show ); ?>" itemscope=""
				itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"
				data-bs-parent="#accordion<?= esc_attr( $accordion ); ?>">
				<div class="accordion-body p-4" itemprop="text">
					<?= wp_kses_post( get_sub_field('answer') ); ?>
				</div>
			</div>
		</div>
			<?php
			++$counter;
			$show      = '';
			$collapsed = 'collapsed';
		}
		echo '</div>';
		echo '</div>';
		?>
	</div>
</section>