<?php
/**
 * Banner Component Template
 *
 * @package tasheel
 */

$banner_title = isset($args['title']) ? $args['title'] : '';
$banner_images = isset($args['images']) && is_array($args['images']) ? $args['images'] : array();
$banner_video = isset($args['video']) && is_array($args['video']) ? $args['video'] : array();
?>

<section class="banner-hero" aria-label="Homepage banner">
    <div class="banner-hero__text">
        <?php if (!empty($banner_title)): ?>
            <h1 class="banner-display-text"><?php echo esc_html($banner_title); ?></h1>
        <?php endif; ?>
    </div>

    <div class="banner-hero__media" aria-hidden="true">
        <?php foreach ($banner_images as $image): ?>
            <?php
            $src = isset($image['src']) ? $image['src'] : '';
            $alt = isset($image['alt']) ? $image['alt'] : '';
            ?>
            <?php if (!empty($src)): ?>
                <img class="banner-media-item" src="<?php echo esc_url($src); ?>" alt="<?php echo esc_attr($alt); ?>"
                    loading="lazy" />
            <?php endif; ?>
        <?php endforeach; ?>

        <?php
        $video_src = isset($banner_video['src']) ? $banner_video['src'] : '';
        $video_poster = isset($banner_video['poster']) ? $banner_video['poster'] : '';
        ?>
        <?php if (!empty($video_src)): ?>
            <video class="banner-media-video" poster="<?php echo esc_url($video_poster); ?>" preload="none">
                <source src="<?php echo esc_url($video_src); ?>" type="video/mp4">
            </video>
        <?php endif; ?>
    </div>
</section>