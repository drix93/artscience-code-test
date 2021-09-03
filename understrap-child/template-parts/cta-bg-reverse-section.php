<?php
/**
 * CTA BG Reverse section
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$ctaContentRev = get_field( 'reverse_cta' );
?>

<div class="cta-bg-section reverse overflow-hidden position-relative d-block">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="image-wrapper animate fadein-right offset-md-1 offset-lg-3 col-12 col-md-11 col-lg-9">
                <div class="image">
                    <?= wp_get_attachment_image($ctaContentRev['image'], 'full'); ?>
                </div>
            </div>
            <div class="content-wrapper col-12 col-md-7 col-xl-5">
                <div class="content animate fadein-left">
                    <div class="body bg-white mb-0"><?= $ctaContentRev['body']; ?></div>
                    <a 
                    class="btn btn-primary"
                    href="<?= $ctaContentRev['link']['url']; ?>" 
                    target="<?= $ctaContentRev['link']['target']; ?>"
                    title="Open <?= $ctaContentRev['link']['title']; ?>"
                    >
                        <?= $ctaContentRev['link']['title']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>