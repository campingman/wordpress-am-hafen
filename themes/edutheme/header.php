<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage EduTheme
 * @since EduTheme 0.0.0
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" role="banner">
  <div class="box">
		<h1>
			<a class="masthead-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="Homepage">
				<?php bloginfo( 'name' ); ?>
			</a>
		</h1>

		<?php if ( is_active_sidebar( 'sidebar-2' )  ) : ?>
			<aside class="sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</aside><!-- .sidebar .widget-area -->
		<?php endif; ?>
<!--
    <input type="checkbox" id="hamburger"/>
    <label class="menuicon" for="hamburger">
      <span></span>
    </label> -->
	</div>
	<div class="box">
		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class'     => 'primary-menu',
					 ) );
				?>
			</nav>
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    		<?php if(function_exists('bcn_display')){ bcn_display(); }?>
			</div>

		<?php endif; ?>

  </div>
</header>

<div id="page" class="site">
	<div class="box">

<!--
		<header class="site-header" role="banner">
			<div class="site-header-main">

				<?php if ( has_nav_menu( 'primary' )) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div>
			<?php endif; // End header image check. ?>
		</header>
-->
		<div id="content" class="site-content">
