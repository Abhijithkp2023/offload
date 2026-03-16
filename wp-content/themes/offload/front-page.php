<?php
/**
 * The front page template file
 *
 * This is the template for the home page
 *
 * @package tasheel
 */

get_header();
?>

<?php
$banner_assets = get_template_directory_uri() . '/assets/images';
$banner_data = array(
    'title' => 'OFFLOAD MEDIA',
    'images' => array(
        array(
            'src' => $banner_assets . '/img_01.png',
            'alt' => 'Sports collage image 1',
        ),
        array(
            'src' => $banner_assets . '/img_02.png',
            'alt' => 'Sports collage image 2',
        ),
        array(
            'src' => $banner_assets . '/img_03.png',
            'alt' => 'Sports collage image 3',
        ),
        array(
            'src' => $banner_assets . '/img_04.png',
            'alt' => 'Sports collage image 4',
        ),
        array(
            'src' => $banner_assets . '/img_05.png',
            'alt' => 'Sports collage image 5',
        ),
        array(
            'src' => $banner_assets . '/img_06.png',
            'alt' => 'Sports collage image 6',
        ),
        array(
            'src' => $banner_assets . '/img_07.png',
            'alt' => 'Sports collage image 7',
        ),
        array(
            'src' => $banner_assets . '/img_08.png',
            'alt' => 'Sports collage image 8',
        ),
        array(
            'src' => $banner_assets . '/img_09.png',
            'alt' => 'Sports collage image 9',
        ),
    ),
    'video' => array(
        'src' => $banner_assets . '/home_video.mp4',
    ),
);
get_template_part('template-parts/Banner', null, $banner_data);
?>

<?php
$brand_text = 'We connect the world of rugby through strategy, storytelling, and digital innovation — helping the game’s biggest names engage fans, grow audiences, and unlock new value.';
$brand_assets = get_template_directory_uri() . '/assets/images';
$brand_data = array(
    'text' => $brand_text,
    'logos' => array(
        array(
            'src' => $brand_assets . '/logo_01.png',
            'alt' => 'Brand logo 1',
        ),
        array(
            'src' => $brand_assets . '/logo_02.png',
            'alt' => 'Brand logo 2',
        ),
        array(
            'src' => $brand_assets . '/logo_03.png',
            'alt' => 'Brand logo 3',
        ),
        array(
            'src' => $brand_assets . '/logo_04.png',
            'alt' => 'Brand logo 4',
        ),
        array(
            'src' => $brand_assets . '/logo_05.png',
            'alt' => 'Brand logo 5',
        ),
        array(
            'src' => $brand_assets . '/logo_06.png',
            'alt' => 'Brand logo 6',
        ),
        array(
            'src' => $brand_assets . '/logo_07.png',
            'alt' => 'Brand logo 7',
        ),
        array(
            'src' => $brand_assets . '/logo_08.png',
            'alt' => 'Brand logo 8',
        ),
    ),
);
?>

<div class="pt_200 pb_300 tri-cut-bottom-right">
    <?php get_template_part('template-parts/BrandGrid', null, $brand_data); ?>
</div>
<?php
 $solutions_assets = get_template_directory_uri() . '/assets/images';
 $solutions_data = array(
     'title' => 'Solutions Across the Game:',
     'cards' => array(
         array(
             'bg_color' => '#FFE089',
             'hover_bg' => '#7E212B',
             'text_color' => '#7A1F2B',
             'heading' => 'Rights Holders',
             'subheading' => 'Unions, Leagues, Clubs',
             'outline' => 'Rights Holders',
             'description' => 'Activate partnerships that fans care about and grow audiences with creative campaigns.',
             'image' => $solutions_assets . '/img_001.png',
         ),
         array(
             'bg_color' => '#FFB38E',
             'hover_bg' => '#7E212B',
             'text_color' => '#7A1F2B',
             'heading' => 'Brands & Sponsors',
             'subheading' => 'Partners & Activations',
             'outline' => 'Brands & Sponsors',
             'description' => 'Transform rights into innovative activations that connect with rugby’s community.',
             'image' => $solutions_assets . '/img_002.png',
         ),
         array(
             'bg_color' => '#E7E7EA',
             'hover_bg' => '#7E212B',
             'text_color' => '#2F3033',
             'heading' => 'Athletes, Talent',
             'subheading' => 'And Creators',
             'outline' => 'Athletes & Talent',
             'description' => 'Build personal brands and partnerships through story-led campaigns.',
             'image' => $solutions_assets . '/img_003.png',
         ),
         array(
             'bg_color' => '#3B5972',
             'hover_bg' => '#7E212B',
             'text_color' => '#B7C3CE',
             'heading' => 'Media &',
             'subheading' => 'Broadcasters',
             'outline' => 'Media & Broadcast',
             'description' => 'Create value for audiences with content, campaigns, and fan engagement.',
             'image' => $solutions_assets . '/img_004.png',
         ),
     ),
 );
 get_template_part('template-parts/Solutions', null, $solutions_data);
?>

<?php
get_footer();

