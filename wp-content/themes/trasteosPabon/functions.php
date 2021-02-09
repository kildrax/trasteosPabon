<?php

/**
 * Register and Enqueue Styles.
 */
function trasteos_pabon_styles()
{

    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style('oscar-style', get_template_directory_uri() . '/assets/css/main.min.css', false, $theme_version);
}

add_action('wp_enqueue_scripts', 'trasteos_pabon_styles');

/**
 * Register and Enqueue Scripts.
 */
// function trasteos_pabon_scripts()
// {

//     $theme_version = wp_get_theme()->get('Version');

//     if ((!is_admin()) && is_singular() && comments_open() && get_option('thread_comments')) {
//         wp_enqueue_script('comment-reply');
//     }
//     wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/minjs/main.min.js', false, $theme_version, true);
// }

// add_action('wp_enqueue_scripts', 'trasteos_pabon_scripts');

/**Register menu option**/
if (!function_exists('mytheme_register_nav_menu')) {

    function mytheme_register_nav_menu()
    {
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu'),
            'footer_menu'  => __('Footer Menu')
        ));
    }
    add_action('init', 'mytheme_register_nav_menu', 0);
}

/**
 * Filter the excerpt length to 50 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function theme_slug_excerpt_length($length)
{
    if (is_admin()) {
        return $length;
    }
    return 40;
}
add_filter('excerpt_length', 'theme_slug_excerpt_length', 999);

function new_excerpt_more()
{
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**Se agrega soporte para imagen destacada**/
add_theme_support('post-thumbnails');


/**Register a global menu option**/
add_action('admin_menu', 'add_global_options');

function add_global_options()
{
    add_options_page('Opciones globales', 'Opciones globales', 'manage_options', 'functions', 'global_options');
}

function global_options()
{
?>
    <div class="wrap">
        <h2>Opciones Globales</h2>
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>
            <h2>Redes Sociales</h2>
            <!-- <p><strong>Número WhatsApp:</strong><br />
            <input type="text" name="whatsapp_number" size="45" value="<?php echo get_option('whatsapp_number'); ?>" />
        </p> -->
            <p><strong>Facebook Page Link:</strong><br />
                <input type="text" name="fb_link" size="45" value="<?php echo get_option('fb_link'); ?>" />
            </p>
            <p><strong>Intagram Page Link:</strong><br />
                <input type="text" name="insta_link" size="45" value="<?php echo get_option('insta_link'); ?>" />
            </p>
            <p><input type="submit" name="Submit" value="Guardar" /></p>
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="whatsapp_number,fb_link,insta_link" />
        </form>
    </div>
<?php
}

function loadPageFirst()
{
    // get the actual category
    $actualCategory = get_category(get_query_var('cat'));
    // get the page with the same slug
    $matchingPage = get_page_by_path($actualCategory->slug);

    // If no match, load the normal listing template and exit (edit if you are using a custom listing template, eg. category.php)
    if (!$matchingPage) {
        include(get_template_directory() . '/archive.php');
        die();
    }

    // Make a new query with the page's ID and load the page template
    query_posts('page_id=' . $matchingPage->ID);
    include(get_template_directory() . '/page.php');
    die();
}
add_filter('category_template', 'loadPageFirst');

function wpb_move_comment_field_to_bottom($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter('comment_form_fields', 'wpb_move_comment_field_to_bottom');

function wpbeginner_remove_comment_url($arg)
{
    $arg['url'] = '';
    return $arg;
}
add_filter('comment_form_default_fields', 'wpbeginner_remove_comment_url');

function wpbeginner_comment_text_after($arg) {
    $arg['comment_notes_after'] = "<p class='comment-policy'>We are glad you have chosen to leave a comment. Please keep in mind that comments are moderated according to our <a href='http://localhost/oscarPabon/index.php/politica-de-privacidad/' target='_blank'>comment policy</a>.</p>";
    return $arg;
}
  
add_filter('comment_form_defaults', 'wpbeginner_comment_text_after');
?>