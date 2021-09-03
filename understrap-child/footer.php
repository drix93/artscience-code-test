<?php
    /**
     * The template for displaying the footer
     *
     * Contains the closing of the #content div and all content after
     *
     * @package UnderStrap
     */

    // Exit if accessed directly.
    defined('ABSPATH') || exit;

    $container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper animate fadein" id="wrapper-footer">

	<div class="<?=esc_attr($container); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
          <div class="container px-0">
            <div class="row">

              <div class="col-12 col-md-4 text-center text-md-left">
                <a href="<?=esc_url(home_url('/')); ?>" class="d-inline-block" rel="home">
                  <?=wp_get_attachment_image(get_field('logo', 'options'), 'full'); ?>
                </a>
              </div>

              <div class="col-12 col-md-8 text-center text-md-right">

                <?php get_template_part('global-parts/social', 'wrapper'); ?>

                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer',
                            'menu_class' => 'navbar-nav flex-md-row justify-content-md-end',
                            'menu_id' => 'footer-links',
                            'depth' => 1,
                            'walker' => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    );
                ?>

                <div class="copyright credits d-md-flex flex-md-nowrap justify-content-md-end">
                  <p class="copyr">
                    &copy;
                    <?php bloginfo('name'); ?> <?=date('Y'); ?>
                  </p>
                  <a href="https://artscience.ca/" class="cred" target="_blank">
                    Website by Art & Science
                  </a>
                </div>
              </div>
            </div>
          </div>
				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php get_template_part('global-parts/search', 'modal'); ?>

<?php wp_footer(); ?>

</body>

</html>

