<?php
/**
 * Block template for LC Breadcrumbs.
 *
 * Uses Yoast SEO breadcrumbs when available, otherwise derives the trail
 * from the page's post_parent ancestry.
 *
 * @package lc-tidy2026
 */

defined( 'ABSPATH' ) || exit;

?>
<nav class="lc-breadcrumbs" aria-label="Breadcrumb">
	<?php
	if ( function_exists( 'yoast_breadcrumb' ) ) {
		echo '<div class="container">';
		yoast_breadcrumb( '<ol class="lc-breadcrumbs__list">', '</ol>' );
		echo '</div>';
	} else {
		$crumbs = lc_breadcrumbs_from_ancestry();

		if ( ! empty( $crumbs ) ) {
			?>
		<div class="container">
			<ol class="lc-breadcrumbs__list" itemscope itemtype="https://schema.org/BreadcrumbList">
			<?php
			foreach ( $crumbs as $i => $crumb ) {
				?>
				<li class="lc-breadcrumbs__item"
					itemprop="itemListElement"
					itemscope
					itemtype="https://schema.org/ListItem">
				<?php
				if ( $crumb['current'] ) {
					?>
						<span class="lc-breadcrumbs__current"
							itemprop="name"
							aria-current="page"><?= esc_html( $crumb['label'] ); ?></span>
					<?php
				} else {
					?>
						<a class="lc-breadcrumbs__link"
							href="<?= esc_url( $crumb['url'] ); ?>"
							itemprop="item">
							<span itemprop="name"><?= esc_html( $crumb['label'] ); ?></span>
						</a>
					<?php
				}
				?>
					<meta itemprop="position" content="<?= esc_attr( $i + 1 ); ?>">
				</li>
				<?php
			}
			?>
			</ol>
		</div>
			<?php
		}
	}
	?>
</nav>
