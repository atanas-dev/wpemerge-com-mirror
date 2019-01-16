<?php
/**
 * Theme footer partial.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPEmergeTheme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
		<meta name="theme-color" content="#5e75ff">

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<link rel="preconnect" href="https://wpemerge.disqus.com">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="wrapper-holder">
			<div class="wrapper">
				<header class="header">
					<div class="shell">
						<div class="header__inner">
							<a href="<?php echo home_url( '/' ); ?>" class="logo"><?php bloginfo( 'name' ); ?></a>

							<button class="btn-menu" type="button" aria-label="<?php esc_attr_e( 'Menu', 'app' ); ?>">
								<span></span>
							</button><!-- /.btn-menu -->

							<?php
							wp_nav_menu(
								[
									'theme_location'  => 'main-menu',
									'depth'           => 2,
									'fallback_cb'     => false,
									'container'       => 'nav',
									'container_class' => 'nav',
								]
							);
							?>
						</div><!-- /.header__inner -->
					</div><!-- /.shell -->
				</header><!-- /.header -->
				<div class="main">
