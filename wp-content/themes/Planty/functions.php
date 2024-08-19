<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css') );
}

?>

<?php

function ajouter_element_admin($items, $args) {
    // Vérifier si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Ajouter un lien vers la page d'administration
        $items .= '<li class="menu-item menu-item-admin"><a href="' . admin_url() . '">Admin</a></li>';
    }
    return $items;
}

// Ajouter le hook pour le menu principal
add_filter('wp_nav_menu_items', 'ajouter_element_admin', 10, 2);
?>