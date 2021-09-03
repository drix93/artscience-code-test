<!-- Social Wrapper -->
<div class="social-wrapper">
    <?php
        $socials = ['facebook', 'twitter', 'instagram', 'linkedin', 'youtube'];
        $socialsCapitalize = ['Facebook', 'Twitter', 'Instagram', 'LinkedIn', 'YouTube'];

        foreach ($socials as $sIndex => $social):
            $socialLink = get_field($social, 'options');
            if ($socialLink):
        ?>

	    <a class="social-link" href="<?=$socialLink; ?>" title="Go to<?php bloginfo('name'); ?>'s <?=$socialsCapitalize[$sIndex]; ?> page" target="_blank">
	        <?php get_template_part('social-parts/' . $social, 'svg'); ?>
	    </a>

	    <?php
            endif;
            endforeach;
        ?>
</div>