<?php
/**
 * Block template for LC Other Services.
 *
 * Lists sibling service pages (children of the same parent) excluding the
 * current page. Heading text is editable via ACF.
 *
 * @package lc-tidy2026
 */

defined( 'ABSPATH' ) || exit;

$post = get_post();
if ( ! $post || ! $post->post_parent ) {
	return;
}

$siblings = get_pages(
	array(
		'parent'      => $post->post_parent,
		'exclude'     => array( $post->ID ),
		'sort_column' => 'menu_order',
		'sort_order'  => 'ASC',
	)
);

if ( empty( $siblings ) ) {
	return;
}

$heading = get_field( 'heading' ) ?: __( 'Other Services', 'lc-tidy2026' );

?>
<section class="lc-other-services">
	<div class="container">
		<h2 class="lc-other-services__heading"><?= esc_html( $heading ); ?></h2>
		<ul class="lc-other-services__list">
			<?php foreach ( $siblings as $sibling ) { ?>
			<li class="lc-other-services__item">
				<a class="lc-other-services__link" href="<?= esc_url( get_permalink( $sibling ) ); ?>">
					<?= esc_html( get_the_title( $sibling ) ); ?>
				</a>
			</li>
			<?php } ?>
		</ul>
	</div>
</section>
