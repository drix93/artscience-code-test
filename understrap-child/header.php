<?php
    /**
     * The header for our theme
     *
     * Displays all of the <head> section and everything up till <div id="content">
     *
     * @package UnderStrap
     */

    // Exit if accessed directly.
    defined('ABSPATH') || exit;

    $container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html                                                   <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Google Fonts Start -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<!-- Roboto Font -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<!-- Google Fonts End -->

	<?php wp_head(); ?>
</head>

<body                                                   <?php body_class(); ?><?php understrap_body_attributes(); ?>>
<?php do_action('wp_body_open'); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

        <div class="top-links-wrapper position-relative d-none d-md-flex align-items-end">
            <div class="container d-none d-md-flex flex-row flex-nowrap justify-content-end">
                <div class="search-wrapper">
                    <button class="btn-search-top p-0" data-toggle="modal" data-target="#searchModal" aria-label="<?php esc_attr_e('Open search popup', 'understrap'); ?>">
                        <span class="fa fa-search"></span>
                        Search
                    </button>
                </div>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'top',
                            'menu_class' => 'navbar-nav ml-auto',
                            'menu_id' => 'menu-top-links',
                            'depth' => 1,
                            'walker' => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    );
                ?>
            </div>
        </div>

		<nav id="main-nav" class="navbar navbar-expand-md navbar-light bg-grey" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e('Main Navigation', 'understrap'); ?>
			</h2>

		<?php if ('container' === $container): ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if (!has_custom_logo()) { ?>

						<?php if (is_front_page() && is_home()): ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>

						<?php else: ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>

						<?php endif; ?>

						<?php
                            } else {
                                the_custom_logo();
                            }
                        ?>
					<!-- end custom logo -->
				<button type="button" class="mobile-search-btn btn btn-primary d-md-none" data-toggle="modal" data-target="#searchModal" aria-label="<?php esc_attr_e('Open search popup', 'understrap'); ?>">
                    <span class="fa fa-search"></span>
				</button>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown, #navbarNavDropdown-top" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'navbarNavDropdown',
                            'menu_class' => 'navbar-nav ml-auto',
                            'fallback_cb' => '',
                            'menu_id' => 'main-menu',
                            'depth' => 1,
                            'walker' => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    );
                    wp_nav_menu(
                        array(
                            'theme_location' => 'top',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'navbarNavDropdown-top',
                            'menu_class' => 'navbar-nav ml-auto',
                            'fallback_cb' => '',
                            'menu_id' => 'top-links',
                            'depth' => 1,
                            'walker' => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    );
                ?>
<?php if ('container' === $container): ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
