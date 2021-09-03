<?php
    /**
     * Recent posts section
     *
     * @package UnderStrap
     */

    // Exit if accessed directly.
    defined('ABSPATH') || exit;

    $recentPosts = wp_get_recent_posts(
        array(
            'numberposts' => 4,
            'category' => 2,
            'post_status' => 'publish'
        )
    );
?>

<div class="recent-posts-section overflow-hidden position-relative d-block pb-3 mb-3">
    <div class="container">
        <div class="row">
            <?php
                if($recentPosts) :
                    foreach($recentPosts as $article):
                        $cat = get_the_category($article['ID'])[0];
            ?>
            <div class="<?= $cat->slug . '-' . $article['ID']; ?> news-item animate graceful-entrance col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                <a class="d-block h-100" title="See Insight - <?= get_the_title($article['ID']); ?>" href="<?= get_the_permalink($article['ID']); ?>">
                    <div class="image"><?= get_the_post_thumbnail($article['ID']); ?></div>
                    <div class="content mx-1 px-4 px-md-3 px-lg-4 py-3">
                        <div class="cat mb-3"><?= $cat->name; ?></div>
                        <h5 class="title"><?= get_the_title($article['ID']); ?></h5>
                        <p class="excerpt"><?= $article['post_excerpt']; ?></p>
                    </div>
                </a>
            </div>
            <?php
                    endforeach;
                    wp_reset_postdata();
                else :
                    echo '<div class="col"><h5 class="text-center">There seems to be no new posts! Please check again later.</h5></div>';
                endif;
            ?>
        </div>
    </div>
</div>
