<?php
/**
 * Solutions Section Template
 *
 * @package tasheel
 */

$solutions_title = isset($args['title']) ? $args['title'] : '';
$solutions_cards = isset($args['cards']) && is_array($args['cards']) ? $args['cards'] : array();
?>

<section class="solutions-section">
    <div class="wrap">
        <?php if (!empty($solutions_title)): ?>
            <h2 class="section-title heading-alt-line heading-alt-line--auto">
                <?php echo wp_kses_post($solutions_title); ?>
            </h2>
        <?php endif; ?>

        <div class="solutions-swiper swiper">
            <div class="swiper-wrapper">
                <?php foreach ($solutions_cards as $card): ?>
                    <?php
                    $bg_color = isset($card['bg_color']) ? $card['bg_color'] : '#ffffff';
                    $hover_bg = isset($card['hover_bg']) ? $card['hover_bg'] : $bg_color;
                    $text_color = isset($card['text_color']) ? $card['text_color'] : '#2F3033';
                    $heading = isset($card['heading']) ? $card['heading'] : '';
                    $subheading = isset($card['subheading']) ? $card['subheading'] : '';
                    $outline = isset($card['outline']) ? $card['outline'] : '';
                    $description = isset($card['description']) ? $card['description'] : '';
                    $image = isset($card['image']) ? $card['image'] : '';
                    ?>
                    <div class="swiper-slide">
                        <article class="solutions-card"
                            style="--card-bg: <?php echo esc_attr($bg_color); ?>; --card-bg-hover: <?php echo esc_attr($hover_bg); ?>; --card-text: <?php echo esc_attr($text_color); ?>;">
                            <div class="solutions-card__bg"></div>
                            <div class="solutions-card__content">
                                <span class="solutions-card__arrow" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" role="img" aria-hidden="true">
                                        <path d="M6 18L18 6M9 6h9v9" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <?php if (!empty($heading)): ?>
                                    <h3 class="solutions-card-heading"><?php echo esc_html($heading); ?></h3>
                                <?php endif; ?>
                                <?php if (!empty($subheading)): ?>
                                    <p class="solutions-card-subheading"><?php echo esc_html($subheading); ?></p>
                                <?php endif; ?>
                                <?php if (!empty($outline)): ?>
                                    <p class="solutions-card-outline"><?php echo esc_html($outline); ?></p>
                                <?php endif; ?>
                                <?php if (!empty($description)): ?>
                                    <p class="solutions-card-desc"><?php echo esc_html($description); ?></p>
                                <?php endif; ?>
                            </div>
                            <?php if (!empty($image)): ?>
                                <img class="solutions-card__image" src="<?php echo esc_url($image); ?>" alt="" loading="lazy" />
                            <?php endif; ?>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>