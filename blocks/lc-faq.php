<?php
/**
 * Block template for LC FAQ.
 *
 * @package lc-tidy2026
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'lc_faq_add_schema_items' ) ) {
	/**
	 * Collect FAQ items and output a single FAQPage schema in wp_footer.
	 *
	 * @param array $items Array of items with 'question' and 'answer' keys.
	 * @return void
	 */
	function lc_faq_add_schema_items( array $items ) {
		static $all_items = array();
		static $hooked    = false;

		foreach ( $items as $item ) {
			$all_items[] = $item;
		}

		if ( ! $hooked ) {
			$hooked = true;
			add_action(
				'wp_footer',
				function () use ( &$all_items ) {
					if ( empty( $all_items ) ) {
						return;
					}

					$entities = array_map(
						function ( $item ) {
							return array(
								'@type'          => 'Question',
								'name'           => $item['question'],
								'acceptedAnswer' => array(
									'@type' => 'Answer',
									'text'  => $item['answer'],
								),
							);
						},
						$all_items
					);

					$schema = array(
						'@context'   => 'https://schema.org',
						'@type'      => 'FAQPage',
						'mainEntity' => $entities,
					);

					echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
				}
			);
		}
	}
}

// Support Gutenberg color picker.
$bg = ! empty( $block['backgroundColor'] ) ? 'has-' . $block['backgroundColor'] . '-background-color' : '';
$fg = ! empty( $block['textColor'] ) ? 'has-' . $block['textColor'] . '-color' : '';

$block_faq_items = array();

if ( have_rows( 'faq_items' ) ) {
	while ( have_rows( 'faq_items' ) ) {
		the_row();

		$question = wp_strip_all_tags( get_sub_field( 'question' ) );
		$answer   = wp_strip_all_tags( get_sub_field( 'answer' ) );

		if ( '' === $question || '' === $answer ) {
			continue;
		}

		$block_faq_items[] = array(
			'question' => $question,
			'answer'   => $answer,
		);
	}
}

lc_faq_add_schema_items( $block_faq_items );

?>
<section class="faq py-5 <?= esc_attr( trim( $bg . ' ' . $fg ) ); ?>">
	<div class="container">
		<h2><?= esc_html( get_field( 'title' ) ); ?></h2>
		<div class="faq__intro w-constrained-md mb-5"><?= esc_html( get_field( 'intro' ) ); ?></div>
		<?php
		$accordion = random_str(5);

		echo '<div class="faq__inner">';
		echo '<div id="accordion' . esc_attr( $accordion ) . '" class="accordion">';

		$counter  = 0;
		$show     = '';
		$expanded = 'false';
		$button   = 'collapsed';

		while ( have_rows( 'faq_items' ) ) {
			the_row();

			$ac = $accordion . '_' . $counter;
			?>
		<div class="accordion-item">
			<div class="accordion-header">
				<button class="accordion-button px-4 <?= esc_attr( $button ); ?>"
					type="button" data-bs-toggle="collapse"
					data-bs-target="#c<?= esc_attr( $ac ); ?>"
					aria-expanded="<?= esc_attr( $expanded ); ?>"
					aria-controls="c<?= esc_attr( $ac ); ?>">
					<?= wp_kses_post( get_sub_field('question') ); ?>
				</button>
			</div>
			<div id="c<?= esc_attr( $ac ); ?>"
				class="collapse <?= esc_attr( $show ); ?>"
				data-bs-parent="#accordion<?= esc_attr( $accordion ); ?>">
				<div class="accordion-body p-4">
					<?= wp_kses_post( get_sub_field('answer') ); ?>
				</div>
			</div>
		</div>
			<?php
			++$counter;
			$show = '';
		}
		echo '</div>';
		echo '</div>';
		?>
	</div>
</section>