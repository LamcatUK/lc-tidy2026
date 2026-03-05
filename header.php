<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lc-tidy2026
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta
		charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preload"
		href="<?= esc_url( get_stylesheet_directory_uri() . '/fonts/ibm-plex-sans-v23-latin-regular.woff2' ); ?>"
		as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload"
		href="<?= esc_url( get_stylesheet_directory_uri() . '/fonts/ibm-plex-sans-v23-latin-600.woff2' ); ?>"
		as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload"
		href="<?= esc_url( get_stylesheet_directory_uri() . '/fonts/poppins-v24-latin-600.woff2' ); ?>"
		as="font" type="font/woff2" crossorigin="anonymous">
	<?php
	if ( is_front_page() ) {
		?>
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "WasteManagementService",
		"@id": "https://tidysolutions.im/#business",
		"name": "Tidy Solutions",
		"url": "https://tidysolutions.im/",
		"logo": "https://tidysolutions.im/wp-content/uploads/2026/01/tidy-solutions-logo.png",
		"image": "https://tidysolutions.im/wp-content/uploads/2026/01/tidy-solutions-van.jpg",
		"description": "Junk removal and waste clearance across the Isle of Man. House clearances, builder's waste removal, garden waste and appliance removal with responsible disposal.",
		"telephone": "+44 7624 251166",
		"email": "info@tidysolutions.im",
		"areaServed": {
			"@type": "AdministrativeArea",
			"name": "Isle of Man"
		},
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "Isle of Man",
			"addressCountry": "IM"
		},
		"serviceType": [
			"Junk removal",
			"House clearance",
			"Garden waste clearance",
			"Garage and shed clearance",
			"Furniture and appliance removal",
			"Builder's waste removal",
			"Office clearance",
			"Light demolition and strip-outs"
		],
		"sameAs": [
			"https://www.facebook.com/profile.php?id=61588068492366"
		]
	}
	</script>
		<?php
	}
	if ( is_page( 'contact' ) ) {
		?>
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "ContactPage",
		"@id": "https://tidysolutions.im/contact/#contactpage",
		"url": "https://tidysolutions.im/contact/",
		"name": "Contact Tidy Solutions",
		"description": "Contact Tidy Solutions for junk removal and waste clearance across the Isle of Man. Request a quote or arrange a collection.",
		"mainEntity": {
			"@type": "WasteManagementService",
			"name": "Tidy Solutions",
			"telephone": "+44 7624 251166",
			"email": "info@tidysolutions.im",
			"areaServed": "Isle of Man",
			"url": "https://tidysolutions.im/"
		}
	}
	</script>
		<?php
	}	
	if ( ! is_user_logged_in() && strpos( get_home_url(), 'staging' ) === false ) {
		if ( get_field( 'ga_property', 'options' ) ) {
			?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async
		src="https://www.googletagmanager.com/gtag/js?id=<?= esc_attr( get_field( 'ga_property', 'options' ) ); ?>">
	</script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config',
			'<?= esc_attr( get_field( 'ga_property', 'options' ) ); ?>'
		);
	</script>
			<?php
		}
		if ( get_field( 'gtm_property', 'options' ) ) {
			?>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer',
			'<?= esc_attr( get_field( 'gtm_property', 'options' ) ); ?>'
		);
	</script>
	<!-- End Google Tag Manager -->
			<?php
		}
	}
	if ( get_field( 'google_site_verification', 'options' ) ) {
		echo '<meta name="google-site-verification" content="' . esc_attr( get_field( 'google_site_verification', 'options' ) ) . '" />';
	}
	if ( get_field( 'bing_site_verification', 'options' ) ) {
		echo '<meta name="msvalidate.01" content="' . esc_attr( get_field( 'bing_site_verification', 'options' ) ) . '" />';
	}
	?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
	<?php understrap_body_attributes(); ?>>
	<?php
	if ( ! is_user_logged_in() && strpos( get_home_url(), 'staging' ) === false ) {
		if ( get_field( 'gtm_property', 'options' ) ) {
			?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe
			src="https://www.googletagmanager.com/ns.html?id=<?= esc_attr( get_field( 'gtm_property', 'options' ) ); ?>"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
			<?php
		}
	}
	do_action( 'wp_body_open' );
	?>
<header id="wrapper-navbar" class="fixed-top" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navbar navbar-expand-lg navbar-light bg-white" aria-label="Main Navigation">
		<div class="container">
			<a href="/" class="navbar-brand logo" aria-label="Tidy Solutions Homepage"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id="navbar" class="collapse navbar-collapse">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary_nav',
						'container'      => false,
						'menu_class'     => 'navbar-nav ms-auto gap-2 gap-lg-4 py-4 py-lg-0',
						'fallback_cb'    => '',
						'depth'          => 3,
						'walker'         => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			</div>
		</div>
	</nav>
</header>