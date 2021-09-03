<?php
/**
 * Heading section
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="heading-section overflow-hidden position-relative d-block">
    <div class="container my-md-4 py-5">
        <div class="row">
            <div class="col text-center">
                <h2 class="animate fadein d-inline-block mb-0 pb-2"><?= get_field( 'heading_section' ); ?></h2>
            </div>
        </div>
    </div>
</div>