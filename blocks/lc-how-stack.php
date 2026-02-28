<?php
/**
 * Block template for LC How Stack.
 *
 * @package lc-tidy2026
 */

defined( 'ABSPATH' ) || exit;

?>
<section class="how-stack has-dark-700-background-color">
	<div class="container py-5">
		<?php
		if ( get_field( 'title' ) ) {
			?>
		<h2 class="has-white-color"><?= esc_html( get_field( 'title' ) ); ?></h2>
			<?php
		}
		if ( get_field( 'intro' ) ) {
			?>
		<div class="has-light-800-color"><?= wp_kses_post( get_field( 'intro' ) ); ?></div>
			<?php
		}
		?>
		<div class="row mb-5" data-aos="fade-up">
			<div class="col-md-1">
				<div class="how-stack__number has-1000-font-size fw-semibold ff-heading has-primary-500-color">1</div>
			</div>
			<div class="col-md-11">
				<h3 class="how-stack__title has-700-font-size has-white-color"><?= esc_html( get_field( 'step_1_title' ) ); ?></h3>
				<p class="has-600-font-size has-white-color"><strong><?= esc_html( get_field( 'step_1_subtitle' ) ); ?></strong></p>
				<div class="how-stack__text has-400-font-size has-light-800-color mb-0"><?= wp_kses_post( get_field( 'step_1_content' ) ); ?></div>
			</div>
		</div>
		<div class="row mb-5" data-aos="fade-up" data-aos-delay="100">
			<div class="col-md-1">
				<div class="how-stack__number has-1000-font-size fw-semibold ff-heading has-primary-500-color">2</div>
			</div>
			<div class="col-md-11">
				<h3 class="how-stack__title has-700-font-size has-white-color"><?= esc_html( get_field( 'step_2_title' ) ); ?></h3>
				<p class="has-600-font-size has-white-color"><strong><?= esc_html( get_field( 'step_2_subtitle' ) ); ?></strong></p>
				<div class="how-stack__text has-400-font-size has-light-800-color mb-0"><?= wp_kses_post( get_field( 'step_2_content' ) ); ?></div>
			</div>
		</div>
		<div class="row mb-5" data-aos="fade-up" data-aos-delay="200">
			<div class="col-md-1">
				<div class="how-stack__number has-1000-font-size fw-semibold ff-heading has-primary-500-color">3</div>
			</div>
			<div class="col-md-11">
				<h3 class="how-stack__title has-700-font-size has-white-color"><?= esc_html( get_field( 'step_3_title' ) ); ?></h3>
				<p class="has-600-font-size has-white-color"><strong><?= esc_html( get_field( 'step_3_subtitle' ) ); ?></strong></p>
				<div class="how-stack__text has-400-font-size has-light-800-color mb-0"><?= wp_kses_post( get_field( 'step_3_content' ) ); ?></div>
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