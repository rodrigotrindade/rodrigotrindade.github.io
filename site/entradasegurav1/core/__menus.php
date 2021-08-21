<?php

/*
 * Rodrigo Trindade Design Digital
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */

function register_my_menus() {
  register_nav_menus(
    array(
      'menu-superior' => __( 'Menu Superior' ),
      'menu-rodape' => __( 'Menu Rodapé' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
?>
