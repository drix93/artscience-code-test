<?php
    /**
     * Hero section
     *
     * @package UnderStrap
     */

    // Exit if accessed directly.
    defined('ABSPATH') || exit;

    $heroFields = get_field('hero');

    if ($heroFields['links']) {
        $links = [];
        foreach ($heroFields['links'] as $link) {
            $links[] = $link;
        }
    }
?>

<div class="hero-section animate graceful-entrance overflow-hidden position-relative d-flex align-items-center py-md-5" style="background-image: url(<?=$heroFields['image']; ?>);">
    <div class="container text-center my-5 py-5">
        <div class="row">

            <div class="col-12 title">
                <h1><?=$heroFields['title']; ?></h1>
            </div>

            <?php if ($heroFields['links']): ?>
            <div class="col-12 sub-links">
                <?php for ($linkCount = 0; $linkCount < sizeof($heroFields['links']); $linkCount++): ?>
                <div class="link-item">
                    <a
                    href="<?= $links[$linkCount]['link']['url']; ?>"
                    target="<?= $links[$linkCount]['link']['target']; ?>"
                    title="Go to <?= $links[$linkCount]['link']['title']; ?> page">
                        <?= $links[$linkCount]['link']['title']; ?>
                    </a>
                </div>
                <?php endfor; ?>
            </div>
            <?php endif; ?>

        </div>
    </div>
</div>