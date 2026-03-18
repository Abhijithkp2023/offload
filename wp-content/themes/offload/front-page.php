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
    'title' => 'Solutions <br /><span>Across the Game:</span>',
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
?>

<div class="dark_bg bg-dots-dark pt_200 pb_300">
    <?php get_template_part('template-parts/Solutions', null, $solutions_data); ?>
</div>

<?php
$examples_assets = get_template_directory_uri() . '/assets/images';
$examples_data = array(
    'main_title' => 'EXAMPLES OF OUR WORK <br /><span>Across the world</span>',
    'title_color' => '#7E212B',
    'items' => array(
        array(
            'title' => 'Rights Holder',
            'number' => '1',
            'subtitle' => 'United Rugby Championship',
            'subtitle_color' => '#7E212B',
            'number_color' => '#FFA787',
            'description' => 'We work with the URC team on content production, social media sponsorship strategy and partnership pipeline across a major airline partnership with Qatar Airways.',
            'image' => $examples_assets . '/ex_01.jpg',
        ),
        array(
            'title' => 'Sponsor and Event',
            'number' => '2',
            'subtitle' => 'Qatar Airways Cup',
            'subtitle_color' => '#FFDF87',
            'number_color' => '#FFDF87',
            'description' => 'We delivered a breadth of sponsor led content and branded activations on ground, during and post game between Japan and South Africa at the Qatar Airways Cup in 2024.',
            'image' => $examples_assets . '/ex_02.png',
        ),
        array(
            'title' => 'Athlete and Talent',
            'number' => '3',
            'subtitle' => 'Sonny Bill Williams',
            'subtitle_color' => '#3B5C74',
            'number_color' => '#3B5C74',
            'description' => 'We work with all Blacks icon Sonny Bill to deliver brand strategy, content creation and brand partnership deals.',
            'image' => $examples_assets . '/ex_03.jpg',
        ),
    ),
);
?>

<?php
?>

<div class="pt_200 pb_135 tri-cut-top-right">
    <?php get_template_part('template-parts/Examples', null, $examples_data); ?>
</div>

<?php
$platform_assets = get_template_directory_uri() . '/assets/images';
$platform_data = array(
    'title' => 'All Things Rugby <br /><span>Our Fan Platform</span>',
    'description' => 'All Things Rugby is our fan platform that sits at the heart of the Offload ecosystem. Designed to bring fans closer to the game through stories, experiences, and digital access that grow the sport we love.',
    'link_url' => 'https://allthingsrugby.com',
    'link_title' => 'allthingsrugby',
    'link_text' => 'visit now',
    'image' => $platform_assets . '/lap_img.png',
    'store_badges' => array(
        array(
            'src' => $platform_assets . '/play_store.svg',
            'alt' => 'Google Play',
        ),
        array(
            'src' => $platform_assets . '/app_store.svg',
            'alt' => 'App Store',
        ),
    ),
);
?>

<?php
?>

<div class="gray_bg pt_300 pb_200 tri-cut-top-right-white tri-cut-top-right">
    <?php get_template_part('template-parts/PlatformShowcase', null, $platform_data); ?>
</div>

<?php
get_footer();

