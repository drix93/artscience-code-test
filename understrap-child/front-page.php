<?php
    /**
     * The template for displaying the front page / homepage
     *
     * @package UnderStrap
     */

    // Exit if accessed directly.
    defined('ABSPATH') || exit;

    get_header();
?>

<div class="wrapper" id="page-wrapper">

    <div id="content" tabindex="-1">

        <main class="site-main" id="main">

		<?php get_template_part('template-parts/hero', 'section'); ?>
        <?php get_template_part('template-parts/heading', 'section'); ?>
        <?php get_template_part('template-parts/recent-posts', 'section'); ?>
        <?php get_template_part('template-parts/cta-bg', 'section'); ?>
        <?php get_template_part('template-parts/cta-bg-reverse', 'section'); ?>
        <?php get_template_part('template-parts/double-cta-simple', 'section'); ?>

        </main><!-- #main -->

    </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();