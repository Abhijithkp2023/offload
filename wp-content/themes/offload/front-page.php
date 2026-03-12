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
        'poster' => $banner_assets . '/video_thumb.png',
    ),
);
get_template_part('template-parts/Banner', null, $banner_data);
?>

<?php
get_footer();

