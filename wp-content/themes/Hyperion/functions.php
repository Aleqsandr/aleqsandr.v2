<?php

require_once(ABSPATH.'wp-content/themes/Hyperion/cpt/project.php');

function loading_scripts()
{
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '2.0.0', true);
}

add_action('wp_enqueue_scripts', 'loading_scripts');   

// désactivation des <p> moches
remove_filter('the_content', 'wpautop');

// activer les menus
register_nav_menus(array('Menu principal' => __('Navigation principale', 'Hyperion')));

// active les thumbails sur les post types choisis
add_theme_support('post-thumbnails', array('post', 'projets'));

?>