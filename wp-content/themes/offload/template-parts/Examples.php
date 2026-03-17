<?php
/**
 * Examples Section Template
 *
 * @package tasheel
 */

$main_title = isset($args['main_title']) ? $args['main_title'] : '';
$title_color = isset($args['title_color']) ? $args['title_color'] : '';
$items = isset($args['items']) && is_array($args['items']) ? $args['items'] : array();
?>

<section class="examples-section pt_200 pb_200">
    <div class="wrap">
        <?php if (!empty($main_title)): ?>
            <h2 class="section-title " <?php if (!empty($title_color)): ?>style="color: <?php echo esc_attr($title_color); ?>;"<?php endif; ?>>
                <?php echo wp_kses_post($main_title); ?>
            </h2>
        <?php endif; ?>

        <?php if (!empty($items)): ?>
            <div class="examples-grid">
                <?php foreach ($items as $item): ?>
                    <?php
                    $title = isset($item['title']) ? $item['title'] : '';
                    $number = isset($item['number']) ? $item['number'] : '';
                    $number_color = isset($item['number_color']) ? $item['number_color'] : '';
                    $subtitle = isset($item['subtitle']) ? $item['subtitle'] : '';
                    $description = isset($item['description']) ? $item['description'] : '';
                    $subtitle_color = isset($item['subtitle_color']) ? $item['subtitle_color'] : '';
                    $image = isset($item['image']) ? $item['image'] : '';
                    ?>
                    <article class="examples-card">
                        <div class="examples-card__media clip-diagonal-tl">
                            <?php if (!empty($image)): ?>
                                <img class="examples-card__image clip-diagonal-br" src="<?php echo esc_url($image); ?>" alt="" loading="lazy" />
                            <?php endif; ?>
                            <?php if (!empty($title)): ?>
                                <span class="examples-card__title examples-title-text"><?php echo esc_html($title); ?></span>
                            <?php endif; ?>
                            <?php if (!empty($number)): ?>
                                <span class="examples-card__number examples-number-text" <?php if (!empty($number_color)): ?>style="color: <?php echo esc_attr($number_color); ?>;"<?php endif; ?>>
                                    <?php echo esc_html($number); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                        <?php if (!empty($subtitle) || !empty($description)): ?>
                            <div class="examples-card__content">
                                <?php if (!empty($subtitle)): ?>
                                    <h3 class="examples-card__subtitle examples-subtitle-text" <?php if (!empty($subtitle_color)): ?>style="color: <?php echo esc_attr($subtitle_color); ?>;"<?php endif; ?>>
                                        <?php echo esc_html($subtitle); ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if (!empty($description)): ?>
                                    <p><?php echo esc_html($description); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
