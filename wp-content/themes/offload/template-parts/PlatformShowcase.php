<?php
/**
 * Platform Showcase Template
 *
 * @package tasheel
 */

$title = isset($args['title']) ? $args['title'] : '';
$description = isset($args['description']) ? $args['description'] : '';
$link_url = isset($args['link_url']) ? $args['link_url'] : '';
$link_title = isset($args['link_title']) ? $args['link_title'] : '';
$link_text = isset($args['link_text']) ? $args['link_text'] : '';
$image = isset($args['image']) ? $args['image'] : '';
$store_badges = isset($args['store_badges']) && is_array($args['store_badges']) ? $args['store_badges'] : array();
?>

<section class="platform-showcase">
    <div class="wrap platform-showcase__inner">
        <div class="platform-showcase__content">
            <?php if (!empty($title)): ?>
                <h2 class="section-title platform-showcase__title">
                    <?php echo wp_kses_post($title); ?>
                </h2>
            <?php endif; ?>

            <?php if (!empty($description)): ?>
                <p class="platform-showcase__description"><?php echo esc_html($description); ?></p>
            <?php endif; ?>

            <?php if (!empty($link_url) && (!empty($link_title) || !empty($link_text))): ?>
                <a class="platform-showcase__link" href="<?php echo esc_url($link_url); ?>">
                    <?php if (!empty($link_title)): ?>
                        <span class="platform-link-title"><?php echo esc_html($link_title); ?></span>
                    <?php endif; ?>
                    <?php if (!empty($link_text)): ?>
                        <span class="platform-link-text"><?php echo esc_html($link_text); ?></span>
                    <?php endif; ?>
                    <span class="platform-link-arrow" aria-hidden="true">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.75 21.25L21.25 8.75M21.25 8.75H8.75M21.25 8.75V21.25" stroke="#1E1E1E" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </a>
            <?php endif; ?>

            <?php if (!empty($store_badges)): ?>
                <div class="platform-showcase__stores">
                    <?php foreach ($store_badges as $badge): ?>
                        <?php
                        $badge_src = isset($badge['src']) ? $badge['src'] : '';
                        $badge_alt = isset($badge['alt']) ? $badge['alt'] : '';
                        ?>
                        <?php if (!empty($badge_src)): ?>
                            <img src="<?php echo esc_url($badge_src); ?>" alt="<?php echo esc_attr($badge_alt); ?>" loading="lazy" />
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if (!empty($image)): ?>
            <div class="platform-showcase__media">
                <img src="<?php echo esc_url($image); ?>" alt="" loading="lazy" />
            </div>
        <?php endif; ?>
    </div>
</section>
