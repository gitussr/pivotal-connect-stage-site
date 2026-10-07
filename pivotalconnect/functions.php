<?php
function pivotalconnect_wp_title($title, $sep)
{
    global $paged, $page;

    if (is_feed()) {
        return $title;
    }

    // Add the site name.
    $title .= get_bloginfo('name', 'display');

    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && (is_home() || is_front_page())) {
        $title = "$title $sep $site_description";
    }

    // Add a page number if necessary.
    if ($paged >= 2 || $page >= 2) {
        $title = "$title $sep " . sprintf(__('Page %s', 'pivotalconnect'), max($paged, $page));
    }

    return $title;
}
add_filter('wp_title', 'pivotalconnect_wp_title', 10, 2);

// Enable support for Post Thumbnails, and declare two sizes.
add_theme_support('post-thumbnails');

// Active Class
add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);
function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}
if (function_exists('register_sidebar'))
    register_sidebar();

// This theme uses wp_nav_menu() in two locations.
register_nav_menus(array(
    'main-menu'    => __('Header Menu', 'pivotalconnect'),
    'footer'    => __('Footer Menu', 'pivotalconnect'),
));


// Function for Wordpress File Upload Thickbox
function pivotalconnectFileUpload_admin_scripts()
{
    //if (isset($_GET['page'])) {
    wp_enqueue_script('jquery');
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_register_script('my-upload', get_template_directory_uri() . '/js/pivotalconnectFileUpload.js', array('jquery', 'media-upload', 'thickbox'));
    wp_enqueue_script('my-upload');
    //}
}

function pivotalconnectFileUpload_admin_styles()
{
    //if (isset($_GET['page'])) {
    wp_enqueue_style('thickbox');
    //}
}
add_action('admin_print_scripts', 'pivotalconnectFileUpload_admin_scripts');
add_action('admin_print_styles', 'pivotalconnectFileUpload_admin_styles');

// Set Website Logo for Admin Login Page
function pivotalconnect_wplogo()
{
    echo '<style type="text/css">h1 a { background-image:url(' . get_bloginfo('template_directory') . '/assets/images/logo-dark-2.png) !important;background-size:100% auto !important;width:140px !important;height:140px !important; }</style>';
}
add_action('login_head', 'pivotalconnect_wplogo');




//Page Slug Body Class

function add_slug_body_class($classes)
{

    global $post;

    if (isset($post)) {

        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'add_slug_body_class');




add_filter('wpcf7_use_really_simple_captcha', '__return_true');

// Custom Functions
// Remove WP admin dashboard widgets
function isa_disable_dashboard_widgets()
{

    remove_meta_box('dashboard_primary', 'dashboard', 'core'); // Remove WordPress Events and News
}
add_action('admin_menu', 'isa_disable_dashboard_widgets');

// Admin footer modification

function remove_footer_admin()
{
    echo "<style>@keyframes beatHeart{0%{transform:scale(1);}25% {transform:scale(0.9);}40%{transform:scale(1);}60% {transform: scale(0.9);}100%{transform: scale(1);}}</style>";
    echo '<span id="footer-thankyou"></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// Hide Category and Tags from POST in admin
// function cattag_remove_metaboxes() {
//     remove_meta_box( 'categorydiv' , 'post' , 'normal' ); 
//     remove_meta_box( 'tagsdiv-post_tag' , 'post' , 'normal' ); 

// }
// add_action( 'admin_menu' , 'cattag_remove_metaboxes' );


// Remove WP logo from Admin Bar
function example_admin_bar_remove_logo()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'example_admin_bar_remove_logo', 0);



// Disable ACF error Message  
add_filter('acf/admin/prevent_escaped_html_notice', '__return_true');



// Register Logo 
function pivotalconnect_custom_logo_setup()
{
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'pivotalconnect_custom_logo_setup');




// Theme Options 

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'icon_url'      => 'dashicons-superhero',
        'post_id'       => 'options',
        'update_button' => __('Update', 'acf'),
        'updated_message' => __("Options Updated", 'acf'),
        'position'       => '2.5',
        'redirect'      => false
    ));
}


// Step 1: Add /blog/ prefix to standard post URLs
function add_blog_prefix_to_posts( $permalink, $post ) {
    if ( $post->post_type === 'post' ) {
        $permalink = home_url( '/blog/' . $post->post_name . '/' );
    }
    return $permalink;
}
add_filter( 'post_link', 'add_blog_prefix_to_posts', 10, 2 );


// Step 2: Make WordPress resolve /blog/post-name/ URLs correctly
function handle_blog_prefix_rewrite() {
    add_rewrite_rule(
        '^blog/([^/]+)/?$',
        'index.php?name=$matches[1]',
        'top'
    );
}
add_action( 'init', 'handle_blog_prefix_rewrite' );


// Step 3: Redirect /post-name/ to /blog/post-name/ permanently
function redirect_posts_to_blog_prefix() {
    if ( is_single() && get_post_type() === 'post' ) {
        $post_name   = get_post_field( 'post_name' );
        $correct_url = home_url( '/blog/' . $post_name . '/' );
        $current_uri = trailingslashit( $_SERVER['REQUEST_URI'] );

        if ( $current_uri !== '/blog/' . $post_name . '/' ) {
            wp_redirect( $correct_url, 301 );
            exit;
        }
    }
}
add_action( 'template_redirect', 'redirect_posts_to_blog_prefix' );
