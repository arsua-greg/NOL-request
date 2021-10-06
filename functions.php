<?php
//自動整形を無効にする化
// タイトル欄
remove_filter('the_title', 'wpautop');
// 本文欄
remove_filter('the_content', 'wpautop');
// コメント欄
remove_filter('comment_text', 'wpautop');
// 抜粋欄
remove_filter('the_excerpt', 'wpautop');

// 記号などの自動変換を無効化
// タイトル欄
remove_filter('the_title', 'wptexturize');
// 本文欄
remove_filter('the_content', 'wptexturize');
// コメント欄
remove_filter('comment_text', 'wptexturize');
// 抜粋欄
remove_filter('the_excerpt', 'wptexturize');



function enqueue_styles()
{
    wp_enqueue_style('font-family', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false);
    // wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css', false );
    // wp_enqueue_style( 'font-arrow', 'https://fonts.googleapis.com/css2?family=Iceland&display=swap', false );
    // wp_enqueue_style( 'top-css', get_stylesheet_directory_uri() . '/assets/css/top.css', array(), null );
    // wp_enqueue_style( 'sp-css', get_stylesheet_directory_uri() . '/assets/css/sp.css', array(), null );
    // wp_enqueue_style( 'page-css', get_stylesheet_directory_uri() . '/assets/css/page.css', array(), null );
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

// Remove Default Wordpress Jquery
function remove_jquery_enqueue()
{
    wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'remove_jquery_enqueue');

// post pagination
function your_themes_pagination()
{
    global $wp_query;
    echo paginate_links();
}


// Add more-link text to excerpt 
function my_theme_excerpt_more($more)
{
    return '&nbsp;&nbsp;.&nbsp;&nbsp;.&nbsp;&nbsp;.';
}
add_filter('excerpt_more', 'my_theme_excerpt_more');

// Add excerpt length

function new_excerpt_length($length)
{
    return 32;
}
add_filter('excerpt_length', 'new_excerpt_length');


//ADD CUSTOM CLASS ON CATEGORY
add_filter('wp_list_categories', 'add_slug_class_wp_list_categories');
function add_slug_class_wp_list_categories($list)
{

    $cats = get_categories('hide_empty=0');
    foreach ($cats as $cat) {
        $find = 'cat-item-' . $cat->term_id . '"';
        $replace = 'cat-item-' . $cat->slug . ' cat-item-' . $cat->term_id . '"';
        $list = str_replace($find, $replace, $list);
        $find = 'cat-item-' . $cat->term_id . ' ';
        $replace = 'cat-item-' . $cat->slug . ' cat-item-' . $cat->term_id . ' ';
        $list = str_replace($find, $replace, $list);
    }

    return $list;
}

//ADD CUSTOM CLASS ON CATEGORY
function ourWidgetsInit()
{
    register_sidebar(array(
        'name' => 'Blog Category',
        'id' => 'blog-category',
        'before_widget' => '<div class="sect_news__container--tags">',
        'after_widget' => '</div>',
    ));
}

add_action('widgets_init', 'ourWidgetsInit');


add_theme_support('post-thumbnails');
// add_image_size('small-thumbnail', 100, 100, true);
the_post_thumbnail(array(100, 100));


// CUSTOM STYLES

function wp_list_categories_remove_title_attributes($output)
{
    $output = preg_replace('` title="(.+)"`', '', $output);
    return $output;
}
add_filter('wp_list_categories', 'wp_list_categories_remove_title_attributes');
