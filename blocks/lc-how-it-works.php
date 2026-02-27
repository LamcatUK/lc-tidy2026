<?php
/**
 * Block template for LC How it works.
 *
 * @package lc-tidy2026
 */

defined( 'ABSPATH' ) || exit;

?>
<a name="how-it-works" class="anchor"></a>
<section class="how-it-works has-dark-700-background-color">
	<div class="container py-5">
		<h2 class="has-white-color"><?= esc_html( get_field( 'title' ) ); ?></h2>
		<?php
		if ( get_field( 'intro' ) ) {
			?>
		<div class="has-light-800-color"><?= wp_kses_post( get_field( 'intro' ) ); ?></div>
			<?php
		}
		?>
		<div class="row justify-content-center gx-5">
			<div class="col-md-4 mx-auto my-4" data-aos="fade-up">
				<div class="how-it-works__number has-1000-font-size fw-semibold ff-heading has-primary-500-color">1</div>
				<h3 class="how-it-works__title has-600-font-size has-white-color"><?= esc_html( get_field( 'step_1_title' ) ); ?></h3>
				<p class="how-it-works__text has-400-font-size has-light-800-color mb-0"><?= esc_html( get_field( 'step_1_content' ) ); ?></p>
			</div>
			<div class="col-md-4 mx-auto my-4" data-aos="fade-up" data-aos-delay="200">
				<div class="how-it-works__number has-1000-font-size fw-semibold ff-heading has-primary-500-color">2</div>
				<h3 class="how-it-works__title has-600-font-size has-white-color"><?= esc_html( get_field( 'step_2_title' ) ); ?></h3>
				<p class="how-it-works__text has-400-font-size has-light-800-color mb-0"><?= esc_html( get_field( 'step_2_content' ) ); ?></p>
			</div>
			<div class="col-md-4 mx-auto my-4" data-aos="fade-up" data-aos-delay="400">
				<div class="how-it-works__number has-1000-font-size fw-semibold ff-heading has-primary-500-color">3</div>
				<h3 class="how-it-works__title has-600-font-size has-white-color"><?= esc_html( get_field( 'step_3_title' ) ); ?></h3>
				<p class="how-it-works__text has-400-font-size has-light-800-color mb-0"><?= esc_html( get_field( 'step_3_content' ) ); ?></p>
			</div>
		</div>
		<?php
		if ( get_field( 'highlight' ) ) {
			?>
		<div class="has-primary-500-background-color has-dark-900-text py-2 has-600-font-size text-center mt-4 text-uppercase fw-semibold text-balance" data-aos="fade" data-aos-delay="300">
			<?= esc_html( get_field( 'highlight' ) ); ?>
		</div>
			<?php
		}
		?>
	</div>
</section>