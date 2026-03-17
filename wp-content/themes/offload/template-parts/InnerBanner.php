<?php
/**
 * Inner Banner Template
 *
 * @package tasheel
 */

$title = isset($args['title']) ? $args['title'] : '';
$bg_image = isset($args['bg_image']) ? $args['bg_image'] : '';
?>

<section class="inner-banner" <?php if (!empty($bg_image)): ?>style="background-image: url('<?php echo esc_url($bg_image); ?>');"<?php endif; ?>>
    <div class="wrap">
        <?php if (!empty($title)): ?>
            <h2 class="inner-banner__title inner-banner-title">
                <?php echo wp_kses_post($title); ?>
            </h2>
        <?php endif; ?>
    </div>
</section>
