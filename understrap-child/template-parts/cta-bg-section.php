<?php
/**
 * CTA BG section
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$ctaContent = get_field( 'cta' );
?>

<div class="cta-bg-section overflow-hidden position-relative d-block">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="image-wrapper col-12 col-md-11 col-lg-9 animate fadein-left">
                <div class="image">
                    <?= wp_get_attachment_image($ctaContent['image'], 'full'); ?>
                </div>
            </div>
            <div class="content-wrapper col-12 col-md-7 col-xl-5">
                <div class="content animate fadein-right">
                    <div class="body bg-white mb-0"><?= $ctaContent['body']; ?></div>
                    <a 
                    class="btn btn-primary"
                    href="<?= $ctaContent['link']['url']; ?>" 
                    target="<?= $ctaContent['link']['target']; ?>"
                    title="Open <?= $ctaContent['link']['title']; ?>"
                    >
                        <?= $ctaContent['link']['title']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>