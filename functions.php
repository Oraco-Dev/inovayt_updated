<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


// Enqueue stylesheets
function child_theme_enqueue_styles() {
    // Enqueue child theme's stylesheet (css/main.css)
    wp_enqueue_style( 
        'child-style', // Handle name for child theme's stylesheet
        get_stylesheet_directory_uri() . '/css/main.css', // Path to child theme's CSS file
       );

    // Enqueue Splide.css stylesheet
    wp_enqueue_style( 
        'splide-css', // Handle name for Splide.css stylesheet
        'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', // URL to Splide.css file
        array(), // No dependencies
        null // No version number
    );   
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );

function child_theme_enqueue_scripts() {
    wp_enqueue_script( 'splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), null, true );
    wp_enqueue_script( 'child-theme-script', get_stylesheet_directory_uri() . '/js/main.js', array(), null, true );
    wp_enqueue_script('my-ajax-script', get_stylesheet_directory_uri() . '/js/load-more.js', array(), null, true);
    wp_localize_script('my-ajax-script', 'my_ajax_obj', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
    
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_scripts' );

function remove_acf_p_tags($content) {
    if (is_singular()) { // Ensure it's a single post or page
        $content = preg_replace('/<p>\s*<\/p>/', '', $content); // Remove empty <p> tags
        $content = preg_replace('/<p>(.*?)<\/p>/', '$1', $content); // Remove <p> tags but keep the content
    }
    return $content;
}

add_filter('the_content', 'remove_acf_p_tags');

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

// blog page
function load_more_posts() {
    $paged = $_POST['page'];
    $args = array(
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $paged,
        'posts_per_page' => 20,
        'offset' => 1 + ($paged - 1) * 20,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        ob_start();
        while ($query->have_posts()) {
            $query->the_post();

            $post_id = get_the_ID();
            $link = get_permalink();
            $title = get_the_title();
            $content = get_the_content();
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID());
            $date = get_the_date();

            // Use output buffering to capture the output of get_template_part
            get_template_part('template-parts/elements/blog/blog-card', null, array('link' => $link, 'title' => $title, 'imageUrl' => $featured_image_url, 'date' => $date, 'description' => $content));
        }
        $html = ob_get_clean();
        echo $html;
    }

    wp_die();
}
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

// categories page
function load_more_category_posts() {
    $paged = $_POST['page'];
    $category = isset($_POST['category']) ? intval($_POST['category']) : 0;

    $args = array(
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $paged,
        'posts_per_page' => 20,
        'offset' => 1 + ($paged - 1) * 20,
        'cat' => $category, // Filter by category
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        ob_start();
        while ($query->have_posts()) {
            $query->the_post();

            
            $post_id = get_the_ID();
            $link = get_permalink();
            $title = get_the_title();
            $content = get_the_content();
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID());
            $date = get_the_date();

            // Use output buffering to capture the output of get_template_part
            get_template_part('template-parts/elements/blog/blog-card', null, array('link' => $link, 'title' => $title, 'imageUrl' => $featured_image_url, 'date' => $date, 'description' => $content));
        }
        $html = ob_get_clean();
        echo $html;
    }

    wp_die();
}
add_action('wp_ajax_load_more_category_posts', 'load_more_category_posts');
add_action('wp_ajax_nopriv_load_more_category_posts', 'load_more_category_posts');

// tags page
function load_more_tag_posts() {
    $paged = $_POST['page'];
    // $category = isset($_POST['category']) ? intval($_POST['category']) : 0;

    $args = array(
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $paged,
        'posts_per_page' => 20,
        'offset' => 1 + ($paged - 1) * 20,
        'cat' => $category, // Filter by category
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        ob_start();
        while ($query->have_posts()) {
            $query->the_post();

            
            $post_id = get_the_ID();
            $link = get_permalink();
            $title = get_the_title();
            $content = get_the_content();
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID());
            $date = get_the_date();

            // Use output buffering to capture the output of get_template_part
            get_template_part('template-parts/elements/blog/blog-card', null, array('link' => $link, 'title' => $title, 'imageUrl' => $featured_image_url, 'date' => $date, 'description' => $content));
        }
        $html = ob_get_clean();
        echo $html;
    }

    wp_die();
}
add_action('wp_ajax_load_more_tag_posts', 'load_more_tag_posts');
add_action('wp_ajax_nopriv_load_more_tag_posts', 'load_more_tag_posts');