<?php
    /**
     * Doule CTA Simple section
     *
     * @package UnderStrap
     */

    // Exit if accessed directly.
    defined('ABSPATH') || exit;

    $sfCTA = get_field('sfooter_ctas');
    $sfCTA_bg = get_field('sfooter_bg');
?>

<div class="double-cta-simple-section animate graceful-entrance overflow-hidden position-relative d-block"
    style="background-image: url(<?=$sfCTA_bg; ?>)">
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($sfCTA as $ctaItem): ?>
            <div class="animate graceful-entrance col-12 col-md-6 col-xl-4 mb-5 mb-md-0">
                <div class="cta-item d-flex flex-column h-100">
                    <div class="body mb-0"><?=$ctaItem['body']; ?></div>
                    <div class="link-wrapper d-block mt-auto">
                        <a
                        class="btn btn-primary arrow d-inline-flex align-items-center"
                        href="<?=$ctaItem['link']['url']; ?>"
                        target="<?=$ctaItem['link']['target']; ?>"
                        title="Open <?=$ctaItem['link']['title']; ?>"
                        >
                            <?=$ctaItem['link']['title']; ?>
                            <span class="fa fa-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>