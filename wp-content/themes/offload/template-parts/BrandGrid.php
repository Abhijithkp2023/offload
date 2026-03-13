<?php
/**
 * Brand Grid Template
 *
 * @package tasheel
 */

$brand_text = isset($args['text']) ? $args['text'] : '';
$brand_logos = isset($args['logos']) && is_array($args['logos']) ? $args['logos'] : array();
?>

<section class="brand-grid-section wrap">
    <?php if (!empty($brand_text)): ?>
        <p class="brand-grid-text brand-grid-text_kaneda"><?php echo esc_html($brand_text); ?></p>
    <?php endif; ?>

    <?php
    $logo_count = count($brand_logos);
    $split_index = $logo_count > 10 ? (int) ceil($logo_count / 2) : min(5, $logo_count);
    $top_logos = array_slice($brand_logos, 0, $split_index);
    $bottom_logos = array_slice($brand_logos, $split_index);
    ?>

    <div class="brand-grid brand-grid--top">
        <?php foreach ($top_logos as $logo): ?>
            <?php
            $src = isset($logo['src']) ? $logo['src'] : '';
            $alt = isset($logo['alt']) ? $logo['alt'] : '';
            ?>
            <?php if (!empty($src)): ?>
                <div class="brand-grid__item">
                    <img src="<?php echo esc_url($src); ?>" alt="<?php echo esc_attr($alt); ?>" loading="lazy" />
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>

    <div class="brand-grid brand-grid--bottom">
        <?php foreach ($bottom_logos as $logo): ?>
            <?php
            $src = isset($logo['src']) ? $logo['src'] : '';
            $alt = isset($logo['alt']) ? $logo['alt'] : '';
            ?>
            <?php if (!empty($src)): ?>
                <div class="brand-grid__item">
                    <img src="<?php echo esc_url($src); ?>" alt="<?php echo esc_attr($alt); ?>" loading="lazy" />
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>